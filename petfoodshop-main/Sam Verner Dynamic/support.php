<?php include('libs/config.php');?>
<?php include('libs/image-config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Support</title>
    <link href="CSS/support.css" rel="stylesheet">  <!--css input-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- JQuery -->
</head>
<body>
    <header class="header"> <!--cart and navigation-->
        <div class="header-box">
            <div class="header__cart">
                <ul>
                  <li class="header__submenu" id="submenu">
                    <button class="header__cart-btn" id="toggle-cart-btn"><svg class="cart" width="24" height="24" viewBox="0 0 24 24">
            <path d="M17,18C15.89,18 15,18.89 15,20A2,2 0 0,0 17,22A2,2 0 0,0 19,20C19,18.89 18.1,18 17,18M1,2V4H3L6.6,11.59L5.24,14.04C5.09,14.32 5,14.65 5,15A2,2 0 0,0 7,17H19V15H7.42A0.25,0.25 0 0,1 7.17,14.75C7.17,14.7 7.18,14.66 7.2,14.63L8.1,13H15.55C16.3,13 16.96,12.58 17.3,11.97L20.88,5.5C20.95,5.34 21,5.17 21,5A1,1 0 0,0 20,4H5.21L4.27,2M7,18C5.89,18 5,18.89 5,20A2,2 0 0,0 7,22A2,2 0 0,0 9,20C9,18.89 8.1,18 7,18Z"></path>
          </svg> Your Cart</button>
                    <div id="shopping-cart" class="shopping-cart-container">
                      <table id="cart-content">
                        <thead>
                          <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th></th>
                          </tr>   <!--location to put cart items-->
                        </thead>
                        <tbody></tbody>
                      </table>
                      <p class="delivery-container" id="delivery-price"></p>
                      <p class="total-container" id="total-price"></p>
                      <a href="invoice.php" id="checkout-btn" class="cart-btn">Checkout</a>
                      <a href="#" id="clear-cart" class="cart-btn">Clear Cart</a>
                    </div>
                  </li>
                </ul>
              </div>
        </div>
    </header>
    <div class="card" id="grid"></div>
    <nav>
        <div class="logo-image">
            <a href="home.php">
                <?php ImagaClass::echoImage('logo'); ?>
            </a>
        </div>
        <div class="nav-items">
            <li><a href="about-us.php">About us</a></li>
            <li><a href="products.php">Animals</a></li>
            <li><a href="support.php">Support</a></li>
        </div>
        <form action="#">
            <input type="search" class="search-data" placeholder="Search..." required>
        </form>
    </nav>
    <div class="content">
        <br><br><br><br><br><br><br><br><br><br><br>
        <div class="at-container">
            <h1 class="at-item">Support</h1> <!--css animation referenced from https://angrytools.com/css/animation/ -->
            <br>
            <h1 class="fancy">Contact us at "petfood@shop.co.nz" or at our number "(000)00000000"</h1> <!--js animation-->
            <script src="JS/animation.js"></script>
        </div>          
    </div>    
    <div class="footer">  <!--footer-->
        <div class="footer-container"><?php include('libs/footer.php'); echo $footerContent['text'];?></div>        
    </div>
<script src="JS/cart.js"></script>  <!--js input-->
</body>
</html>
