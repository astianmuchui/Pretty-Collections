<?php
    require '../admin/functions.php';    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/products-min.css">
    <script src="https://kit.fontawesome.com/84b6428a50.js" crossorigin="anonymous"></script>

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
                <li><a href="../index.php#categories">Categories</a></li>
                <li><a href="../pages/products.php">products</a></li>
                <li><a href="#">about</a></li>
                <li><a href="../index.php#contact">contact us</a></li>
            </ul>
        </nav> 
    </header>
    <div class="main">
        <p>Order amazing products <br> at a cheap price 
        <br> <br>
    </p>
    <a href="#products">See what we have</a>

    </div>
    <div class="wrap"> <br> <br>
    <h1>Available products</h1>
    <br>
    
        <div class="products container" id="products">
                  <?php foreach($products as $product): ?>
                    <?php
                    
                    $_url = "../admin/products/".$product['product_image'];?>
             
                <div>

            <img src="<?php echo $_url ?>" alt="" > <br>
            <p><?php echo $product['product_name'];?> </p> <br>
            <a href="mailto: kamankuranelly@gmail.com?subject=I want to order a <?php echo $product['product_name']?> &body=Hi there i would like to book a product(<?php echo $product['product_name']?>) ">Order now</a>
        </div>
        <?php endforeach ?>

    </div>
    <footer>
                <div class="identity">
                    <img src="../images/rsz_logo.png" alt="" height="50" width="124">
                </div>
                <div class="quicklinks">
                    <h3>Quicklinks</h3> <br>
                    <ul>
                <li><a href="../index.php">home</a></li>
                <li><a href="../index.php#categories">Categories</a></li>
                <li><a href="../pages/products.php">products</a></li>
                <li><a href="#">about</a></li>
                <li><a href="../index.php#contact">contact us</a></li>

                    </ul>
                </div>
                <div class="categories">
                    <h3>Categories</h3> <br>
                    <ul>
                        <li>Jewellry</li>
                        <li>Footwear</li>
                        <li>Men's clothing</li>
                        <li>Women's clothing</li>
                    </ul>
                </div>
                <div class="contacts-main">
                    <h3>Contacts</h3> <br>
                      <ul>
                          <li> <i class="fas fa-phone-alt"></i> 07 11 831 773</li>
                          <li> <i class="far fa-envelope"></i> kamankuranelly@gmail.com</li>
                          <li> <i class="fas fa-map-marker"></i> chuka kenya</li>
                      </ul>  
                </div>
                <div class="social">
                    <a href="#"><i class="fas fa-phone-alt"></i></a>
                    <a href="#"><i class="far fa-envelope"></i></a>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <a href="#"><i class="fas fa-sms"></i></a>
                </div>
            </footer>     
</body>
</html>