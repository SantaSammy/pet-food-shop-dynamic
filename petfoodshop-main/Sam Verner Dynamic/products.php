<?php include('libs/image-config.php');?>
<?php include('libs/config.php');?>
<?php include('libs/product-config.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pet Food Shop</title>
    <link href="CSS/products.css" rel="stylesheet"> <!--css input-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- JQuery -->
</head>
<body>
	<?php
		$animal = $_GET['animal'];
		$animal = isset($animal) ? $animal : 'dog';
	?>
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
                          </tr>     <!--location to put cart items-->
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
    <nav>
        <div class="logo-image">          <!--content and grid-->
            <a href="home.php">
                <<?php ImagaClass::echoImage('logo'); ?>
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
    <div class="category-background">
        <a href="products.php?animal=dog" class="category">Dog</a><br>
        <a href="products.php?animal=cat" class="category">Cat</a><br>
        <a href="products.php?animal=fish" class="category">Fish</a><br>
        <a href="products.php?animal=small-pets" class="category">Small Pets</a><br>
        <a href="products.php?animal=reptile" class="category">Reptile</a><br>
        <a href="products.php?animal=bird" class="category">Bird</a><br>
        <a href="products.php?animal=horse" class="category">Horse</a>
    </div>
    <div class="card" id="grid">
        <?php

		$products = new ProductList();
		$products->loadProducts($animal);

		$index = 1;

		foreach ($products->productList as $product) {
		    echo '
			 <div class="card' . $index . '">
			     <a href="product-detail.php?id=' . $product->id . '"><img src="pics/' . $animal . '/' . $product->image .'" alt="' . $product->title . '"></a>
			     <div class="card__info">
				<h1 class="card__title">' . $product->title . '</h1>
				<p class="card__price">$' . $product->price . '</p>
				<p class="card-text">' . $product->info . '</p>
				<input type="number" id="quantity" name="quantity" data-id="' . $product->id . '" value="1" min="1" max="5">
				<button class="card__btn add-to-cart" data-id="' . $product->id . '">ADD TO CART</button>
			     </div>
			 </div>';

		    $index = $index + 1;    
		}

		?>
    </div>
    <div class="footer">    <!--footer-->
        <div class="footer-container"><?php include('libs/footer.php'); echo $footerContent['text'];?></div>        
    </div>
<script src="JS/cart.js"></script>  <!--js input-->
</body>
</html>
