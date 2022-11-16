<?php
    session_start();

    if(isset($_SESSION['data_product'])){
        $keys = array_keys($_POST['data_remove']);
        unset($_SESSION['data_product'][$keys[0]]);
    }