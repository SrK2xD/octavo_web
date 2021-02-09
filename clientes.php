<?php

    //Inicio de Sesión
    session_start();
    $usu =  $_SESSION['usuario_abc'];
    if(!isset($usu)){
        header('Location: index.php');
    }
    
    require_once 'config.php';
    require_once 'clase_sql.php';

    $clase_cli = NEW Clase_sql();
    $res_cli = $clase_cli->ConsultaClientes();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Consulta Cliente </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    
    <link rel="stylesheet" href=".css">

</head>
<body>

<div class="container">

   <div class="card">
        <div class="card-header">
            <div class="form-group row"> 
                    <div class="col-md-6">         
                        CONSULTA CLIENTES 
                    </div>  
                        <div class="col-md-6 text-right"> 
                            <button type="button" class="btn btn-danger" data-toggle='modal' data-target="#ventana4"> Nuevo Cliente </button>
                        </div> 
            </div>
        
        <div class="card-body">
            <table class="table table-striped table-hover table-bordered" id="dtclientes">
            <thead>
                <tr>
                    <th> CEDULA </th>
                    <th> NOMBRES Y APELLIDOS </th>
                    <th> DIRECCION </th>
                    <th> TELEFONO </th>
                </tr>
            </thead>
        <tbody> 
            <?php while($fila = $res_cli->fetch_assoc()){?>
                <tr>
                    <td> <?php echo $fila['cedula']; ?> </td>
                    <td> <?php echo $fila['nombres']. ' ' . $fila['apellidos']; ?> </td>
                    <td> <?php echo $fila['direccion']; ?> </td>
                    <td> <?php echo $fila['telefono']; ?> </td>
                </tr>  
            <?php } ?>
        </tbody>
    </table>
        </div>
    </div>
            
    <!-- Formulario -->
    
</div>

<!-- Ventana Modal -->
    <div class="modal fade" id="ventana4">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
            <form action="insertar_cli.php" method="post" name="form1">
                <div class="modal-header">
                    <h3 class="modal-title"> CLIENTE  </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    

                    <div class="form-group row">
                        <label for="txtced" class="col-md-2 col-form-label" > Cédula: </label>
                        <div class="col-md-5">
                            <input type="text" name="txtced" id="txtced" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtnom" class="col-md-2 col-form-label"> Nombres: </label>
                        <div class="col-md-4">
                            <input type="text" name="txtnom" id="txtnom" class="form-control">
                        </div>
                        
                        <label for="txtape" class="col-md-2 col-form-label"> Apellidos: </label>
                        <div class="col-md-4">
                            <input type="text" name="txtape" id="txtape" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtdir" class="col-md-2 col-form-label"> Dirección: </label>
                        <div class="col-md-10 ">
                            <input type="text" name="txtdir" id="txtdir" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txttel" class="col-md-2 col-form-label"> Teléfono: </label>
                        <div class="col-md-10">
                        <input type="text" name="txttel" id="txttel" class="form-control">
                        </div>
                    </div>
                

               
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">  Cerrar   </button>
                    <button type="submit" class="btn btn-primary" name="Enviar" id="btnenvi"> Enviar </button>
                </div>
                </form>
            </div>
        </div>
    </div>
    

        

</body>
</html>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#dtclientes').dataTable({
                "language":{ "url":"js/Spanish.json" }
            });
        });
    </script>