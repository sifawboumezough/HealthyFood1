
<?php

$servername = "localhost";
$username = "root";
$password = "N@ruto201197";
$dbname = "healthy_food";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "";
?>

