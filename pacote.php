<?php
session_start();
include_once('conexao.php');

$action = ($_POST['action'] ? $_POST['action'] : "new"); //Identifica se é edição ou novo cadastro

if ($_GET['action'] == "edit") { //Se for edição

  $sql = 'SELECT * FROM pacote WHERE cod =' . $_GET['cod'];

  $consulta = $pdo->query($sql);
  $pacote = $consulta->fetch(PDO::FETCH_ASSOC);
} else {
  $sql = 'SELECT * FROM categoria';
  $consulta = $pdo->query($sql);
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
      <?php echo ($action == "edit" ? "Edição" : "Cadastro") ?> De Pacote
    </h2>
    <br><br>
    <form action="acoes_pacote?action=<?php echo $action ?>" method="POST" enctype="multipart/form-data">
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nome do Pacote:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nome" required id="nome" value="<?php echo $pacote['nome'] ?>">
        </div>
      </div><br>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Descrição do Pacote:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="descricao" required id="descricao" value="<?php echo $pacote['descricao'] ?>">
        </div>
      </div><br>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Categoria:</label>
        <div class="col-sm-10">
          <select class="form-control" required name="categoria" id="categoria">
            <option value="">Selecione uma categoria</option>
            <?php
            while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
              <option value="<?php echo $row['cod']; ?>"><?php echo $row['descricao']; ?></option>
            <?php } ?>
          </select>
        </div>
      </div><br>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Valor:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" required name="valor" id="valor" value="<?php echo $pacote['valor'] ?>">
        </div>
      </div><br>
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Foto:</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" required name="foto" id="foto" value="<?php echo base64_encode($pacote['foto']) ?>">
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
    document.getElementById('foto').value = '';
    document.getElementById('descricao').value = '';
    document.getElementById('valor').value = '';
    document.getElementById('categoria').value = '';

  }
</script>