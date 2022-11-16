<?php
    session_start();
    include('funciones/config.php');;
?>

<!DOCTYPE html>
<html lang="es-co">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/cesta.css">
</head>

<body class="page-bill">
    <header>
        <div class="logo">
            <img src="./img/logo.png" alt="logo del proyecto">
        </div>
        <?php include("nav.php"); ?>
    </header>

    <main class="container-forms">
        <h2>Productos seleccionados</h2>

        <section class="list-products">
            <div class="container-select"> 
                <select name="cliente" class="select-client" required>
                    <option value="">Seleccione un cliente</option>
            <?php
            $clients = mysqli_query($db, "SELECT * FROM clientes");
            foreach ($clients as $client) {
            ?>
                <option value="<?= $client['id']; ?>"><?= $client['nombre']; ?></option>
            <?php } ?>
                </select>
            </div>
            <input type="number" class="number_checker" placeholder="Digite el número de caja" required>
            <?php
            foreach ($_SESSION['data_product'] as $product_selected) {
                $ids_products[] = $product_selected['id'];
                $qty_products[] = $product_selected['qty'];
            }
            $list = implode(",", $ids_products);
            $result = mysqli_query($db, "SELECT * FROM productos WHERE id IN (".$list.")");

            foreach ($result as $index => $row) {
            ?>
                <div class="product" id="<?= $row['id'] ?>">
                    <img src="./<?= $row['imagen']; ?>" alt="">
                    <div class="data-product">
                        <p class="product-name"><?= $row['nombre']; ?></p>
                        <p class="price">$<span class="value"><?= $row['precio']; ?></span></p>
                    </div>
                    <div class="quantity">
                        <label for="">cantidad</label>
                        <input type="number" value="<?= $qty_products[$index]; ?>" max="<?= $row['stock']; ?>" min="1">
                    </div>
                    <button class="btn-general remove-product">Remover de la cesta</button>
                </div>
            <?php
            }
            ?>
        </section>
        <section class="total-price">
            <p class="total">Valor total $<span>0</span></p>
            <button id="volver-productos" class="btn-general">Devolver</button>
            <button id="pago-online" class="btn-general">Seguir a la pasarela de pago</button>
        </section>
    </main>

    <?php include("footer.php"); ?>
</body>
</html>
