<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <title>Easy Games</title>

    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="semantic/semantic.css">

    <script type="text/javascript" src="semantic/semantic.min.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>

</head>

<body style="background-color: #2B2B2B">

<div class="ui top attached tabular inverted menu" style= "height:5.5%;background-color: #191919; ">

    <div class="ui medium image" style=" margin-left: 3%">
        <img src="imagenseg/Easy Gaming.png">
    </div>
    <div class="right menu">
        <a class="item" href="indexAdmin.html">
            Home
        </a>

        <a class="item" href="exibe_noticia.php">
            Noticias
        </a>

        <a class="item" href="avalia.html">
            Avaliações
        </a>
        <a class="item active" href="cria_noticia.php">
                Criar notícia
            </a>


    </div>


    <div class="right menu">

        <div class="right menu">

            <a class="item" href="login.html">
                <i class="user icon"></i>
                Logout
            </a>
        </div>

        <div class="item">

            <div class="ui transparent icon input">
                <input type="text" placeholder="Pesquisar...">
                <i class="search link icon"></i>


            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function Nova()
    {
        location.href="exibe_avaliacao.php"
    }
</script>

<!-- principal -->
<div style="margin-left: 20%; margin-right: 20%">

<form method="post">

    <div class="ui form" style="width: 100%; margin-top: 5%;margin-bottom: 5%">

        <div class="field grey">

            <h1 style="color: #191919;">Criar avaliação</h1>

            <input type="text" name="nome" id="nome" placeholder="Adicione um nome">

        </div>
    </div>

    <div class="ui form" style="width: 100%; margin-top: 5%;margin-bottom: 5%">

        <div class="field grey">

            <textarea name="descricao" id="descricao" class="ckeditor" placeholder="Adicione uma descrição"></textarea>

            <button type="submit"  value="inserir" name="inserir" id="inserir" class="ui  grey button" style="margin-top: 2%; color: #2B2B2B">Enviar</button>

        </div>
    </div>

    <?php 

    require_once "modelos/AvaliacaoCrud.php";

        if (isset($_POST['inserir'])) {
            $nome = $_POST['nome'];
            $descricao = $_POST['descricao'];
            $nova_avaliacao = new Avaliacao($nome,$descricao);
            $crud = new AvaliacaoCrud();
            $crud->insertAvaliacao($nova_avaliacao);
            header('Location: exibe_avaliacao.php');
        }



     ?>

</form>

</div>






<!-- rodapé  -->


<div class="ui inverted vertical footer segment" style= "background-color: #191919; ">

    <div class="ui inverted section divider"></div>

    <div class="ui center aligned container">

        <div class="ui stackable inverted divided grid">

            <div class="three wide column">

                <h4 class="ui inverted header">Desenvolvedores</h4>

                <div class="ui inverted link list">

                    <a href="#" class="item">Gabriel Sokacheski </a>
                    <a href="#" class="item">Athirson Santos </a>
                    <a href="#" class="item">Carlos Eduardo </a>

                </div>

            </div>

            <div class="three wide column">

                <h4 class="ui inverted header">Steam</h4>

                <div class="ui inverted link list">

                    <a href="#" class="item">Pakkun     <i class="steam icon"></i></a>
                    <a href="#" class="item">titoMatdor  <i class="steam icon"></i></a>
                    <a href="#" class="item">guaxinim456 <i class="steam icon"></i></a>

                </div>

            </div>

            <div class="three wide column">

                <h4 class="ui inverted header">Instagram</h4>

                <div class="ui inverted link list">

                    <a href="#" class="item">gsokacheski     <i class="instagram icon"></i></i></a>
                    <a href="#" class="item">athirsonSantos <i class="instagram icon"></i></a>
                    <a href="#" class="item">carlosEduardo <i class="instagram icon"></i></a>

                </div>

            </div>

            <div class="three wide column">

                <h4 class="ui inverted header">Facebook</h4>

                <div class="ui inverted link list">

                    <a href="#" class="item">Gabriel Sokacheski <i class="facebook icon"></i></i></a>
                    <a href="#" class="item">Athirson Santos <i class="facebook icon"></i></a>
                    <a href="#" class="item">Carlos Eduardo Rosa <i class="facebook icon"></i></a>

                </div>

            </div>

            <div class="three wide column">

                <h4 class="ui inverted header">Easy Games</h4>

                <div class="ui inverted link list">

                    <a href="#" class="item">Youtube  <i class="youtube play icon"></i></i></a>
                    <a href="#" class="item">Facebook <i class="facebook icon"></i></a>
                    <a href="#" class="item">E-Mail   <i class="mail icon"></i></a>

                </div>

            </div>

        </div>

        <div class="ui inverted section divider"></div>

        <div class="seven wide column">

            <h4 class="ui inverted header">Suporte</h4>

            <p>Desenvolvido por alunos do Instituto Federal Catarinense campus Araquari</p>

        </div>

    </div>

</div>


<!--- fim rodapé -->

</body>

</html>