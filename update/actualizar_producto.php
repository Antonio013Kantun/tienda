<?php
print_r($_POST);

$nombre_producto = $_POST['nombre_producto'];
$precio = $_POST['precio'];
$id_fabricante = $_POST['id_fabricante'];
$id_producto = $_POST['id_producto'];

include('../connection/connection.php');

$consulta = " CALL p_actualizarProducto('$nombre_producto', '$precio', '$id_fabricante', '$id_producto')";


// $consulta = "UPDATE producto SET nombre = '$nombre_producto', 
// precio = '$precio', id_fabricante_id = '$id_fabricante' WHERE id_producto = '$id_producto'";



// PROCEDIMIENTO ALMACENADO
// CREATE DEFINER=`root`@`localhost` PROCEDURE `p_actualizarProducto`(
//     IN nombre_producto VARCHAR(50), IN precio DOUBLE, IN id_fabricante INT, IN producto_id INT)
//     BEGIN 
//     UPDATE producto SET nombre = nombre_producto, precio = precio, id_fabricante_id = id_fabricante
//     WHERE id_producto = producto_id;
//     END

$query = mysqli_query($conn, $consulta);

header('Location: ../productos.php');
?>