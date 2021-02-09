<?php
    require_once 'config.php';
    require_once 'clase_sql.php';

    $clase_cli = NEW Clase_sql();
    $res = $clase_pro->ConsultaProductos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Consulta de Productos </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container">

   <div class="card">
        <div class="card-header">
            CONSULTA DE PRODUCTO        
        </div>
        
        <div class="card-body">
            <table class="table table-striped table-hover table-bordered">
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
            <td> <?php echo $fila['descripcion']; ?> </td>
            <td> <?php echo $fila['precioc']; ?> </td>
            <td> <?php echo $fila['preciov']; ?> </td>
            <td> <?php echo $fila['cantidad']; ?> </td>
            <td> <?php echo $fila['observacion']; ?> </td>
            <td> <?php echo $fila['codigo_cant']; ?> </td>
        </tr>  
        <?php } ?>
    </tbody>
    </table>
        </div>

   </div>

</div>
   </body>
</html>

<script src="js/bootstrap.min.js"></script>
