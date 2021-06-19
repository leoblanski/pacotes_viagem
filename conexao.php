<?php
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=jfk", "root", "");
/*
if (!$_SESSION['login']) {
  header("Location: login.php");
  exit;
}
*/