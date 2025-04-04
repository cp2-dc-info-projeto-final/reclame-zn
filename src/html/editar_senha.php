

<?php
   include __DIR__ . '/../php/usuario.php';

   $user = new usuario();
    
   $dados = $user->get();


        if(isset($_GET['id'])){
            $dados = $user->get($_GET['id']);
        }
     
        //VERIFICA SE ESTÁ ABRINDO A PÁGINA VIA MÉTODO POST (QUANDO APERTA NO BOTÃO REGISTRAR)
        if(isset($_POST['registrar'])){
            //RECEBE OS DADOS DO FORMULÁRIO
            $senha = $_POST['senha'];
            $email = $_POST['email'];
            $email_confirmacao = $_POST['email_confirm'];


            //VERIFICA SE O CAMPO SENHA ESTÁ VAZIO
            if(empty($senha)){
                echo "A senha é obrigatória!";
            }

            //INCLUI A CLASSE SQL NO CÓDIGO
            include __DIR__."/../sql/sql.php";
            $sql = new Sql();

            $atualiza_dados = "UPDATE tb_usuarios SET senha = :senha WHERE id = :id" ;
            $sql->QuerySQL($atualiza_dados, array(
                
                ":senha" => password_hash($senha, PASSWORD_DEFAULT),
                ":id" => $_POST['id']
            ));
            header("Location: dashboard.php");
            exit;
        }


?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>RECLAMEZN - LOGIN</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="https://colorlib.com/etc/lf/Login_v14/images/icons/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v14/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v14/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v14/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v14/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v14/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v14/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v14/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v14/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v14/css/util.css">
    <link rel="stylesheet" type="text/css" href="https://colorlib.com/etc/lf/Login_v14/css/main.css">
<meta name="robots" content="noindex, follow">
</head>


<body>
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
         <form class="login100-form validate-form flex-sb flex-w" action="editar_senha.php" method="post">
                    <span class="login100-form-title p-b-32">  Atualizar Senha</span>

                    
                    <div class="wrap-input100 validate-input m-b-36" data-validate="A senha é necessária">
                    <input class="input100" type="text" name="senha" value="" >
                        <span class="focus-input100"></span>
                    </div>

                    <input type="hidden" name="id" value="<?php echo $dados['id'] ?>" >


                    


                <div class="container-login100-form-btn">
                   <button class="login100-form-btn" type="submit" name="registrar">Atualizar</button>
                </div>
         </form>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>

<script src="https://colorlib.com/etc/lf/Login_v14/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v14/vendor/animsition/js/animsition.min.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v14/vendor/bootstrap/js/popper.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v14/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v14/vendor/select2/select2.min.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v14/vendor/daterangepicker/moment.min.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v14/vendor/daterangepicker/daterangepicker.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v14/vendor/countdowntime/countdowntime.js"></script>
<script src="https://colorlib.com/etc/lf/Login_v14/js/main.js"></script>

</body>
</html>
