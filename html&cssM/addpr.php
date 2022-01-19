<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/addpr.css">
    <!-- font awesome 5CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Add Product</title>
</head>
<body>
<div class="wrapper">
        <div class="sidebar">
            <div class="logo"> 
                <img src="./images/Logo.jpg" alt="">
            </div>
            <ul>
                <li>
                    <a href="Product.php" class="active">
                        <span class="icon"><i class="fas fa-shopping-basket"></i>
                        <span class="item">Products</span>
                    </a>
                </li>    
                <li>
                    <a href="addpr.php">
                        <span class="icon"><i class="fas fa-plus-circle"></i>    
                        <span class="item">Add Product</span>
                    </a>
                </li>
                <li>
                    <a href="login.php">
                        <span class="logout" class="icon"><i class="fas fa-sign-out-alt"></i>
                        <span class="item">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
                <div class="top-logo">
                <img src="./images/HealthyFood.bio.png" alt=""></div>
             </div>
        </div>
    </div>
     <div class="name-cat">
                 <div class="input-box">
                    <h2 class="Name">Name</h2>
                    <input class ="prname"type ="text" name="name" placeholder="Enter the Product's Name" required>
                 </div>

                 </div>
     </div>

     <div class="exp-pr-quan">
                <div class="input-box">
                    <h2 class="price">Price</h2>
                    <input type ="text" name="price" placeholder="Product Price" required>
                    <h2 class="quantity">Quantity</h2>
                    <input type ="text" name="quantity" placeholder="Quantity per Kg" required>
                 </div>
     </div>

      <div class="user-id">
                 <div class="input-box">
                    <h2 class="ID">ID</h2>
                 <input class="user" type ="text" name="name" placeholder="Enter the Product's ID" required>
                 </div>
     </div> 

     <div class="image-pr">
                 <div class="input-box">
                    <h2 class="Image">Image</h2>
                 <input class="choose-image" type ="text" name="name" placeholder="Choose Image" required>
                 </div>
     </div> 

                <div class="buttoninput-box">
                <button type="submit">Add Product</button>
                </div>


        

    
   
    
</body>

<script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })
    </script>
</html>