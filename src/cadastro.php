<html>
    <head>
        <title>Formulário</title>
    </head>
	<body><center>
        <p size="50"><strong>Cadastro de Usuário</strong></p>
        <form action="recebe_dados.php" method="POST">
            
            <p>Usuário: <input type="text" name="usuario" size="15"> </p>
            <p>Senha:  <input type="password" name="senha" size="15"> </p>
            <p>Nome: <input type="text" name="nome" size="15"> </p>
            <p>E-mail: <input type="text" name="email" size="15"></p> 
            <p><input type="submit" value="Enviar!"></p>


            <p><strong>Exibe Usuários</strong></p>
        <p>Clique no botão abaixo para mostrar todos os usuários cadastrados:</p>
        <form action="recebe_dados_aula15.php" method="POST">
            <input type="hidden" name="operacao" value="exibir">
            <p><input type="submit" value="Mostrar usuários"></p>
        </form>
        <p><strong>Busca de Usuário</strong></p>
        <form action="recebe_dados_aula16.php" method="POST">
            <input type="hidden" name="operacao" value="buscar">
            <p>Username: <input type="text" name="username" size="10"> </p>
            <p><input type="submit" value="Buscar"></p>
        </form>
            </center>
        </form>
	<body>
</html>