<?php

include_once "./addprdbh-inc.php";


      $product_name = $_POST['prname'];
      $product_qty = $_POST['quantity'];
      $product_price = $_POST['price'];
      $product_img = $_FILES['image']['name'];


    $sql = "INSERT INTO products (product_name , product_qty, product_price, product_img)
     VALUES('$product_name', '$product_qty', '$product_price', '$product_img')";
    mysqli_query($connection, $sql);

    if(!empty($_FILES["image"]["name"])){
		$fileinfo=PATHINFO($_FILES["image"]["name"]);
		$newFilename=$fileinfo['filename'] ."_". $fileinfo['extension'];
		move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $newFilename);
		$location="upload/" . $newFilename;
 
		mysqli_query($connection,"insert into image_tb (img_location) values ('$location')");
		header('location:Product.php');
	}else{
		echo "<script>alert('No Image selected.');location.replace('../addpr.php');</script>";
	}
 




    header("Location: ../addpr.php?product=added"); 