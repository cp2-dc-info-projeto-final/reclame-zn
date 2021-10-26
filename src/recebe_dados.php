<?php
    $operacao = $_POST["operacao"];

    if($operacao == "inserir"){
        $username = $_POST["username"];
        $senha = $_POST["senha"];
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $email = $_POST["email"];
        $erro = 0;

        if(strlen($username) < 5 OR strlen($username) > 10){
            echo "O username deve possuir no mínimo 5 e no máximo 10 caracteres.<br>";
            $erro = 1;
        }
        if(strlen($senha) < 5 OR strlen($senha) > 10){
            echo "A senha deve possuir no mínimo 5 e no máximo 10 caracteres.<br>";
            $erro = 1;
        }
        if($username == $senha){
            echo "O username e a senha devem ser diferentes.<br>";
            $erro = 1;
        }
        if(empty($nome) OR strstr($nome,' ') == FALSE){
            echo "Favor digitar seu nome corretamente. <br>";
            $erro = 1;
        }
        if(strlen($nome) > 30){
            echo "O nome deve possuir no máximo 30 caracteres.<br>";
            $erro = 1;
        }
        if(is_numeric($idade) == FALSE){
            echo "Favor digitar sua idade corretamente.<br>";
            $erro = 1;
        }
        if(strlen($email) < 8 || strstr($email,'@') == FALSE){
            echo "Favor digitar seu email corretamente. <br>";
            $erro = 1;
        }
        if(strlen($email) > 30){
            echo "O email deve possuir no máximo 30 caracteres.<br>";
            $erro = 1;
        }
        // VERIFICA SE NÃO HOUVE ERRO 
        if($erro == 0) {
            $mysqli = mysqli_connect("localhost","estudante","123","ds30x");
            $sql = "INSERT INTO usuarios (username,senha,nome,idade,email)";
            $sql .= "VALUES ('$username','$senha','$nome',$idade,'$email');";  
            mysqli_query($mysqli,$sql);
            mysqli_close($mysqli);    
            echo "<br>O usuário foi cadastrado com sucesso!"; 
        }
    }
    elseif($operacao == "exibir"){
        $mysqli = mysqli_connect("localhost","estudante","123","ds30x");
        $sql = "SELECT * FROM usuarios;";
        $res = mysqli_query($mysqli,$sql);
        $linhas = mysqli_num_rows($res);
        for($i=0; $i < $linhas; $i++){
            $usuario = mysqli_fetch_array($res);
            echo "Username: ".$usuario["username"]."<br>";
            echo "Senha: ".$usuario["senha"]."<br>";
            echo "Nome: ".$usuario["nome"]."<br>";
            echo "Idade: ".$usuario["idade"]."<br>";
            echo "Email: ".$usuario["email"]."<br>";
            echo "----------------------------------<br>";
        }
        mysqli_close($mysqli);
    }
?>