<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="./images/logo.png" />
    <link rel="stylesheet" href="css/donation_form.css">
</head>
<body>
    <!-- Header -->
    <header class="text-light bg-dark text-center py-5">
        <h1>Donate to the Zoo</h1>
        <p>Complete the form below to make your donation</p>
    </header>

    <!-- Donation Form -->
    <section class="container my-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="process_donation.php" method="post">
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
                        <label for="amount">Donation Amount</label>
                        <input type="text" class="form-control" id="amount" name="amount" value="<?php 
                            echo htmlspecialchars($_GET['amount']); 
                        ?>">
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Donate</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
