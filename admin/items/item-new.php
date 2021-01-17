<?php include("../confs/auth.php") ?>
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
        <form action="item-add.php" method="post" enctype="multipart/form-data">

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
                <option value="0" autocapitalize="word">--Choose <?php echo $row['name'] ?>--</option>          
                        <?php
                            $items = mysqli_query($conn, "SELECT * FROM categories WHERE type = '$type_name' ");
                            while($row = mysqli_fetch_assoc($items)): 
                            $type = $row['cat_name'];                            
                        ?>
                        <?php echo "<option> $type </option>" ; ?>
                        <?php endwhile; ?>
            </select>
            <br><br>
            <?php endwhile; ?> 
            <input type="hidden" name="status" id='status' value="1">

            <label for="series">series</label><br>
            <input type="text" name="series" id="series">
            <br><br>

            <label for="price">Price</label><br>
            <input type="number" name="price" id="price">
            <br><br>

            <label for="window">Window</label><br>
            <input type="test" name="window" id="window">
            <br><br>
            
            <label for="processorGeneration">Processor Generation</label><br>
            <input type="test" name="processorGeneration" id="processorGeneration">
            <br><br>

            <label for="ramTech">RAM Technologies</label><br>
            <input type="test" name="ramTech" id="ramTech" value="<?php echo $row['ram_tech']?>">
            <br><br>

            <label for="ramSpeed">CPU Speed</label><br>
            <input type="test" name="ramSpeed" id="ramSpeed">
            <br><br>

            <label for="storage_full_info">Full Storage Information</label><br>
            <input type="test" name="storage_full_info" id="storage_full_info">
            <br><br>

            <label for="wireless">Wireless</label><br>
            <input type="test" name="wireless" id="wireless">
            <br><br>

            <label for="battery">Battery</label><br>
            <input type="test" name="battery" id="battery">
            <br><br>

            <label for="weight">Weight</label><br>
            <input type="test" name="weight" id="weight">
            <br><br>

            <label for="color">Color</label><br>
            <input type="color" name="color" id="color">
            <br><br>

            <label for="details">more_detail</label><br>
            <textarea name="details" id="details"></textarea>
            <br><br>

            <label for="images">Images</label><br>
            <input type="file" name="images" id="images"><br>
            <br><br> 
            <button type="submit" name="submit" class="submit">Add New Item</button>
        </form>
        <div class="back_to_list">
            <a href = "item-list.php"><button type="cancel" name="cancel" >Back!</button></a>
        </div>
        
    </div>
</body>
</html>