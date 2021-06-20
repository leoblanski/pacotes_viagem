<?php
session_start();
include_once('conexao.php');

$sql = 'SELECT * FROM pacote WHERE cod =' . $_GET['cod'];

$consulta = $pdo->query($sql);
$pacote = $consulta->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="estilos.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <?php require('menu.php'); ?>
  <div class="container">
    <br><br><br>
    <center>
      <h1><?php echo $pacote['nome']; ?></h1>
      <br>
      <img width="300" height="300" src="data:image/jpeg;base64,<?= base64_encode($pacote['foto']) ?>" />
      <br>
      <br>
      <strong>Detalhes:</strong> <?php echo $pacote['descricao']; ?>
    </center>

    <button class="float-right btn btn-success">Comprar</button>

  </div>
</body>

</html>