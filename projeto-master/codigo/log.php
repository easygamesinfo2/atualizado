<?php 
	
	$conexao = new PDO("mysql:host=localhost;dbname=projeto", "root", "");
	
?>
<!DOCTYPE html>
<html>
<head>
		<title>Login ...</title>
		<script type="text/javascript">
		</script>

</head>
<body>

	<?php 
	
	$email  = $_POST['email'];
	$senha  = $_POST['senha'];
	$sql    = $conexao->query("SELECT * FROM usuarios ");
	$usuario_existe = false; 
	foreach ($sql as $usuarios) {
		if ($email == $usuarios['email'] AND $senha == $usuarios['senha'] ) {
			$usuario_existe = true;

		}
	}
	if ($email == "easygamesinfo2@gmail.com" AND $senha == "projeto2018") {
		include "indexAdmin.html";
	}
	elseif ($usuario_existe) {
		include "indexLogado.html";
	} else {
		include "login.html";?>
		<script>alert('Usuário ou senha incorretos')</script>
	<?php  } ?>


?>

</body>
</html>


