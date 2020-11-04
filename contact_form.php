
 <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $service = $_POST['service'];
        $mail = $_POST['Email'];
        $tel = $_POST['number'];
        $message = $_POST['Message'];

        $mailTo ="shelmithmakeup@gmail.com";
        $headers ="from:".$mail;
        $txt = "you have received an email from".$name $message;


        mail($mailTo,$service,$txt,$headers);
        header("location: contact_form.php/"); 
    }






?>