# TwitterClone

Projeto Twitter Clone com PHP e Mysql.

Criado durante o curso Do Zero ao Profissional, onde realizei alterações no layout e adicionei funcionalidades.

* **Sistema Login/Cadastro**

* **Postagem/Visualização**

* **Follow/Unfollow usuários**

* **As senhas são criptografadas com md5**

* **Feed** - Os usuários podem ver os tweets de outros usuários que seguem.

* **MVC**

* **Editar Perfil** -Usuários podem editar seus dados do perfil (adicionaodo por mim).

* **Image uoload** - Nusuários podem carregar fotos para seu perfil(adicionaodo por mim).

* **Bootstrap/Font Awesome/Google Leapis** - (adicionaodo por mim)

## Requerimentos técnicos mínimos:
- PHP 5.6 ou superior
- mySQL versão 5.6.21 ou superior
- Apache/2.4.10

## Instalação

**Cópia de Arquivos no servidor:**

- Clonar o repo para o seu servidor web usando git clone: `https://github.com/brunosalgadoreis/clonetwitter.git`.

**Preparação do Banco de Dados:**
- Criar o banco de dados mySQL (nome padrão 'ctwitter').
- Importar o script `ctwitter.sql`.

**Configuração:**
- Alterar o arquivo config.php a `BASE_URL` e as informações necessárias para a conectar o banco de dados.
- Alterar no arquivo `.htaccess` a URL em `RewriteRule`
