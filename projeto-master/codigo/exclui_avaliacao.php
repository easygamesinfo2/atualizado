<?php

	require_once "modelos/AvaliacaoCrud.php";
	$id = $_GET['id'];
    $crud = new AvaliacaoCrud();
    $crud->excluir_avaliacao($id);
    header('Location: exibe_avaliacao.php');



 ?>