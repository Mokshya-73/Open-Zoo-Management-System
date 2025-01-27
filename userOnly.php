<?php
session_start();
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
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    
   
    
    <link rel="stylesheet" href="css/userOnly.css">
  </head>
  <body>
  <div class="full-width-container">
  <h2 class="allAnimals">All Animals</h2>
</div>


<?php
include 'db_connect.php';
?>


    
    <div class="row">
<?php
$query = "SELECT * FROM animals ORDER BY id DESC";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_array($result)) {
        $id    = $row['id'];
        $name  = $row['name'];
        $type = $row['type'];
        $dateofbirth = $row['dateofbirth'];
        $gender = $row['gender'];
        $image = $row['image'];
?>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="<?= "images/".$image ?>" class="card-img-top img-fixed-size" alt="<?= $name ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $name ?></h5>
                    <p class="card-text">Gender: <?= $gender ?></p>
                    <p class="card-text">Date ofb Birth: <?= $dateofbirth ?></p>
                    <p class="card-text">Type: <?= $type ?></p>
                </div>
            </div>
        </div>
<?php
    }
}
?>
    </div>
     
    <a class=" btn btn-danger" href="main.php">Back</a>
</div>

 
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

 

</body>
</html>