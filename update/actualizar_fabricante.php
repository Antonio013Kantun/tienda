<?php
print_r($_POST);

$nombre_fabricante = $_POST['nombre_fabricante'];
$id_fabricante = $_POST['id_fabricante'];

include('../connection/connection.php');

$consulta = " CALL p_actualizarFabricante('$nombre_fabricante', '$id_fabricante')";

$query = mysqli_query($conn,$consulta);

header('Location: ../fabricantes.php');
?>