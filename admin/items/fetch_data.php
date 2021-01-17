<?php

//fetch_data.php

include('../confs/config.php');
if(isset($_POST["action"])){
    $query = "SELECT * FROM items WHERE status = '1' ";
    if(isset($_POST["brand"])){
        $brand_filter = implode("','", $_POST["brand"]);
        $query .= "AND brand IN('".$brand_filter."')";
    }
    if(isset($_POST["price_range"])){
        $price_range_filter = implode("','", $_POST["price_range"]);
        $query .= "AND price_range IN('".$price_range_filter."')";
    }
    if(isset($_POST["ramSize"])){
        $ram_filter = implode("','", $_POST["ramSize"]);
        $query .= " AND ram_size IN('".$ram_filter."')";
    }
    if(isset($_POST["storageType"])){
        $storage_filter = implode("','", $_POST["storageType"]);
        $query .= " AND storage_type IN('".$storage_filter."')";
    }
    if(isset($_POST["storageRange"])){
        $storage_range_filter = implode("','", $_POST["storageRange"]);
        $query .= " AND storage_range IN('".$storage_range_filter."')";
    }
    if(isset($_POST["processor"])){
        $processor_filter = implode("','", $_POST["processor"]);
        $query .= " AND processor IN('".$processor_filter."')";
    }
    if(isset($_POST["graphicsCard"])){
        $graphicsCard_filter = implode("','", $_POST["graphicsCard"]);
        $query .= " AND graphic_card IN('".$graphicsCard_filter."')";
    }
    if(isset($_POST["screenSize"])){
        $screenSize_filter = implode("','", $_POST["screenSize"]);
        $query .= " AND screen_size IN('".$screenSize_filter."')";
    }
    if(isset($_POST["resolution"])){
        $resolution_filter = implode("','", $_POST["resolution"]);
        $query .= " AND resolution IN('".$resolution_filter."')";
    }
    if(isset($_POST["touchScreen"])){
        $touchScreen_filter = implode("','", $_POST["touchScreen"]);
        $query .= " AND touch_screen IN('".$touchScreen_filter."')";
    }
    if(isset($_POST["backlitKeyboard"])){
        $backlitKeyboard_filter = implode("','", $_POST["backlitKeyboard"]);
        $query .= " AND backlit_keyboard IN('".$backlitKeyboard_filter."')";
    }
    if(isset($_POST["itemType"])){
        $itemType_filter = implode("','", $_POST["itemType"]);
        $query .= " AND item_type IN('".$itemType_filter."')";
    }

$test = mysqli_query ($conn, $query );
$output = '';
if($test){
    while($result = mysqli_fetch_assoc($test)):

        $output .= '
        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                        <div class="colum"> 
                            <div class="brand">
                                <h5>'. $result['brand'] .'</h5>
                            </div>
                            <div class="images" style="background-image: url(covers/'. $result['images'] .')"> </div>
                            <div class="details">
                                <br>
                                <h5>'. $result['series'] .'</h5>
                                <h4>$ '. $result['price'] .'</h4>
                                <p>
                                    <img src="covers/dds__processor.svg" class="icon"> '. $result['processor'] .' '. $result['processor_generation'] .'<br>
                                    <img src="covers/dds__disc-system.svg" class="icon"> '. $result['window'] .'<br>
                                    <img src="covers/dds__video-card.svg" class="icon">'. $result['graphic_card'] .' '. $result['resolution'] .'<br>
                                    <img src="covers/dds__memory.svg" class="icon"> '. $result['ram_size'] .' '. $result['ram_tech'] .' '. $result['ram_speed'] .'<br>
                                    <img src="covers/dds__hard-drive.svg" class="icon"> '. $result['storage_full_info'] .'<br>
                                    <img src="covers/dds__display.svg" class="icon"> '. $result['screen_size'] .' display<br>
                                    <img src="covers/dds__weight.svg" class="icon"> '. $result['weight'] .'<br>
                                    colors: <div class="color" style="background-color: '. $result['color'] .'"></div><br>
                                    <a href="details.php?id='. $result['id'] .'">More Details?</a>  
                                </p>
                                <div class="option_div">
                                    <select name="options" id="options" onChange="window.location.href=this.value">
                                        <option value="#"> / </option>
                                        <option value="item-edit.php?id='. $result['id'] .'" class="edit"> Edit</option>
                                        <option value = "item-delete.php?id='. $result['id'] .'" class="delete"> &#xf146; Delete </option>
                                    </select>
                                </div>
                                <br>
                            </div>                           
                        </div><br>
                    </div>
        ';
    endwhile;
} else{
    $output = '<h3>No Data Found</h3>';
}
echo $output;
}
?>
