<?php
    function makeOrder($product_Name,$_ammount,$_telNo){
        if(empty($product_Name) && empty($_ammount) && empty($_telNo)){
            echo "<h1>Please fill in all fields</h1> <br>";
        }else{
            return true;
        }
        if(filter_var($_ammount, FILTER_VALIDATE_INT)=== true){
            return true;
        }else{
            return false;
        }
        if(strlen($_telNo)> 10){
            echo "<h1>The phone number should consist of only ten characters . e.g 0712354678 <br></h1>";
        }else if(strlen($_telNo) < 10){
            echo "<h1>Phone number is less than 10 characters <br> </h1>";
            
        }
        if(strlen($_telNo) == 10){
            return true;
        }
        if($_ammount < 1){
            echo "<h1>Product quantity cannot be less than one</h1> <br>";
        }else{
            return true;
        }
    }
    if(isset($_POST['submit'])){
        $product_Name = $_POST['order_name'];
        $_ammount = $_POST['ammount'];
        $_telNo = $_POST['phone'];
        $country_code = "254";
        $_url = "wa.me/";
        $trimmed_tel = substr($_telNo, 1);
        $_sanitizedTel = $_url.$country_code.$trimmed_tel;
        $subject = ".$product_Name. booking";
        $toEmail = "kamankuranelly@gmail.com";
        $name = "Pretty collections";
        $email = "astianseb730@gmail.com";
        $body = '
        <h1> '.$product_Name.'  Order </h1>
        <h2>By '.$_telNo.' whatsapp: '.$_sanitizedTel.'</h2>
        <h1>Number of products '.$_ammount.'</h1>
        ';
        $headers = "MIME-Version: 1.0" ."\r\n";
        $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: ".$name. "<" .$email.">" ."\r\n";
        makeOrder($product_Name,$_ammount,$_telNo);
        if(makeOrder($product_Name,$_ammount,$_telNo)){
            mail($toEmail,$subject,$body,$headers);
        }else{
            return false;
        }
        if(mail($toEmail,$subject,$body,$headers)){
            header("location: ../determiners/order_sucess.php");
            return true;
        }else{
            header("location: ../determiners/order_error.php?error_could_not_complete_request");
            return false;
        }
    }

?>