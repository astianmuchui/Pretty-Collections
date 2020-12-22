<?php
    require 'database.php';
    $query = "SELECT * FROM products";
    $result = mysqli_query($connection,$query);
    $products = mysqli_fetch_all($result,MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($connection);  
    // $img = 'products/.$products['product-image']';
?>