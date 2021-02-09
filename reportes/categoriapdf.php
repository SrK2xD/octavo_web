<?php
    //Inicio de Sesión
    session_start();
    $usu =  $_SESSION['usuario_abc'];
    if(!isset($usu)){
        header('Location: index.php');
    }

    require_once '../config.php';
    require_once '../clase_sql.php';

    $clase_cat = NEW Clase_sql();
    $res_cat = $clase_cat->ConsultaCategorias(); 

$html = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title> Categoria PDF</title>
    
</head>
<body> 
    <div align='center'>
    <h3> CATEGORIA <h3>
    </div>
     <table border=1 width='100%'>
       </thead>
            <tr>
              <th>
                 Codigo
              </th>
              <th>
                 Descripcion
              </th>
            </tr>
       </thead>
       <tbody> "; 
            while($fila = $res_cat->fetch_assoc()){
        $html .=   "<tr>
                    <td> ". $fila['codigo'] ." </td>
                    <td> ". $fila['descripcion'] ." </td>
                </tr> ";
            } 

            $html .= "</tbody>;
   </table>    
</body>
</html> ";
//Comprobar antes de enviar a PDF
//echo $html;

$archivo ="categoria";
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4','portrait');
$dompdf->render();
$dompdf->stream($archivo);
?>