<?php
    include __DIR__ . '/../php/postagem.php';
    include __DIR__ . '/../php/usuario.php';
        
    $user_ = new usuario();
    if(!$user_->checkLogin()){
        header("Location: reclamezn/html/login.php");
        exit;
    }
    $user = $user_->get();
   $postagem = new postagem();
    
   if(isset($_GET['id'])){
            $dados = $postagem->get($_GET['id']);
            $destino = $_GET['destino'];
            $sql = new Sql();
            $query_comentario = "DELETE FROM tb_postagens WHERE idpostagem = :id";
            $sql->QuerySQL($query_comentario, array(
                ":id"=> $dados['idpostagem']
            ));

            $query_curtida = "DELETE FROM tb_curtidas_postagens WHERE idpostagem = :id";
            $sql->QuerySQL($query_curtida, array(
                ":id"=> $dados['idpostagem']
            ));

            $query = "DELETE FROM tb_comentario WHERE idpostagem = :id";
            $sql->QuerySQL($query, array(
                ":id"=> $dados['idpostagem']
            ));

            $query_curtida = "DELETE FROM tb_curtidas_comentarios WHERE idpostagem = :id";
            $sql->QuerySQL($query_curtida, array(
                ":id"=> $dados['idpostagem']
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
