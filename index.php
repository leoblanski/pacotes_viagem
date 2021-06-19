<?php

include_once('conexao.php');

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
	<center>
		<!-- div para mostrar o título da página principal -->
		<div class="tituloDaPrincipal">JFK Pacotes Turísticos</div><br>

		<!-- parágrafo de texto -->
		<p>Veja todos os nossos pacotes disponíveis:</p>

		<!-- div que é utilizada para centralizar as divs dos tipos de pacotes -->
		<div class="caixaGeralTipoDePacote">

			<!-- divs com os tipos de pacotes -->

			<!-- pacote 1 -->
			<div class="caixaTipoDePacote">
				<img class="thumbTipoDoPacote" src="imagens/pacoteBusinnes.jpg">
				<div class="tituloDoPacote"> Pacote Business</div>
				<a href="pacote1.html">
					<div class="botaoDetalhes">Detalhes</div>
				</a>
			</div>

			<!-- pacote 2 -->
			<div class="caixaTipoDePacote">
				<img class="thumbTipoDoPacote" src="imagens/pacoteAventuras.jpg">
				<div class="tituloDoPacote"> Pacote Aventuras</div>
				<a href="pacote2.html">
					<div class="botaoDetalhes">Detalhes</div>
				</a>
			</div>

			<!-- pacote 3 -->
			<div class="caixaTipoDePacote">
				<img class="thumbTipoDoPacote" src="imagens/pacotePraia.jpg">
				<div class="tituloDoPacote"> Pacote Praia</div>
				<a href="pacote3.html">
					<div class="botaoDetalhes">Detalhes</div>
				</a>
			</div>

			<!-- pacote 4 -->
			<div class="caixaTipoDePacote">
				<img class="thumbTipoDoPacote" src="imagens/pacoteRelaxamento.jpg">
				<div class="tituloDoPacote"> Pacote Relaxamento</div>
				<a href="pacote4.html">
					<div class="botaoDetalhes">Detalhes</div>
				</a>
			</div>

			<!-- pacote 5 -->
			<div class="caixaTipoDePacote">
				<img class="thumbTipoDoPacote" src="imagens/pacoteFamilia.jpg">
				<div class="tituloDoPacote"> Pacote Família</div>
				<a href="pacote5.html">
					<div class="botaoDetalhes">Detalhes</div>
				</a>
			</div>

			<!-- pacote 6 -->
			<div class="caixaTipoDePacote">
				<img class="thumbTipoDoPacote" src="imagens/pacoteFunny.jpg">
				<div class="tituloDoPacote"> Pacote Funny</div>
				<a href="pacote6.html">
					<div class="botaoDetalhes">Detalhes</div>
				</a>
			</div>

			<!-- pacote 7 -->
			<div class="caixaTipoDePacote">
				<img class="thumbTipoDoPacote" src="imagens/pacoteNatureza.jpg">
				<div class="tituloDoPacote"> Pacote Natureza</div>
				<a href="pacote7.html">
					<div class="botaoDetalhes">Detalhes</div>
				</a>
			</div>

			<!-- pacote 8 -->
			<div class="caixaTipoDePacote">
				<img class="thumbTipoDoPacote" src="imagens/pacoteLuxo.jpg">
				<div class="tituloDoPacote"> Pacote Luxo</div>
				<a href="pacote8.html">
					<div class="botaoDetalhes">Detalhes</div>
				</a>
			</div>

			<!-- pacote 9 -->
			<div class="caixaTipoDePacote">
				<img class="thumbTipoDoPacote" src="imagens/pacoteGold.jpg">
				<div class="tituloDoPacote"> Pacote Gold</div>
				<a href="pacote9.html">
					<div class="botaoDetalhes">Detalhes</div>
				</a>
			</div>

		</div>

	</center>

</body>

</html>