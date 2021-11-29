<?php
      include __DIR__.'/../sql/sql.php';
      include __DIR__ . '/../php/usuario.php';

      
      use Utilitarios\User;
      use Utilitarios\Sql;
  
    //pegar todas as postagens e retornar em formato json
    $sql = new Sql();
    $result = $sql->select("SELECT * FROM tb_comentario ORDER BY tempo desc");
