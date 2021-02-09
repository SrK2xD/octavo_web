<?php
    define('HOST', 'localhost');
    define('USER', 'usu_octavo');
    define('PASS', '12345678');
    define('BD', 'bdventass');

    $con =mysqli_connect(HOST, USER, PASS, BD) or die ('Error de conexión');


?>