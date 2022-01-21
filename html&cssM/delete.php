<?php

include "./connect/dbConn.php"; // Using database connection file here

$id = $_GET['product_id']; // get id through query string

$del = mysqli_query($conn,"DELETE FROM products WHERE product_id = '$id'"); // delete query

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:Product.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>