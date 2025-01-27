<?php
include 'db_connect.php';
?>

<?php 

if(isset($_GET['update'])){
    $id = $_GET['update'];

    $query = "SELECT * FROM animals WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        $name = $row['name'];
        $gender = $row['gender'];
        $dateofbirth = $row['dateofbirth'];
        $type = $row['type'];
        $image = $row['image'];
    }
}

if(isset($_POST['update'])){
    $name = clean($_POST['name']);
    $gender = clean($_POST['gender']);
    $dateofbirth = clean($_POST['dateofbirth']);
    $type = clean($_POST['type']);
    $image_name = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];

    // If a new image is uploaded, move it to the images directory
    if(!empty($image_name)) {
        $location = "images/".$image_name;
        move_uploaded_file($image_tmp_name, $location);
    } else {
        // If no new image is uploaded, retain the old image
        $image_name = $image;
    }

    $query  = "UPDATE animals SET ";
    $query .= "name = '".escape($name)."', ";
    $query .= "gender = '".escape($gender)."', ";
    $query .= "dateofbirth = '".escape($dateofbirth)."', ";
    $query .= "type = '".escape($type)."', ";
    $query .= "image = '".escape($image_name)."' ";
    $query .= "WHERE id = {$id}";

    $result = mysqli_query($conn, $query);

    if($result){
        header('location:adminView.php');
    } else {
        die('Error: ' . mysqli_error($conn));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/png" href="./images/logo.png" />
    <title>Animal Kingdom</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/update.css">
</head>
<body class="insertbg">
<div class="container">
    <div class="jumbotron text-center">
        <h2>Crud Application Using PHP</h2>
    </div>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo $name ?>">
        </div>

        <div class="form-group">
            <label for="gender">Gender:</label>
            <div>
                <input type="radio" name="gender" value="Male" <?php echo ($gender == 'Male') ? 'checked' : ''; ?>> Male
                <input type="radio" name="gender" value="Female" <?php echo ($gender == 'Female') ? 'checked' : ''; ?>> Female
            </div>
        </div>

        <div class="form-group">
            <label for="dateofbirth">Date of Birth:</label>
            <input type="date" name="dateofbirth" class="form-control" value="<?php echo $dateofbirth ?>">
        </div>

        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" name="type" class="form-control" placeholder="Enter Type" value="<?php echo $type ?>">
        </div>
        
        <div class="form-group">
            <label for="image">Image:</label>
            <img src="images/<?php echo $image; ?>" alt="" width="100px" height="100px" class="thumbnail">
            <input type="file" name="image" class="form-control">
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Update Data" name="update">
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>