<?php
    
    header("Location: store_payment.php?name=" . urlencode($_POST['name']) . "&email=" . urlencode($_POST['email']) . "&mobile=" . urlencode($_POST['mobile']) . "&product_name=" . urlencode($_POST['product_name'])."&product_price=" . urlencode($_POST['product_price']));
    exit();
?>
