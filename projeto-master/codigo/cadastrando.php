<!DOCTYPE html>
<html>
<head>
	<title>cadastrando...</title>
</head>
<body>

<?php 
	

	$conexao = new PDO("mysql:host=localhost;dbname=projeto", "root", "");
	$nome      = $_POST["nome"];
	$email     = $_POST["email"   ];
	$senha     = $_POST["senha"];
	$confirma  = $_POST["confirma"];
	$pegaEmail = $conexao->query("SELECT * FROM usuarios WHERE email = '$email'");
	$usuario_existe = false;

	foreach ($pegaEmail as $usuarios) {
		
		if ($email == $usuarios['email']) {
			$usuario_existe = true;
		}
	} 

	if($confirma != $senha){
		include "cadastro.html";

?>

	<script>alert('As senhas são diferentes')</script>

<?php  

	} 

	elseif ($usuario_existe) { 
		
		include "cadastro.html";

?>
		<script>alert('Email já cadastrado')</script>
	
	

<?php 
			  
	}else{ 

		$sql       = $conexao->query("INSERT INTO usuarios(senha, email, nome) VALUES ('$senha', '$email', '$nome')");
		include "login.html";
?>
		<script>alert('Cadastro efetuado com sucesso')</script>
<?php  
	
	}  
?>

</body>
</html>