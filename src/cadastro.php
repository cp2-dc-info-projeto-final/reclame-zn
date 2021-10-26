<html>
    <head>
        <title>Formulário</title>
    </head>
	<body>
        <p size="50"><strong>Cadastro de Usuário</strong></p>
        <form action="recebe_dados.php" method="POST">
            <p>Username: <input type="text" name="username" size="10"> </p>
            <p>Senha: <input type="password" name="senha" size="10"> </p>
            <p>Nome: <input type="text" name="nome" size="30"> </p>
            <p>Idade: <input type="text" name="idade" size="3"> </p>
            <p>E-mail: <input type="text" name="email" size="20"></p> 
            <p><input type="submit" value="Enviar!"></p>
        </form>
	<body>
</html>