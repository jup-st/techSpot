<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "root";
    $db_name = "techspot";
    $conn = mysqli_connect ($db_host, $db_user, $db_pass);
    mysqli_select_db($conn, $db_name);
?>