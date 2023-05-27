<?php
print_r($_POST);

$nombre_fabricante = $_POST['nombre_fabricante'];
$id_fabricante = $_POST['id_fabricante'];

include('../connection/connection.php');

$consulta = " CALL p_actualizarFabricante('$nombre_fabricante', '$id_fabricante')";


// PROCEDIMIENTO ALMACENADO

// CREATE DEFINER=`root`@`localhost` PROCEDURE `p_actualizarFabricante`( 
//     IN nombre_fabricante VARCHAR(50), IN fabricante_id INT)
//     BEGIN 
//     UPDATE fabricante SET nombre = nombre_fabricante 
//     WHERE id_fabricante = fabricante_id;
//     END

$query = mysqli_query($conn,$consulta);

header('Location: ../fabricantes.php');
?>