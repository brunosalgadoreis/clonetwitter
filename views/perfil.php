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

<div class="perfil">
    <div class="perfil__header">
        <h2>Perfil - <?php echo $viewData['nome']; ?></h2>
    </div>
    <form method="POST">
        <div class="p_input">
            <input type="text" name="nome" value="<?php echo $viewData['nome']; ?>" />
        </div>
        <div class="p_input">
            <input type="email" name="email" value="<?php echo $viewData['email']; ?>" />
        </div>
        <button class="pButton" type="submit">Salvar</button>

    </form>
    <div class="fotobox">
        <img src="assets/images/<?php echo $viewData['foto']; ?>" alt="" />
    </div>
    <form method="POST" enctype="multipart/form-data">
        <div class="p_input">
            <input type="file" name="foto" />
        </div>
        <input class="pButton" type="submit" value="Upload">
    </form>
</div>

<div class="widgets">
    <div class="t_input">
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