<?php
    //print_r($_GET);

    $id_producto = $_GET['id_producto'];

    include('../connection/connection.php');

    $consulta = " CALL p_eliminarProducto('$id_producto')";

    // PROCEDIMIENTO ALMACENADO
    // CREATE DEFINER=`root`@`localhost` PROCEDURE `p_eliminarProducto`(IN producto_id INT)
    // BEGIN
    // DELETE FROM producto
    // WHERE id_producto = producto_id;
    // END

    $query = mysqli_query($conn,$consulta);

    header('Location: ../productos.php');



    // $consulta = "DELETE FROM producto
    // WHERE id_producto = '$id_producto'";
?>