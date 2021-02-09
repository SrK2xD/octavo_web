<?php
    require_once 'config.php';
    require_once 'clase_sql.php';
    $clase_ins = NEW Clase_sql();
   
    $cod = $_POST['txtcodcat'];
    $descrip = $_POST['txtdescat'];
    
    //Insert Into - Clase SQL
    
    $resul =  $clase_ins->InsertCategoria($cod, $descrip);

    header('Location: categoria.php');

?>