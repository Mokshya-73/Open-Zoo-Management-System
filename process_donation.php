<?php
    
    header("Location: donation_payment.php?name=" . urlencode($_POST['name']) . "&email=" . urlencode($_POST['email']) . "&mobile=" . urlencode($_POST['mobile']) . "&amount=" . urlencode($_POST['amount']));
    exit();
?>
