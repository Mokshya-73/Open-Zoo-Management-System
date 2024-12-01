<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="image/png" href="./images/logo.png" />
    <title>Animal Kingdom</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./css/storeStyle.css">
</head>
<body>
  <!-- Welcome Banner -->
  <div class="jumbotron text-center p-3 mb-2 bg-dark text-white">
    <h1>Welcome to Our Store</h1>
    <p>Find the best products here!</p>
  </div>

  <!-- Cards Section -->
  <div class="container">
    <!-- Row 1 Subheading -->
    <h2 class="title">... Toys ...</h2>
    <div class="row">
      <!-- Card 1 -->
      <div class="col-sm-3 mb-3">
        <div class="card ">
          <img src="./images/toy1.png" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title">Product 1</h5>
            <p class="card-text">$10.00</p>
            <form method="POST" action="store_form.php">
              <input type="hidden" name="product_name" value="Product 1">
              <input type="hidden" name="product_price" value="10.00">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-sm-3 mb-3">
        <div class="card col-sm-10 mb-10">
          <img src="./images/toy2.png" class="card-img-top" alt="Product 2">
          <div class="card-body">
            <h5 class="card-title">Product 2</h5>
            <p class="card-text">$20.00</p>
            <form method="POST" action="store_form.php">
              <input type="hidden" name="product_name" value="Product 2">
              <input type="hidden" name="product_price" value="20.00">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-sm-3 mb-3">
        <div class="card col-sm-12 mb-12">
          <img src="./images/toy3.png" class="card-img-top" alt="Product 3">
          <div class="card-body">
            <h5 class="card-title">Product 3</h5>
            <p class="card-text">$30.00</p>
            <form method="POST" action="store_form.php">
              <input type="hidden" name="product_name" value="Product 3">
              <input type="hidden" name="product_price" value="30.00">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-sm-3 mb-3">
        <div class="card">
          <img src="./images/toy4.png" class="card-img-top" alt="Product 4">
          <div class="card-body">
            <h5 class="card-title">Product 4</h5>
            <p class="card-text">$40.00</p>
            <form method="POST" action="store_form.php">
              <input type="hidden" name="product_name" value="Product 4">
              <input type="hidden" name="product_price" value="40.00">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Row 2 Subheading -->
    <h2 class="title">... Fancy Items ...</h2>
    <div class="row">
      <!-- Card 5 -->
      <div class="col-sm-3 mb-3">
        <div class="card">
          <img src="./images/fancy1.jpg" class="card-img-top" alt="Product 5">
          <div class="card-body">
            <h5 class="card-title">Product 5</h5>
            <p class="card-text">$50.00</p>
            <form method="POST" action="store_form.php">
              <input type="hidden" name="product_name" value="Product 5">
              <input type="hidden" name="product_price" value="50.00">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-sm-3 mb-3">
        <div class="card">
          <img src="./images/fancy2.jpg" class="card-img-top" alt="Product 6">
          <div class="card-body">
            <h5 class="card-title">Product 6</h5>
            <p class="card-text">$60.00</p>
            <form method="POST" action="store_form.php">
              <input type="hidden" name="product_name" value="Product 6">
              <input type="hidden" name="product_price" value="60.00">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="col-sm-3 mb-3">
        <div class="card">
          <img src="./images/fancy3.jpg" class="card-img-top" alt="Product 7">
          <div class="card-body">
            <h5 class="card-title">Product 7</h5>
            <p class="card-text">$70.00</p>
            <form method="POST" action="store_form.php">
              <input type="hidden" name="product_name" value="Product 7">
              <input type="hidden" name="product_price" value="70.00">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="col-sm-3 mb-3">
        <div class="card col-sm-11 mb-11">
          <img src="./images/fancy4.jpg" class="card-img-top" alt="Product 8">
          <div class="card-body">
            <h5 class="card-title">Product 8</h5>
            <p class="card-text">$80.00</p>
            <form method="POST" action="store_form.php">
              <input type="hidden" name="product_name" value="Product 8">
              <input type="hidden" name="product_price" value="80.00">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Row 1 Subheading -->
    <h2 class="title">... Clothing ...</h2>
    <div class="row">
      <!-- Card 1 -->
      <div class="col-sm-3 mb-3">
        <div class="card">
          <img src="./images/cloth1.jpg" class="card-img-top" alt="Product 9">
          <div class="card-body">
            <h5 class="card-title">Product 9</h5>
            <p class="card-text">$10.00</p>
            <form method="POST" action="store_form.php">
              <input type="hidden" name="product_name" value="Product 9">
              <input type="hidden" name="product_price" value="10.00">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-sm-3 mb-3">
        <div class="card">
          <img src="./images/cloth2.jpg" class="card-img-top" alt="Product 10">
          <div class="card-body">
            <h5 class="card-title">Product 10</h5>
            <p class="card-text">$20.00</p>
            <form method="POST" action="store_form.php">
              <input type="hidden" name="product_name" value="Product 10">
              <input type="hidden" name="product_price" value="20.00">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-sm-3 mb-3">
        <div class="card col-sm-10 mb-10">
          <img src="./images/cloth3.jpg" class="card-img-top" alt="Product 11">
          <div class="card-body">
            <h5 class="card-title">Product 11</h5>
            <p class="card-text">$30.00</p>
            <form method="POST" action="store_form.php">
              <input type="hidden" name="product_name" value="Product 11">
              <input type="hidden" name="product_price" value="30.00">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-sm-3 mb-3">
        <div class="card col-sm-10 mb-10">
          <img src="./images/cloth4.jpg" class="card-img-top" alt="Product 12">
          <div class="card-body">
            <h5 class="card-title">Product 12</h5>
            <p class="card-text">$40.00</p>
            <form method="POST" action="store_form.php">
              <input type="hidden" name="product_name" value="Product 12">
              <input type="hidden" name="product_price" value="40.00">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Row 2 Subheading -->
    <h2 class="title">... Camping Gear ...</h2>
    <div class="row">
      <!-- Card 5 -->
      <div class="col-sm-3 mb-3">
        <div class="card">
          <img src="./images/camp1.jpg" class="card-img-top" alt="Product 13">
          <div class="card-body">
            <h5 class="card-title">Product 13</h5>
            <p class="card-text">$50.00</p>
            <form method="POST" action="store_form.php">
              <input type="hidden" name="product_name" value="Product 13">
              <input type="hidden" name="product_price" value="50.00">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-sm-3 mb-3">
        <div class="card">
          <img src="./images/camp2.jpg" class="card-img-top" alt="Product 14">
          <div class="card-body">
            <h5 class="card-title">Product 14</h5>
            <p class="card-text">$60.00</p>
            <form method="POST" action="store_form.php">
              <input type="hidden" name="product_name" value="Product 14">
              <input type="hidden" name="product_price" value="60.00">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="col-sm-3 mb-3">
        <div class="card">
          <img src="./images/camp3.jpg" class="card-img-top" alt="Product 15">
          <div class="card-body">
            <h5 class="card-title">Product 15</h5>
            <p class="card-text">$70.00</p>
            <form method="POST" action="store_form.php">
              <input type="hidden" name="product_name" value="Product 15">
              <input type="hidden" name="product_price" value="70.00">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="col-sm-3 mb-3">
        <div class="card col-sm-10 mb-10">
          <img src="./images/camp4.jpg" class="card-img-top" alt="Product 16">
          <div class="card-body">
            <h5 class="card-title">Product 16</h5>
            <p class="card-text">$80.00</p>
            <form method="POST" action="store_form.php">
              <input type="hidden" name="product_name" value="Product 16">
              <input type="hidden" name="product_price" value="80.00">
              <button type="submit" class="btn btn-primary">Buy Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>
</html>
