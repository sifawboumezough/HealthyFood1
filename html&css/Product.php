<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/product.css">
    <!-- font awesome 5CDN -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Product</title>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <div class="logo"> 
            <img src="./images/Logo.jpg" alt="">
            </div>
            <ul>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fas fa-shopping-basket"></i>
                        <span class="item">Products</span>
                    </a>
                </li>    
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-plus-circle"></i>    
                        <span class="item">Add Product</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="logout" class="icon"><i class="fas fa-sign-out-alt"></i>
                        <span class="item">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="section">
            <div class="top_navbar">
                    <h3>Products</h3>
                    <div class="email">
                        <span class="icon1"><i class="far fa-user-circle"></i>
                        <span class="item"><h4> Robert Dinero</h4>
                        <h5>Robertdeniro@gmail.com</h5></span>
                    </div>
             </div>
        </div>

     </div>
     <h3>All Products</h3>
     <table id="product">
         <tr>
             <th>Image</th>
             <th>ID</th>
             <th>Name</th>
             <th>Expy Date</th>
             <th>Category</th>
             <th>Quantity</th>
             <th>Price</th>
             <th>Action</th>
        </tr>
        <tr>
            <td><img src="./images/img1.jpg" alt="" style="width: 250px;height: 87px"></td>
            <td>VLbWW7XrsR</td>
            <td>Potato</td>
            <td><p id="expy"></p></td>
            <td>Vegetable</td>
            <td>400 Kg</td>
            <td>2$ /Kg</td>
            <td><i class="fas fa-desktop"></i><i class="fa fa-refresh" aria-hidden="false"></i><i class="fas fa-trash-alt"></i></td>
        </tr>
        <tr>
            <td><img src="./images/img2.jpg" alt="" style="width: 250px;height: 87px"></td>
            <td>VLbWW7XrsR</td>
            <td>EggPlant</td>
            <td><p id="expy"></td>
            <td>Vegetable</td>
            <td>500 Kg</td>
            <td>1.5$ /Kg</td>
            <td><i class="fas fa-desktop"></i><i class="fa fa-refresh" aria-hidden="false"></i><i class="fas fa-trash-alt"></i></td>
        </tr>
        <tr>
            <td><img src="./images/img3.jpg" alt="" style="width: 250px;height: 87px"></td>
            <td>VLbWW7XrsR</td>
            <td>Mango</td>
            <td><p id="expy"></td>
            <td>Fruit</td>
            <td>410 Kg</td>
            <td>3$ /Kg</td>
            <td><i class="fas fa-desktop"></i><i class="fa fa-refresh" aria-hidden="false"></i><i class="fas fa-trash-alt"></i></td>
        </tr>


    </table>
    
   
 
</body>
</html>