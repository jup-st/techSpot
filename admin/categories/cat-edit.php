<!DOCTYPE html>
<head>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php
        include('../confs/config.php');
        $id = $_GET['id'];
        $result = mysqli_query($conn, "SELECT * FROM categories WHERE id = $id");
        $row = mysqli_fetch_assoc($result);
    ?>
    <div class="new-cat">
        <h1>New Category</h1>
        <br>
        <form action="cat-update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $row['id']?>">

            <label for="cat_name">Category Name</label><br>
            <input type="text" name="cat_name" id="cat_name" value="<?php echo $row['cat_name']?>">
            <br><br>

            <label for="remark">Remark</label><br>
            <textarea name="remark" id="remark"><?php echo $row['remark']?></textarea>
            <br><br>

            <label for="cat_icon">Icon</label><br>
            <div><span>Previous Icon: </span><img src="icons/<?php echo $row['cat_icon']?>" class="earlyIcon"></div>
            <input type="file" name="cat_icon" id="cat_icon">
            <br><br> 

            <label for="type">Type</label><br>
            <p>Previous Type: <?php echo $row['type']?></p>
            <select name="type" id="type">
                <option value="0">--CHOOSE Type--</option>
                <?php 
                    $result = mysqli_query($conn, "SELECT * FROM type_categories");
                    while($row = mysqli_fetch_assoc($result)): 
                ?>
                    <option value="<?php echo $row['name'] ?>">
                        <?php echo $row['name'] ?>
                    </option>
                <?php endwhile; ?>
            </select>
            <br><br>

            <button type="submit" name="submit" class="submit">Update Categories</button>
        </form>
        <div class="back_to_cat">
            <a href = "cat-list.php"><button type="cancel" name="cancel" >Back!</button></a>
        </div><br><br>
        
    </div>
</body>
</html>