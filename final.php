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
    <link rel="stylesheet" href="css/final.css">

</head>

<body class="page-final">
    <header>
        <div class="logo">
            <img src="./img/logo.png" alt="logo del proyecto">
        </div>
        <nav>
            <a href="index.php" class="nav-link">Inicio</a>
            <a href="productos.php" class="nav-link">Productos</a>
            <a href="final.php" class="nav-link">Factura</a>
            <div class="total-items">
                <span>3</span>
            </div>
        </nav>
    </header>
    <main class="container-forms">
        <h2>Gracias por tu compra</h2>
        <p class="description">Hemos clasificado los productos que pueden ser reciclados para conservar el medio ambiente te ayudamos a clasificarlos en los siguientes contenedores.</p>
        <section class="data-bill">
            <div class="cashier">
                <h3>Facturado por:</h3>
                <p><span>Nombre cajero</span></p>
            </div>
            <div class="client">
                <h3>Facturado a:</h3>
                <p> <span>Nombre cliente</span></p>
                <p>Documento cliente</p>
                <p>Telefono cliente</p>
            </div>
            <div class="bill">
                <h3>Datos factura:</h3>
                <p>Número factura: <span>12345678</span></p>
                <p>Número caja: <span>12345678</span></p>
            </div>
        </section>
        <section class="list-products type-recycle">
            <div class="product">
                <div class="data-product">
                    <p class="product-name">nombre producto</p>
                    <p class="price">$20.000</p>
                </div>
                <div class="quantity">
                    <label for="">cantidad</label>
                    <input type="number" value="1" disabled>
                </div>
                <div class="kind-recycle">
                    <img src="./img/contenedor-blanco.png" alt="" class="contenedor-blanco">
                    <img src="./img/contenedor-negro.png" alt="" class="contenedor-negro">
                    <img src="./img/contenedor-verde.png" alt="" class="contenedor-verde">
                </div>
            </div>
            <div class="product">
                <div class="data-product">
                    <p class="product-name">nombre producto</p>
                    <p class="price">$20.000</p>
                </div>
                <div class="quantity">
                    <label for="">cantidad</label>
                    <input type="number" value="1" disabled>
                </div>
                <div class="kind-recycle">
                    <img src="./img/contenedor-blanco.png" alt="" class="contenedor-blanco">
                    <img src="./img/contenedor-negro.png" alt="" class="contenedor-negro">
                    <img src="./img/contenedor-verde.png" alt="" class="contenedor-verde">
                </div>
            </div>
            <div class="product">
                <div class="data-product">
                    <p class="product-name">nombre producto</p>
                    <p class="price">$20.000</p>
                </div>
                <div class="quantity">
                    <label for="">cantidad</label>
                    <input type="number" value="1" disabled>
                </div>
                <div class="kind-recycle">
                    <img src="./img/contenedor-blanco.png" alt="" class="contenedor-blanco">
                    <img src="./img/contenedor-negro.png" alt="" class="contenedor-negro">
                </div>
            </div>
        </section>   
        <section class="center">
            <button class="btn-general">Volver</button>
        </section>
    </main>

    <footer>
        Nombre sitio Web ©2022
    </footer>
</body>
</html>
