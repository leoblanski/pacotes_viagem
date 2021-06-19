
<?php
include('conexao.php');
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];


$sql = $pdo->prepare("SELECT * FROM usuario WHERE login = ?"); //Busca os users pelo login
$sql->execute([$login]);

if ($sql->rowCount() == 1) {
  $info = $sql->fetch();
  if (password_verify($senha, password_hash($info['senha'], PASSWORD_DEFAULT))) {
    if ($info['tipo'] == "A") { //Se for admin
      $_SESSION['tipo_login'] = "Administrador";
      echo ("<script>alert('Você logou como administrador!');</script>");
    } else {
      $_SESSION['tipo_login'] = "Usuário";
      echo ("<script>alert('Você logou como usuário padrão!');</script>");
    }
    $_SESSION['logado'] = true;
    $_SESSION['login'] = $info['login'];
    header("Location: index.php");
  } else {
    //Erro
    echo ("<script>alert('Login ou senha incorretos!');</script>");
    echo ("<script>window.location.href = 'login.php';</script>");
  }
} else {
  //Erro
  echo ("<script>alert('Login não encontrado!');</script>");
  echo ("<script>window.location.href = 'login.php';</script>");
}


?>