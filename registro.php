<?php
include('./funciones/config.php');
session_start();

$name = $_POST['nombres'];
$typeDoc = $_POST['tipo_documento'];
$numberDoc = $_POST['numero_documento'];
$phone = $_POST['telefono'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

$result = mysqli_query($db, "SELECT * FROM cajeros WHERE email = '".$email."'");

if(mysqli_num_rows($result) > 0) {
  header('Location: index.php');
}
else {
  $insertRegister = "INSERT INTO cajeros (`id`, `nombre`, `tipo_documento`, `documento`, `telefono`, `email`, `password`, `facturas`) VALUES (NULL, '".$name."', '".$typeDoc."', '".$numberDoc."', '".$phone."', '".$email."', '".$passwordHash."', '')";

  mysqli_query($db, $insertRegister);

  if (!$insertRegister) {
    die('Error: ' . mysql_error());
  }

  mysqli_close($db);

  header('Location: productos.php');
}