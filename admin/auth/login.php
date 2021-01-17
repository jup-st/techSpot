<?php
    session_start();
    $name = $_POST['name'];
    $password = $_POST['password'];

    if($name == "root" and $password == "root") {
        $_SESSION['auth'] = true;
        header("location: ../items/item-list.php");
        } else {
        header("location: ../index.php");
        }
?>