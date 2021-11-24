

<?php

    //VERIFICA SE ESTÁ ABRINDO A PÁGINA VIA MÉTODO POST (QUANDO APERTA NO BOTÃO REGISTRAR)
    if(isset($_POST['registrar'])){
        //RECEBE OS DADOS DO FORMULÁRIO
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $email_confirmacao = $_POST['email_confirm'];

        //VERIFICA SE O CAMPO NOME ESTÁ VAZIO
        if(empty($nome)){
            echo "O campo nome é obrigatório!";
        }

        //VERIFICA SE O CAMPO EMAIL ESTÁ VAZIO
        if(empty($email)){
            echo "O campo email é obrigatório!";
        }

        //VERIFICA SE O CAMPO CONFIRMAR SENHA ESTÁ VAZIO
        if(empty($email_confirmacao)){
            echo "O campo confirmar senha é obrigatório!";
        }

        //VERIFICA SE O CAMPO SENHA ESTÁ VAZIO
        if(empty($senha)){
            echo "O campo senha é obrigatório!";
        }
     

        //VERIFICA SE A SENHA E A CONFIRMAÇÃO DA SENHA SÃO IGUAIS
        if($email != $email_confirmacao){
            echo "Os e-mails não conferem!";
        }

        //VERIFICA SE O CAMPO EMAIL ESTÁ COM UM FORMATO DE EMAIL VÁLIDO
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "O email informado não é válido!";
        }

        //INCLUI A CLASSE SQL NO CÓDIGO
        include __DIR__."/../sql/sql.php";
        $sql = new Sql();
        $query = "INSERT INTO tb_usuarios (nome,email,senha) VALUES (:nome, :email, :senha)";
        $sql->QuerySQL($query, array(
            ":nome" => $nome,
            ":email" => $email,
            ":senha" => password_hash($senha, PASSWORD_DEFAULT)
        ));
        header("Location: login.php");
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
             <form class="login100-form validate-form flex-sb flex-w" action="register.php" method="post">
                        <span class="login100-form-title p-b-32">  Registrar-se  </span>


                        <span class="txt1 p-b-11"> Seu nome </span>
                        <div class="wrap-input100 validate-input m-b-36" data-validate="O e-mail é necessário">
                            <input class="input100" type="text" name="nome">
                            <span class="focus-input100"></span>
                        </div>


                        <span class="txt1 p-b-11"> Seu email </span>
                        <div class="wrap-input100 validate-input m-b-36" data-validate="O e-mail é necessário">
                            <input class="input100" type="text" name="email">
                            <span class="focus-input100"></span>
                        </div>

                        <span class="txt1 p-b-11">Confirme o e-mail</span>
                        <div class="wrap-input100 validate-input m-b-12" data-validate="A senha é necessária">
                       
                            <input class="input100" type="text" name="email_confirm">
                            <span class="focus-input100"></span>
                        </div>


                        <span class="txt1 p-b-11">Senha</span>
                        <div class="wrap-input100 validate-input m-b-12" data-validate="A senha é necessária">
                            <span class="btn-show-pass">
                            <i class="fa fa-eye"></i>
                            </span>
                            <input class="input100" type="password" name="senha">
                            <span class="focus-input100"></span>
                        </div>

                     


                        <div class="flex-sb-m w-full p-b-48">
                            <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                <label class="label-checkbox100" for="ckb1">
                                  Lembrar-se de mim
                                </label>
                            </div>
                        <div>
                     <a href="reclamezn/html/login.php" class="txt3">Já possui uma conta?</a>
                    </div>
                    </div>

                    <div class="container-login100-form-btn">
                       <button class="login100-form-btn" type="submit" name="registrar">Registrar</button>
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
