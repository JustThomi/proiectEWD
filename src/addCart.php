<?php 
    session_start();
    if(empty($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
    $id = $_GET['id'];
    array_push($_SESSION['cart'], $id);
    header('Location: produse.php')
?>