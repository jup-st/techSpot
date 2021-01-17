<?php
    session_start();
    $id = $_GET['id'];
    $_SESSION['cart'][$id]++;
    header("location: ../code/shop.php");
?>