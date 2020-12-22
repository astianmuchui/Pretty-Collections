<?php
    if(isset($_POST['submit'])){
        $message = $_POST['message'];
        if(!empty($message)){
            header("location: https://api.whatsapp.com/send?phone=254711831773&text=$message&source=&data=&app_absent=");
            return true;
        }else{
            header("location: ../pages/index.php");
            return false;
        }
    }
?>