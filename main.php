<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./images/logo.png" />
    <title>Animal Kingdom</title>
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
   
    <style> 
        body {
            margin: 0;
            padding: 0;
            background-color:#0f4e50;
            background-repeat: no-repeat;
            background-position: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            background-size: cover;
        }

        /* Different heights for each iframe */
        .iframe-page1, .iframe-page2, .iframe-page3, .iframe-page4 {
            width: 100%;
            margin-bottom: 20px;
            border: none;
            overflow: hidden; /* Hide scroll bars */
        }

        .iframe-page1 {
            height: 1600px; /* Adjust to the desired height for index.php */
        }

        .iframe-page2 {
            height: 1600px; /* Adjust to the desired height for about.php */
        }

        .iframe-page3 {
            height: 1700px; /* Adjust to the desired height for animal.php */
        }

        .iframe-page4 {
            height: 1500px; /* Adjust to the desired height for fun.php */
            margin: 0;
            padding:0;
            border: 0;
        }

        /* Smooth scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Navigation bar styles */
        .container {
            top:10px;
            font-family: "Bree Serif", serif;
            position:absolute;
            display: flex;
            justify-content: center;
            
        }
      


        .container a {
            font-size: 22px;
            color: #fb8b00;
            font-weight: bold;
        }

        .container a:hover {
            color: #15ff25;
        }

        .container a:active {
            color: #f3cf03;
        }
        .logo {
  position: relative;
  left: 0;
}

#size {
  max-height: 200px;
}
.ticket {
  top: 13%;
  color: #000;
  font-size: 30px;
  margin: 4px 2px;
  cursor: pointer;
  position: absolute;
  border-radius: 50%;
  left: 1540px;
}

    </style>
</head>
<body>

    <!--Navigation bar start-->
    <div class="container">
    <nav class="navbar fixed-top navbar-expand-sm" style="background-color:rgba(0,0,0,0.5)" >
     
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span class="logo"><a href="#section1"><img src="images/logo.png" alt="logo" width="85" height="70"></a></span>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="#section1" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#section2" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="#section3" class="nav-link">Animals</a></li>
                    <li class="nav-item"><a href="#section4" class="nav-link">Fun & Adventures</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown">More</a>
                        <div class="dropdown-menu">
                            <a href="store_index.php" class="dropdown-item">Shop Now</a>
                            <a href="donation_index.php" class="dropdown-item">Donation</a>
                            <a href="more.php" class="dropdown-item">More details</a>
                        </div>
                    </li>
                    <span class="ticket"><a href="ticket_payment.php" class="btn btn-danger btn-lg text-light bg-danger" role="button" aria-disabled="true">Buy Tickets</a></span>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navigation bar end-->

    <!-- Embed each PHP page using iframes with different heights -->
    <iframe id="section1" class="iframe-page1" src="index.php" title="Page 1" scrolling="no"></iframe>
    <iframe id="section2" class="iframe-page2" src="about.php" title="Page 2" scrolling="no"></iframe>
    <iframe id="section3" class="iframe-page3" src="animal.php" title="Page 3" scrolling="no"></iframe>
    <iframe id="section4" class="iframe-page4" src="fun.php" title="Page 4" scrolling="no"></iframe>





    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
