<!DOCTYPE html>
<head>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../categories/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="new-cat">
        <h1>New Items</h1>
        <br>
        <form action="item-update.php" method="post" enctype="multipart/form-data">

        <?php
            include  ('../confs/config.php');
            $types = mysqli_query($conn, "SELECT * FROM type_categories");
        ?>
        <?php 
            while($row = mysqli_fetch_assoc($types)): 
            $type_name = $row['name'];
        ?>
            <label for="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></label><br>
            <select name="<?php echo $row['typeName'] ?>" id="<?php echo $row['name'] ?>" class="selectCat">
            <!-- for previous choice  -->
                <?php
                    $id = $_GET['id'];
                    $result = mysqli_query($conn, "SELECT * FROM items WHERE id = $id");
                    $pre = mysqli_fetch_row($result);
                    $arrayLength = count($pre);
                    // use for loop to print all data in row table items
                    for($x = 0; $x < $arrayLength; $x++){
                        $res = $pre[$x];
                        // select categories
                        $items = mysqli_query($conn, "SELECT * FROM categories WHERE type = '$type_name' ");
                        // use while loop to print categories array in name
                        while($new = mysqli_fetch_assoc($items)): 
                            $type = $new['cat_name'];
                            // check condition
                            if($res == $type){
                                echo "<option> $type </option>" ; 
                            }                                                            
                        endwhile;                         
                    }                                                                             
                ?>
            <!-- options -->
                <?php
                    $items = mysqli_query($conn, "SELECT * FROM categories WHERE type = '$type_name' ");
                    while($new = mysqli_fetch_assoc($items)): 
                    $type = $new['cat_name'];                            
                    echo "<option> $type </option>" ; 
                    endwhile; 
                ?>                        
            </select>
            <br><br>
        <?php endwhile; ?> 

        <?php
            $result = mysqli_query($conn, "SELECT * FROM items WHERE id = $id");
            $row = mysqli_fetch_assoc($result);
        ?>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">

            <input type="hidden" name="status" value="<?php echo $row['status']?>">

            <label for="series">series</label><br>
            <input type="text" name="series" id="series" value="<?php echo $row['series']?>">
            <br><br>

            <label for="price">Price</label><br>
            <input type="number" name="price" id="price" value="<?php echo $row['price']?>">
            <br><br>

            <label for="window">Window</label><br>
            <input type="test" name="window" id="window" value="<?php echo $row['window']?>">
            <br><br>

            <label for="processorGeneration">Processor Generation</label><br>
            <input type="test" name="processorGeneration" id="processorGeneration" value="<?php echo $row['processor_generation']?>">
            <br><br>
            
            <label for="ramTech">RAM Technologies</label><br>
            <input type="test" name="ramTech" id="ramTech" value="<?php echo $row['ram_tech']?>">
            <br><br>

            <label for="ramSpeed">CPU Speed</label><br>
            <input type="test" name="ramSpeed" id="ramSpeed" value="<?php echo $row['ram_speed']?>">
            <br><br>

            <label for="storage_full_info">Full Storage Information</label><br>
            <input type="test" name="storage_full_info" id="storage_full_info" value="<?php echo $row['storage_full_info']?>">
            <br><br>

            <label for="wireless">Wireless</label><br>
            <input type="test" name="wireless" id="wireless" value="<?php echo $row['wireless']?>">
            <br><br>

            <label for="battery">Battery</label><br>
            <input type="test" name="battery" id="battery" value="<?php echo $row['battery']?>">
            <br><br>

            <label for="weight">Weight</label><br>
            <input type="test" name="weight" id="weight" value="<?php echo $row['weight']?>">
            <br><br>

            <label for="color">Color</label><br>
            <input type="color" name="color" id="color" value="<?php echo $row['color']?>">
            <br><br>

            <label for="details">more_detail</label><br>
            <textarea name="details" id="details"><?php echo $row['details']?></textarea>
            <br><br>

            <label for="images">Images</label><br>
            <div><span>Previous Images: </span><img src="covers/<?php echo $row['images']?>" class="earlyImages"></div>
            <input type="file" name="images" id="images"><br>
            <br><br> 
            <button type="submit" name="submit" class="submit">Update Item</button>
        </form>
        <div class="back_to_list">
            <a href = "item-list.php"><button type="cancel" name="cancel" >Back!</button></a>
        </div>
        
    </div>
</body>
</html>