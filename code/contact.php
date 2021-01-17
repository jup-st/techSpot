<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../admin/items/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <header>
        <button class="navi_button" onclick="openNav()">☰</button>
        <!-- menu_bar -->
        <div class="_100_navi">
            <a href="../index.php" class="logo_link">
                <div class="logo"> </div>
            </a>
            <div class="navi" id="mySidepanel">
                <a class="closebtn" onclick="closeNav()" style="color: rgb(255, 0, 0);"><span class="fa fa-close" aria-hidden="true"></span> Close</a>
                <a href="../code/shop.php" class="a_home">Shop</a>
                <a href="#">Contact</a>
                <!-- <a class="a_input">  -->
                <input type="search" placeholder="search..">
                    <span class="fa fa-search" aria-hidden="true"></span>
                <!-- </a> -->
                <a><i class="fa fa-shopping-cart fa-lg"></i></a>
            </div>
        </div>
    </header>

    <!-- fifth img blog start -->
    <div class="fifth_blog">
        <div class="img_div"></div>
        <div class="posation_div">
            <h3>NEWSLETTER</h3>
            <p>Get Latest Information</p>
            <input placeholder="Your Email Address">
            <button><i class="fa fa-telegram"></i> Subscribe</button>
        </div>
    </div>
    <!-- fifth img blog end -->

    <!-- sixth_blog start -->
    <div class="container sixth_blog">
        <div class="row row_class h-100">
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 my-auto i_1 img_div">
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 my-auto i_2 img_div">
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 my-auto i_3 img_div">
            </div>
        </div>
    </div>
    <!-- sixth_blog end -->

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

    <script src="main.js">
    </script>
</body>

</html>