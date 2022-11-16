<?php
    session_start();

    if(!isset($_SESSION['data_product'])){
        $_SESSION['data_product'] = $_POST['data_product'];
    }
    else {
        $_SESSION['data_product'] = array_replace($_SESSION['data_product'], $_POST['data_product']);
    }