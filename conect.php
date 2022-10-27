<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname ="azul";
$conn = new mysqli($servername,$username,$password,$dbname);

if($conn-> connect_error){
    die("Connection failed: ".$conn->connect_error);

} else {
    echo "Deu certo";
}


?>

