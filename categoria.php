<?php
    //Inicio de Sesión
    session_start();
    $usu =  $_SESSION['usuario_abc'];
    if(!isset($usu)){
        header('Location: index.php');
    }
    
    require_once 'config.php';
    require_once 'clase_sql.php';

    $clase_cat = NEW Clase_sql();
    $res_cat = $clase_cat->ConsultaCategorias(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Consulta de Categoria </title>
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
                    CONSULTA CATEGORIA   
                    </div>  
                        <div class="col-md-6 text-right"> 
                            <button type="button" class="btn btn-danger" data-toggle='modal' data-target="#ventana2"> Nueva Categoria </button>
                        </div> 
            </div>

        <div class="card-body">
            <table class="table table-striped table-hover table-bordered" id="dtcategoria">
            <thead>
                <tr>
                    <th> CODIGO </th>
                    <th> DESCRIPCION </th>
                </tr>
            </thead>
        <tbody> 
            <?php while($fila = $res_cat->fetch_assoc()){?>
                <tr>
                    <td> <?php echo $fila['codigo']; ?> </td>
                    <td> <?php echo $fila['descripcion']; ?> </td>
                </tr>  
            <?php } ?>
        </tbody>
    </table>
        </div>
    </div>
            
    <!-- Formulario -->


</div>

<!-- Ventana Modal -->
    <div class="modal fade" id="ventana2">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <form action="insertar_cat.php" method="post" name="form1">
                <div class="modal-header">
                    <h3 class="modal-title"> CATEGORIA  </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    
                    
                        <div class="form-group row">
                            <label for="txtcodcat" class="col-md-3 col-form-label" > Codigo Categoria: </label>
                            <div class="col-md-5">
                                <input type="text" name="txtcodcat" id="txtcodcat" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="txtdescat" class="col-md-3 col-form-label"> Descripcion: </label>
                            <div class="col-md-9">
                                <input type="text" name="txtdescat" id="txtdescat" class="form-control">
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
            $('#dtcategoria').dataTable({
                "language":{ "url":"js/Spanish.json" }
            });
        });
    </script>