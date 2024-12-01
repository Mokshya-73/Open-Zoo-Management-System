<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="shortcut icon" type="image/png" href="./images/logo.png" />
  <title>Animal Kingdom</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="./css/login_style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="cont">
      <!-- Left Image -->
      <div class="sub-cont">
        <div class="img"></div>
      </div>
      <!-- Login Form -->
      <div class="form">
        <h1 class="topic">Animal Kingdom</h1>
        <h2>Sign In</h2>
        <div id="error-message"></div>
        <form id="login-form" action="login.php" method="post">
          <label>
            <span>Admin Email</span>
            <input type="email" name="email" required />
          </label>
          <label>
            <span>Password</span>
            <input type="password" name="password" required />
          </label>
          <button class="submit" type="submit">Sign In</button>
        </form>
      </div>
      <!-- Right Image -->
      <div class="sub-cont">
        <div class="img"></div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      document
        .getElementById("login-form")
        .addEventListener("submit", function (event) {
          event.preventDefault(); // Prevent the form from submitting the default way

          const formData = new FormData(this);

          fetch("login.php", {
            method: "POST",
            body: formData,
          })
            .then((response) => response.text())
            .then((data) => {
              if (data.trim() === "success") {
                window.location.href = "adminView.php";
              } else {
                const errorMessage = document.getElementById("error-message");
                errorMessage.textContent = data;
                errorMessage.style.display = "block";
              }
            })
            .catch((error) => {
              console.error("Error:", error);
            });
        });
    </script>
  </body>
</html>
