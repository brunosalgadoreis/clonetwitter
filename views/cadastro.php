<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clone Twitter - Cadastro</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body class="body">
    <header class="container">
        <div class="logo">
            <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-logo-vector-png-clipart-1.png" alt="Logo do Twitter">
        </div>
    </header>

    <main class="container">
        <h1>Cadastre-se no Twitter</h1>
        <div class="container">
            <form method="POST">
                <div class="inputs">
                    <label class="nome" for="nome">Nome</label><br>
                    <input type="text" name="nome" />
                </div>
                <div class="inputs">
                    <label class="usuario" for="usuario">E-mail</label><br>
                    <input type="email" name="email" />
                </div>
                <div class="inputs">
                    <label class="senha" for="senha">Senha</label><br>
                    <input type="password" name="senha">
                </div>
                <br>
                <input class="button" type="submit" value="Cadastrar">
                <?php
                if (!empty($aviso)) {
                    echo $aviso;
                }
                ?>
            </form>
        </div>
    </main>
</body>

</html>

<!-- <h2>Cadastro</h2>
<form method="POST">
    Nome:<br/>
    <input type="text" name="nome" /><br/><br/>

    E-mail:<br/>
    <input type="email" name="email" /><br/><br/>

    Senha:<br/>
    <input type="password" name="senha" /><br/>

    <input type="submit" value="Entrar"/>


</form> -->