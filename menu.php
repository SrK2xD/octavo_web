<?php
   //Inicio de Sesión

   session_start();
   $usu =  $_SESSION['usuario_abc'];
   if(!isset($usu)){
       header('Location: index.php');
   }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="color1"> menu </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href=".css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="color">
    
    <header >
    <!-- 
        <a class="lg"> TIENDA ONLINE  </a>
        <a class="lg" > <//?php echo $usu;?> </a>
        <nav class="menu">
        <a href="#" class="nv">REPORTES</a>
        <a href="categoria.php" class="nv">CATEGORIA</a>
        <a href="clientes.php" class="nv">CLIENTE</a>
        <a href="productos.php" class="nv">PRODUCTOS</a>
        <a href="proveedores.php" class="nv">PROVEEDORES</a>
        <a href="cerrar_sesion.php" class="nv">SALIR</a>
        </nav>
        -->
        <div >
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"> Tienda </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item" >
                        <a class="nav-link" > <?php echo $usu;?> </a>
                    </li>
                </ul>
                
                
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Resportes </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="reportes/categoriapdf.php">Categoria PDF</a>
                            <a class="dropdown-item" href="reportes/clientepdf.php">Clientes PDF</a>
                            <a class="dropdown-item" href="reportes/productopdf.php">Productos PDF</a>
                            <a class="dropdown-item" href="reportes/proveedorespdf.php">Proveedores PDF</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="categoria.php"> Categoria </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clientes.php"> Cliente </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos.php"> Producto </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="proveedores.php"> Proveedores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cerrar_sesion.php" > Cerrar Sesion </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    </header>

<main class="page-container">
    <article class="page">

        <img src="img/ventas.png" alt="ventas" width="700" class="featured-image" >

        <h2> MISIÓN </h2>

        <p>En el 2021 sea una de las empresas líder en el mercado online. Vamos a desarrollar un 
        canal fuerte de ventas por medio de nuestra Tienda Virtual, con los mejores productos,
         en la que encontrarás nuestro apoyo y la solución, de una manera fácil, cómoda y segura, 
         buscando constantemente nuevas alternativas, basados en el conocimiento profundo de las 
         necesidades de nuestra distinguida clientela.</p>
         
         <h2> VISION </h2>

         <p>Buscar satisfacer las necesidades de compra que tenemos todos, a través de bienes de 
         excelencia, originalidad y calidad. Nuestro modelo de negocio se basa en procesos de comercio 
         electrónico, seguros y eficientes. Contamos con un equipo de trabajo altamente capacitado,
         con la mejor aptitud de servicio, sentido de la responsabilidad y ética, que busca dar un
         buen servicio y de calidad en el mejor tiempo posible. La innovación constante nos permite 
         llegar al cliente con eficiencia.</p>
    </article>
</main>

</body>
</html>
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>