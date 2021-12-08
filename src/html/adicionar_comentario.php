

<?php
        date_default_timezone_set('America/Sao_Paulo');
        include __DIR__ . '/../php/usuario.php';
        include __DIR__ . '/../php/postagem.php';

        $user_ = new usuario();
        if(!$user_->checkLogin()){
            header("Location: reclamezn/html/login.php");
            exit;
        }
        $user = $user_->get();

        if(isset($_POST['id'])){

            $postagem_ = new postagem();



            $idpostagem = $_POST['id'];
           // echo "$idpostagem post";
            
            
        }
        if(isset($_GET['id'])){

            $postagem_ = new postagem();



            $idpostagem = $_GET['id'];
           // echo "$idpostagem get";
            
            
        }
if(isset($_POST['registrar'])){
    //RECEBE OS DADOS DO FORMULÁRIO
    $comentario_texto = $_POST['comentario_texto'];

    //VERIFICA SE O CAMPO NOME ESTÁ VAZIO
    if(empty($comentario_texto)){
        echo "O campo é obrigatório!";
    }

    
    

    //INCLUI A CLASSE SQL NO CÓDIGO
    include __DIR__."/../sql/sql.php";
    $sql = new Sql();
    $agora = date("Y-m-d h:i:s");
    //echo "<br> $idpostagem";
    $query = "INSERT INTO tb_comentario (idpostagem, idusuario, comentario_texto, comentario_tempo) VALUES (:idpostagem, :idusuario, :comentario_texto, :comentario_tempo)";
    $sql->QuerySQL($query, array(

        ":idusuario" => $user['id'],
        ":comentario_texto" => $comentario_texto,
        ":idpostagem" => $idpostagem,
        ":comentario_tempo" => $agora
        
    ));
    header("Location: ../index.php");
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
         <form class="login100-form validate-form flex-sb flex-w" action="adicionar_comentario.php" method="post">
                    <span class="login100-form-title p-b-32">  Adicionar comentário  </span>
<input type="hidden" name ="id" value="<?php echo $idpostagem; ?>"> 

                    <span class="txt1 p-b-11"> </span>
                    <div class="wrap-input100 validate-input m-b-36" data-validate="">
                       
                        <textarea name="comentario_texto" id="comentario_texto" cols="40" rows="10"> </textarea>
                        <span class="focus-input100"></span>
                    </div>
               

                <div class="container-login100-form-btn">
                   <button class="login100-form-btn" type="submit" name="registrar">Enviar</button>
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
