<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Orden venta</title>
  </head>
  <body>
    <div class="container">
        <h1>CRUD Orden venta</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/createOrdenVenta'?>">
                <label for="folio">Folio</label>
                <input type="text" name="folio" id="folio" class="form-control">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" class="form-control">
                <label for="enviado_a_prod">Enviado_a_prod</label>
                <input type="text" name="enviado_a_prod" id="enviado_a_prod" class="form-control">
                <label for="id_sucursal">ID_sucursal</label>
                <input type="number" name="id_sucursal" id="id_sucursal" class="form-control">
                <label for="id_usuario">ID_usuario</label>
                <input type="number" name="id_usuario" id="id_usuario" class="form-control">
                <label for="id_cliente">ID_cliente</label>
                <input type="number" name="id_cliente" id="id_cliente" class="form-control">
                <br>
                <button class="btn btn-primary">Guardar</button> 
                </form>
            </div>
        </div>
        <hr>
        <h2>Lista de orden venta</h2>
        <div class="row">
            <div class="col-sm-12">
                <div class="table table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Id</th>
                            <th>Folio</th>
                            <th>Titulo</th>
                            <th>Fecha_creacion</th>
                            <th>Enviado</th>
                            <th>ID_sucursal</th>
                            <th>Nombre_sucursal</th>
                            <th>ID_usuario</th>
                            <th>Nombre_usuario</th>
                            <th>ID_cliente</th>
                            <th>RZ_cliente</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                            <?php foreach($datos as $key):?>
                                <tr>
                                    <td><?php echo $key->ID?></td>
                                    <td><?php echo $key->Folio?></td>
                                    <td><?php echo $key->Titulo?></td>
                                    <td><?php echo $key->Fecha_creacion?></td>
                                    <td><?php echo $key->Enviado_a_prod?></td>
                                    <td><?php echo $key->ID_sucursal?></td>
                                    <td><?php echo $key->NombreSucursal?></td> <!-- Aquí se muestra la Razon_social de la empresa -->
                                    <td><?php echo $key->ID_usuario?></td>
                                    <td><?php echo $key->NombreUsuario?></td>
                                    <td><?php echo $key->ID_cliente?></td>
                                    <td><?php echo $key->RazonSocialCliente?></td>
                                    <td><a href="<?php echo base_url().'/obtenerOrdenVenta/'.$key->ID?>" class="btn btn-warning btn-sm">Editar</a></td>
                                    <td><a href="<?php echo base_url().'/deleteOrdenVenta/'.$key->ID?>" class="btn btn-danger btn-sm">Eliminar</a></td>
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