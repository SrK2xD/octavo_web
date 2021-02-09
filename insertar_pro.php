<?php
    require_once 'config.php';
    require_once 'clase_sql.php';
    $clase_ins = NEW Clase_sql();
   
    $prod = $_POST['txtprod'];
    $prec = $_POST['txtprec'];
    $prev = $_POST['txtprev'];
    $cant = $_POST['txtcant'];
    $cate = $_POST['slcate'];
    $obse = $_POST['txtobse'];

    //Insert Into - Clase SQL
    
    $resul =  $clase_ins->InsertProducto($prod, $prec, $prev, $cant, $cate, $obse);

    header('Location: productos.php');

?>