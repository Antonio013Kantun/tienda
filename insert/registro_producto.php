<?php
    print_r($_POST);

    $nombre_producto = $_POST['nombre_producto'];
    $precio = $_POST['precio'];
    $id_fabricante = $_POST['id_fabricante'];

    include('../connection/connection.php');

    $consulta = " CALL p_registroProducto('$nombre_producto', '$precio', '$id_fabricante')";
    // $consulta = "INSERT INTO producto (nombre,precio,id_fabricante_id)
    // VALUE ('$nombre_producto ','$precio','$id_fabricante')";


    // PROCEDIMIENTO ALMACENADO
    // CREATE DEFINER=`root`@`localhost` PROCEDURE `p_registroProducto`(IN nombre_producto VARCHAR(50) ,IN precio DOUBLE, IN id_fabricante INT)
    // BEGIN 
    // INSERT INTO producto (nombre,precio,id_fabricante_id)
    // VALUE (nombre_producto ,precio,id_fabricante);
    // END

    $query = mysqli_query($conn,$consulta);

    header('Location: ../productos.php');
?>