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
                <a href="#" class="a_home">Manage Items</a>
                <a href="../categories/cat-list.php">Manage Categories</a>
                <a href="../order/orders.php">Manage Order <i class="fa fa-shopping-cart fa-lg"></i></a>
                <input type="search" placeholder="search..">
                <span class="fa fa-search" aria-hidden="true"></span>
                <a href="../auth/logout.php"><i class="fa fa-power-off" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="first_blog">
            <p>Home>>Items</p>
        </div>

        <div class="add">
        <a href="item-new.php" >
            <button title="Add New Item">Add <i class="fa fa-plus"></i></button>
        </a>
        </div>

    </header><br>

    <!-- Second Blog Link start -->
    <div class="second_blog">
        <div>
                <a href="item-list.php" class="a_home">All </a> <span>/</span>
                <?php
                    include("../confs/config.php");     
                    $items = mysqli_query($conn, "SELECT * FROM categories WHERE type = 'Item Type' ");
                    while($row = mysqli_fetch_assoc($items)): 
                    $type = $row['cat_name'];                            
                ?>                       
                    <input type="checkbox" class="common_selector itemType" value="<?php echo $row['cat_name']; ?>">    
                    <?php echo $row['cat_name']; ?>
                    <spam style="padding-right: 14px;"> / </spam>
                <?php endwhile; ?>   
        </div>
    </div><br>
    <!-- Second Blog Link end -->

    <!-- filter -->

    <div class="float_categories"> 

        <div class="list-group">
            <?php
                include  ('../confs/config.php');
                $types = mysqli_query($conn, "SELECT * FROM type_categories");
                while($row_tc = mysqli_fetch_assoc($types)): 
                $type_name = $row_tc['name'];
            ?>
            <h3><label for="<?php echo $row_tc['name'] ?>"><?php echo $row_tc['name'] ?></label></h3>
            <div class="check_list">
                <?php
                    $items = mysqli_query($conn, "SELECT * FROM categories WHERE type = '$type_name' ");
                    while($row = mysqli_fetch_assoc($items)): 
                    $type = $row['cat_name'];                            
                ?>                      
                <div class="list-group-item checkbox">  
                    <input type="checkbox" class="common_selector <?php echo $row_tc['typeName']; ?>" value="<?php echo $row['cat_name']; ?>">    
                    <span style="padding-right: 14px;"></span> 
                    <?php echo $row['cat_name']; ?>
                    
                </div>
                <?php endwhile; ?>                    
            </div>
            <?php endwhile?>
        </div>
    </div>
    <!-- shop items start -->
    <div class="float_items">                         
        <div class="container-fluid">
                <div class="row filter_data">
                    
                </div>
        </div>
    </div>                        
    <!-- shops items end -->


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
    
<script src="../../code/main.js"></script>  
<script src="../../code/jquery.min.js">    
    //  var txt = "See Filter Result!";
    // var result = [];
    // document.getElementById('select').onclick = function() {
    // var checkboxes = document.getElementsByName('inputCheckBox');
    // for (var checkbox of checkboxes) {
    //     if (checkbox.checked)
    //         result.push (checkbox.value);
    //         console.log(result);
    //         document.getElementById('hello').innerHTML=  txt.link("item-list.php?checked=" + result);
    //     }
    // }        
</script>
<script>
    $(document).ready(function(){

filter_data();

function filter_data()
{
    var action = 'fetch_data';
    var brand = get_filter('brand');
    var price_range = get_filter('price_range');
    var ramSize = get_filter('ramSize');
    var storageType = get_filter('storageType');
    var storageRange = get_filter('storageRange');
    var processor = get_filter('processor');
    var graphicsCard = get_filter('graphicsCard');
    var screenSize = get_filter('screenSize');
    var resolution = get_filter('resolution');
    var touchScreen = get_filter('touchScreen');
    var backlitKeyboard = get_filter('backlitKeyboard');
    var itemType = get_filter('itemType');
    $.ajax({
        url:"fetch_data.php",
        method:"POST",
        data:{
            action:action, brand:brand, price_range: price_range,  ramSize: ramSize, storageType:storageType, storageRange: storageRange, 
            processor: processor, graphicsCard: graphicsCard, screenSize: screenSize, resolution: resolution, touchScreen: touchScreen, backlitKeyboard: backlitKeyboard,
            itemType: itemType
        },
        success:function(data){
            $('.filter_data').html(data);
        }
    });
}

function get_filter(class_name)
{
    var filter = [];
    $('.'+class_name+':checked').each(function(){
        filter.push($(this).val());
    });
    return filter;
}

$('.common_selector').click(function(){
    filter_data();
});

});
</script>
</body>

</html>