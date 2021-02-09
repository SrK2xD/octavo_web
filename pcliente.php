<?php
    require_once 'config.php';
    require_once 'clase_sql.php';

    $clase_cli = NEW Clase_sql();
    $res = $clase_cli->ConsultaClientes();
?>
<table border = 1>
   <thead>
       <tr>
           <th> CEDULA </th>
           <th> APELLIDOS Y NOMBRES </th>
           <th> DIRECCION </th>
           <th> TELEFONO </th>
        </tr>
   </thead>
   <tbody>
       <?php while($fila = $res->fetch_assoc()){?>
       <tr>
         <td> <?php echo $fila['cedula']; ?> </td>
         <td> <?php echo $fila['apellidos']. ' ' . $fila['nombres']; ?> </td>
         <td> <?php echo $fila['direccion']; ?> </td>
         <td> <?php echo $fila['telefono']; ?> </td>
       </tr>  
       <?php } ?>
   </tbody>
</table>