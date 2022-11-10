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
        <form id="form-register" class="form-register active" action="./funciones/registro-clientes.php" method="post">
            <h2>Regístrar Clientes</h2>
            <input type="text" class="input-register input-name" name="nombres" required="required" placeholder="Digite su nombre y apellido">
            <div class="container-select"> 
                <select name="tipo_documento" class="select-document">
                    <option value="">Tipo documento</option>
                    <option value="Tarjeta de identidad">Tarjeta de identidad</option>
                    <option value="Cédula de ciudadania">Cédula de ciudadania</option>
                </select>
            </div>
            <input type="number" class="input-register input-document" name="numero_documento" required placeholder="Digite su número de documento">
            <input type="tel" class="input-register input-phone" name="telefono" maxlength="10" required placeholder="Digite su número de teléfono">
            <input type="email" class="input-register input-email" name="email" required placeholder="Digite su correo electrónico">
            <input type="submit" class="input-register input-submit" name="register" value="Registrar">
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