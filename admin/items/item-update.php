<?php
    include('../confs/config.php');
    $id = $_POST['id'];
    $status = $_POST['status'];
    $item_type = $_POST['itemType'];
    $brand = $_POST['brand'];
    $series = $_POST['series'];
    $price = $_POST['price'];
    $price_range = $_POST['price_range'];
    $window = $_POST['window'];
    $ram_size = $_POST['ramSize'];
    $ram_tech = $_POST['ramTech'];
    $ram_speed = $_POST['ramSpeed'];
    $storage_type = $_POST['storageType'];
    $storage_range = $_POST['storageRange'];
    $storage_full_info = $_POST['storage_full_info'];
    $processor = $_POST['processor'];
    $processor_generation = $_POST['processorGeneration'];
    $graphic_card = $_POST['graphicsCard'];
    $resolution = $_POST['resolution'];
    $screen_size = $_POST['screenSize'];
    $wireless = $_POST['wireless'];
    $touch_screen = $_POST['touchScreen'];
    $backlit_keyboard = $_POST['backlitKeyboard'];
    $battery = $_POST['battery'];
    $weight = $_POST['weight'];
    $color = $_POST['color'];
    $details = $_POST['details'];
    $images = $_FILES['images']['name'];
    $tmp = $_FILES['images']['tmp_name'];


    if($images){
        move_uploaded_file($tmp, "covers/$images");
        $sql = "UPDATE items SET item_type= '$item_type', brand= '$brand', series='$series', price= '$price',
        price_range='$price_range', window= '$window', ram_size= '$ram_size', ram_tech= '$ram_tech',
        ram_speed= '$ram_speed', storage_type='$storage_type', storage_range= '$storage_range', storage_full_info='$storage_full_info',
        processor= '$processor', processor_generation= '$processor_generation', graphic_card= '$graphic_card', resolution= '$graphic_card',
        screen_size= '$screen_size', wireless= '$wireless', touch_screen= '$touch_screen', backlit_keyboard= '$backlit_keyboard',
        battery= '$battery', weight= '$weight', color='$color', details='$details', images='$images', status='$status', modified_date = now() WHERE id = $id";
        mysqli_query($conn, $sql);
        header('location: item-list.php');
    } else{
        $sql = "UPDATE items SET item_type= '$item_type', brand= '$brand', series='$series', price= '$price',
        price_range='$price_range', window= '$window', ram_size= '$ram_size', ram_tech= '$ram_tech',
        ram_speed= '$ram_speed', storage_type='$storage_type', storage_range= '$storage_range', storage_full_info='$storage_full_info',
        processor= '$processor', processor_generation= '$processor_generation', graphic_card= '$graphic_card', resolution= '$graphic_card',
        screen_size= '$screen_size', wireless= '$wireless', touch_screen= '$touch_screen', backlit_keyboard= '$backlit_keyboard',
        battery= '$battery', weight= '$weight', color='$color', details='$details', status='$status', modified_date = now() WHERE id = $id";
        mysqli_query($conn, $sql);
        header('location: item-list.php');
    }
    
?>
