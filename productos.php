<!doctype html>
<html lang="en">

<head>
    <title>Productos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>

        <!-- ========== Start formulario ========== -->
        <form action="insert/registro_producto.php" method="post">
            <div class="mb-3">
                <label class="form-label">Ingresa un producto</label>
                <input name="nombre_producto" type="text" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input name="precio" type="number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fabricante</label>
                <select name="id_fabricante" class="form-select" aria-label="Default select example">
                    <?php
                    include('connection/connection.php');
                    
                    $consulta =" CALL p_obtenerTablaFabricantes()";

                    // $consulta = "SELECT*FROM fabricante";

                    // PROCEDIMIENTO ALMACENADO
                    // CREATE PROCEDURE p_obtenerTablaFabricantes()
                    // BEGIN
                    //     SELECT *
                    //     FROM fabricante;
                    // END 

                    $query = mysqli_query($conn, $consulta);

                    while ($fila = mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $fila['id_fabricante']; ?>"><?php echo $fila['nombre']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <form action="" method="post">

        </form>

        <!-- ========== End formulario ========== -->

        <!-- ========== Start table ========== -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Fabricantes</th>
                    <th scope="col">Eliminar</th>
                    <th scope="col">Actualizar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('connection/connection.php');

                $consulta = "CALL p_verProductos()";

                // PROCEDIMIENTO ALMACENADO
                // CREATE DEFINER=`root`@`localhost` PROCEDURE `p_verProductos`()
                // BEGIN
                // SELECT id_producto, producto.nombre AS producto, precio, fabricante.nombre
                // AS fabricantes
                // FROM producto 
                // INNER JOIN fabricante
                // ON producto.id_fabricante_id = fabricante.id_fabricante;
                // END


                $query = mysqli_query($conn, $consulta);

                while ($fila = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $fila['id_producto']; ?>
                        </th>
                        <td>
                            <?php echo $fila['producto']; ?>
                        </td>
                        <td>
                            <?php echo $fila['precio']; ?>
                        </td>
                        <td>
                            <?php echo $fila['fabricantes']; ?>
                        </td>
                        <td>
                            <a href="delete\eliminar_producto.php?id_producto=<?php echo $fila['id_producto']; ?>">
                                <i class="bi bi-trash-fill text-danger" style="font-size: 1.5rem;"></i>
                            </a>
                        </td>
                        <td>
                            <a href="update\producto.php?id_producto=<?php echo $fila['id_producto']; ?>">
                                <i class="bi bi-pencil-square text-green" style="font-size: 1.5rem;"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <!-- ========== End table ========== -->

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
</body>

</html>