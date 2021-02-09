<?php
    //Inicio de Sesión
    session_start();
    $usu =  $_SESSION['usuario_abc'];
    if(!isset($usu)){
        header('Location: index.php');
    }

    require_once 'config.php';
    require_once 'clase_sql.php';

    $clase_pro = NEW Clase_sql();
    $res = $clase_pro->ConsultaProductos();

    $res_cat = $clase_pro->ConsultaCategorias();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Consulta de Productos </title>
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
                CONSULTA DE PRODUCTO     
            </div>  
                  <div class="col-md-6 text-right"> 
                      <button type="button" class="btn btn-danger" data-toggle='modal' data-target="#ventana1"> Nuevo Producto </button>
                  </div> 
        </div>
        
        <div class="card-body">
            <table class="table table-striped table-hover table-bordered" id="dtproducto">
            <thead>
                <tr>
                    <th> CODIGO </th>
                    <th> PRODUCTOS </th>
                    <th> PRECIO COMPRA </th>
                    <th> PRECIO VENTA </th>
                    <th> CANTIDAD </th>
                    <th> OBSERVACION </th>
                    <th> CATEGORIA </th>
                </tr>
            </thead>
        <tbody> 
            <?php while($fila = $res->fetch_assoc()){?>
                <tr>
                    <td> <?php echo $fila['codigo']; ?> </td>
                    <td> <?php echo $fila['Productos']; ?> </td>
                    <td> <?php echo $fila['precioc']; ?> </td>
                    <td> <?php echo $fila['preciov']; ?> </td>
                    <td> <?php echo $fila['cantidad']; ?> </td>
                    <td> <?php echo $fila['observacion']; ?> </td>
                    <td> <?php echo $fila['Categoria']; ?> </td>
                </tr>  
            <?php } ?>
        </tbody>
    </table>
        </div>
    </div>
            
    <!-- Formulario -->
   
</div>

<!-- Ventana Modal -->
    <div class="modal fade" id="ventana1">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
            
            <form action="insertar_pro.php" method="post" name="form1">
                <div class="modal-header">
                    <h3 class="modal-title"> PRODUCTOS  </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"> &times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    
                    <div class="form-group row">
                        <label for="txtprod" class="col-md-2 col-form-label" > Producto: </label>
                        <div class="col-md-5">
                            <input type="text" name="txtprod" id="txtprod" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtprec" class="col-md-2 col-form-label"> Precio Compra: </label>
                        <div class="col-md-4">
                            <input type="text" name="txtprec" id="txtprec" class="form-control">
                        </div>
                        
                        <label for="txtprev" class="col-md-2 col-form-label"> Precio Venta: </label>
                        <div class="col-md-4">
                            <input type="text" name="txtprev" id="txtprev" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtcant" class="col-md-2 col-form-label"> Cantidad: </label>
                        <div class="col-md-3 ">
                            <input type="text" name="txtcant" id="txtcant" class="form-control">
                        </div>
                        
                    
                        <label for="slcate" class="col-md-2 col-form-label"> Categoria: </label>
                        <div class="col-md-5">
                        <select name="slcate" id="slcate" class="form-control">
                            <?php 
                                while($fila = $res_cat->fetch_assoc()){
                                    echo "<option value=". $fila['codigo'] .">".
                                    $fila['descripcion'] ."</option>";
                                } 
                            ?>  
                        </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="txtobse" class="col-md-2 col-form-label"> Observacion: </label>
                        <div class="col-md-10">
                        <input type="text" name="txtobse" id="txtobse" class="form-control">
                        </div>
                    </div>
                
                    <div>   
                       
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
            $('#dtproducto').dataTable({
                "language":{ "url":"js/Spanish.json" }
            });
        });
    </script>