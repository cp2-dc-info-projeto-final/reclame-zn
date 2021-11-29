<?php
    include __DIR__ . '/../php/postagem.php';

   $postagem = new postagem();
    
   if(isset($_GET['id'])){
            $dados = $postagem->get($_GET['id']);
          /*
            print_r ($dados);
            */
            $sql = new Sql();
            $query = "DELETE FROM tb_postagens WHERE idpostagem = :id";
            $sql->QuerySQL($query, array(
                ":id"=> $dados['idpostagem']
            ));
            header("Location: ../index.php");
            exit;
  }
