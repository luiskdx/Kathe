<?php
foreach($_SESSION as $key => $val){
    if ($key !== 'user_id'){
        unset($_SESSION[$key]);
    }
}

header('Location: ../index.php');