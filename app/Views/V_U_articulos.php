<?php 
  $ID = $datos[0]['ID'];
  $codigo = $datos[0]['Codigo'];
  $descripcion = $datos[0]['Descripcion'];
  $unidad = $datos[0]['Unidad'];
  $id_plantilla = $datos[0]['ID_plantilla'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Actualizar articulo</title>
  </head>
  <body>
  <div class="container">
        <h1>Actualizar articulo</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/updateArticulo'?>">
                <label for="ID"></label>
                <input type="text" id="ID" name="ID" hidden value="<?php echo $ID?>">
                <label for="codigo">Codigo</label>
                <input type="text" name="codigo" id="codigo" class="form-control" value="<?php echo $codigo?>">
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $descripcion?>">
                <label for="unidad">Unidad</label>
                <input type="text" name="unidad" id="unidad" class="form-control" value="<?php echo $unidad?>">
                <label for="id_plantilla">ID_plantilla</label>
                <input type="number" name="id_plantilla" id="id_plantilla" class="form-control" value="<?php echo $id_plantilla?>">
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