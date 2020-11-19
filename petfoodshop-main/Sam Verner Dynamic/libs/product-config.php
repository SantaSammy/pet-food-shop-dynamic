<?php

include('config.php');

class Product
{
    public $id;
    public $animal;
    public $title;
    public $info;
    public $price;
    public $image;        
}

class ProductList
{
    public $productList = array();
   
    public function loadProducts($animal) {
        // Clear existing products.
        $this->productList = array();
        
        // Run Query
        global $con;
        $sql = "SELECT * FROM Product Where animal = '" . $animal . "'";
        $result = mysqli_query($con,$sql);
        
        while($row = $result->fetch_assoc()) {
            // Create Product for each row.
            $product = new Product();
            $product->id = $row['id'];
            $product->animal = $row['animal'];
            $product->title = $row['title'];
            $product->info = $row['info'];
            $product->price = $row['price'];
            $product->image = $row['image'];

            // Add product to list.
            $this->productList[] = $product;
        }
    }
}

?>
