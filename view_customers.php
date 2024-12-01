<?php
// Include the database connection file
require_once 'db_connect.php';

// SQL query to retrieve all rows from the customers table
$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

// Check if there are rows returned
if ($result->num_rows > 0) {
    // Output data of each row
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
       
        <link rel="stylesheet" href="css/viewCustomerStyle.css">
        <link rel="shortcut icon" type="image/png" href="./images/logo.png" />
        <title>Animal Kingdom</title>
        
    </head>
    <body>
        
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Visit Date</th>
                <th>Parking</th>
                <th>Parking Slot</th>
                <th>Local Below 18 Tickets</th>
                <th>Local Above 18 Tickets</th>
                <th>Foreigners Tickets</th>
                <th>Total Amount</th>
            </tr>
            <?php
            while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['visit_date']; ?></td>
                    <td><?php echo $row['parking']; ?></td>
                    <td><?php echo $row['parking_slot']; ?></td>
                    <td><?php echo $row['local_below_18_tickets']; ?></td>
                    <td><?php echo $row['local_above_18_tickets']; ?></td>
                    <td><?php echo $row['foreigners_tickets']; ?></td>
                    <td><?php echo $row['total_amount']; ?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
    </html>
    <?php
} else {
    echo "0 results";
}

// Close the database connection
$conn->close();
?>
