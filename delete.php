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

$nome = $_POST["nome"];

$sql = "DELETE FROM verde WHERE nome = '$nome'";
if($conn->query($sql) == TRUE) {
    echo "Deu certo";
 }else{
     echo"error";
 }

 $conn->close();
?>