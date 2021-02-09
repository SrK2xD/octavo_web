<?php
   class Clase_sql{
       //atributo
       private $bd;
       //constructor
       public function __construct(){
           $this->bd = new mysqli(HOST, USER, PASS, BD);

       }
       public function ConsultaClientes(){
           $resultado = $this->bd->query('SELECT * FROM clientes');
           return $resultado;
       }

       public function ConsultaCategorias(){
           $resultado = $this->bd->query('SELECT * FROM categoria');
           return $resultado;
       }
       public function ConsultaProductos(){
           $resultado = $this->bd ->query('SELECT * FROM vista_productos');
           return $resultado;
       }
       public function ConsultaProveedores(){
           $resultado = $this->bd->query('SELECT * FROM proveedores');
           return $resultado;
       }
       public function InsertProducto($pro, $prc, $prv, $can, $cat, $obs){
           //Base de datos poner auto incremento para que funcione el valor 0
            $resultado = $this->bd->query("INSERT INTO productos
            (codigo, descripcion, precioc, preciov, cantidad, observacion, codigo_cant) 
            VALUES(0, '$pro', '$prc', '$prv', '$can', '$obs', '$cat')");
            return true;
       }
       public function InsertCategoria($cod, $descrip){
           //Base de datos
           $resultado = $this->bd->query("INSERT INTO categoria
           VALUE('$cod', '$descrip')");
           return true;
       }
       public function InsertProveedores($ced, $nom, $ape, $dir, $tel){
           //Base de datos
           $resultado = $this->bd->query("INSERT INTO proveedores
         
           VALUE('$ced', '$nom', '$ape', '$dir', '$tel')");
           return true;
       }
       public function InsertClientes($ced, $nom, $ape, $dir, $tel){
           //Base de datos
           $resultado = $this->bd->query("INSERT INTO clientes
           VALUE('$ced', '$nom', '$ape', '$dir', '$tel')");
           return true;
       }
       public function ConsultaLogin($usu1, $cla1){
           $resultado = $this->bd->query(" SELECT * FROM usuarios 
           WHERE usuario ='$usu1' AND clave='$cla1' AND estado=1 ");
           return $resultado;
       }

   }
?>