<?php include('libs/image-config.php');?>
<?php include('libs/config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Thank you</title>
    <link href="CSS/invoice.css" rel="stylesheet"> <!--css input-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- JQuery -->
</head>
<body>
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
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="at-container">
        <h1 class="at-item">Thank You</h1>
    </div>
                <ul>
                  <li class="header__submenu" id="submenu">
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
                    </div>
                  </li>
                </ul>
    <div class="footer">  <!--footer-->
        <div class="footer-container"><?php include('libs/footer.php'); echo $footerContent['text'];?></div>        
    </div>
<script src="JS/cart.js"></script>  <!--js input-->
</body>
</html>
