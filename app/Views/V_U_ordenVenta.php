<?php 
  $ID = $datos[0]['ID'];
  $folio = $datos[0]['Folio'];
  $titulo = $datos[0]['Titulo'];
  $fecha_creacion = $datos[0]['Fecha_creacion'];
  $enviado_a_prod = $datos[0]['Enviado_a_prod'];
  $id_sucursal = $datos[0]['ID_sucursal'];
  $id_usuario = $datos[0]['ID_usuario'];
  $id_cliente = $datos[0]['ID_cliente'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Actualizar orden venta</title>
  </head>
  <body>
  <div class="container">
        <h1>Actualizar orden venta</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/updateOrdenVenta'?>">
                <label for="ID"></label>
                <input type="text" id="ID" name="ID" hidden value="<?php echo $ID?>">
                <label for="folio">Folio</label>
                <input type="text" name="folio" id="folio" class="form-control" value="<?php echo $folio?>">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo $titulo?>">
                <label for="fecha_creacion">Fecha_creacion</label>
                <input type="text" name="fecha_creacion" id="fecha_creacion" class="form-control" value="<?php echo $fecha_creacion?>" readonly>
                <label for="enviado_a_prod">Enviado_a_prod</label>
                <input type="text" name="enviado_a_prod" id="enviado_a_prod" class="form-control" value="<?php echo $enviado_a_prod?>">
                <label for="id_sucursal">ID_sucursal</label>
                <input type="number" name="id_sucursal" id="id_sucursal" class="form-control" value="<?php echo $id_sucursal?>">
                <label for="id_usuario">ID_usuario</label>
                <input type="number" name="id_usuario" id="id_usuario" class="form-control" value="<?php echo $id_usuario?>">
                <label for="id_cliente">ID_cliente</label>
                <input type="number" name="id_cliente" id="id_cliente" class="form-control" value="<?php echo $id_cliente?>">
                <br>
                <button class="btn btn-warning">Actualizar</button> 
                </form>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>