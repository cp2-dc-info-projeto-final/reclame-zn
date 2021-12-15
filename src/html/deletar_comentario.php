<?php
    include __DIR__ . '/../php/comentario.php';
    include __DIR__ . '/../php/usuario.php';
        
    $user_ = new usuario();
    if(!$user_->checkLogin()){
        header("Location: reclamezn/html/login.php");
        exit;
    }
    $user = $user_->get();
   $comentario = new comentario();
    
   if(isset($_GET['id'])){
            $dados = $comentario->get($_GET['id']);
            $destino = $_GET['destino'];
            $sql = new Sql();
            $query = "DELETE FROM tb_comentario WHERE idcomentario = :id";
            $sql->QuerySQL($query, array(
                ":id"=> $dados['idcomentario']
            ));

            $query_curtida = "DELETE FROM tb_curtidas_comentarios WHERE idcomentario = :id";
            $sql->QuerySQL($query_curtida, array(
                ":id"=> $dados['idcomentario']
            ));
            $usuario = $user['id'];
            if($destino == ""){
                header("Location: ../index.php");
                }
                else{
                    header("Location: timeline.php?id=$usuario");
                }
                exit;
  }
