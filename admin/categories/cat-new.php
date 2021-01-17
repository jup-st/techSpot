<?php include("../confs/auth.php") ?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="new-cat">
        <h1>New Category</h1>
        <br>
        <form action="cat-add.php" method="post" enctype="multipart/form-data">

            <label for="cat_name">Category Name</label><br>
            <input type="text" name="cat_name" id="cat_name">
            <br><br>

            <label for="remark">Remark</label><br>
            <textarea name="remark" id="remark"></textarea>
            <br><br>

            <label for="type">Type</label><br>
            <select name="type" id="type">
                <option value="0">--CHOOSE Type--</option>
                <?php 
                    include  ('../confs/config.php');
                    $result = mysqli_query($conn, "SELECT * FROM type_categories");
                    while($row = mysqli_fetch_assoc($result)): 
                ?>
                    <option value="<?php echo $row['name'] ?>">
                        <?php echo $row['name'] ?>
                    </option>
                <?php endwhile; ?>
            </select>
            <br><br>

            <label for="cat_icon">Icon</label><br>
            <input type="file" name="cat_icon" id="cat_icon">
            <br><br> 
            <!-- <input type="submit" value="Add Categories"> -->
            <button type="submit" name="submit" class="submit">Add Categories</button>
        </form>
        <div class="back_to_cat">
            <a href = "cat-list.php"><button type="cancel" name="cancel" >Back!</button></a>
        </div>
        
    </div>
</body>
</html>