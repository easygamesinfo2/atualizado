<html>
    <link rel="stylesheet" type="text/css" href="semantic/semantic.css">

    <script type="text/javascript" src="semantic/semantic.min.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/08/2018
 * Time: 13:59
 */


    require_once '../modelos/AvaliacaoCrud.php';

if(isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = "index";
}

switch ($acao){
    case 'index':
        echo '<pre>';
        $crud = new AvaliacaoCrud();
        $avaliacoes = $crud->getAvaliacao();
        include "../view/templates/cabecalho.php";
        include "../view/avaliacao/indexAdmin.php";
        include "../view/templates/rodape.php";
        break;

    case 'exibir':
        $id = $_GET['id'];
        $crud = new AvaliacaoCrud();
        $avaliacoes = $crud->getAvaliacao($id);
        include '../view/templates/cabecalho.php';
        include '../view/avaliacao/exibe_avaliacao.php';
        include '../view/templates/rodape.php';
        break;
    case 'inserir':
        if (!isset($_POST['inserir'])) {
            include '../view/templates/cabecalho.php';
            include '../view/avaliacao/cria_avaliacao.php';
            include '../view/templates/rodape.php';
        }else{
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $novaAva = new Avaliacao($nome,$descricao);
            $crud = new AvaliacaoCrud();
            $crud->insertAvaliacao($novaAva);
            header('Location: avaliacao.php');
        }
        break;
    case 'alterar':
        if (!isset($_POST['editar'])) {
            $id = $_GET['id'];
            $crud = new AvaliacaoCrud();
            $avaliacao = $crud->getAvaliacao($id);
            include '../view/templates/cabecalho.php';
            include '../view/categorias/alterar.php';
            include '../view/templates/rodape.php';
        }else{
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $novaAva = new Avaliacao($nome,$descricao);
            $crud = new AvaliacaoCrud();
            $crud->atualizaAvaliacao($novaAva,$id);
            header('Location: avaliacao.php');
        }
        break;
    case 'excluir':
        $id = $_GET['id'];
        $crud = new AvaliacaoCrud();
        $crud->excluirAvaliacao($id);
        header('Location: avaliacao.php');
        break;
}