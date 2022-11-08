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
            <a href="principal.html" class="nav-link">Inicio</a>
            <a href="productos.html" class="nav-link">Productos</a>
        </nav>
    </header>
    <main class="container-forms">
        <div class="form-selector">
            <button class="button-selector" id="showRegister">registrar</button>
            <button class="button-selector" id="showLogin">iniciar sesion</button>
        </div>

        <form id="form-register" class="form-register active" action="" method="post">
            <h2>Regístrarse</h2>
            <input type="text" class="input-register input-name" required="required" placeholder="Digite su nombre">
            <div class="container-select"> 
                <select name="" class="select-document">
                <option value="">Tipo documento</option>
                <option value="">Tarjeta de identidad</option>
                <option value="">Cédula de ciudadania</option>
                </select>
            </div>
            <input type="number" class="input-register input-document" required placeholder="Digite su número de documento">
            <input type="tel" class="input-register input-phone" required placeholder="Digite su número de teléfono">
            <input type="email" class="input-register input-email" required placeholder="Digite su correo electrónico">
            <input type="submit" class="input-register input-submit" value="Registrar">
        </form>

        <form id="form-login" class="form-login" action="" method="post">
            <h2>Iniciar sesion</h2>
            <input type="email" class="input-login input-email" required placeholder="Digite su correo electrónico">
            <input type="password" class="input-login input-document" required placeholder="Digite su contraseña">
            <input type="submit" class="input-login input-submit" value="Iniciar sesion">
        </form>
    </main>

    <footer>
        Nombre sitio Web ©2022
    </footer>
    <script src="./js/app.js"></script>
</body>
</html>
