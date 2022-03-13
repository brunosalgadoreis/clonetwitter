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

    <div class="midFeed col-6">
      <div class="topfeed mb-3 mt-2">
        <h2>Home - <?php echo $viewData['nome']; ?></h2>
      </div>

      <div class="feed mt-5">
        <form class="form-group row" method="POST">
          <div class="fotobox col-2">
            <img src="assets/images/<?php echo $viewData['foto']; ?>" alt="" />
          </div>
          <div class="input col-10">
            <textarea class="form-control" type="text" placeholder="What's happening?" name="msg"></textarea>
            <button class="btn btn-primary mt-2" type="submit">Tweet</button>
          </div>
        </form>
      </div>

      <?php foreach ($feed as $item) : ?>

        <div class="post row">
          <div class="fotobox col-2">
            <img src="assets/images/<?php echo $item['foto']; ?>" alt="" />
            <!--<img src="https://www.pikpng.com/pngl/b/80-805523_default-avatar-svg-png-icon-free-download-264157.png" alt="" />-->
          </div>

          <div class="postBody col-10">
            <div class="postHeader">
              <div class="postHeaderText">
                <h6>
                  <strong><?php echo $item['nome']; ?></strong> - <?php echo date('H:i', strtotime($item['data_post'])); ?>
                  <span><span class="material-icons post__badge"> verified </span>@<?php echo $item['nome']; ?></span>
                </h6>
              </div>
              <div class="postHeadDescription">
                <?php echo $item['mensagem']; ?>
              </div>
            </div>
            <div class="row mt-2">
              <span class="material-icons col align-self-start"> repeat </span>
              <span class="material-icons col align-self-center"> favorite_border </span>
              <span class="material-icons col align-self-end"> publish </span>
            </div>
            <hr />
          </div>
        </div>
      <?php endforeach; ?>
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