<?php
include('../funciones/config.php');
session_start();

$name = $_POST['nombre_producto'];
$price = $_POST['precio_producto'];
$stock = $_POST['stock_producto'];
$packing = $_POST['empaque_producto'];
$kind = $_POST['tipo_producto'];
$recycle = $_POST['reciclaje_producto'];
$recycle = implode("-", $recycle);
$image_name = $_FILES['imagen_producto']['name'];
$image_tmp = $_FILES['imagen_producto']['tmp_name'];
$imagen_explode = explode(".", $image_name);
$imagen_extension = strtolower(end($imagen_explode));
$image_new_name = str_replace([' ', 'ñ'], ['-', 'n'], $image_name);
$allowed_extensions = array('jpg', 'gif', 'png');

if (in_array($imagen_extension, $allowed_extensions)) {
  $folder_images = 'img-productos/';
  $path_image = $folder_images . $image_new_name;
  
  move_uploaded_file($image_tmp, '../'.$path_image);
}

$result = mysqli_query($db, "SELECT * FROM productos WHERE nombre = '".$name."'");

if(mysqli_num_rows($result) > 0) {
  $_SESSION['form_msg'] = "<p class='error'>El producto no fue resgitrado.</p>";

  header('Location: ../producto.php');
}
else {
  $insertProduct = "INSERT INTO productos (`id`, `nombre`, `precio`, `stock`, `empaque`, `tipo`, `reciclaje`, `imagen`) VALUES (NULL, '".$name."', '".$price."', '".$stock."', '".$packing."', '".$kind."', '".$recycle."', '".$path_image."')";

  if (!mysqli_query($db, $insertProduct)) {
    echo("Error: " . mysqli_error($db));
    mysqli_close($db);
    
    $_SESSION['form_msg'] = "<p class='error'>Hubo problemas para crear el registro del producto.</p>";
  }
  else {
    mysqli_query($db,$insertProduct);
    mysqli_close($db);

    $_SESSION['form_msg'] = "<p class='ok'>Registro del producto creado exitosamente.</p>";
  }

  header('Location: ../producto.php');
}