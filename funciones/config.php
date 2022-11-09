<?php
/* accesos de la base de datos */
$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "db_reciclaje";

/* se crea una variable de conexión */
$db = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

/* comprobar la conexión */
if(mysqli_connect_errno()){
    echo mysqli_connect_error();
    exit;
}