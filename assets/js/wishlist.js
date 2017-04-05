var wish_list = new Array();

$(document).ready(function () {
    if (localStorage.getItem("w_suppliers") !== null) {
        wishlist_suppliers = JSON.parse(localStorage.getItem("w_suppliers"));

        for (i = 0; i < wishlist_suppliers.length; i++) {            
//            init wishlist - TODO: get suppliers by id CLIENT SIDE
            $supplier_str = "<tr class='wishlist-item' id='list_id_" + wishlist_suppliers[i]['id'] + "'><td class='w-pname'>" + wishlist_suppliers[i]['name'] + "</td><td class='w-price'>$ " + wishlist_suppliers[i]['price'] + "</td><td class='w-premove' wpid='" + wishlist_suppliers[i]['id'] + "'>x</td></tr>";
            
            jQuery("#wish_list_item").append($supplier_str);
            wish_list.push(wishlist_suppliers[i]);
            count_items_in_wishlist_update();
        }
    }
})

jQuery(function () {
    jQuery(".wishlist").on("click", function () {
        $data = "";
        $supplier_id = jQuery(this).attr("supplier_id");
        $supplier_name = jQuery(this).attr("supplier_name");
        $supplier_price = jQuery(this).attr("supplier_price");
        $supplier = {
            'id': $supplier_id, 
            'name': $supplier_name,
            'price': $supplier_price
            }
        
        if (jQuery.inArray($supplier_id, wish_list) == -1) {
            $supplier_str = "<tr class='wishlist-item' id='list_id_" + $supplier_id + "'><td class='w-pname'>" + $supplier_name + "</td><td class='w-price'>$ " + $supplier_price + "</td><td class='w-premove' wpid='" + $supplier_id + "'>x</td></tr>";
            jQuery("#wish_list_item").append($supplier_str);
            wish_list.push($supplier);
            localStorage.setItem("w_suppliers", JSON.stringify(wish_list)); //save to localstorage
            show_message("supplier added");
        }
        count_items_in_wishlist_update();
    });
    jQuery("#wish_list_item").on("click", ".w-premove", function () {
        $supplier_id = jQuery(this).attr("wpid");
        jQuery("#list_id_" + $supplier_id).remove();
        wish_list = jQuery.grep(wish_list, function (n, i) {
            return n != $supplier_id;
        });
        wish_list = wish_list.filter(function(el) {
            return el.id !== $supplier_id;
        })
        localStorage.setItem("w_suppliers", JSON.stringify(wish_list));
        show_message("supplier removed");
        count_items_in_wishlist_update();
    });
});

function show_message($msg) {
    jQuery("#msg").html($msg);
    $top = Math.max(0, ((jQuery(window).height() - jQuery("#msg").outerHeight()) / 2) + jQuery(window).scrollTop()) + "px";
    $left = Math.max(0, ((jQuery(window).width() - jQuery("#msg").outerWidth()) / 2) + jQuery(window).scrollLeft()) + "px";
    jQuery("#msg").css("left", $left);
    jQuery("#msg").animate({
        opacity: 0.6
        , top: $top
    }, 400, function () {
        jQuery(this).css({
            'opacity': 1
        });
    }).show();
    setTimeout(function () {
        jQuery("#msg").animate({
            opacity: 0.6
            , top: "0px"
        }, 400, function () {
            jQuery(this).hide();
        });
    }, 1000);
}

function count_items_in_wishlist_update() {
    jQuery("#listitem").html(wish_list.length);
    if (wish_list.length > 1) {
        jQuery("#p_label").html("suppliers");
    }
    else {
        jQuery("#p_label").html("supplier");
    }
}