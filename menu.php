<?php
session_start();
include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="estilo_menu.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <div id="container_menu">
    <nav id="nav" role="navigation">
      <a href="#nav" title="Show navigation">Mostrar Navegação</a>
      <a href="#" title="Hide navigation">Ocultar Navegação</a>
      <ul>
        <li>
          <div style="margin-top:8px; font-size:12px;">
            Olá
            <strong>
              <?php echo ($_SESSION['login']); ?>
            </strong>
            sejá bem vindo!, Perfil:
            <?php echo ($_SESSION['tipo_login']); ?>
          </div>
        </li>
        <li><a href="home.php">Início</a></li>
        <li>
          <a href="cadastro_categoria.php">Cadastro de Categoria</a>
        </li>
        <li>
          <a href="pacote.php">Cadastro de Pacotes</a>
        </li>
        <li>
          <a href="logout.php">Sair</a>
        </li>
      </ul>
    </nav>
  </div>

  </div>
</body>

</html>