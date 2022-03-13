<div class="container">
  <div class="row">

    <div class="sidebarleft col-3">
      <div class="mb-3 mt-2"> <i class="fab fa-twitter"></i> </div>
      <div class="row">
        <span class="material-icons col-2"> home </span>
        <a class="col-10" href="/clonetwitter">
          <h2>Home</h2>
        </a>
      </div>

      <div class="row">
        <span class="material-icons col-2"> perm_identity </span>
        <a class="col-10" href="/clonetwitter/perfil">
          <h2>Profile</h2>
        </a>
      </div>

      <div class="row">
        <span class="material-icons col-2">logout</span>
        <a class="col-10" href="/clonetwitter/login/sair">
          <h2>Logout</h2>
        </a>
      </div>
    </div>

<div class="perfil col-6">
    <div class="topPerfil mb-3 mt-2">
        <h2>Perfil - <?php echo $viewData['nome']; ?></h2>
    </div>
    <form class="form-group" method="POST">
        <div class="form-group">
            <input class="form-control" type="text" name="nome" value="<?php echo $viewData['nome']; ?>" />
        </div>
        <div class="form-group">
            <input class="form-control" type="email" name="email" value="<?php echo $viewData['email']; ?>" />
        </div>
        <button class="btn btn-primary" type="submit">Salvar</button>

    </form>
    <div class="fotobox form-group row justify-content-md-center">
        <img src="assets/images/<?php echo $viewData['foto']; ?>" alt="" />
    </div>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <input class="form-control" type="file" name="foto" />
        </div>
        <input class="btn btn-primary" type="submit" value="Upload">
    </form>
</div>

<div class="sidebarRigth col-3">
      <div class="follow mb-3 mt-2 p-2 bg-light">
        <table width="100%">
          <tr>
            <td width="100%"> <b><?php echo $qt_seguidos ?></b> Following</td>
            <td><b><?php echo $qt_seguidores ?></b> Follower</td>
          </tr><tr><td><hr></td><td><hr></td></tr>

          <?php foreach ($sugestao as $usuario) : ?>
            <tr>
              <td><?php echo $usuario['nome']; ?></td>
              <td>
                <?php if ($usuario['seguido'] == '0') : ?>
                  <a href="/clonetwitter/home/seguir/<?php echo $usuario['id']; ?>"><button class="btn btn-primary" type="submit">Follow</button></a>
                <?php else : ?>
                  <a href="/clonetwitter/home/deixardeseguir/<?php echo $usuario['id']; ?>"><button class="btn btn-primary" type="submit">Unfollow</button></a>
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
</div>
</div>