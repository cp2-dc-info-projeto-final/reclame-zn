<?php
    include __DIR__ . '/../php/comentario.php';

   $comentario = new comentario();
    
   if(isset($_GET['id'])){
            $dados = $comentario->get($_GET['id']);
          /*
            print_r ($dados);
            */
            $sql = new Sql();
            $query = "DELETE FROM tb_comentario WHERE idcomentario = :id";
            $sql->QuerySQL($query, array(
                ":id"=> $dados['idcomentario']
            ));
            header("Location: ../index.php");
            exit;
  }
