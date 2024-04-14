<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Clientes</title>
  </head>
  <body>
    <div class="container">
        <h1>CRUD Clientes</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/createCliente'?>">
                <label for="razon_social">Razon_social</label>
                <input type="text" name="razon_social" id="razon_social" class="form-control">
                <label for="rfc">RFC</label>
                <input type="text" name="rfc" id="rfc" class="form-control">
                <label for="contacto">Contacto</label>
                <input type="text" name="contacto" id="contacto" class="form-control">
                <label for="direccion">Direccion</label>
                <input type="text" name="direccion" id="direccion" class="form-control">
                <br>
                <button class="btn btn-primary">Guardar</button> 
                </form>
            </div>
        </div>
        <hr>
        <h2>Lista de empresas</h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="table table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Razon_social</th>
                            <th>RFC</th>
                            <th>Contacto</th>
                            <th>Direccion</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                            <?php foreach($datos as $key):?>
                                <tr>
                                    <td><?php echo $key->ID?></td>
                                    <td><?php echo $key->Razon_social?></td>
                                    <td><?php echo $key->Rfc?></td>
                                    <td><?php echo $key->Contacto?></td>
                                    <td><?php echo $key->Direccion?></td>
                                    <td><a href="<?php echo base_url().'/obtenerCliente/'.$key->ID?>" class="btn btn-warning btn-sm">Editar</a></td>
                                    <td><a href="<?php echo base_url().'/deleteCliente/'.$key->ID?>" class="btn btn-danger btn-sm">Eliminar</a></td>
                                </tr>
                            <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        let mensaje = '<?php echo $mensaje?>';
        if(mensaje == '1'){
            swal(':D','Agregado con exito','success');
        }else if(mensaje == '0'){
            swal(':(','Fallo al agregar','error');
        }
        else if(mensaje == '2'){
            swal(':D','Actualizado con exito','success');
        }
        else if(mensaje == '3'){
            swal(':(','Fallo al actualizar','error');
        }
        else if(mensaje == '4'){
            swal(':D','Eliminado con exito','success');
        }
        else if(mensaje == '5'){
            swal(':(','Fallo al eliminar','error');
        }
    </script>

  </body>
</html>