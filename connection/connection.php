<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "tienda";

$conn = new mysqli($hostname,$username,$password,$database);

if($conn -> connect_error){
    die("Error de conexión a la base de datos".$conn->connect_errno);
}

// echo "Conexión exitosa";

// $conn -> close();

?>