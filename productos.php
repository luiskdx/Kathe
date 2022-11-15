<?php
session_start();

if(!isset($_SESSION['user_id'])):
    header('Location: index.php');
    exit;
else:
    session_start();
    include('funciones/config.php');
    $_SESSION['data_product'];

    echo '<pre>';
    print_r($_SESSION['data_product']);
    echo '</pre>'
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

        <?php include("nav.php"); ?>
    </header>

    <main class="container-forms">
        <form class="form-client consult" action="./funciones/consultar-cliente.php" method="post">
            <h2>Consultar cliente</h2>
            <div class="container-client">
                <div class="container-input">
                    <input type="text" class="input-client input-cédula" maxlength="10" name="numero_documento" required="required" placeholder="Digite el número de documento del cliente">
                </div>
                <input type="submit" class="input-consultar input-submit" value="consultar información">
            </div>
        </form>

        <div class="feedback-msg">
            <?php
            if(isset($_SESSION['consult_msg'])){
                echo $_SESSION['consult_msg'];
                unset($_SESSION['consult_msg']);
            }
            ?>
        </div>

        <hr>

        <form class="form-client" action="./funciones/actualizar-cliente.php" method="post">
            <div class="container-client">
                <div class="container-inputs">
                    <input type="text" class="input-client input-nombre" required="required" placeholder="Digite el nombre y apellido del cliente" name="nombres" value="<?= $_SESSION['client_name']; ?>">
                    <input type="text" class="input-client input-telefono" maxlength="10" required="required" placeholder="Digite el número de celular del cliente" name="telefono" value="<?= $_SESSION['client_phone']; ?>">
                    <input type="text" class="input-client input-cédula" maxlength="10" required="required" placeholder="Digite el número de documento del cliente" name="numero_documento" value="<?= $_SESSION['client_document']; ?>">
                    <input type="text" class="input-client input-email" required="required" placeholder="Digite el correo electrónico del cliente" name="email" value="<?= $_SESSION['client_email']; ?>">
                </div>
                <input type="submit" class="input-guardar input-submit" value="guardar información" <?= ($_SESSION['allow_update'] == 'ok') ? '' : 'disabled'; ?>>
            </div>

            <?php
                unset($_SESSION['client_name'], $_SESSION['client_document'], $_SESSION['client_phone'], $_SESSION['client_email'], $_SESSION['allow_update']);
            ?>

            <div class="feedback-msg">
                <?php
                if(isset($_SESSION['update_msg'])){
                    echo $_SESSION['update_msg'];
                    unset($_SESSION['update_msg']);
                }
                ?>
            </div>
        </form>

        <form action="" class="form-search">
            <label for="">buscar:</label>
            <input type="text" class="input-search" required="required">
            <input type="submit" class="submit-search" value="buscar ahora">
        </form>

        <form action="" class="filter-material">
            <label for="">filtrar por</label>
            <div class="container-select select-material"> 
                <select name="" class="select-filter">
                    <option value="">Elija una opción</option>
                    <option value="Plastico">Plástico</option>
                    <option value="Papel">Papel</option>
                    <option value="Carton">Cartón</option>
                    <option value="Vidrio">Vidrio</option>
                </select>
            </div>
            <label for="">categoria</label>
            <div class="container-select select-kind">
                <select name="" class="select-filter">
                    <option value="">Elija una opción</option>
                    <option value="Despensa">Despensa</option>
                    <option value="Aseo">Aseo</option>
                    <option value="Carne">Carne</option>
                    <option value="Lacteos">Lacteos</option>
                    <option value="Licores">Licores</option>
                    <option value="Fruta">Fruta</option>
                </select>
            </div> 
            <input type="submit" class="submit-filter" value="filtrar">
        </form>

        <section class="products">
            <?php
                include('funciones/config.php');

                $products = mysqli_query($db, "SELECT * FROM productos");

                if(mysqli_num_rows($products) == 0) {
                    echo "<div class='feedback-msg'><p class='error'>No se encontraron productos.</p></div>";
                }
                else {
                    foreach ($products as $row) {
            ?>
                        <div class="product" id="<?= $row['id'] ?>" data-nombre="<?= $row['nombre'] ?>" data-stock="<?= $row['stock'] ?>" data-empaque="<?= $row['empaque'] ?>" data-tipo="<?= $row['tipo'] ?>">
                            <img src="<?= $row['imagen'] ?>" alt="<?= $row['nombre'] ?>">
                            <p class="product-name"><?= $row['nombre'] ?></p>
                            <p class="price">$<?php echo $row['precio'] ?></p>
                            <input class="qty" type="number" value="0" hidden>
                            <button class="add-cart">Agregar a la cesta</button>
                        </div>
            <?php
                    }
                }
            ?>
        </section>
    </main>

    <?php include("footer.php"); ?>
</body>
</html>
<?php endif; ?>