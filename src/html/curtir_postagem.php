

<?php
    
    date_default_timezone_set('America/Sao_Paulo');


        include __DIR__ . '/../php/usuario.php';
        include __DIR__ . '/../php/curtida_postagem.php';
        
        $user_ = new usuario();
        if(!$user_->checkLogin()){
            header("Location: reclamezn/html/login.php");
            exit;
        }
        $user = $user_->get();



        if(isset($_GET['id'])){

            $curtida_postagem = new curtida_postagem();
            $destino = $_GET['destino'];

            
            $idpostagem = $_GET['id'];
            echo "$idpostagem get <br>";
            $idcurtida = 0;
            $dados = $curtida_postagem->get( $_GET['id'],$user['id'] );
            print_r($dados);
            if(isset($dados))
        {
            if($dados <> 0)
            {
                $idcurtida = $dados['idcurtida'];
                
            }

            

        }
        
    }
        


    {
    

    
    

    //INCLUI A CLASSE SQL NO CÓDIGO
    require_once (__DIR__."/../sql/sql.php");
    $sql = new Sql();
    $agora = date("Y-m-d h:i:s");


//ADICIONA A CURTIDA
if($idcurtida == 0){
    $query = "INSERT INTO tb_curtidas_postagens (idusuario, idpostagem) VALUES (:idusuario, :idpostagem)";
                   
        echo "$query <br>";
        $usuario = $user['id'];
        echo "usuario : $usuario";
         
        
        $sql->QuerySQL($query, array
        (
            ":idusuario" => $user['id'],
            ":idpostagem" => $idpostagem
            
        )
        );
        //ATUALIZA A CURTIDA ADICIONADA
        $query = "UPDATE  tb_postagens SET curtida = curtida+1 WHERE idpostagem = :idpostagem";
                        
        echo "$query";
    
        
        $sql->QuerySQL($query, array
        (
            
            ":idpostagem" => $idpostagem
            
        )
        );
    
}
    else{

        //REMOVE A CURTIDA
        $query = "DELETE FROM tb_curtidas_postagens WHERE idcurtida = :idcurtida";
        
        
        echo "$query <br>";
        $usuario = $user['id'];
        echo "usuario : $usuario";
            $sql->QuerySQL($query, array
            (
                
                ":idcurtida" => $idcurtida
                
                
            )
            );
            //ATUALIZA A CURTIDA REMOVIDA
            $query = "UPDATE  tb_postagens SET curtida = curtida -1 WHERE idpostagem = :idpostagem";
              
                
                $sql->QuerySQL($query, array
                (
                    
                    ":idpostagem" => $idpostagem
                    
                )
                );
    }

    if($destino == ""){
        header("Location: ../index.php");
        }
        else{
            header("Location: timeline.php?id=$usuario");
        }
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
