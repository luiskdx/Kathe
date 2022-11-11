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
    <link rel="stylesheet" href="css/inicio.css">
    <link rel="stylesheet" href="css/productos.css">
</head>
<body class="page-home">
    <header>
        <div class="logo">
            <img src="./img/logo.png" alt="logo del proyecto">
        </div>

        <nav>
            <a href="./" class="nav-link">Inicio</a>
            <a href="productos.php" class="nav-link">Productos</a>
        </nav>
    </header>
    <main class="container-forms">
        <form id="form-register" class="form-register active" action="./funciones/registro-producto.php" method="post" enctype="multipart/form-data">
            <h2>Regístrar Producto</h2>
            <input type="text" class="input-register input-name" name="nombre_producto" required="required" placeholder="Digite el nombre del producto">
            <input type="number" minlenght="100" maxlength="100000" class="input-register input-price" name="precio_producto" required placeholder="Digite el precio del producto">
            <input type="number" minlenght="0" maxlength="1000" class="input-register input-stock" name="stock_producto" required placeholder="Digite la cantidad de productos a almacenar">
            <div class="container-select"> 
                <select name="empaque_producto" class="select-document">
                    <option value="">Tipo de Empaque</option>
                    <option value="Plastico">Plastico</option>
                    <option value="Papel">Papel</option>
                    <option value="Cartón">Cartón</option>
                    <option value="Vídrio">Vídrio</option>
                </select>
            </div>
            <div class="container-select"> 
                <select name="tipo_producto" class="select-document">
                    <option value="">Tipo de Producto</option>
                    <option value="Despensa">Despensa</option>
                    <option value="Aseo">Aseo</option>
                    <option value="Carne">Carne</option>
                    <option value="Lacteos">Lacteos</option>
                    <option value="Fruta">Fruta</option>
                    <option value="Licores">Licores</option>
                </select>
            </div>
            <div class="container-checkbox">
                <label>Tipo Reciclaje</label>
                <input type="checkbox" name="reciclaje_producto[]" value="Blanco"><span class="kind-recycle">Blanco</span>
                <input type="checkbox" name="reciclaje_producto[]" value="Negro"><span class="kind-recycle">Negro</span>
                <input type="checkbox" name="reciclaje_producto[]" value="Verde"><span class="kind-recycle">Verde</span>
            </div>
            <input type="file" class="input-register input-imagen" name="imagen_producto" required>

            <input type="submit" class="input-register input-submit input-register-product" value="Registrar Producto">
        </form>

        <div class="feedback-msg">
            <?php
            if(isset($_SESSION['form_msg'])){
                echo $_SESSION['form_msg'];
                unset($_SESSION['form_msg']);
            }
            ?>
        </div>
    </main>

    <footer>
        Nombre sitio Web ©2022
    </footer>
    <script src="./js/app.js"></script>
</body>
</html>