 <?php
    // require ("../server/mail.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/rsz_logo.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/84b6428a50.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/main.css">
    <title>Pretty collections</title>
</head>
<body>
    <header>
        <div class="title">
            <a href="#"><img src="images/rsz_logo.png" alt="" height="50" width="124"></a>
        </div>
        <nav>
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#categories">Categories</a></li>
                <li><a href="pages/products.php">products</a></li>
                <li><a href="#">about</a></li>
                <li><a href="#contact">contact us</a></li>
            </ul>
        </nav> 
    </header>
    <div class="main">
        <p class="intro">
            Your home of <br> world class beauty products <br>
            <a href="#" id="trigger">order now</a>
        </p>
        
        <div class="modal" id="bg-modal">
                <span id="close"> &times; </span>
                <img src="images/rsz_logo.png" height="66.66" width="165.33" class="img">
                    <form action="../server/whatsapp.php" method="post">
                        <textarea name="message" id="" cols="30" rows="7" placeholder="Write message"></textarea> <br> <br>
                            <button name="submit" type="submit"> <i class="fab fa-whatsapp"></i> Send message</button>
                    </form>
        </div>
    </div>
    <section class="showcase" id="categories">
        <h1>Categories</h1>
        <div class="products" id="products">
            <div class="earrings">
                <img src="images/earring.jpg" alt="">
                <p>Earrings</p>
            </div>
            <div class="watches">
                <img src="images/watch 1.jpg" alt="" >
                <p>watches</p>

            </div>
            <div class="bracelets">
                <img src="images/stainless.jpg" alt="">
                <p>Bracelets</p>
            </div>
            <div class="necklaces">
                    <img src="images/necklace.jpg" alt="">
                    <p>Necklaces</p>
            </div>
            <div class="handbags" id="handbag">
                <img src="images/handbag.jpg" alt="">
                <p>Handbags</p>
            </div>
            <div class="belts">
                <img src="images/belt.jpg" alt="">
                <p>Belts</p>
            </div>
            <div class="sunglasses">
                <img src="images/glasses.jpg" alt="" >
                <p>Sunglasses</p>
            </div>
        <div class="scarfs">
            <img src="images/scarf1.jpg" alt="" >
            <p>Scarfs</p>
        </div>
        <div class="tops">
            <img src="images/tshirt.jpg" alt="">
            <p>Tops</p>
        </div>
        <div class="sandals">
            <img src="images/sandals.jpg" alt="">
            <p>Sandals</p>
        </div>
        <div>
            <img src="images/hat.jpg" alt="" >
            <p>Hats</p>
        </div>
        <div>
            <img src="images/hairpin.jpeg" alt="" >
            <p>Hair pins</p>
        </div>

    </div>
    <div class="see-more">
        <a href="pages/products.php">See exclusive products</a>
    </div>
    </section>
    <section class="values-wrapper">
        <div class="values-container">
            <div class="value-one">
                <i class="fas fa-user-clock fa-2x"></i> <br> <br>
                <span>24 hour support</span>
                <p>
                    we reply instantly to your sms email and whatsapp messages
                </p>
            </div>
            <div>
                <i class="fas fa-truck fa-2x"></i> <br> <br>
                <span>Instant and cheap delivery</span>
                <p>
                    we deliver our products within a short time at a cheap price
                </p>
            </div>
            <div>
                <i class="fas fa-coins fa-2x"></i> <br> <br>
                <span>Return guarantee</span>
                <p>
                    instant return and replace of goods within 30 days in case of a problem
                </p>

            </div>
    
        </div>
            </section>
            <section class="contact" id="contact">
                <div class="contact-us">
                    <form action="../server/mail.php" method="post" enctype="multipart/form-data">
                    <h1>Contact us</h1>
                        <input type="text" placeholder="name" placeholder="your name" name="name" required> <br> <br>
                         <input type="email" name="email" id="" placeholder="Email"> <br> <br>  
                         <input type="tel" name="phone" id="" placeholder="phone number- start with 07..."> <br> <br>
                         <textarea name="message" id="" cols="40" rows="7" placeholder="Message"></textarea> <br> <br>
                         <input type="submit" value="send message" id="submit">
                    </form>
                </div>
            </section>
            <footer>
                <div class="identity">
                    <img src="images/rsz_logo.png" alt="" height="50" width="124">
                </div>
                <div class="quicklinks">
                    <h3>Quicklinks</h3> <br>
                    <ul>
                <li><a href="#">home</a></li>
                <li><a href="#categories">Categories</a></li>
                <li><a href="pages/products.php">products</a></li>
                <li><a href="#">about</a></li>
                <li><a href="#contact">contact us</a></li>
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
            <script src="js/modal.js"></script>
</body>
</html>