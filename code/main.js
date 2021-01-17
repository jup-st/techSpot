function openNav() {
    document.getElementById("mySidepanel").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidepanel").style.width = "0px";
}



function readMore(clicked_id) {
    // var readMoreBtn = document.getElementById("readMoreBtn");
    var showMore = document.getElementById("showMore").innerHTML;
    var showMore2 = document.getElementById("showMore2").innerHTML;
    var showMore3 = document.getElementById("showMore3").innerHTML;

    if (clicked_id == "readMoreBtn1") {
        window.alert(showMore);
    } else if (clicked_id == "readMoreBtn2") {
        window.alert(showMore2);
    } else {
        window.alert(showMore3);
    }

}


// filter
// $(document).ready(function() {

//     filter_data();

//     function filter_data() {
//         $('.filter_data').html('<div id="loading" style="" ></div>');
//         var action = '../admin/items/fetch_data';
//         var brand = get_filter('brand');
//         var price_range = get_filter('price_range');
//         var ramSize = get_filter('ramSize');
//         var storageType = get_filter('storageType');
//         var storageRange = get_filter('storageRange');
//         var processor = get_filter('processor');
//         var graphicsCard = get_filter('graphicsCard');
//         var screenSize = get_filter('screenSize');
//         var resolution = get_filter('resolution');
//         var touchScreen = get_filter('touchScreen');
//         var backlitKeyboard = get_filter('backlitKeyboard');
//         var itemType = get_filter('itemType');

//         $.ajax({
//             url: "fetch_data.php",
//             method: "POST",
//             data: {
//                 action: action,
//                 brand: brand,
//                 price_range: price_range,
//                 ramSize: ramSize,
//                 storageType: storageType,
//                 storageRange: storageRange,
//                 processor: processor,
//                 graphicsCard: graphicsCard,
//                 screenSize: screenSize,
//                 resolution: resolution,
//                 touchScreen: touchScreen,
//                 backlitKeyboard: backlitKeyboard,
//                 itemType: itemType
//             },
//             success: function(data) {
//                 $('.filter_data').html(data);
//             }
//         });
//     }

//     function get_filter(class_name) {
//         var filter = [];
//         $('.' + class_name + ':checked').each(function() {
//             filter.push($(this).val());
//         });
//         return filter;
//     }

//     $('.common_selector').click(function() {
//         filter_data();
//     });

// });