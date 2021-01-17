<?php include("../confs/auth.php") ?>
<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <?php
        include("../confs/config.php");
        $result = mysqli_query ($conn, "SELECT * FROM categories" );
    ?>
    <header>
        <button class="navi_button" onclick="openNav()">☰</button>
        <!-- menu_bar -->
        <div class="_100_navi">
            <a href="../index.php" class="logo_link">
                <div class="logo"> </div>
            </a>
            <div class="navi" id="mySidepanel">
                <a class="closebtn" onclick="closeNav()" style="color: rgb(255, 0, 0);"><span class="fa fa-close" aria-hidden="true"></span> Close</a>
                <a href="../items/item-list.php" class="a_home">Manage Items</a>
                <a href="#">Manage Categories</a>
                <a href="../order/orders.php">Manage Order <i class="fa fa-shopping-cart fa-lg"></i></a>
                <input type="search" placeholder="search..">
                <span class="fa fa-search" aria-hidden="true"></span>
                <a href="../auth/logout.php"><i class="fa fa-power-off" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="first_blog">
            <p>Home>>Categories</p>
        </div>

    </header>

    <!-- Second Blog Link start -->
    
        <div class="second_blog">
            <div class="list">
                <div>
                    <a href="#" class="a_home">All</a> <br><br><br>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <a href="#" title = "<?php echo $row ['remark']?>">
                            <img src="icons/<?php echo $row['cat_icon'] ?>"></img>
                            <span class="tab"></span> 
                            <?php echo $row['cat_name']?>
                        </a>
                        <span class="tab"></span> 
                        <select name="options" id="options" onChange="window.location.href=this.value">
                            <option value="#"> / </option>
                            <option value="cat-edit.php?id=<?php echo $row['id']?>" class="edit"> Edit</option>
                            <option value = "cat-delete.php?id=<?php echo $row['id'] ?>" class="delete"> &#xf146; Delete </option>
                        </select>
                        <br><br>
                    <?php endwhile?>
                </h3>
            </div>
            
        </div>
    
    <!-- Second Blog Link end -->
    <a href="cat-new.php"><button class="new_cat">Add New Categories</button></a>


    <!-- footer -->
    <footer>
        <div class="eight_blog">
            <div>
                <h3>About</h3>
                <p>Allow us to introduce you to three lesser-known, but no less important businesses within. With that, cheers to simple, beautiful products and experience, no matter their form.</p>
            </div>
            <div>
                <h3>Categories</h3>
                <ul>
                    <li>Laptop</li>
                    <li>Desktop</li>
                    <li>Accessories</li>
                </ul>
            </div>
            <div>
                <h3>Information</h3>
                <ul>
                    <li>Shop</li>
                    <li>Contact</li>
                </ul>
            </div>
            <div>
                <h3>Follow Us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Instagram</li>
                </ul>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright c 2020 TECHSPOT Co.Ltd. All Right Reserved R</p>
        </div>
    </footer>

    <script src="../../code/main.js">
    </script>
</body>

</html>