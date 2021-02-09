<?php
    require_once 'config.php';
    require_once 'clase_sql.php';
    $clase_ins = NEW Clase_sql();
   
    $ced = $_POST['txtcedv'];
    $nom = $_POST['txtnomv'];
    $ape = $_POST['txtapev'];
    $dir = $_POST['txtdirv'];
    $tel = $_POST['txttelv'];

    //Insert Into - Clase SQL
    
    $resul =  $clase_ins->InsertProveedores($ced, $nom, $ape, $dir, $tel);

    header('Location: proveedores.php');

?>