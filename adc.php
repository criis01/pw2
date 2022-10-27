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
$idade = $_POST["idade"];
$renda = $_POST["renda"];



$sql = "INSERT INTO verde (nome, idade, renda) VALUES ('$nome',$idade,$renda)";

if($conn->query($sql) == TRUE) {
   echo "Deu certo";
}else{
    echo"error";
}
$sql = "SELECT nome, idade, renda FROM verde";
$result = $conn->query($sql);
if($result->num_rows >0){
    while($row = $result->fetch_assoc()){
        echo "nome: " . $row["nome"]. " " . "idade: " . $row["idade"] . " " . "renda: " . $row["renda"] . "</br>";
    }
} else{
    echo "0 results";
}

$conn->close();
?>

