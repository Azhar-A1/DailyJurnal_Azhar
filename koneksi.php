<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "web_daily_jurnal";

//creat conection
$conn = new mysqli($servername,$username,$password,$db);

//check conection
if($conn->connect_error){
    die("conection failed : ". $scon->connect_error);
}

echo "connected successfuly<hr>";
?>