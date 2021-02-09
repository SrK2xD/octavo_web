<?php
    //Inicio de Sesión
    session_start();
    $_SESSION['usuario_abc'] = array();
    session_destroy();
    header('Location: index.php');
  
?>