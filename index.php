<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="code/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- Header -->
    <header>
        <button class="navi_button" onclick="openNav()">☰</button>
        <!-- menu_bar -->
        <div class="_100_navi">
            <a href="#" class="logo_link">
                <div class="logo"></div>
            </a>
            <div class="navi" id="mySidepanel">
                <a class="closebtn" onclick="closeNav()" style="color: rgb(255, 0, 0);"><span class="fa fa-close" aria-hidden="true"></span> Close</a>
                <a href="code/shop.php" class="a_home">Shop</a>
                <a href="code/contact.php">Contact</a>
                <!-- <a class="a_input">  -->
                    <input type="search" placeholder="search..">
                    <span class="fa fa-search" aria-hidden="true"></span>
                <!-- </a> -->
                <a><i class="fa fa-shopping-cart fa-lg"></i></a>
            </div>
        </div>
        <!-- first_image_block -->
        <div class="first_blog container-fluid">
            <div class="row row_class h-100">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 my-auto"></div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 container-fluid my-auto">

                    <div class="row row_class h-100">
                        <div class="bowls col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 my-auto">

                            <h5>GOOD DAY!</h5>
                            <h3>SAVE ON THE JOY OF NEW TECH</h3>
                            <p>
                            The thrill of new tech is now yours during our biggest sale of the year.
                            </p>
                            <a href="code/shop.php"><button>Shop Now</button></a>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <!-- What Can We Help You start -->
    <div class="container title_blog ">
        <div class="row row_class h-100">
            <div class="col-2 col-sm-2 col-md-4 col-lg-4 col-xl-4 my-auto div_line"></div>
            <div class="col-8 col-sm-8 col-md-4 col-lg-4 col-xl-4 my-auto">
                <p class="h3">What Can We Help You?</p>
                <p><h6>Find the PCs that's right for you</h6></p>
            </div>
            <div class="col-2 col-sm-2 col-md-4 col-lg-4 col-xl-4 my-auto div_line"></div>
        </div>
    </div>
    <!-- What Can We Help You end -->

    <!-- Categories Start -->
    <div class="container-fluid second_blog">
        <div class="row buttom_padding">
            <a href="code/shop.php" class="col-10 col-sm-10 col-md-5 col-lg-5 col-xl-5 one img_div"></a>
            <a href="code/shop.php" class="col-10 col-sm-10 col-md-5 col-lg-5 col-xl-5 two img_div"></a>
        </div>
    </div>
    <!-- Categories End -->


    

    <!-- footer -->
    <div class="fifth_blog">
        <div class="img_div"></div>
        <div class="posation_div">
            <h3>NEWSLETTER</h3>
            <p>Get Latest Information</p>
            <input placeholder="Your Email Address" type="email">
            <button><i class="fa fa-telegram"></i> Subscribe</button>
        </div>
    </div>
 
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


    <script src="code/main.js">
    </script>
    <script src="code/jquery.min.js">
    </script>
    <script src="bootstrap/js/bootstrap.min.js">
    </script>

</body>

</html>