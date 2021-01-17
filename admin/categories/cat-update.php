<?php
    include('../confs/config.php');
    $id = $_POST['id'];
    $name = $_POST['cat_name'];
    $remark = $_POST['remark'];
    $type = $_POST['type'];
    $icon = $_FILES['cat_icon']['name'];  
    $tmp = $_FILES['cat_icon']['tmp_name'];  

    if($icon){
        move_uploaded_file($tmp, "icons/$icon");
        $sql = "UPDATE categories SET cat_name = '$name', remark = '$remark', type = '$type', cat_icon = '$icon', modified_date = now() WHERE id = $id";
        mysqli_query($conn, $sql);
        header('location: cat-list.php');
    } else{
        $sql = "UPDATE categories SET cat_name = '$name', remark = '$remark', type = '$type', modified_date = now() WHERE id = $id";
        mysqli_query($conn, $sql);
        header('location: cat-list.php');
    }
?>