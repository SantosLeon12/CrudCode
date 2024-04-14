<?php 
  $ID = $datos[0]['ID'];
  $nombre = $datos[0]['Nombre'];
  $correo = $datos[0]['Correo'];
  $usuario = $datos[0]['Usuario'];
  $password = $datos[0]['Password'];
  $id_sucursal = $datos[0]['ID_sucursal'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Actualizar usuario</title>
  </head>
  <body>
  <div class="container">
        <h1>Actualizar usuario</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/updateUsuario'?>">
                <label for="ID"></label>
                <input type="text" id="ID" name="ID" hidden value="<?php echo $ID?>">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre?>">
                <label for="correo">Correo</label>
                <input type="email" name="correo" id="correo" class="form-control" value="<?php echo $correo?>">
                <label for="usuario">Usuario</label>
                <input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $usuario?>">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" value="<?php echo $password?>">
                <label for="id_sucursal">ID_sucursal</label>
                <input type="number" name="id_sucursal" id="id_sucursal" class="form-control" value="<?php echo $id_sucursal?>">
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