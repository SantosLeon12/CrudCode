<?php 
  $ID = $datos[0]['ID'];
  $razon_social = $datos[0]['Razon_social'];
  $rfc = $datos[0]['Rfc'];
  $contacto = $datos[0]['Contacto'];
  $direccion = $datos[0]['Direccion'];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Actualizar cliente</title>
  </head>
  <body>
  <div class="container">
        <h1>Actualizar cliente</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/updateCliente'?>">
                <label for="ID"></label>
                <input type="text" id="ID" name="ID" hidden value="<?php echo $ID?>">
                <label for="razon_social">Razon_social</label>
                <input type="text" name="razon_social" id="razon_social" class="form-control" value="<?php echo $razon_social?>">
                <label for="rfc">RFC</label>
                <input type="text" name="rfc" id="rfc" class="form-control" value="<?php echo $rfc?>">
                <label for="contacto">Contacto</label>
                <input type="text" name="contacto" id="contacto" class="form-control" value="<?php echo $contacto?>">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" id="direccion" class="form-control" value="<?php echo $direccion?>">
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