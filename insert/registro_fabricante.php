<?php

    //print_r($_POST);

    $nombre_fabricante = $_POST['nombre_fabricante'];

    include('../connection/connection.php');

    $consulta = " CALL p_registroFabricante('$nombre_fabricante')";

    // $consulta = "INSERT INTO fabricante (nombre) VALUE ('$nombre_fabricante')";

    $query = mysqli_query($conn, $consulta);

    header('Location: ../fabricantes.php');

?>