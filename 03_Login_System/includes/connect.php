<!-- Insert PHP code to create a connection with the database -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mmc_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die(mysqli_connect_error());
}
?>