<?php
session_start();
if(isset($_SESSION['user_id'])):
?>
    <nav>
        <a href="./" class="nav-link">Inicio</a>
        <a href="clientes.php" class="nav-link">Registrar Clientes</a>
        <a href="producto.php" class="nav-link">Registrar Productos</a>
        <a href="productos.php" class="nav-link">Productos</a>
        <a href="cesta.php" class="nav-link cesta">
            <div class="total-items">
                <span>0</span>
            </div>
        </a>
    </nav>
<?php else: ?>
    <nav>
        <a href="./" class="nav-link">Inicio</a>
    </nav>
<?php endif; ?>