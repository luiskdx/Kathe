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
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/productos.css">
    <link rel="stylesheet" href="css/factura.css">
</head>

<body class="page-bill">
    <header>
        <div class="logo">
            <img src="./img/logo.png" alt="logo del proyecto">
        </div>
        <nav>
            <a href="index.php" class="nav-link">Inicio</a>
            <a href="productos.php" class="nav-link">Productos</a>
            <a href="final.php" class="nav-link">Factura</a>
            <div class="total-items">
                <span>0</span>
            </div>
        </nav>
        
    </header>

    <main class="container-forms">
        <h2>Productos seleccionados</h2>

        <section class="list-products">
            <div class="product">
                <img src="./img/producto.png" alt="">
                <div class="data-product">
                    <p class="product-name">nombre producto</p>
                    <p class="price">$20.000</p>
                </div>
                <div class="quantity">
                    <label for="">cantidad</label>
                    <input type="number" value="1">
                </div>
                <button class="btn-general">Remover de la cesta</button>
            </div>
            <div class="product">
                <img src="./img/producto.png" alt="">
                <div class="data-product">
                    <p class="product-name">nombre producto</p>
                    <p class="price">$20.000</p>
                </div>
                <div class="quantity">
                    <label for="">cantidad</label>
                    <input type="number" value="1">
                </div>
                <button class="btn-general">Remover de la cesta</button>
            </div>
            <div class="product">
                <img src="./img/producto.png" alt="">
                <div class="data-product">
                    <p class="product-name">nombre producto</p>
                    <p class="price">$20.000</p>
                </div>
                <div class="quantity">
                    <label for="">cantidad</label>
                    <input type="number" value="1">
                </div>
                <button class="btn-general">Remover de la cesta</button>
            </div>
        </section>
        <section class="total-price">
            <p class="total">Descuento de $10.000 - Valor total <span>$50.000</span></p>
            <button class="btn-general">Devolver</button>
            <button class="btn-general">Seguir a la pasarela de pago</button>
        </section>
    </main>

    <footer>
        Nombre sitio Web ©2022
    </footer>
</body>
</html>