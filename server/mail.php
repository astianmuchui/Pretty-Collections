<?php
       
        $_img = '../images/rsz_logo.png';
    //create functions
    function validate($name,$email,$tel,$message){

        if(empty($name) && empty($email) && empty($message) && empty($tel)){
            return false;
        }else{
            return true;
        }
        if(strlen($message)>100){
            echo '<h1 class="alert-danger"> message cannot exceed 100 characters </h1> ';
        }else{
            return true;
        }

    }
    $code = '254';
    $trimmed  = substr($tel,1);
    $url = 'wa.me/';
    $final_url = $url.$code.$trimmed;
    //creeate mail body
    $headers = "MIME-Version: 1.0" ."\r\n";
    $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: ".$name. "<" .$email.">" ."\r\n";
    $_body = '
        <div style="background: #ccc; padding: 30px; border-radius: 3px; width: 60%; dipslay: flex; flex-direction: column; align-content: center; align-items:center; justify-content: center; ">
        <img src="'.$_img.'">
        <h1 style="font-family: Arial, Helvetica, Sans-serif; color: deeppink;">Contact request from '.$name.'</h1>
        <h2 style="font-family: Arial, Helvetica, Sans-serif;>'.$email.'</h2>
        <h3 style=" font-family: Arial, Helvetica, Sans-serif; ">Message:</h3>
        <p style="font-family: Arial, Helvetica, Sans-serif;>
            '.$message.'
        </p>
        <h2 style="font-family: Arial, Helvetica, Sans-serif;> client whatsapp : '.$final_url.'</h2>
        </div>
    ';
    $subject = "pretty collections contact request";
    $company = 'kamankuranelly@gmail.com';
    if(isset($_POST['submit'])){
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);

        validate($name,$email,$tel,$message);
       
        
    }
    //check for mail

    if(mail($company,$subject,$_body,$headers)){
        header("location: ../determiners/sucess.php?message sent");
        return true;
    }else{
        header("location: ../determiners/error.php?could not send message");
        return false;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mail</title>
</head>
<body>
    <style>
     body{ 
        background: #00030a;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        align-items: center;
     }
    </style>
</body>
</html>