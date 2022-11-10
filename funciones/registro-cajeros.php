<?php
include('../funciones/config.php');
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
  $_SESSION['form_msg'] = "<p class='error'>Email registrado anteriormente - Registro rechazado.</p>";

  header('Location: ../index.php');
}
else {
  $insertRegister = "INSERT INTO cajeros (`id`, `nombre`, `tipo_documento`, `documento`, `telefono`, `email`, `password`, `facturas`) VALUES (NULL, '".$name."', '".$typeDoc."', '".$numberDoc."', '".$phone."', '".$email."', '".$passwordHash."', '')";

  if (!mysqli_query($db, $insertRegister)) {
    echo("Error: " . mysqli_error($db));
    mysqli_close($db);
    
    $_SESSION['form_msg'] = "<p class='error'>Hubo problemas para crear el registro.</p>";
  }
  else {
    mysqli_query($db, $insertRegister);
    mysqli_close($db);

    $_SESSION['form_msg'] = "<p class='ok'>Registro creado exitosamente.</p>";

    header('Location: ../index.php');
  }
}