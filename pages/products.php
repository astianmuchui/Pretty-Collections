<?php
    require '../server/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/products-min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Order our products online</title>
</head>
<body>
    <header>
    <div class="title">
            <a href="#"><img src="../images/rsz_logo.png" alt="" height="50" width="124"></a>
        </div>
        <nav>
            <ul>
                <li><a href="../index.php">home</a></li>
                <li><a href="../#categories">Categories</a></li>
                <li><a href="../pages/products.php">products</a></li>
                <li><a href="#">about</a></li>
                <li><a href="../#contact">contact us</a></li>
            </ul>
        </nav> 
    </header>
    <div class="products container">
    <?php foreach($products as $product): ?>

            <div>
                <?php
                    $_url = "../Database/products/".$product['product_image'];
        
                    ?>
                <img src="<?php echo $_url ?>" alt="could not load photo">
                <p><?php echo $product['product_name'];?> </p>
                <a href="#" class="btn">Book <?php echo $product['product_name'];?></a>
            </div>
            
        <?php endforeach ?>
</body>
</html>