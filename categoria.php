<?php
session_start();
include_once('conexao.php');

$action = $_GET['action']; //Identifica se é edição ou novo cadastro

if ($_GET['action'] == "edit") { //Se for edição

  $sql = 'SELECT * FROM categoria WHERE cod =' . $_GET['cod'];

  $consulta = $pdo->query($sql);
  $categoria = $consulta->fetch(PDO::FETCH_ASSOC);
}
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

  <br><br><br>
  <div class="container">
    <h2 class="align-center">
      <?php echo ($action == "edit" ? "Edição" : "Cadastro") ?> De Categoria
    </h2>
    <br><br>
    <form action="acoes_categoria.php?action=<?php echo $action ?>" method="POST">
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nome do Categoria:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="descricao" required id="descricao" value="<?php echo $categoria['descricao'] ?>">
          <input type="hidden" class="form-control" name="cod" required id="cod" value="<?php echo $categoria['cod'] ?>">
        </div>
      </div><br>
      <div class="float-right">
        <button class="btn btn-danger" id="limpar" type="submit">Limpar</button>
        <button class="btn btn-success" type="submit"><?php echo ($action == "edit" ? "Editar" : "Cadastrar"); ?></button>
      </div>
    </form>
  </div>
</body>

</html>

<script>
  var limpar = document.getElementById('limpar');
  limpar.onclick = function() {
    document.getElementById('nome').value = '';
  }
</script>