<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "zooManagement"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function escape($string)
{
    global $conn;
    return mysqli_real_escape_string($conn, $string);
}

function clean($string)
{
    $string = trim($string);
    $string = stripslashes($string); // Corrected function name
    $string = htmlentities($string);
    return $string;
}
?>
 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
