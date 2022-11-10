<?php
include('../funciones/config.php');
session_start();

$numberDoc = $_POST['numero_documento'];

$result = mysqli_query($db, "SELECT * FROM clientes WHERE documento = '".$numberDoc."'");
$obj = $result->fetch_assoc();
$_SESSION['client_id'] = $obj['id'];

if(mysqli_num_rows($result) == 0) {
  $_SESSION['consult_msg'] = "<p class='error'>No se encontró este número de documento.</p>";

  header('Location: ../productos.php');
}
else {
  $consultClient = "SELECT * FROM clientes WHERE documento = '".$numberDoc."'";

  if (!mysqli_query($db, $consultClient)) {
    echo("Error: " . mysqli_error($db));
    mysqli_close($db);
    
    $_SESSION['consult_msg'] = "<p class='error'>Hubo problemas en consultar el documento del cliente.</p>";
  }
  else {
    $client = mysqli_query($db, $consultClient);
    $obj = $client->fetch_assoc();

    $_SESSION['client_name'] = $obj['nombre'];
    $_SESSION['client_document'] = $obj['documento'];
    $_SESSION['client_phone'] = $obj['telefono'];
    $_SESSION['client_email'] = $obj['email'];
    $_SESSION['allow_update'] = 'ok';

    mysqli_close($db);

    header('Location: ../productos.php');
  }
}