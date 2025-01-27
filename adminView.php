<?php
session_start();
ob_start(); // Start output buffering to prevent headers already sent issue

// Include database connection
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
    <link rel="shortcut icon" type="image/png" href="./images/logo.png" />
    <title>Animal Kingdom</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/adminViewStyle.css">
  </head>
  <body>

    <div class="container" style="font-weight: 300;">
        <div class="jumbotron text-center bg-warning text-dark">
            <h2>Admin Overview</h2>
        </div>
        <br>
        
        <a href="insert.php" role="button" class="btn btn-primary pull-right">INSERT DATA</a>
        <a href="view_customers.php" role="button" class="btn btn-info text-dark pull-left">View Details of the ticket holders</a>
        <a class="btn btn-danger" href="userOnly.php">User View</a>
        <br><br>
        <table class="table table-hover table-striped">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            <?php
            $query = "SELECT * FROM animals ORDER BY id DESC";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $id    = $row['id'];
                    $name  = $row['name'];
                    $type  = $row['type'];
                    $dateofbirth = $row['dateofbirth'];
                    $gender = $row['gender'];
                    $image = $row['image'];
            ?>
                    <tr>
                        <td><?= $id; ?></td>
                        <td><?= $name; ?></td>
                        <td><?= $type; ?></td>
                        <td><?= $dateofbirth; ?></td>
                        <td><?= $gender; ?></td>
                        <td>
                            <img src="images/<?= $image ?>" alt="<?= $name ?>" class="thumbnail" width="100px" height="75px">
                        </td>
                        <td>
                            <a href="update.php?update=<?= $id ?>" class="btn btn-success btn-sm" role="button">Update</a>
                            <a href="adminView.php?delete=<?= $id ?>" class="btn btn-danger btn-sm" id="delete" role="button">Delete</a>
                        </td>
                    </tr>
            <?php
                }
            }

            // Deleting the record and the image
            if (isset($_GET['delete'])) {
                $id = $_GET['delete'];

                // Fetch image associated with the ID
                $image_query = "SELECT image FROM animals WHERE id = $id";
                $query1 = mysqli_query($conn, $image_query);

                if ($query1 && mysqli_num_rows($query1) > 0) {
                    $row = mysqli_fetch_assoc($query1);
                    $img = $row['image'];

                    // Check if the image exists and is a file before attempting to delete it
                    if (!empty($img) && file_exists("images/" . $img)) {
                        unlink("images/" . $img);
                    }

                    // Delete the record from the database
                    $delete_query = "DELETE FROM animals WHERE id = $id";
                    $result = mysqli_query($conn, $delete_query);

                    if ($result) {
                        header('Location: adminView.php');
                        exit();
                    }
                } else {
                    // If no image or record is found, handle the error gracefully
                    echo "<div class='alert alert-danger'>Record or image not found.</div>";
                }
            }
            ?>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#delete').click(function() {
                return confirm("Do you want to delete?");
            });
        });
    </script>
  </body>
</html>

<?php
ob_end_flush(); // End output buffering
?>
