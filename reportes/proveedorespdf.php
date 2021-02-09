<?php

    //Inicio de Sesión
    session_start();
    $usu =  $_SESSION['usuario_abc'];
    if(!isset($usu)){
        header('Location: index.php');
    }
    
    require_once '../config.php';
    require_once '../clase_sql.php';

    $clase_prov = NEW Clase_sql();
    $res_prov = $clase_prov->ConsultaProveedores();

$html = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Proveedores PDF</title>
</head>
<body> 
    <div align='center'>
    <h3> PROVEEDORES <h3>
    </div>
     <table border=1 width='100%'>
       </thead>
            <tr>
               <th>
                  Cedula
               </th>
               <th>
                  Nombres y Apellidos
               </th>
               <th>
                  Direccion
               </th>
               <th>
                  Telefono
               </th>
            </tr>
       </thead>
       <tbody> "; 
            while($fila = $res_prov->fetch_assoc()){
        $html .=   "<tr>
                     <td> ". $fila['cedula'] ." </td>
                     <td> ". $fila['nombres']. ' ' . $fila['apellidos'] ." </td>
                     <td> ". $fila['direccion'] ." </td>
                     <td> ". $fila['telefono'] ." </td>
                  </tr> ";
            } 

            $html .= "</tbody>;
   </table>    
</body>
</html> ";
//Comprobar antes de enviar a PDF
//echo $html;

$archivo ="proveedosres";
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4','portrait');
$dompdf->render();
$dompdf->stream($archivo);
?>