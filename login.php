<?php
include('./funciones/config.php');
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($db, "SELECT * FROM cajeros WHERE email = '".$email."'");
$obj = $result->fetch_assoc();

if(!$obj) {
  header('Location: index.php');
}
else {
  if (password_verify($password, $obj['password'])) {
    $_SESSION['user_id'] = $obj['id'];
    header('Location: productos.php');
  } else {
    header('Location: index.php');
  }
}