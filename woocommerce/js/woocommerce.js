jQuery(document).ready(function ($) {


    // Header WooCommerce
    $(function () {
        'use strict'

        $('[data-toggle="offcanvas"]').on('click', function () {
            $('.offcanvas-collapse-left').toggleClass('open')
        })
    })

    $(function () {
        'use strict'

        $('[data-toggle="cart"]').on('click', function () {
            $('.cart-right').toggleClass('open')
        })
    })

    $('.bootscore-cart').on('click', function () {
        $('.offcanvas-collapse-left').removeClass('open')
    });

    $('.toggler-icon').on('click', function () {
        $('.cart-right').removeClass('open')
    });

    $('.bootscore-cart, .toggler-icon, .add_to_cart_button, .single_add_to_cart_button').on('click', function () {
        $('.opac').addClass('visible')
    });


    $('.menu-header, .cart-header').on('click', function () {
        $('.opac').removeClass('visible')
    });

    $('.navbar-nav>li>a:not(.dropdown-toggle), a.dropdown-item').on('click', function () {
        $('.offcanvas-collapse-left').removeClass('open')
        $('.opac').removeClass('visible')
    })

    $('.bootscore-cart, .single_add_to_cart_button:not(.product_type_variable)').click(function () {
        $(".cart-right").toggleClass("open");
    });

    $('.opac').on('click touchstart', function () {
        $('.cart-right, .offcanvas-collapse-left').removeClass('open')
        $('.opac').removeClass('visible')
    });
    // Header WooCommerce End



    // Review Checkbox
    $('.comment-form-cookies-consent').addClass('custom-control custom-checkbox');
    $('#wp-comment-cookies-consent').addClass('custom-control-input');
    $('.comment-form-cookies-consent label').addClass('custom-control-label');
    // Review Checkbox End



}); // jQuery End
