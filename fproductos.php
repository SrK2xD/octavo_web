<?php
    require_once 'config.php';
    require_once 'clase_sql.php';

    $clase_cat = NEW Clase_sql();
    $res = $clase_cat->ConsultaCategorias();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>INGRESAR PRODUCTOS</title>
</head>
<body>
    <form action="insertar_cli.php" method="post" name="form1">
        <div>
        <label for=""> Producto: </label>
        <input type="text" name="txtprod" id="txtprod">
        </div>

        <div>
        <label for=""> Precio Compra: </label>
        <input type="text" name="txtprec" id="txtprec">
        </div>

        <div>
        <label for=""> Precio Venta: </label>
        <input type="text" name="txtprev" id="txtprev">
        </div>

        <div>
        <label for=""> Cantidad: </label>
        <input type="text" name="txtcant" id="txtcant">
        </div>

        <div>
        <label for=""> Categoria: </label>
        <select name="slcate" id="slcate">
                <?php 
                    while($fila = $res->fetch_assoc()){
                        echo "<option value=". $fila['codigo'] .">".
                        $fila['descripcion'] ."</option>";
                    } 
                ?>  
            </select>
        </div>

        <div>
        <label for=""> Observacion: </label>
        <input type="text" name="txtobse" id="txtobse">
        </div>
        
        <div>   
        <input type="submit" name="Enviar" id="btnenvi">
        </div>

    </form>
</body>
</html>