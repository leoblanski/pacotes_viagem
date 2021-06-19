<?php
include('conexao.php');
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
  <div class="tituloDaPrincipal">JFK Pacotes Turísticos</div><br>
  <div class="caixaGeralLogin">
    <p>Faça login para acessar o sistema</p>
    <form action="autentica.php" method="post">
      <div>
        <label style="margin-left:-60px">Usuário ou Email:</label> <br>
        <input type="text" id="login" name="login" placeholder="Usuário ou endereço de email"><br><br>

        <label style="margin-left:-135px">Senha:</label> <br>
        <input type="password" id="senha" name="senha" placeholder="Senha"><br>
      </div>
      <br>
      <center>
        <button class="botaoLogin" type="submit">Login</button>
        <br><br>
        Não possui cadastro ? <a href="criar_conta.php">Criar Conta</a>
      </center>
    </form>
</body>

</html>