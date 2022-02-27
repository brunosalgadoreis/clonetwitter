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
        <h2>Profile</h2>
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
        <h2>Perfil - <?php echo $viewData['nome']; ?></h2>
    </div>
    <div class="post">
        <form method="POST">
            <div class="widgets__input">
                <input type="text" name="nome" value="<?php echo $viewData['nome']; ?>" />
            </div>
            <div class="widgets__input">
                <input type="email" name="email" value="<?php echo $viewData['email']; ?>" />
            </div>
            <button class="tweetBox__tweetButton" type="submit">Salvar</button>

        </form>
        <form method="POST" enctype="multipart/form-data">
            <div class="widgets__input">
                <input type="file" name="foto" />
            </div>
            <input class="tweetBox__tweetButton" type="submit" value="Upload">
            <div class="tweetbox__input">
            <img src="assets/images/<?php echo $viewData['foto']; ?>" alt="" />
            </div>
        </form>
    </div>
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