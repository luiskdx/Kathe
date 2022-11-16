<?php
include('../funciones/config.php');
session_start();

if(isset($_SESSION['data_final'])){
  $client_id = $_SESSION['data_final']['client_id'];

  $consultClientId = "SELECT * FROM clientes WHERE id = '".$client_id."'";
  $consultClient = mysqli_query($db, $consultClientId);
  $client = $consultClient->fetch_assoc();

  $consultCashierId = "SELECT * FROM cajeros WHERE id = '".$_SESSION['user_id']."'";
  $consultCashier = mysqli_query($db, $consultCashierId);
  $cashier = $consultCashier->fetch_assoc();

  $_SESSION['final_products'] = $_SESSION['data_final']['products'];
  $_SESSION['client_name'] = $client['nombre'];
  $_SESSION['client_document'] = $client['documento'];
  $_SESSION['client_phone'] = $client['telefono'];
  $_SESSION['cashier_name'] = $cashier['nombre'];
  $_SESSION['cashier_number'] = $_SESSION['data_final']['cashier'];

  foreach ($_SESSION['final_products'] as $products_selected) {
      $ids_products[] = $products_selected['id'];
      $qty_products[] = $products_selected['qty'];
  }
  $list_products = implode(",", $ids_products);
  $list_quantities = implode(",", $qty_products);

  $insertBill = "INSERT INTO facturas (`id`, `id_cliente`, `id_cajero`, `numero_caja`, `id_productos`, `cantidades`) VALUES (NULL, '".$client_id."', '".$_SESSION['user_id']."', '".$_SESSION['cashier_number']."', '".$list_products."', '".$list_quantities."')";

  mysqli_query($db, $insertBill);
  $_SESSION['bill_id'] = mysqli_insert_id($db);
}

header('Location: ../final.php');