<?php
include('../funciones/config.php');
session_start();

$name = $_POST['nombres'];
$numberDoc = $_POST['numero_documento'];
$phone = $_POST['telefono'];
$email = $_POST['email'];

$result = mysqli_query($db, "SELECT * FROM clientes WHERE id = '".$_SESSION['client_id']."'");

if(mysqli_num_rows($result) == 0) {
  $_SESSION['update_msg'] = "<p class='error'>No se pudo actualizar los datos del cliente.</p>";

  header('Location: ../productos.php');
}
else {
  $updateClient = "UPDATE clientes SET nombre = '".$name."', documento = '".$numberDoc."', telefono = '".$phone."', email = '".$email."' WHERE clientes.id = '".$_SESSION['client_id']."';";

  if (!mysqli_query($db, $updateClient)) {
    echo("Error: " . mysqli_error($db));
    mysqli_close($db);
    
    $_SESSION['update_msg'] = "<p class='error'>Hubo problemas en actualizar los datos del cliente.</p>";
  }
  else {
    mysqli_query($db, $updateClient);
    mysqli_close($db);

    $_SESSION['update_msg'] = "<p class='ok'>Se actualizaron los datos del cliente.</p>";
    unset($_SESSION['client_id']);

    header('Location: ../productos.php');
  }
}