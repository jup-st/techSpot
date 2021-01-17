<?php
    session_start();
    if(!isset($_SESSION['cart'])) {
    header("location: ../code/shop.php");
    exit();
}
include("../admin/confs/config.php");
?>
<!doctype html>
    <html>
        <head>
            <title>View Cart</title>
            <link rel="stylesheet" href="style.css">
        </head>
    <body>
        <h1>View Cart</h1>
        <br>
        <div class="sidebar">
            <a href="../code/shop.php">&laquo; Continue Shopping</a></li>
            <br><br>
            <a href="clear-cart.php" class="del">&times; Clear Cart</a></li>            
        </div>
        <div class="main">
            <table>
                <tr>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Price</th>
                </tr>
                <?php
                $total = 0;
                foreach($_SESSION['cart'] as $id => $qty):
                $result = mysqli_query($conn, "SELECT * FROM items WHERE id=$id");
                $row = mysqli_fetch_assoc($result);
                $total += $row['price'] * $qty;
                ?>
                <tr>
                    <td><?php echo $row['brand'] ?> <?php echo $row['series'] ?></td>
                    <td><?php echo $qty ?></td>
                    <td>$<?php echo $row['price'] ?></td>
                    <td>$<?php echo $row['price'] * $qty ?></td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3" align="right"><b>Total:</b></td>
                    <td>$<?php echo $total; ?></td>
                </tr>
            </table>
            <div class="order-form">
                <h2>Order Now</h2>
                <form action="submit-order.php" method="post">
                    <label for="name">Your Name:</label><br>
                    <input type="text" name="name" id="name">
                    <br><br>
                    <label for="email">Email:</label><br>
                    <input type="text" name="email" id="email">
                    <br><br>
                    <label for="phone">Phone:</label><br>
                    <input type="text" name="phone" id="phone">
                    <br><br>
                    <label for="address">Address:</label><br>
                    <textarea name="address" id="address"></textarea>
                    <br><br>
                    <button type="submit">Submit Order</button>
                    <br><br>
                    <a href="../code/shop.php">Continue Shopping</a>
                </form>
            </div>
        </div>
        <p>.</p>  
        
    </body>
    <footer>
        &copy; <?php echo date("Y") ?>. All right reserved.
    </footer>
</html>