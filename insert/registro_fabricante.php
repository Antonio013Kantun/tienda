<?php

    //print_r($_POST);

    $nombre_fabricante = $_POST['nombre_fabricante'];

    include('../connection/connection.php');

    $consulta = " CALL p_registroFabricante('$nombre_fabricante')";

    // $consulta = "INSERT INTO fabricante (nombre) VALUE ('$nombre_fabricante')";


    // PROCEDIMIENTO ALMACENADO
    // CREATE DEFINER=`root`@`localhost` PROCEDURE `p_registroFabricante`(IN nombre_fabricante VARCHAR(50))
    // BEGIN 
    // INSERT INTO fabricante (nombre) VALUE (nombre_fabricante);
    // END

    $query = mysqli_query($conn, $consulta);

    header('Location: ../fabricantes.php');

?>