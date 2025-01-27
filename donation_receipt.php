<!DOCTYPE html>
<html lang="en">
<head>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Receipt</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="./images/logo.png" />
    <link rel="stylesheet" href="css/donation_receipt.css">
    <style>
        
        
    </style>
</head>
<body class="recipt">
    <div class="receipt-container">
        <div class="receipt-header">
            <h1>Donation Receipt</h1>
            <p>Date: <?php echo date('Y-m-d'); ?></p>
        </div>
        <div class="decor-line">*******************</div>
        <div class="receipt-body">
            <p><strong>Name:</strong> <?php echo htmlspecialchars($_GET['name']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($_GET['email']); ?></p>
            <p><strong>Mobile:</strong> <?php echo htmlspecialchars($_GET['mobile']); ?></p>
            <p><strong>Donation Amount:</strong> Rs.<?php echo htmlspecialchars($_GET['amount']); ?>/=</p>
        </div>
        <div class="decor-line">*******************</div>
        <div class="receipt-footer">
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data= Thank You by MSV-73" alt="QR Code" class="qr-code">
            <div class="mt-3">
                
            </div>
            <p class="thank-you">Thank you for your Donation!</p>
            <button onclick="document.location='main.php'">Back to Home</button>
        </div>
    </div>
</body>
</html>
