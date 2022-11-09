<?php
session_start();

if(!isset($_SESSION['user_id'])):
    header('Location: index.php');
    exit;
else:
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
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/productos.css">
</head>
<body  class="page-products">
    <header>
        <div class="logo">
            <img src="./img/logo.png" alt="logo del proyecto">
        </div>
        <nav>
            <a href="./" class="nav-link">Inicio</a>
            <a href="productos.php" class="nav-link">Productos</a>
            <a href="final.php" class="nav-link">Factura</a>
            <div class="total-items">
                <span>0</span>
            </div>
        </nav>
    </header>

    <main class="container-forms">
        <form class="form-client" action="" method="post">
            <h2>Consultar cliente <?php echo $_SESSION['user_id']; ?></h2>
            <div class="container-client">
                <div class="container-inputs">
                    <input type="text" class="input-client input-nombre" required="required" placeholder="Digite nombre y apellido del cliente">
                    <input type="text" class="input-client input-telefono" required="required" placeholder="Digite número de celular del cliente">
                    <input type="text" class="input-client input-cédula" required="required" placeholder="Digite numero de cedula del cliente">
                    <input type="text" class="input-client input-email" required="required" placeholder="Digite correo electrónico del cliente">
                </div>
                <input type="submit" class="input-consultar input-submit" value="consultar información">
                <input type="submit" class="input-guardar input-submit" value="guardar información" disabled>
            </div>
        </form>

        <form action="" class="form-search">
            <label for="">buscar:</label>
            <input type="text"class="input-search" required="required">
            <input type="submit" class="submit-search" value="buscar ahora">
        </form>

        <form action="" class="filter-material">
            <label for="">filtrar por</label>
            <div class="container-select select-material"> 
                <select name="" class="select-filter">
                    <option value="">elija una opción</option>
                    <option value="">plastico</option>
                    <option value="">papel</option>
                    <option value="">carton</option>
                    <option value="">vidrio</option>
                </select>
            </div>
            <label for="">categoria</label>
            <div class="container-select">
                <select name="" class="select-filter">
                    <option value="">elija una opción</option>
                    <option value="">despensa</option>
                    <option value="">aseo</option>
                    <option value="">carne</option>
                    <option value="">lacteos</option>
                    <option value="">licores</option>
                    <option value="">fruta</option>
                </select>
            </div> 
            <input type="submit" class="submit-filter" value="filtrar">
        </form>

        <section class="products">
            <div class="product">
                <img src="./img/producto.png" alt="">
                <p class="product-name">nombre producto</p>
                <p class="price">$20.000</p>
                <button class="add-cart">Agregar a la cesta</button>
            </div>
            <div class="product">
                <img src="./img/producto.png" alt="">
                <p class="product-name">nombre producto</p>
                <p class="price">$20.000</p>
                <button class="add-cart">Agregar a la cesta</button>
            </div>
            <div class="product">
                <img src="./img/producto.png" alt="">
                <p class="product-name">nombre producto</p>
                <p class="price">$20.000</p>
                <button class="add-cart">Agregar a la cesta</button>
            </div>
            <div class="product">
                <img src="./img/producto.png" alt="">
                <p class="product-name">nombre producto</p>
                <p class="price">$20.000</p>
                <button class="add-cart">Agregar a la cesta</button>
            </div>
            <div class="product">
                <img src="./img/producto.png" alt="">
                <p class="product-name">nombre producto</p>
                <p class="price">$20.000</p>
                <button class="add-cart">Agregar a la cesta</button>
            </div>
            <div class="product">
                <img src="./img/producto.png" alt="">
                <p class="product-name">nombre producto</p>
                <p class="price">$20.000</p>
                <button class="add-cart">Agregar a la cesta</button>
            </div>
            <div class="product">
                <img src="./img/producto.png" alt="">
                <p class="product-name">nombre producto</p>
                <p class="price">$20.000</p>
                <button class="add-cart">Agregar a la cesta</button>
            </div>
            <div class="product">
                <img src="./img/producto.png" alt="">
                <p class="product-name">nombre producto</p>
                <p class="price">$20.000</p>
                <button class="add-cart">Agregar a la cesta</button>
            </div>
            <div class="product">
                <img src="./img/producto.png" alt="">
                <p class="product-name">nombre producto</p>
                <p class="price">$20.000</p>
                <button class="add-cart">Agregar a la cesta</button>
            </div>
        </section>
    </main>

    <footer>
        Nombre sitio Web ©2022
    </footer>
</body>
</html>
<?php endif; ?>