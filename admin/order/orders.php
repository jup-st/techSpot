<?php include("../confs/auth.php") ?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <button class="navi_button" onclick="openNav()">☰</button>
        <!-- menu_bar -->
        <div class="_100_navi">
            <a href="#" class="logo_link">
                <div class="logo"> </div>
            </a>
            <div class="navi" id="mySidepanel">
                <a class="closebtn" onclick="closeNav()" style="color: rgb(255, 0, 0);"><span class="fa fa-close" aria-hidden="true"></span> Close</a>
                <a href="../items/item-list.php" class="a_home">Manage Items</a>
                <a href="../categories/cat-list.php">Manage Categories</a>
                <a href="#">Manage Order <i class="fa fa-shopping-cart fa-lg"></i></a>
                <input type="search" placeholder="search..">
                <span class="fa fa-search" aria-hidden="true"></span>
                <a href="../auth/logout.php"><i class="fa fa-power-off" aria-hidden="true"></i></a>
            </div>
        </div>
    </header><br>
    <?php
        include("../confs/config.php");
        $orders = mysqli_query($conn, "SELECT * FROM orders");
    ?>
    <h1>Order List</h1>
    <div class="orders">
        <?php while($order = mysqli_fetch_assoc($orders)): ?>
        <?php if($order['status']): ?>
        <div class="delivered">
        <?php else: ?>
        <div>
            <?php endif; ?>
            <div class="sidebar">
                <div action="submit-order.php" method="post">
                    <p for="name"><?php echo $order['name'] ?></p>                                       
                    <p for="email"><?php echo $order['email'] ?></p>                   
                    <p for="phone"><?php echo $order['phone'] ?></p>                   
                    <p for="address"><?php echo $order['address'] ?></p>                                   
                    <?php if($order['status']): ?>
                    * <a href="order-status.php?id=<?php echo $order['id'] ?>&status=0"><button>Undo</button></a>
                    <?php else: ?>
                    * <a href="order-status.php?id=<?php echo $order['id'] ?>&status=1"><button>Mark as Delivered</button></a>
                    <?php endif; ?>
                    <br><br>
                </div>
            </div>
            <div class="main">
                <?php
                    $order_id = $order['id'];
                    $items = mysqli_query($conn, "SELECT order_items.*, items.series, items.brand, items.price
                    FROM order_items LEFT JOIN items ON order_items.item_id = items.id
                    WHERE order_items.order_id = $order_id");
                    while($item = mysqli_fetch_assoc($items)):
                ?>

                <table>
                    <tr>
                        <th>Item Name</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <td> <?php echo $item['brand'] ?> <?php echo $item['series'] ?></td>
                        <td><?php echo $item['qty'] ?></td>
                        <td>$<?php echo $item['price'] ?></td>
                        <td>$<?php echo $item['price'] * $item['qty'] ?></td>
                    </tr>
                </table>
                <?php endwhile; ?>
            </div>
            <p class="clear"></p>
        </div>
        <?php endwhile; ?>
        
    </div>


    <footer class="footer">
        &copy; <?php echo date("Y") ?>. All right reserved.
    </footer>

    <script src="../../code/main.js">
    </script>
</body>

</html>