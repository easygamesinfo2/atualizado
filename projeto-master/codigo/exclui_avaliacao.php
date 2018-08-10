<?php

	require_once "modelos/AvaliacaoCrud.php";
	$id = $_GET['id'];
    $crud = new AvaliacaoCrud();
    $crud->excluirAvaliacao($id);
    header('Location: exibe_avaliacao.php');



 ?>