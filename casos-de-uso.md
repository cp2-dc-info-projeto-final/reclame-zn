# Documento de Casos de Uso

## Lista dos Casos de Uso

 - [CDU 01](#CDU-01): Casos de Uso do Cadastro
 - [CDU 02](#CDU-02): Log-in de Usuários
 - [CDU 03](#CDU-03): Log-out de Usuários
 - [CDU 03](#CDU-03): Edição de Usuários

## Lista dos Atores

 - Cras tempor
 - Donec a lorem

## Diagrama de Casos de Uso

![Diagrama de Casos de Uso](diagrama-exemplo.png)

## Descrição dos Casos de Uso

### CDU 01

Cadastro de Usuário

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

Log-in de usuários

**Fluxo Principal**

1. O usuário preenche suas informações pessoais de Log-in corretamente que foram previamente cadastradas.
2. O usuário clica em Log-in.
3. O usuário se conecta ao sistema corretamente com sua conta previamente criada.


**Fluxo Alternativo A**

1. O usuário preenche suas informações pessoais ainda não cadastradas ou incorretamente.
2. O sistema exibe a mensagem "Informações preenchidas incorretamente ou conta não existente, favor tentar novamente."
3. O sistema redireciona o usuário para a tela de Log-in novamente para que ele reescreva as informações.

### CDU 03

Log-out de usuários

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


