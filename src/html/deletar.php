<?php
   include __DIR__ . '/../php/usuario.php';

   $user = new usuario();
    
   if(isset($_GET['id'])){
            $dados = $user->get($_GET['id']);

          
            $sql = new Sql();
            $query = "DELETE FROM tb_usuarios WHERE id = :id";
            $sql->QuerySQL($query, array(
                ":id"=> $dados['id']
            ));
            header("Location: /html/dashboard.php");
            exit;
  }
