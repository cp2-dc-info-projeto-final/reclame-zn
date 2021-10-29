<html>
    <head>
        <title>Cadastro de Usuários</title>
    </head>
	<body><center>
        <p size="50"><strong>Cadastro de Usuário</strong></p>
        <form action="recebe_dados.php" method="POST">
            
            <p>Usuário: <input type="text" name="usuario" size="15"> </p>
            <p>Senha:  <input type="password" name="senha" size="15"> </p>
            <p>Nome: <input type="text" name="nome" size="15"> </p>
            <p>E-mail: <input type="text" name="email" size="15"></p> 
            <p>Bairro: <select name="bairro"></p>
            <option value="agua_santa">Água Santa</option>
            <option value="alto_da_boa_vista">Alto da Boa Vista</option>
            <option value="andarai">Andaraí</option>
            <option value="bancarios">Bancários</option>
            <option value="barros_filho">Barros filho</option>
            <option value="bento_ribeiro">Bento Ribeiro</option>
            <option value="bonsucesso">Bonsucesso</option>
            <option value="bras_de_pina">Brás de Pina</option>
            <option value="cachambi">Cachambi</option>
            <option value="cacuia">Cacuia</option>
            <option value="campinho">Campinho</option>
            <option value="cascadura">Cascadura</option>
            <option value="cavalcanti">Cavalcanti</option>
            <option value="cidade_universitaria">Cidade Universitária</option>
            <option value="cocota">Cocotá</option>
            <option value="coelho_neto">Coelho Neto</option>
            <option value="colegio">Colégio</option>
            <option value="cpx_do_alemao">Complexo do Alemão</option>
            <option value="cordovil">Cordovil</option>
            <option value="costa_barros">Costa Barros</option>
            <option value="del_castilho">Del Castilho</option>
            <option value="encantado">Encantado</option>
            <option value="engenho_da_rainha">Engenho da Rainha</option>
            <option value="engenho_de_dentro">Engenho de Dentro</option>
            <option value="engenho_leal">Engenho Leal</option>
            <option value="engenho_novo">Engenho Novo</option>
            <option value="freguesia">Freguesia</option>
            <option value="galeao">Galeão</option>
            <option value="grajau">Grajaú</option>
            <option value="guadalupe">Guadalupe</option>
            <option value="higienopolis">Higienópolis</option>
            <option value="honorio_gurgel">Honório Gurgel</option>
            <option value="inhauma">Inhaúma</option>
            <option value="iraja">Irajá</option>
            <option value="jacare">Jacaré</option>
            <option value="jacarezinho">Jacarezinho</option>
            <option value="jardim_america">Jardim América</option>
            <option value="jardim_carioca">Jardim Carioca</option>
            <option value="jardim_guanabara">Jardim Guanabara</option>
            <option value="lins_vasconcelos">Lins de Vasconcelos</option>
            <option value="madureira">Madureira</option>
            <option value="manguinhos">Manguinhos</option>
            <option value="maracana">Maracanã</option>
            <option value="mare">Maré</option>
            <option value="marechal_hermes">Marechal Hermes</option>
            <option value="maria_da_graca">Maria da Graça</option>
            <option value="meier">Méier</option>
            <option value="monero">Moneró</option>
            <option value="olaria">Olaria</option>
            <option value="oswaldo_cruz">Oswaldo cruz</option>
            <option value="parada_lucas">Parada de Lucas</option>
            <option value="parque_achieta">Parque Anchieta</option>
            <option value="parque_columbia">Parque Columbia</option>
            <option value="pavuna">Pavuna</option>
            <option value="penha">Penha</option>
            <option value="penha_circular">Penha Circular</option>
            <option value="piedade">Piedade</option>
            <option value="pilares">Pilares</option>
            <option value="pitangueiras">Pitangueiras</option>
            <option value="portuguesa">Portuguesa</option>
            <option value="praca_bandeira">Praça da Bandeira</option>
            <option value="praia_bandeira">Praia da Bandeira</option>
            <option value="ramos">Ramos</option>
            <option value="riachuelo">Riachuelo</option>
            <option value="ribeira">Ribeira</option>
            <option value="ricardo_albuquerque">Ricardo de albuquerque</option>
            <option value="rocha">Rocha</option>
            <option value="rocha_miranda">Rocha Miranda</option>
            <option value="sampaio">Sampaio</option>
            <option value="sao_francisco_xavier">São Francisco Xavier</option>
            <option value="taua">Tauá</option>
            <option value="tijuca">tijuca</option>
            <option value="todos_os_santos">Todos os Santos</option>
            <option value="tomas_coelho">Tomas coelho</option>
            <option value="turiacu">Turiaçu</option>
            <option value="vaz_lobo">Vaz Lobo</option>
            <option value="vicente_carvalho">vicente de Carvalho</option>
            <option value="vigario_geral">Vigário Geral</option>
            <option value="vila_penha">Vila da Penha</option>
            <option value="vila_isabel_abolicao">Vila Isabel Abolição</option>
            <option value="vila_kosmos">Vila Kosmos</option>
            <option value="vista_alegre">Vista Alegre</option>
            <option value="zumbi">Zumbi</option>
            </select>
            <p><input type="submit" value="Enviar!"></p>
            <p><strong>Exibe Usuários</strong></p>
        <p>Clique no botão abaixo para mostrar todos os usuários cadastrados:</p>
        <form action="recebe_dados.php" method="POST">
            <input type="hidden" name="operacao" value="exibir">
            <p><input type="submit" value="Mostrar usuários"></p>
        </form>
        <p><strong>Busca de Usuário</strong></p>
        <form action="recebe_dados.php" method="POST">
            <input type="hidden" name="operacao" value="buscar">
            <p>Username: <input type="text" name="username" size="10"> </p>
            <p><input type="submit" value="Buscar"></p>
        </form>
            </center>
        </form>
	<body>
</html>
