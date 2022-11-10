<?php
include('../funciones/config.php');
session_start();

$name = $_POST['nombres'];
$typeDoc = $_POST['tipo_documento'];
$numberDoc = $_POST['numero_documento'];
$phone = $_POST['telefono'];
$email = $_POST['email'];

$result = mysqli_query($db, "SELECT * FROM clientes WHERE email = '".$email."' OR documento = '".$numberDoc."'");

if(mysqli_num_rows($result) > 0) {
  $_SESSION['form_msg'] = "<p class='error'>Email o documento registrado anteriormente - Registro rechazado.</p>";

  header('Location: ../clientes.php');
}
else {
  $insertRegister = "INSERT INTO clientes (`id`, `nombre`, `tipo_documento`, `documento`, `telefono`, `email`, `facturas`) VALUES (NULL, '".$name."', '".$typeDoc."', '".$numberDoc."', '".$phone."', '".$email."', '')";

  if (!mysqli_query($db, $insertRegister)) {
    echo("Error: " . mysqli_error($db));
    mysqli_close($db);
    
    $_SESSION['form_msg'] = "<p class='error'>Hubo problemas para crear el registro del cliente.</p>";
  }
  else {
    mysqli_query($db, $insertRegister);
    mysqli_close($db);

    $_SESSION['form_msg'] = "<p class='ok'>Registro del cliente creado exitosamente.</p>";
  }

  header('Location: ../clientes.php');
}