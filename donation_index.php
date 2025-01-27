<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo Donation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/donation_style.css">
    <link rel="shortcut icon" type="image/png" href="./images/logo.png" />

    <script>
        function updateCustomAmount() {
            const customAmount = document.getElementById('customAmount').value;
            document.getElementById('customAmountHidden').value = customAmount;
            document.getElementById('donationCustom').checked = true;
        }

        function updateAmount(amount) {
            document.getElementById('customAmountHidden').value = amount;
        }
    </script>
</head>
<body>
    <!-- Header -->
    <header class="text-light bg-dark text-center py-5 ">
        <h1>Support Your Local Zoo</h1>
        <p>Help us maintain and improve the habitats for our animals</p>
    </header>

    <!-- About Section -->
    <section class="container my-5 donation_index text-white" >
        <div class="row">
            <div class="col-md-12">
                <h2>About the Zoo Donation</h2>
                <p class="text-light">
                    Our zoo is home to a wide variety of animals from around the world. We are dedicated to 
                    conservation, education, and providing a safe and engaging environment for our animals. Your 
                    donations help us to maintain high standards of care and contribute to our conservation efforts.
                </p>
            </div>
        </div>
    </section>

    <!-- Donation Cards -->
    <section class="container my-5">
        <form action="donation_form.php" method="get">
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card">
                        <input type="radio" name="amount" value="10" id="donation1" onclick="updateAmount(10)">
                            <label for="donation1">
                        <img src="./images/donation-img1.png" class="card-img-top" alt="Donation 1">
                        <div class="card-body text-center">
                            
                                <h5 class="card-title text-dark">$10</h5>
                                <p class="card-text text-dark">Provide a day's worth of food for a small mammal.</p>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card">
                          <input type="radio" name="amount" value="25" id="donation2" onclick="updateAmount(25)">
                            <label for="donation2">
                        <img src="./images/donation-img1.png" class="card-img-top" alt="Donation 2">
                        <div class="card-body text-center">
                          
                                <h5 class="card-title text-dark">$25</h5>
                                <p class="card-text text-dark">Help us plant new trees in the zoo.</p>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card">
                           <input type="radio" name="amount" value="50" id="donation3" onclick="updateAmount(50)">
                            <label for="donation3">
                        <img src="./images/donation-img1.png" class="card-img-top" alt="Donation 3">
                        <div class="card-body text-center">
                         
                                <h5 class="card-title text-dark">$50</h5>
                                <p class="card-text text-dark">Sponsor an enrichment activity for our animals.</p>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Card 4: Custom Amount -->
                <div class="col-md-3">
                    <div class="card">
                        <input type="radio" name="amount" value="" id="donationCustom">
                            <label for="donationCustom">
                        <img src="./images/donation-img1.png" class="card-img-top" alt="Custom Donation">
                        <div class="card-body text-center">
                            
                                <h5 class="card-title text-dark">Custom Amount</h5>
                                <div class="form-group">
                                    <input type="number" class="form-control" id="customAmount" name="customAmount" placeholder="Enter amount" oninput="updateCustomAmount()">
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <input type="hidden" id="customAmountHidden" name="amount">
                <button type="submit" class="btn btn-success">Next</button>
            </div>
        </form>
    </section>

   

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
