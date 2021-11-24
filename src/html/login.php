<?php

    //VERIFICA SE OS DADOS ESTÃO VINDO ATRAVÉS DE UM FORMULÁRIO POST
    if(isset($_POST['logar'])){

         //INCLUI A CLASSE SQL NO CÓDIGO
        include __DIR__."/../sql/sql.php";

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //INSTANCIA O SQL E SE CONECTA COM O BANCO DE DADOS
        $sql = new Sql();
        //SELECIONA TODOS OS USUÁRIOS QUE TIVEREM O E-MAIL IGUAL AO E-MAIL INFORMADO
        //SE NÃO TIVER NENHUM USUÁRIO COM O E-MAIL INFORMADO ENTÃO $RESULTS NÃO TERÁ RESULTADO NENHUM
        $query = "SELECT * FROM tb_usuarios WHERE email = :email";

        //DEFINE OS PARAMETROS DA QUERY E MANDA O RESULTADO PARA A VARIÁVEL RESULTS
        $results = $sql->select($query, array(
            ':email' => $email
        ));

        //VERIFICA SE EXISTE ALGUM USUÁRIO COM O EMAIL INFORMADO
        if( !isset($results[0]) ){
            echo "usuário não encontrado";
            exit;
        }else{
            //VERIFICA SE A SENHA DO BANCO DE DADOS É A MESMA SENHA INSERIDA NESTE MOMENTO
            //usa o password verify para verificar uma senha
            if( password_verify($senha, $results[0]['senha']) ){
                //INCLUI NO CÓDIGO A CLASSE USUÁRIO
                include __DIR__ . '/../php/usuario.php';
                //SALVA AS INFORMAÇÕES DO USUÁRIO NA SESSÃO
                (new usuario)::SetToSession($results[0]);
                //REDIRECIONA O USUÁRIO PARA A PÁGINA INICIAL
                header("Location: dashboard.php");
                exit;

            }else{
                echo "senha incorreta";
                exit;
            }
        }
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
             <form class="login100-form validate-form flex-sb flex-w" action="login.php" method="post">
                        <span class="login100-form-title p-b-32">  Log-in  </span>
                        <span class="txt1 p-b-11"> E-mail </span>
                        <div class="wrap-input100 validate-input m-b-36" data-validate="O e-mail é necessário">
                            <input class="input100" type="text" name="email">
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
                     <a href="register.php" class="txt3">Não possui uma conta?</a>
                    </div>
                    </div>

                    <div class="container-login100-form-btn">
                       
                       <button class="login100-form-btn" type="submit" name="logar" style="background-color: #14213d;">Conectar-se</button>
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
