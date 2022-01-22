<?php
include_once "./connect/dbConn.php";

$id = $_GET['product_id'];
$qry = mysqli_query($conn, "SELECT * FROM products WHERE `product_id`='$id'");
$row = mysqli_fetch_array($qry);
if(isset($_POST['update']))
{  
    $qty = $_POST['Quantity'];
    $price = $_POST['Price'];

    $query = "UPDATE `products` SET `product_qty`='$qty',`product_price`='$price' WHERE `product_id`='$id'";
    $result = mysqli_query($conn, $query);
    if($result)
    {
        header("location:Product.php"); 
    }else{
        echo 'Data not Updated';
    }
    mysqli_close($conn);
}
?>
<link rel="stylesheet" href="./styles/form.css">

<div class="center">
    <h1>Update Data</h1>
    <form method="POST">
        <div class="inputbox">
            <input type="text" name="Quantity" value="<?php echo $row['product_qty'] ?>" placeholder="Enter New Quantity" Required>
        </div>
        <div class="inputbox"> 
            <input type="text" name="Price" value="<?php echo $row['product_price'] ?>" placeholder="Enter New Price" Required>
        </div>
        <div class="inputbox">
            <input type="submit" name="update" value="Update">
        </div>
    </form>
</div>
