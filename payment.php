<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/paymentStyle.css">
    <link rel="shortcut icon" type="image/png" href="./images/logo.png" />
    <title>Animal Kingdom</title>
</head>
<body>
    <div class="cc">
        <div class="cc__card">
            <div class="cc__logo">
                <svg viewBox="0 0 35.31 24" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#e60019" d="m12 24-12-12 12-12 5.66 5.66-6.34 6.34 6.34 6.34-5.66 5.66z" />
                    <path fill="#f69f24" d="m23.31 0 12 12-12 12-5.66-5.66 6.34-6.34-6.34-6.34 5.66-5.66z" />
                    <rect fill="#f85c1d" transform="translate(-3.31 16) rotate(-45)" x="13.17" y="7.52" width="8.97" height="8.97" />
                </svg>
            </div>
            <div class="cc__cardgroup cc__cardgroup--wide">
                <div class="cc__card-label">Card Number<br>xxxx-xxxx-xxxx-xxxx</div>
                <div class="cc__card-value cc__card-value--large" id="cardnumber"></div>
            </div>
            <div class="cc__cardgroup">
                <div class="cc__card-label">Cardholder<br>M.S Vithanage</div>
                <div class="cc__card-value" id="cardholder"></div>
            </div>
            <div class="cc__cardgroup">
                <div class="cc__card-label">Expires<br>08/15</div>
                <div class="cc__card-value" id="exp"></div>
            </div>
            <div class="cc__cardgroup">
                <div class="cc__card-label">CVC<br>673</div>
                <div class="cc__card-value" id="cvc"></div>
            </div>
        </div>

        <form class="cc__form" action="thankYou.php">
            <fieldset>
                <legend>Payment Details</legend>
                <div class="fieldgroup">
                    <label for="card-number">Card Number</label>
                    <input id="card-number" type="text" tabindex="1" required/>
                </div>
                <div class="fieldgroup">
                    <label for="cardholder">Cardholder</label>
                    <input id="cardholder" type="text" tabindex="2" required />
                </div>
                <div class="fieldgroup fieldgroup--half">
                    <label for="card-exp">Expires</label>
                    <input id="card-exp" type="text" placeholder="MM/YY" tabindex="3" required />
                </div>
                <div class="fieldgroup fieldgroup--half">
                    <label for="card-cvc">CVC</label>
                    <input id="card-cvc" type="text" tabindex="4" required/>
                </div>
                <input class="button" type="submit" value="Pay Now" tabindex="5"  />
            </fieldset>
        </form>
    </div>
</body>
</html>
