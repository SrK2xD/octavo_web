<?php
    //Inicio de Sesión

    /*session_start();
    if(isset($_SESSION['usuario_abc'])){
        header('Location: menu.php');
    }

    require_once 'config.php';
    require_once 'clase_sql.php';
    $clase_login = NEW Clase_sql();*/
   
   // $res = $clase_login->ConsultaLogin();
   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Acceso al Sistema </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-xs-12 col-sm-8 col-md-6 col-lg-4 ml-auto mr-auto">
            <div class="col-12 border border-info shadow">
                <div class="text-center">
                    <img src="img/logo.jpeg" class="rounded-circle border p-1" width=150 alt="">
                </div>
                <form action="" method="post" name="frmlogin">
                    <div class="form-group">
                        <label for="txtusu" class="col-md-12 col-form-label text-center" > Usuario: </label>
                        <div class="col-md-12">
                            <input type="text" name="txtusu" id="txtusu" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtcla" class="col-md-12 col-form-label text-center" > Clave: </label>
                        <div class="col-md-12">
                            <input type="password" name="txtcla" id="txtcla" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-block" name="btnenvi" > Enviar </button>
                        </div>
                    </div>
                
                </form>

            </div>
        </div>
    </div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="js/jquery-3.5.1.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php

    if($_POST){
        $usu = $_POST['txtusu'];
        $cla = $_POST['txtcla'];
        $res = $clase_login->ConsultaLogin($usu, $cla);

        if($res->num_rows>0){
            //Clave Correcta
            //Variable Sesion
            $_SESSION['usuario_abc'] = $usu;
            

            header('Location: menu.php');
        }else{ ?>
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Acceso',
                    text: 'Usuario/Clave Incorrecta'
                })
                
            </script>
        <?php
        }
    }

?>
