
<?php
DEFINE ("DBNAME","pretty");
DEFINE ("DBHOST","localhost");
DEFINE ("DBUSER","root");
DEFINE ("DBPASSWORD","");


$connection=mysqli_connect(DBHOST,DBUSER,DBPASSWORD,DBNAME);
if($connection){
    echo "Sucessful connection <br>";
}else{
    echo "connection failed <br>";
}
?>