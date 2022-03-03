<?php

class perfilController extends controller
{

    public function __construct()
    {
        parent::__construct();

        $u = new usuarios();

        if (!$u->isLogged()) {
            header("Location: /clonetwitter/login");
        }
    }

    public function index()
    {
        $dados = array(
            'nome' => '',
            'email' => ''
        );

        if (isset($_FILES['foto']) && !empty($_FILES['foto'])) {
            $arquivo = $_FILES['foto'];


            if (isset($arquivo['tmp_name']) && empty($arquivo['tmp_name']) == false) {

                $nomedoarquivo = md5(time() . rand(0, 99)) . '.png';
                move_uploaded_file($arquivo['tmp_name'], 'assets/images/' . $nomedoarquivo); //.$arquivo['name']);

                $u = new usuarios($_SESSION['twlg']);
                $u->inserirFoto($nomedoarquivo);

            }
        }

        if (isset($_POST['nome']) && !empty($_POST['nome'])) {

            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);

            $u = new usuarios($_SESSION['twlg']);
            $u->atualizarUsuario($nome, $email);
        
        }


        $u = new usuarios($_SESSION['twlg']);
        $dados['nome'] = $u->getNome();
        $dados['email'] = $u->getEmail();
        $dados['foto'] = $u->getFoto();

        $dados['qt_seguidos'] = $u->countSeguidos();
        $dados['qt_seguidores'] = $u->countSeguidores();

        $dados['sugestao'] = $u->getUsuarios(5);

        $this->loadTemplate('perfil', $dados);
    }



    public function seguir($id)
    {
        if (!empty($id)) {
            $id = addslashes($id);
            $sq = new relacionamentos();
            $sql = $sq->seguirQuery($id);


            if ($sql->rowCount() > 0) {
                $r = new relacionamentos();
                $r->seguir($_SESSION['twlg'], $id);
            }
        }
        header("Location: /clonetwitter");
    }

    public function deixardeseguir($id)
    {
        if (!empty($id)) {
            $id = addslashes($id);
            $sq = new relacionamentos();
            $sql = $sq->seguirQuery($id);

            if ($sql->rowCount() > 0) {
                $r = new relacionamentos();
                $r->deixardeseguir($_SESSION['twlg'], $id);
            }
        }
        header("Location: /clonetwitter");
    }
}
