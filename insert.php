<?php
session_start();
include 'db_connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/insert.css">
    <link rel="shortcut icon" type="image/png" href="./images/logo.png" />
    <title>Animal Kingdom</title>
   

</head>
<body class="insertbg">

<?php
if (isset($_POST['insert'])) {
    $name = clean($_POST['name']);
    $gender = clean($_POST['gender']);
    $dateofbirth = clean($_POST['dateofbirth']);
    $type = clean($_POST['type']);
    $image_name = $_FILES['image']['name'];
    $image = $_FILES['image']['tmp_name'];

    $location = "images/" . $image_name;

    move_uploaded_file($image, $location);

    $query = "INSERT INTO animals (name, gender, dateofbirth, type, image) VALUES ('" . escape($name) . "', '" . escape($gender) . "', '" . escape($dateofbirth) . "', '" . escape($type) . "', '$image_name')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: adminView.php");
    } else {
        die('error: ' . mysqli_error($conn));
    }
}
?>

<div class="container">
    <div class="jumbotron text-center">
        <h1>Admin Overview</h1>
    </div>
    <br>
    <div class="form1">
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group mb-5 fs-6 text-white">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                </div>
                <div class="form-group mb-5 text-white">
  <label for="gender">Gender:</label>
  <div class="radio-group text-white">
    <label>
      <input type="radio" name="gender" value="Male"> Male
    </label>
    <label>
      <input type="radio" name="gender" value="Female"> Female
    </label>
  </div>
</div>

                <div class="form-group mb-5 text-white">
                    <label for="dateofbirth">Date of Birth:</label>
                    <input type="date" name="dateofbirth" class="form-control" required>
                </div>
                <div class="form-group mb-5 text-white">
                    <label for="type">Type:</label>
                    <input type="text" name="type" class="form-control" placeholder="Enter type" required>
                </div>
                <div class="form-group mb-5 fs-6 text-white">
  <label for="image">Image:</label>
  <input type="file" name="image" class="form-control" required>
</div>

                <div class="form-group mb-5 fs-6">
                    <input type="submit" class="btn btn-success" value="Insert data" name="insert">
                </div>
            </form>
        </div>
    </div>
</div>
</div>


</body>
</html>