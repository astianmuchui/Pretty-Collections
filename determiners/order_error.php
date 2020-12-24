<?php
    include '../includes/header.html';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order not placed</title>
</head>
<body>
    <div class="container">
    <img src="../images/red_fail.png" alt="" height="250" width="250"> <br>

        <div class="alert-danger">
            <h1>Order was not placed, please try again</h1> <br>
            <a href="../pages/products.php#order" class="btn">Try again</a>

        </div>
    </div>
    <?php
    include '../includes/footer.html';
    ?>
</body>
</html>