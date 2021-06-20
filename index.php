<?php

include_once('conexao.php');

if ($_GET['cod']) {
	$sql = "SELECT c.descricao as categoria_desc, p.* FROM pacote p
				JOIN categoria c ON (c.cod = p.fk_categoria_cod)
				WHERE p.fk_categoria_cod = " . $_GET['cod'];

	$categoria_query = $pdo->query($sql);
	$categoria = $categoria_query->fetch(PDO::FETCH_ASSOC);

	$categoria_selecionada = $categoria['categoria_desc'];

	//Verifica se a categoria existe retorno
	if (!$categoria_selecionada) { //Se nulo, redireciona pra tela principal sem filtros, avisando o usuário que não retornou registros
		echo '<script>alert("Não foram encontrados registros para a Categoria informada, você será redirecionado a listagem inicial!!");</script>';
		echo '<script>window.location="index.php";</script>';
	}
} else {
	$sql = "SELECT c.descricao as categoria_desc, p.* FROM pacote p
	JOIN categoria c ON (c.cod = p.fk_categoria_cod)";
}

$consulta = $pdo->query($sql);
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!-- na tag head vão informações relevantes e importantes de qualquer html como título, autor, descrição e também importar a folha de estilos (css) -->
	<title>JFK Pacotes Turísticos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="estilos.css" />
</head>

<body>
	<?php include_once('menu.php'); ?>

	<br><br><br>
	<div class="container">
		<center>
			<h1>JFK Pacotes de Viagens</h1>
			<h5>Veja abaixo nossos pacotes disponíveis.</h5>

			<?php if ($_GET['cod']) { ?>
				<h5> Você aplicou um filtro pela categoria:
					<strong>
						<?php echo $categoria_selecionada; ?>
					</strong>
				<?php } ?>
				</h5>

				<br><br>
		</center>

		<div class="row">
			<?php while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
				<div class="col-sm-4">
					<center>
						<strong><?php echo $row['nome']; ?></strong> <br>
						<strong>Categoria: </strong> <?php echo $row['categoria_desc']; ?><br><br>
						<img width="300" height="300" src="data:image/jpeg;base64,<?= base64_encode($row['foto']) ?>" />

						<br><br>
						<a class="btn btn-primary" href="pacote_detalhes.php?cod=<?php echo $row['cod']; ?>">Ver detalhes</a>
						<?php if ($_SESSION['tipo_login'] == "Administrador") { ?>
							<a class="btn btn-danger" href="pacote.php?action=edit&cod=<?php echo $row['cod']; ?>">Editar Pacote</a>
						<?php } ?>
					</center>
					<br>
				</div>
			<?php } ?>
		</div>
	</div>

</body>

</html>