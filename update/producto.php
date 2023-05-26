<!doctype html>
<html lang="en">

<head>
  <title>producto</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>


  <?php
print_r($_POST);

$id_producto = $_GET['id_producto'];

include('../connection/connection.php');
// $consulta = "SELECT * FROM producto WHERE id_producto = '$id_producto'";
// $query = mysqli_query($conn, $consulta);

$consulta2 = "SELECT id_producto,producto.nombre, precio,id_fabricante_id, fabricante.nombre
    AS fabricante
    FROM producto
    INNER JOIN fabricante
    ON producto.id_fabricante_id = fabricante.id_fabricante WHERE id_producto = '$id_producto'";
$query2 = mysqli_query($conn, $consulta2);

// $fila = mysqli_fetch_array($query)
$fila2 = mysqli_fetch_array($query2);

  ?>


       <!-- ========== Start formulario ========== -->
       <form action="actualizar_producto.php" method="post">
            <div class="mb-3">
                <label class="form-label">Ingresa un producto</label>
                <input name="nombre_producto" value="<?php echo $fila2['nombre']?>" type="text" class="form-control" required>
            </div>                                  
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input name="precio" value="<?php echo $fila2['precio']?>" type="number" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Fabricante</label>
                <select name="id_fabricante" class="form-select" aria-label="Default select example">
                    <?php
                    include('connection/connection.php');

                    $consulta = "SELECT*FROM fabricante";
                    $query = mysqli_query($conn, $consulta);

                    while ($fila = mysqli_fetch_array($query)) {
                        ?>
                        <option value="<?php echo $fila['id_fabricante']; ?>"><?php echo $fila['nombre']; ?></option>
                    <?php } ?>
                </select>  
            </div>
            <input type="hidden" name="id_producto" value="<?php echo$fila2['id_producto']?>">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>

        <form action="" method="post">

        </form>
    
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