<?php

include_once 'conexao.php';
session_start();

$arquivo = $_FILES['foto'];

$foto = file_get_contents($arquivo['tmp_name']); //Pega a foto para salvar no campo formato bloob

if ($_GET['action'] == 'new') { //Caso seja novo registro
  $sql = "insert into pacote (nome, descricao, valor, foto, fk_categoria_cod) 
  values(:nome, :descricao, :valor, :foto, :fk_categoria_cod)";

  try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
      ':nome' => $_POST['nome'],
      ':descricao' => $_POST['descricao'],
      ':valor' => $_POST['valor'],
      ':foto' => $foto,
      ':fk_categoria_cod' => $_POST['categoria']
    ));

    echo '<script>alert("Cadastro efetuado com sucesso!!");</script>';
    echo '<script>window.location="index.php";</script>';
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
} elseif ($_GET['action'] == 'edit') { //Caso seja edição

  $id = $_POST['id'];

  $sql = "UPDATE pacote SET nome = :nome, 
                            descricao = :descricao, 
                            valor = :valor, 
                            foto = :foto, 
                            fk_categoria_cod = :fk_categoria_cod, 
          WHERE id = :id";

  try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
      ':nome' => $_POST['nome'],
      ':descricao' => $_POST['descricao'],
      ':valor' => $_POST['valor'],
      ':foto' => $foto,
      ':fk_categoria_cod' => $_POST['categoria']
    ));

    echo '<script>alert("Cadastro alterado com sucesso!!");</script>';
    echo "<script>window.location='pacote.php?action=edit&id=$id';</script>";
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
} elseif ($_GET['action'] == "delete") { //Caso seja delete

  $id = $_GET["id"];

  try {
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->prepare('DELETE FROM pacote WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    echo '<script>alert("Registro deletado com sucesso!!");</script>';
    echo "<script>window.location='index.php';</script>";
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  }
}
