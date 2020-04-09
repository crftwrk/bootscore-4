<?php
/**
 * Woocommerce functions and definitions
 *
 * @package Bootscore
 */


// Woocommerce Templates
function mytheme_add_woocommerce_support() {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );
// Woocommerce Templates END


// Woocommerce Lightbox
add_action( 'after_setup_theme', 'bootscore' );

function bootscore() {
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
// Woocommerce Lightbox


//Scripts and Styles
function wc_scripts() {


	// WooCommerce CSS	
	wp_enqueue_style( 'woocommerce', get_template_directory_uri() . '/woocommerce/style.css');
	

	// WooCommerce JS
	wp_enqueue_script( 'woocommerce-script', get_template_directory_uri() . '/woocommerce/js/woocommerce.js', array(), '20151215', true );
	
	
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wc_scripts' );
//Scripts and styles End


// Minicart Header
function my_header_add_to_cart_fragment( $fragments ) {
 
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><span class="cart-content"><i class="fas fa-shopping-bag"></i><?php
    if ( $count > 0 ) {
        ?>
        <span class="cart-content-count badge badge-danger"><?php echo esc_html( $count ); ?></span><span class="cart-total ml-1 d-none d-md-inline"><?php echo WC()->cart->get_cart_total(); ?></span>
        <?php            
    }
        ?></span><?php
 
    $fragments['span.cart-content'] = ob_get_clean();
     
    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'my_header_add_to_cart_fragment' );
// Minicrt Header END


// Minicrt Offcanvas
add_filter( 'woocommerce_add_to_cart_fragments', 'wc_mini_cart_ajax_refresh' );
function wc_mini_cart_ajax_refresh( $fragments ){
    ## 1. Refreshing mini cart subtotal amount
    $fragments['#mcart-stotal'] = '<span id="mcart-stotal">'.WC()->cart->get_cart_subtotal().'</span>';

    ## 2. Refreshing cart subtotal
    ob_start();
    echo '<span id="mcart-widget">';
    woocommerce_mini_cart();
    echo '</span>';
    $fragments['#mcart-widget'] = ob_get_clean();

    return $fragments;
}
// Minicrt Offcanvas END


// Forms

/**
 * Filter hook function monkey patching form classes
 * Author: Adriano Monecchi http://stackoverflow.com/a/36724593/307826
 *
 * @param string $args Form attributes.
 * @param string $key Not in use.
 * @param null   $value Not in use.
 *
 * @return mixed
 */
if ( ! function_exists( 'bootscore_wc_form_field_args' ) ) {
	function bootscore_wc_form_field_args( $args, $key, $value = null ) {
		// Start field type switch case.
		switch ( $args['type'] ) {
			/* Targets all select input type elements, except the country and state select input types */
			case 'select':
				// Add a class to the field's html element wrapper - woocommerce
				// input types (fields) are often wrapped within a <p></p> tag.
				$args['class'][] = 'form-group';
				// Add a class to the form input itself.
				$args['input_class']       = array( 'form-control', 'input-lg' );
				$args['label_class']       = array( 'control-label' );
				$args['custom_attributes'] = array(
					'data-plugin'      => 'select2',
					'data-allow-clear' => 'true',
					'aria-hidden'      => 'true',
					// Add custom data attributes to the form input itself.
				);
				break;
			// By default WooCommerce will populate a select with the country names - $args
			// defined for this specific input type targets only the country select element.
			case 'country':
				$args['class'][]     = 'form-group single-country';
				$args['label_class'] = array( 'control-label' );
				break;
			// By default WooCommerce will populate a select with state names - $args defined
			// for this specific input type targets only the country select element.
			case 'state':
				// Add class to the field's html element wrapper.
				$args['class'][] = 'form-group';
				// add class to the form input itself.
				$args['input_class']       = array( '', 'input-lg' );
				$args['label_class']       = array( 'control-label' );
				$args['custom_attributes'] = array(
					'data-plugin'      => 'select2',
					'data-allow-clear' => 'true',
					'aria-hidden'      => 'true',
				);
				break;
			case 'password':
			case 'text':
			case 'email':
			case 'tel':
			case 'number':
				$args['class'][]     = 'form-group';
				$args['input_class'] = array( 'form-control', 'input-lg' );
				$args['label_class'] = array( 'control-label' );
				break;
			case 'textarea':
				$args['input_class'] = array( 'form-control', 'input-lg' );
				$args['label_class'] = array( 'control-label' );
				break;
			case 'checkbox':
				$args['label_class'] = array( 'custom-control custom-checkbox' );
				$args['input_class'] = array( 'custom-control-input', 'input-lg' );
				break;
			case 'radio':
				$args['label_class'] = array( 'custom-control custom-radio' );
				$args['input_class'] = array( 'custom-control-input', 'input-lg' );
				break;
			default:
				$args['class'][]     = 'form-group';
				$args['input_class'] = array( 'form-control', 'input-lg' );
				$args['label_class'] = array( 'control-label' );
				break;
		} // end switch ($args).
		return $args;
	}
}

if ( ! is_admin() && ! function_exists( 'wc_review_ratings_enabled' ) ) {
	/**
	 * Check if reviews are enabled.
	 *
	 * Function introduced in WooCommerce 3.6.0., include it for backward compatibility.
	 *
	 * @return bool
	 */
	function wc_reviews_enabled() {
		return 'yes' === get_option( 'woocommerce_enable_reviews' );
	}

	/**
	 * Check if reviews ratings are enabled.
	 *
	 * Function introduced in WooCommerce 3.6.0., include it for backward compatibility.
	 *
	 * @return bool
	 */
	function wc_review_ratings_enabled() {
		return wc_reviews_enabled() && 'yes' === get_option( 'woocommerce_enable_review_rating' );
	}
}

// Forms end


// WooCommerce Breadcrumb
add_filter( 'woocommerce_breadcrumb_defaults', 'jk_woocommerce_breadcrumbs' );
function jk_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' &nbsp;&#47;&nbsp; ',
            'wrap_before' => '<nav class="breadcrumb mb-4" itemprop="breadcrumb">',
            'wrap_after'  => '</nav>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}
// WooCommerce Breadcrumb End


// Optional Telephone
if (!function_exists( 'evolution_phone_no_pflicht' ) ) :

function evolution_phone_no_pflicht( $address_fields ) {
    $address_fields['billing_phone']['required'] = false;
    return $address_fields;
}
add_filter( 'woocommerce_billing_fields', 'evolution_phone_no_pflicht', 10, 1 );
endif;
// Optional Telephone End


// Bootstrap Billing forms
function iap_wc_bootstrap_form_field_args ($args, $key, $value) { 
  
  $args['input_class'][] = 'form-control'; 
  return $args; 
}
add_filter('woocommerce_form_field_args','iap_wc_bootstrap_form_field_args', 10, 3);
// Bootstrap Billing forms End


// Ship to a different address closed by default
add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false' );
// Ship to a different address closed by default End


// Remove cross-sells at cart
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
// Remove cross-sells at cart End


// Remove CSS and/or JS for Select2 used by WooCommerce, see https://gist.github.com/Willem-Siebe/c6d798ccba249d5bf080.
add_action( 'wp_enqueue_scripts', 'wsis_dequeue_stylesandscripts_select2', 100 );

function wsis_dequeue_stylesandscripts_select2() {
    if ( class_exists( 'woocommerce' ) ) {
        wp_dequeue_style( 'selectWoo' );
        wp_deregister_style( 'selectWoo' );

        wp_dequeue_script( 'selectWoo');
        wp_deregister_script('selectWoo');
    } 
} 
// Remove CSS and/or JS for Select2 END


// Hide empty Offcanvas cart-footer
add_filter( 'body_class', 'add_body_class_for_cart_items' );
function add_body_class_for_cart_items( $classes ) {
    if( ! WC()->cart->is_empty() )
        $classes[] = 'has_items';

    return $classes;
}

add_action( 'wp_footer', 'add_body_class_for_ajax_add_to_cart' );
function add_body_class_for_ajax_add_to_cart() {
    ?>
        <script type="text/javascript">
            (function($){
                $('body').on( 'added_to_cart', function(){
                    if( ! $(this).hasClass('has_items') )
                        $(this).addClass('has_items');
                        console.log('added_to_cart');
                });
            })(jQuery);
        </script>
    <?php
}
// Hide empty Offcanvas cart-footer End