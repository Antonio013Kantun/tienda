<?php
    //print_r($_GET);

    $id_producto = $_GET['id_producto'];

    include('../connection/connection.php');

    $consulta = " CALL p_eliminarProducto('$id_producto')";

    $query = mysqli_query($conn,$consulta);

    header('Location: ../productos.php');



    // $consulta = "DELETE FROM producto
    // WHERE id_producto = '$id_producto'";
?>