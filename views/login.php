<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clone Twitter - Login</title>
  <link rel="stylesheet" href="assets/css/login.css">
</head>

<body class="body">
  <header class="container">
    <div class="logo">
      <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-logo-vector-png-clipart-1.png" alt="Logo do Twitter">
    </div>
  </header>

  <main class="container">
    <h1>Entrar no Twitter</h1>
    <div class="container">
      <form method="POST" class="">
        <div class="inputs">
          <label class="usuario" for="usuario">E-mail</label><br>
          <input type="email" name="email" />
        </div>
        <div class="inputs">
          <label class="senha" for="senha">Senha</label><br>
          <input type="password" name="senha">
        </div>
        <br>
        <input class="button" type="submit" value="Entrar">
      </form>
      <div class="links container">
        <a href="#">Esqueceu a senha?</a>
        <span class="ponto"></span>
        <a href="/clonetwitter/login/cadastro">Inscrever-se no Twitter</a>
      </div>
    </div>
  </main>
</body>
</html>
