<?php
session_start();
include_once('conexao.php');

$sql = 'SELECT * FROM categoria';
$consulta = $pdo->query($sql);

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
      Listagem de Categorias
    </h2>

    <div style="float:right">
      <a href="categoria.php?action=new">Novo Cadastro</a>
    </div><br><br>
    <table id=" tabela" class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php

        while ($row = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
          <tr>
            <td><?php echo strtoupper(($row['descricao'])); ?></td>
            <td>
              <a href="categoria.php?action=edit&cod=<?php echo $row["cod"]; ?>" title="Editar Registro">
                <i class="fa fa-edit" style="font-size:24px;color:green"></i></a> &nbsp;&nbsp;
              <a href="acoes_categoria.php?action=delete&cod=<?php echo $row["cod"]; ?>" title="Excluir Registro">
                <i class="fa fa-close" style="font-size:24px;color:red"></i></a> &nbsp;&nbsp;
            </td>
          <?php }

          ?>
      </tbody>
    </table>

  </div>
</body>

</html>

<script>
  var limpar = document.getElementById('limpar');
  limpar.onclick = function() {
    document.getElementById('nome').value = '';
  }
</script>