<?php session_start(); ?>
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
    <link rel="stylesheet" href="css/final.css">
</head>

<body class="page-final">
    <header>
        <div class="logo">
            <img src="./img/logo.png" alt="logo del proyecto">
        </div>
        
        <?php include("nav.php"); ?>
    </header>
    <main class="container-forms">
        <h2>Gracias por tu compra</h2>
        <p class="description">Hemos clasificado los productos que pueden ser reciclados para conservar el medio ambiente te ayudamos a clasificarlos en los siguientes contenedores.</p>

        <section class="data-bill">
            <div class="cashier">
                <h3>Facturado por:</h3>
                <p><span>Cajero</span>: <?= $_SESSION['cashier_name']; ?></p>
            </div>
            <div class="client">
                <h3>Facturado a:</h3>
                <p><span><?= $_SESSION['client_name']; ?></span></p>
                <p>Documento cliente: <?= $_SESSION['client_document']; ?></p>
                <p>Telefono cliente: <?= $_SESSION['client_phone']; ?></p>
            </div>
            <div class="bill">
                <h3>Datos factura:</h3>
                <p>Número factura: <span><?= $_SESSION['bill_id']; ?></span></p>
                <p>Número caja: <span><?= $_SESSION['cashier_number']; ?></span></p>
            </div>
        </section>
        
        <hr>

        <section class="list-products type-recycle">
            <?php
            foreach ($_SESSION['final_products'] as $product_selected) {
                $ids_products[] = $product_selected['id'];
                $qty_products[] = $product_selected['qty'];
            }
            $list_products = implode(",", $ids_products);

            include('funciones/config.php');
            $result = mysqli_query($db, "SELECT * FROM productos WHERE id IN (".$list_products.")");

            foreach ($result as $index => $row) {
                $list_recycle = explode('-', $row['reciclaje']);
            ?>
            <div class="product">
                <div class="data-product">
                    <p class="product-name"><?= $row['nombre']; ?></p>
                    <p class="price">$<?= $row['precio']; ?></p>
                </div>
                <div class="quantity">
                    <label for="">cantidad</label>
                    <input type="number" value="<?= $qty_products[$index]; ?>" disabled>
                </div>
                <div class="kind-recycle">
                    <?php
                    foreach ($list_recycle as $recycle) {
                        $recycle = strtolower($recycle);
                    ?>
                        <img src="./img/contenedor-<?= $recycle; ?>.png" alt="" class="contenedor-<?= $recycle; ?>">
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </section>
        <section class="center">
            <button class="btn-general btn_reset">Volver</button>
        </section>
    </main>

    <?php include("footer.php"); ?>
</body>
</html>
