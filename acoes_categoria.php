<?php

include_once 'conexao.php';
session_start();


if ($_GET['action'] == 'new') { //Caso seja novo registro
  $sql = 'INSERT INTO categoria (descricao) VALUES(:descricao)';

  try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
      ':descricao' => $_POST['descricao']
    ));

    echo '<script>alert("Cadastro efetuado com sucesso!!");</script>';
    echo '<script>window.location="listagem_categoria.php";</script>';
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
} elseif ($_GET['action'] == 'edit') { //Caso seja edição

  $cod = $_POST['cod'];

  $sql = "UPDATE categoria SET descricao = :descricao 
          WHERE cod = :cod";
  try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
      ':cod' => $_POST['cod'],
      ':descricao' => $_POST['descricao']
    ));

    echo '<script>alert("Cadastro alterado com sucesso!!");</script>';
    echo "<script>window.location='categoria.php?action=edit&cod=$cod';</script>";
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
} elseif ($_GET['action'] == "delete") { //Caso seja delete

  $cod = $_GET["cod"];

  try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('DELETE FROM categoria WHERE cod = :cod');
    $stmt->bindParam(':cod', $cod);
    $stmt->execute();

    echo '<script>alert("Registro deletado com sucesso!!");</script>';
    echo "<script>window.location='listagem_categoria.php';</script>";
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}
