<?php
    require_once 'config.php';
    require_once 'clase_sql.php';
    $clase_ins = NEW Clase_sql();
   
    $ced = $_POST['txtced'];
    $nom = $_POST['txtnom'];
    $ape = $_POST['txtape'];
    $dir = $_POST['txtdir'];
    $tel = $_POST['txttel'];
    
    //Insert Into - Clase SQL
    
    $resul =  $clase_ins->InsertClientes($ced, $nom, $ape, $dir, $tel);

    header('Location: clientes.php');

?>