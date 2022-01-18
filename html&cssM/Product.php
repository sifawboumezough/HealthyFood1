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
<body class="active">
    <div class="wrapper">
        <div class="sidebar">
            <div class="logo"> 
                <img src="./images/Logo.jpg" alt="">
            </div>
            <ul>
                <li>
                    <a href="Product.php" class="">
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
    <div style="overflow-x:auto">
        <h1>All Products</h1>
        <div style="width: 244px"></div>
        <div>
        <table id="product">
            <tr>
                <th>Image</th>
                <th>ID</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            <tr>
                <td><img id="myImg" src="./images/img1.png" alt=""></td>
                <td><div class="pID">m6wobol25p</div></td>
                <td><div class ="Name">Potato</div></td>
                <td><p id="stock">400 Kg</p></td>
                <td><div class ="Price">2$ /Kg</div></td>
                <td><button  class="btn"><i class="fas fa-desktop"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-sync"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-trash-alt"></i></button>   </td>
            </tr>
            <tr>
                <td><img src="./images/img2.png" alt="" ></td>
                <td><div class="pID">z40dqviznl</div></td>
                <td><div class ="Name">Eggplant</div></td>
                <td><p id="stock">400 Kg</p></td>
                <td><div class ="Price">1.5$ /Kg</div></td>
                <td><button  class="btn"><i class="fas fa-desktop"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-sync"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-trash-alt"></i></button>   </td>
            </tr>
            <tr>
                <td><img src="./images/img3.png" alt="" ></td>
                <td><div class="pID">m0gwydvxzs</div></td>
                <td><div class ="Name">Pomegranate</div></td>
                <td><p id="stock">400 Kg</p></td>
                <td><div class ="Price">2$ /Kg</div></td>
                <td><button  class="btn"><i class="fas fa-desktop"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-sync"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-trash-alt"></i></button>   </td>
            </tr>
            <tr>
                <td><img src="./images/img4.png" alt="" ></td>
                <td><div class="pID">r8zigu9hyb</div></td>
                <td><div class ="Name">BlackBerry</div></td>
                <td><p id="stock">400 Kg</p></td>
                <td><div class ="Price">3$ /Kg</div></td>
                <td><button  class="btn"><i class="fas fa-desktop"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-sync"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-trash-alt"></i></button>   </td>
            </tr>
            <tr>
                <td><img src="./images/img5.png" alt="" ></td>
                <td><div class="pID">j86wkry0aj</div></td>
                <td><div class ="Name">Pear</div></td>
                <td><p id="stock">400 Kg</p></td>
                <td><div class ="Price">2$ /Kg</div></td>
                <td><button  class="btn"><i class="fas fa-desktop"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-sync"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-trash-alt"></i></button>   </td>
            </tr>
            <tr>
                <td><img src="./images/img6.png" alt="" ></td>
                <td><div class="pID">tr47uxahkz</div></td>
                <td><div class ="Name">Prune</div></td>
                <td><p id="stock">300 Kg</p></td>
                <td><div class ="Price">2$ /Kg</div></td>
                <td><button  class="btn"><i class="fas fa-desktop"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-sync"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-trash-alt"></i></button>   </td>
            </tr>
            <tr>
                <td><img src="./images/img7.png" alt=""></td>
                <td><div class="pID">1up3he362f</div></td>
                <td><div class ="Name">Apple</div></td>
                <td><p id="stock">400 Kg</p></td>
                <td><div class ="Price">2$ /Kg</div></td>
                <td><button  class="btn"><i class="fas fa-desktop"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-sync"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-trash-alt"></i></button>   </td>
            </tr>
            <tr>
                <td><img src="./images/img8.png" alt="" ></td>
                <td><div class="pID">m54kfg1zm2</div></td>
                <td><div class ="Name">Strawberry</div></td>
                <td><p id="stock">400 Kg</p></td>
                <td><div class ="Price">2$ /Kg</div></td>
                <td><button  class="btn"><i class="fas fa-desktop"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-sync"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-trash-alt"></i></button>   </td>
            </tr>
            <tr>
                <td><img src="./images/img9.png" alt="" ></td>
                <td><div class="pID">w5quk7dwse</div></td>
                <td><div class ="Name">Lime</div></td>
                <td><p id="stock">400 Kg</p></td>
                <td><div class ="Price">2$ /Kg</div></td>
                <td><button  class="btn"><i class="fas fa-desktop"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-sync"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-trash-alt"></i></button>   </td>
            </tr>
            <tr>
                <td><img src="./images/img10.png" alt=""></td>
                <td><div class="pID">2yiwo0hexl</div></td>
                <td><div class ="Name">Onion</div></td>
                <td><p id="stock">400 Kg</p></td>
                <td><div class ="Price">2$ /Kg</div></td>
                <td><button  class="btn"><i class="fas fa-desktop"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-sync"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-trash-alt"></i></button>   </td>
            </tr>
            <tr>
                <td><img src="./images/img11.png" alt="" ></td>
                <td><div class="pID">8vi85ze9cm</div></td>
                <td><div class ="Name">Corn</div></td>
                <td><p id="stock">400 Kg</p></td>
                <td><div class ="Price">2$ /Kg</div></td>
                <td><button  class="btn"><i class="fas fa-desktop"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-sync"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-trash-alt"></i></button>   </td>
            </tr>
            <tr>
                <td><img src="./images/img12.png" alt="" ></td>
                <td><div class="pID">ees67rbvop</div></td>
                <td><div class ="Name">Grape</div></td>
                <td><p id="stock">400 Kg</p></td>
                <td><div class ="Price">2$ /Kg</div></td>
                <td><button  class="btn"><i class="fas fa-desktop"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-sync"></i></button>  <button onclick="alertMessage()" class="btn"><i class="fas fa-trash-alt"></i></button>   </td>
            </tr>
        </table>
    

        </div>
    
</div>
    <div class="wrap">
        <div class="search">
            <input type="text" class="searchTerm" placeholder="Search">
            <button type="submit" class="searchButton">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>

    <script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function(){
        document.querySelector("body").classList.toggle("active");
    })

    function alertMessage(){
        confirm("Are You Sure?");
    }
    </script>
   
 
</body>
</html>