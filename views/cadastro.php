<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clone Twitter - Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    <main class="container">
    <div class=" row d-flex justify-content-center">
      <h1>Cadastrar</h1>
    </div>
    <div class="row d-flex justify-content-center">
            <form method="POST">
                <div class="form-group">
                    <label class="nome" for="nome">Nome</label><br>
                    <input class="form-control" type="text" name="nome" />
                </div>
                <div class="form-group">
                    <label class="usuario" for="usuario">E-mail</label><br>
                    <input class="form-control" type="email" name="email" />
                </div>
                <div class="form-group">
                    <label class="senha" for="senha">Senha</label><br>
                    <input class="form-control" type="password" name="senha">
                </div>
                
                <input class="form-control btn btn-primary" type="submit" value="Cadastrar">
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