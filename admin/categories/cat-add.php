<?php
    include ('../confs/config.php');
    $name = $_POST['cat_name'];
    $remark = $_POST['remark'];
    $type = $_POST['type'];
    $icon = $_FILES['cat_icon']['name'];  
    $tmp = $_FILES['cat_icon']['tmp_name'];  
    if($icon){
        move_uploaded_file($tmp, "icons/$icon");
    }
    $sql = "INSERT INTO categories(cat_name, remark, type, cat_icon, created_date, modified_date) VALUES ('$name', '$remark', '$type', '$icon', now(), now())";
    mysqli_query($conn, $sql);
    header('location: cat-list.php');


?>


    
