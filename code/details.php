<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../admin/items/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
        include("../admin/confs/config.php");
        // <!-- get id -->
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $items = mysqli_query($conn, "SELECT * FROM items WHERE id = '$id' ");
            $row = mysqli_fetch_assoc($items);
        } 
    ?>
    <header class="d_header">
        <a href="shop.php"><h4>Back</h4></a>
    </header><br>
    <div class="container-fluid d_container">
        <div class="row d_row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 photo_div">
                <div style="background-image: url('../admin/items/covers/<?php echo $row['images']?>');"></div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 detail_div">
                <div>
                    <h3>
                        <?php echo $row['brand']?> <?php echo $row['series']?> <?php echo $row['processor_generation']?> <?php echo $row['processor']?>, <br>
                        <?php echo $row['screen_size']?> <?php echo $row['resolution']?> Laptop, <br>
                        <?php echo $row['color']?>
                    </h3><br>
                    <h2>$ <?php echo $row['price']?></h2><br>
                    <a href="../shopping_cart/add-to-cart.php?id='. $result['id'] .'"><button>Add to Cart</button></a>
                    <br><br>
                    <div class="about_div">
                        <h4>About this item</h4> 
                        <?php echo $row['details']?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>