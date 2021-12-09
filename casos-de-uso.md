# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Cadastro de Usuários
 - [CDU 02](#CDU-02): Log-in de Usuários
 - [CDU 03](#CDU-03): Log-out de Usuários
 - [CDU 04](#CDU-04): Edição de Usuários
 - [CDU 05](#CDU-05): Lista de Usuários
 - [CDU 06](#CDU-06): Edição de Usuários (pelo administrador)
 - [CDU 07](#CDU-07): Exclusão de Usuários
 - [CDU 08](#CDU-08): Concessão de Privilégios
 - [CDU 09](#CDU-09): Remoção de Privilégios
 - [CDU 10](#CDU-10): Busca de Usuários
 - [CDU 11](#CDU-11): Criação de Postagens
 - [CDU 12](#CDU-12): Edição de Postagens
 - [CDU 13](#CDU-13): Exclusão de Postagens
 - [CDU 14](#CDU-14): Exibição de Timeline de Usuários
 - [CDU 15](#CDU-15): Criação de Comentários
 - [CDU 16](#CDU-16): Edição de Comentários
 - [CDU 17](#CDU-17): Exclusão de Comentários
 - [CDU 18](#CDU-18): Curtidas de Postagens e Comentários
 - [CDU 19](#CDU-19): Remoção de Curtidas de Postagens e Comentários
 
 
## Lista dos Atores

 - Usuário
 - Administrador

## Diagrama de Casos de Uso

![Diagrama de Casos de Uso](diagrama_casos_de_uso.jpg)

## Descrição dos Casos de Uso

### CDU 01

Cadastro de Usuários

**Fluxo Principal**

1. O usuário preenche suas informações.
2. O usuário clica em "Cadastrar-se".
3. O usuário se conecta com sucesso à rede Reclame ZN.


**Fluxo Alternativo A**

1. O usuário preenche as informações com menos caracteres que o necessário.
2. O sistema não permite o cadastro do usuário.
3. O sistema exibe uma mensagem de alerta de acordo com a informação que foi preenchida com menos caracteres.
3. O sistema exibe a tela de cadastro novamente para que o usuário tente se cadastrar novamente.

**Fluxo Alternativo B**

1. O usuário preenche as informações com os mesmo caracteres de log-in que um outro usuário já existente.
2. O sistema não permite o cadastro do usuário.
3. O sistema exibe uma mensagem de alerta dizendo "Este e-mail já foi cadastrado." ou "Este usuário já está cadastrado.", dependendo do que for selecionado novamente.
4. O sistema exibe a tela de cadastro novamente para que o usuário tente se cadastrar novamente.



### CDU 02

Log-in de Usuários

**Fluxo Principal**

1. O usuário preenche suas informações pessoais de Log-in corretamente que foram previamente cadastradas.
2. O usuário clica em Log-in.
3. O usuário se conecta ao sistema corretamente com sua conta previamente criada.


**Fluxo Alternativo A**

1. O usuário preenche suas informações pessoais ainda não cadastradas ou incorretamente.
2. O sistema exibe a mensagem "Informações preenchidas incorretamente ou conta não existente, favor tentar novamente."
3. O sistema redireciona o usuário para a tela de Log-in novamente para que ele reescreva as informações.



### CDU 03

Log-out de Usuários

**Fluxo Principal**

1. O usuário clica em "Log-out".
2. O usuário se desconecta sua conta do sistema.
3. O usuário é redirecionado para a tela de Log-in.



### CDU 04

Edição de Usuários

**Fluxo Principal**

1. O usuário clica em "Editar cadastro".
2. O usuário escreve suas novas informações.
3. O usuário clica em "Enviar".
4. O sistema atualiza as informações do usuário e exibe a mensagem "Informações atualizadas".



### CDU 05
Lista de Usuários

**Fluxo Principal**

1. O administrador faz o log-in.
2. O administrador é redirecionado para a página "Dashboard".
3. É exibida a lista de usuários para o administrador.



### CDU 06
Edição de Usuários (pelo administrador)

**Fluxo Principal**

1. O administrador seleciona um usuário na lista para realizar a edição.
2. O administrador clica em "Editar Usuário".
3. O administrador escreve as novas informações do usuário.
4. O administrador clica em "Enviar".
5. O sistema atualiza as informações do usuário escolhido e exibe a mensagem "Informações atualizadas".



### CDU 07
Exclusão de Usuários

**Fluxo Principal**

1. O administrador seleciona um usuário na lista para realizar a exclusão.
2. O administrador clica em "Deletar Usuário".
3. O sistema deleta o usuário.



### CDU 08
Concessão de Privilégios

**Fluxo Principal**

1. O administrador seleciona um usuário na lista para realizar a concessão de privilégio de administrador.
2. O administrador clica em "Editar Usuário".
3. O administrador alterna a opção de "usuário comum" para "administrador".
4. O administrador clica em "Enviar".
5. O sistema atualiza as informações do novo administrador.



### CDU 09
Remoção de Privilégios

**Fluxo Principal**

1. O administrador seleciona um usuário na lista para realizar a remoção de privilégio de administrador.
2. O administrador clica em "Editar Usuário".
3. O administrador alterna a opção de "administrador" para "usuário comum".
4. O administrador clica em "Enviar".
5. O sistema atualiza as informações do novo usuário comum.



### CDU 10
Busca de Usuários

**Fluxo Principal**

1. O usuário clica em "Buscar Usuário".
2. O usuário insere os caracteres a serem buscados.
3. O sistema mostra todos os usuários que tenham aqueles caracteres em seu nome.



### CDU 11
Criação de Postagens

**Fluxo Principal**

1. O usuário clica em "Adicionar Postagem".
2. O usuário escreve o conteúdo da postagem.
3. O usuário clica em "Enviar".
4. O sistema armazena a postagem.



### CDU 12
Edição de Postagens

**Fluxo Principal**

1. O usuário clica em "Editar Postagem".
2. O usuário modifica a postagem.
3. O usuário clica em "enviar".
4. O sistema armazena a postagem editada.



### CDU 13
Exclusão de Postagens

**Fluxo Principal**

1. O usuário clica em "Deletar Postagem".
2. O sistema deleta a postagem.



### CDU 14
Exibição de Timeline de Usuários

**Fluxo Principal**

1. O usuário faz o log-in.
2. O usuário é redirecionado ao "Dashboard".
3. O usuário clica em "Voltar".
4. O sistema redireciona o usuário para a página inicial.
5. A timeline do usuário é exibida.



### CDU 15
Criação de Comentários

**Fluxo Principal**

1. O usuário escolhe uma postagem na timeline.
2. O usuário clica em "Adicionar Comentário".
3. O usuário escreve o conteúdo do comentário.
4. O usuário clica em "Eniar".
5. O sistema armazena o comentário.



### CDU 16
Edição de Comentários

**Fluxo Principal**

1. O usuário clica em "Editar Comentário".
2. O usuário modifica o conteúdo do comentário.
3. O usuário clica em "Enviar".
4. O sistema armazena o comentário modificado.



### CDU 17
Exlusão de Comentários

**Fluxo Principal**

1. O usuário clica em "Deletar comentário".
2. O sistema deleta o comentário.



### CDU 18
Curtidas de Postagens e Comentários

**Fluxo Principal**

1. O usuário clica em "Curtir".
2. O sistema armazena a curtida na postagem ou comentário.



### CDU 19
Remoção de Curidas de Postagens e Comentários

**Fluxo Principal**

1. O usuário clica em "Remover Curtida".
2. O sistema remove a curtida do usuário.


