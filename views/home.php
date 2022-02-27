<div class="sidebar">
  <i class="fab fa-twitter"></i>
  <div class="sidebarOption">
    <span class="material-icons"> home </span>
    <a href="/clonetwitter">
      <h2>Home</h2>
    </a>
  </div>

  <div class="sidebarOption">
    <span class="material-icons"> perm_identity </span>
    <a href="/clonetwitter/perfil">
    <h2>Profile</h2>
    </a>
  </div>

  <div class="sidebarOption">
    <span class="material-icons">logout</span>
    <a href="/clonetwitter/login/sair">
      <h2>Logout</h2>
    </a>
  </div>
</div>

<div class="feed">
  <div class="feed__header">
    <h2>Home - <?php echo $viewData['nome']; ?></h2>
  </div>

  <div class="tweetBox">
    <form method="POST">
      <div class="tweetbox__input">
        <img src="assets/images/<?php echo $viewData['foto']; ?>" alt="" />
        <input type="text" placeholder="What's happening?" name="msg" />
      </div>
      <button class="tweetBox__tweetButton" type="submit">Tweet</button>
    </form>
  </div>

  <?php foreach ($feed as $item) : ?>

    <div class="post">
      <div class="post__avatar">
        <!--<img src="assets/images/<?php //echo $item['foto']; ?>" alt="" />-->
        <img src="https://www.pikpng.com/pngl/b/80-805523_default-avatar-svg-png-icon-free-download-264157.png" alt="" />
      </div>

      <div class="post__body">
        <div class="post__header">
          <div class="post__headerText">

            <h3>
              <strong><?php echo $item['nome']; ?></strong> - <?php echo date('H:i', strtotime($item['data_post'])); ?>
              <span class="post__headerSpecial"><span class="material-icons post__badge"> verified </span>@<?php echo $item['nome']; ?></span>
            </h3>
          </div>
          <div class="post__headerDescription">
            <?php echo $item['mensagem']; ?>
          </div>
        </div>
        <div class="post__footer">
          <span class="material-icons"> repeat </span>
          <span class="material-icons"> favorite_border </span>
          <span class="material-icons"> publish </span>
        </div>

      </div>

    </div>
  <?php endforeach; ?>
</div>

<div class="widgets">
  <div class="widgets__input">
    <span class="material-icons widgets__searchIcon"> search </span>
    <input type="text" placeholder="Search Twitter" />
  </div>

  <div class="widgets__widgetContainer">

    <table width="100%">
      <tr>
        <td width="40%">
          <b><?php echo $qt_seguidos ?></b> Following
        </td>
        <td>
          <b><?php echo $qt_seguidores ?></b> Follower
        </td>
      </tr>
    </table>
    <br>
    <table width="100%">
      <tr>
        <td width="100%"></td>
      </tr>
      <?php foreach ($sugestao as $usuario) : ?>
        <tr>
          <td><?php echo $usuario['nome']; ?></td>
          <td>
            <?php if ($usuario['seguido'] == '0') : ?>
              <a href="/clonetwitter/home/seguir/<?php echo $usuario['id']; ?>"><button class="tweetBox__tweetButton" type="submit">Follow</button></a>
            <?php else : ?>
              <a href="/clonetwitter/home/deixardeseguir/<?php echo $usuario['id']; ?>"><button class="tweetBox__tweetButton" type="submit">Unfollow</button></a>
            <?php endif; ?>
          </td>
        </tr>
      <?php endforeach; ?>
    </table>

  </div>
</div>