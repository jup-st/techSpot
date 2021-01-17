<?php
    include ('../confs/config.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM items where id = $id";
    mysqli_query($conn, $sql);
    header('location: item-list.php');
?>