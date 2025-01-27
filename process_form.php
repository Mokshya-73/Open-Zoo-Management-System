<?php
require_once 'db_connect.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $visit_date = $_POST['visit_date'];
    $parking = $_POST['parking'];
    
    // Initialize default values for ticket numbers
    $ticket_numbers = array(
        "local_below_18" => 0,
        "local_above_18" => 0,
        "foreigners" => 0
    );

    // Define ticket prices
    $ticket_prices = array(
        "local_below_18" => 100.00,
        "local_above_18" => 250.00,
        "foreigners" => 500.00
    );

    // Check if ticket_types array is set and not empty
    if (isset($_POST['ticket_types']) && !empty($_POST['ticket_types'])) {
        $ticket_types = $_POST['ticket_types'];

        foreach ($ticket_types as $type) {
            // Check if the specific ticket type exists in the POST data
            if (isset($_POST[$type . '_tickets'])) {
                $ticket_numbers[$type] = (int)$_POST[$type . '_tickets'];
            }
        }
    }

    // Calculate category totals and grand total
    $category_totals = array();
    $grand_total = 0.00;

    foreach ($ticket_numbers as $type => $number) {
        $category_totals[$type] = $ticket_prices[$type] * $number;
        $grand_total += $category_totals[$type];
    }

    // Generate random parking slot number if parking is 'yes'
    $parking_slot = null;
    if ($parking === 'yes') {
        function generateRandomParkingSlot() {
            return rand(1, 100);  
        }
        $parking_slot = generateRandomParkingSlot();
    }

    // Insert into database
    $stmt = $conn->prepare("INSERT INTO customers (name, email, visit_date, parking, parking_slot, local_below_18_tickets, local_above_18_tickets, foreigners_tickets, total_amount) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiiidd", $name, $email, $visit_date, $parking, $parking_slot, $ticket_numbers['local_below_18'], $ticket_numbers['local_above_18'], $ticket_numbers['foreigners'], $grand_total);

    if ($stmt->execute()) {
        // Database insertion successful
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();

    // Send Email with PHPMailer
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;
        $mail->Username   = 'animalkingdomsrilanka123@gmail.com';  // SMTP username
        $mail->Password   = 'tbwi jnnn fcrb dpzq';                // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('techboy15603@gmail.com', 'Animal Kingdom');
        $mail->addAddress($email, $name);     // Add a recipient

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Your Visit Details to Animal Kingdom';

        // Create email body
        $email_body = '<h2>Visit Details</h2>';
        $email_body .= "<p><strong>Name:</strong> {$name}</p>";
        $email_body .= "<p><strong>Email:</strong> {$email}</p>";
        $email_body .= "<p><strong>Visit Date:</strong> {$visit_date}</p>";
        $email_body .= "<p><strong>Parking:</strong> {$parking}</p>";

        if ($parking === 'yes' && $parking_slot !== null) {
            $email_body .= "<p><strong>Parking Slot:</strong> {$parking_slot}</p>";
        }

        $email_body .= '<table border="1" cellpadding="5" cellspacing="0">';
        $email_body .= '<thead><tr><th>Ticket Type</th><th>Quantity</th><th>Price per Ticket</th><th>Total</th></tr></thead><tbody>';
        foreach ($ticket_numbers as $type => $number) {
            $email_body .= '<tr>';
            $email_body .= '<td>' . ucwords(str_replace('_', ' ', $type)) . '</td>';
            $email_body .= '<td>' . $number . '</td>';
            $email_body .= '<td>' . number_format($ticket_prices[$type], 2) . '</td>';
            $email_body .= '<td>' . number_format($category_totals[$type], 2) . '</td>';
            $email_body .= '</tr>';
        }
        $email_body .= '</tbody></table>';
        $email_body .= "<h3>Total Amount: " . number_format($grand_total, 2) . "</h3>";

        $mail->Body = $email_body;

        $mail->send();
        echo '';

    } catch (Exception $e) {
        echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./images/logo.png" />
    <title>Animal Kingdom</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/processFormStyle.css">
</head>
<body>
    <div class="container bill-container">
        <div class="bill-header">
            <h2>Visit Bill</h2>
        </div>
        <div class="bill-details">
            <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Visit Date:</strong> <?php echo htmlspecialchars($visit_date); ?></p>
            <p><strong>Parking:</strong> <?php echo htmlspecialchars($parking); ?></p>
            <?php if ($parking === 'yes' && $parking_slot !== null): ?>
                <p><strong>Parking Slot:</strong> <?php echo $parking_slot; ?></p>
            <?php endif; ?>
        </div>
        <table class="bill-table">
            <thead>
                <tr>
                    <th>Ticket Type</th>
                    <th>Quantity</th>
                    <th>Price per Ticket</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ticket_numbers as $type => $number): ?>
                    <tr>
                        <td><?php echo htmlspecialchars(ucwords(str_replace('_', ' ', $type))); ?></td>
                        <td><?php echo htmlspecialchars($number); ?></td>
                        <td><?php echo number_format($ticket_prices[$type], 2); ?></td>
                        <td><?php echo number_format($category_totals[$type], 2); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div class="bill-footer">
            <h3>Total Amount: <?php echo number_format($grand_total, 2); ?></h3>
        </div>
        <div class="pay-now-btn">
            <form action="payment.php" method="post">
                <input type="hidden" name="name" value="<?php echo htmlspecialchars($name); ?>">
                <input type="hidden" name="email" value="<?php echo htmlspecialchars($email); ?>">
                <input type="hidden" name="visit_date" value="<?php echo htmlspecialchars($visit_date); ?>">
                <input type="hidden" name="parking" value="<?php echo htmlspecialchars($parking); ?>">
                <input type="hidden" name="local_below_18_tickets" value="<?php echo $ticket_numbers['local_below_18']; ?>">
                <input type="hidden" name="local_above_18_tickets" value="<?php echo $ticket_numbers['local_above_18']; ?>">
                <input type="hidden" name="foreigners_tickets" value="<?php echo $ticket_numbers['foreigners']; ?>">
                <input type="hidden" name="total_amount" value="<?php echo number_format($grand_total, 2); ?>">
                <?php if ($parking === 'yes' && $parking_slot !== null): ?>
                    <input type="hidden" name="parking_slot" value="<?php echo $parking_slot; ?>">
                <?php endif; ?>
                <button type="submit" class="btn btn-primary">Pay Now</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
