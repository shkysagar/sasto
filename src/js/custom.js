$(function () {
    $('.item-inner').matchHeight();
});

/*============= End Left Nav =============*/
jQuery(document).off("click", ".link-wishlist");

jQuery(document).on("click", ".link-wishlist", function () {

    var b = yith_wcwl_l10n.ajax_url;
    var opts = {
        add_to_wishlist: jQuery(this).data("product-id"),
        product_type: jQuery(this).data("product-type"),
        action: "add_to_wishlist"
    };
    mgk_yith_ajax_wish_list(jQuery(this), b, opts);
    return false;
});

mgk_yith_ajax_wish_list = function (obj, ajaxurl, opts) {
    jQuery.ajax({
        type: "POST",
        url: ajaxurl,
        data: "product_id=" + opts.add_to_wishlist + "&" + jQuery.param(opts),
        dataType: 'json',
        success: function (resp) {
            response_result = resp.result,
                response_message = resp.message;
            //alert(response_result+"----"+response_message);
            jQuery('body div#notification').remove();
            var ntop = jQuery('#wpadminbar') !== undefined ? jQuery('#wpadminbar').height() : 50;
            if (response_result == 'true') {

                if (MGK_ADD_TO_WISHLIST_SUCCESS_TEXT !== undefined)
                    jQuery('<div id="notification" class="notification"><div class="alert alert-success">' + MGK_ADD_TO_WISHLIST_SUCCESS_TEXT + '</div></div>').prependTo('body ');
                jQuery('body div#notification').css('top', ntop + 'px');
                jQuery('body div#notification > div').fadeIn('show');
                jQuery('html,body').animate({
                    // scrollTop: 0
                }, 300000000);
            } else if (response_result == 'exists') {
                if (MGK_ADD_TO_WISHLIST_EXISTS_TEXT !== undefined)
                    jQuery('<div id="notification" class="notification"><div class="alert alert-warning">' + MGK_ADD_TO_WISHLIST_EXISTS_TEXT + '</div></div>').prependTo('body ');
                jQuery('body div#notification').css('top', ntop + 'px');
                jQuery('body div#notification > div').fadeIn('show');
                jQuery('html,body').animate({
                    // scrollTop: 0
                }, 300000000);

            }
            setTimeout(function () {
                removeNft();
            }, 10000000000);

        }
    });
};

var removeNft = function () {
    if (jQuery("#notification") !== undefined)
        jQuery("#notification").remove();
};

jQuery(document).on("click", "#notification img.close", function () {
    removeNft();
});

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})