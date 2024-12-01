<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

     

    //echo "You have selected $product_name with a price of $$product_price.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/storeForm.css">
    <link rel="shortcut icon" type="image/png" href="./images/logo.png" />
    <title>Animal Kingdom</title>
</head>
<body>
    <!-- Header -->
    <header class="p-3 mb-2 bg-dark text-white text-center py-5">
        <h1>Buy Zoo Item</h1>
        <p>Complete the form below to make your Purchase</p>
    </header>

    <!-- Purchase Form -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="process_payment.php" method="post">
         
                    
                    
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile Number</label>
                        <input type="tel" class="form-control" id="mobile" name="mobile" required>
                    </div>

                    

                    <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo htmlspecialchars($product_name); ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="product_price">Product_Price</label>
                        <input type="text" class="form-control" id="product_price" name="product_price" value="<?php echo htmlspecialchars($product_price); ?>" readonly>
                         
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Buy Now</button>
                </form>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
