<?php
    //print_r($_GET);

    $id_fabricante = $_GET['id_fabricante'];

    include('../connection/connection.php');

    $consulta = "CALL p_eliminarFabricante($id_fabricante)";



    // PROCEDIMIENTO ALMACENADO

    // CREATE DEFINER=`root`@`localhost` PROCEDURE `p_eliminarFabricante`(IN fabricante_id INT)
    // BEGIN
    // DELETE FROM fabricante
    // WHERE id_fabricante = fabricante_id;
    // END

    $query = mysqli_query($conn,$consulta);

    header('Location: ../fabricantes.php');
?>