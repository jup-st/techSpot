<?php
    include('../confs/config.php');
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
    }
    $sql = "INSERT INTO items( item_type, brand, series, price, price_range,  window, ram_size, ram_tech,
    ram_speed, storage_type, storage_range, storage_full_info, processor, processor_generation, 
    graphic_card, resolution, screen_size, wireless, touch_screen, backlit_keyboard, battery, weight, 
    color, details, images, status,  created_date, modified_date) VALUES 
    ('$item_type', '$brand', '$series', '$price', '$price_range',  '$window', '$ram_size', '$ram_tech',
    '$ram_speed', '$storage_type', '$storage_range', '$storage_full_info', '$processor', 
    '$processor_generation', '$graphic_card', '$resolution', '$screen_size', '$wireless', '$touch_screen', 
    '$backlit_keyboard', '$battery', '$weight', '$color', '$details', '$images', '$status', now(), now())";
    mysqli_query($conn, $sql);
    // echo $sql;
    header('location: item-list.php');
?>
