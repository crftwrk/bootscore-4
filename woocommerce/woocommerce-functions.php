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



// Disable all WooCommerce Styles
//add_filter( 'woocommerce_enqueue_styles', '__return_false' );
// Disable all WooCommerce Styles End



// Minicart Header
function my_header_add_to_cart_fragment( $fragments ) {
 
    ob_start();
    $count = WC()->cart->cart_contents_count;
    ?><span class="cart-content" title="<?php _e( 'View your shopping cart' ); ?>"><i class="fas fa-shopping-cart"></i><?php
    if ( $count > 0 ) {
        ?>
        <span class="cart-content-count badge badge-danger"><?php echo esc_html( $count ); ?></span><span class="cart-total ml-2 d-none d-md-inline"><?php echo WC()->cart->get_cart_total(); ?></span>
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







// Understrap



// Exit if accessed directly.
/*defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'understrap_woocommerce_support' );
if ( ! function_exists( 'understrap_woocommerce_support' ) ) {

	function understrap_woocommerce_support() {
		add_theme_support( 'woocommerce' );

		// Add New Woocommerce 3.0.0 Product Gallery support.
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-slider' );

		// hook in and customizer form fields.
		add_filter( 'woocommerce_form_field_args', 'understrap_wc_form_field_args', 10, 3 );
	}
}*/









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
if ( ! function_exists( 'understrap_wc_form_field_args' ) ) {
	function understrap_wc_form_field_args( $args, $key, $value = null ) {
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



// Understrap end



// Ajax on Single Product Page, Probleme mit variablen Produkten und quantity
//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
//add_action( 'woocommerce_single_product_summary', 'woocommerce_template_loop_add_to_cart', 30 );
// Ajax on Single Product Page End







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


/**
 * Rename "home" in breadcrumb
 */
/*add_filter( 'woocommerce_breadcrumb_defaults', 'wcc_change_breadcrumb_home_text' );
function wcc_change_breadcrumb_home_text( $defaults ) {
    // Change the breadcrumb home text from 'Home' to 'Apartment'
	$defaults['home'] = 'test';
	return $defaults;
}*/






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











// Ajax add to cart https://quadmenu.com/add-to-cart-with-woocommerce-and-ajax-step-by-step/


if (!defined('ABSPATH')) {
  die('-1');
}
if (!defined('QLWCAJAX_PLUGIN_NAME')) {
  define('QLWCAJAX_PLUGIN_NAME', 'Ajax add to cart for WooCommerce');
}
if (!defined('QLWCAJAX_PLUGIN_VERSION')) {
  define('QLWCAJAX_PLUGIN_VERSION', '1.1.4');
}
if (!defined('QLWCAJAX_PLUGIN_FILE')) {
  define('QLWCAJAX_PLUGIN_FILE', __FILE__);
}
if (!defined('QLWCAJAX_PLUGIN_DIR')) {
  define('QLWCAJAX_PLUGIN_DIR', __DIR__ . DIRECTORY_SEPARATOR);
}
if (!defined('QLWCAJAX_DOMAIN')) {
  define('QLWCAJAX_DOMAIN', 'qlwcajax');
}
if (!defined('QLWCAJAX_WORDPRESS_URL')) {
  define('QLWCAJAX_WORDPRESS_URL', 'https://wordpress.org/plugins/woo-ajax-add-to-cart/');
}
if (!defined('QLWCAJAX_REVIEW_URL')) {
  define('QLWCAJAX_REVIEW_URL', 'https://wordpress.org/support/plugin/woo-ajax-add-to-cart/reviews/?filter=5#new-post');
}
if (!defined('QLWCAJAX_DEMO_URL')) {
  define('QLWCAJAX_DEMO_URL', 'https://quadlayers.com/portfolio/woocommerce-direct-checkout/?utm_source=qlwcajax_admin');
}
if (!defined('QLWCAJAX_PURCHASE_URL')) {
  define('QLWCAJAX_PURCHASE_URL', QLWCAJAX_DEMO_URL);
}
if (!defined('QLWCAJAX_SUPPORT_URL')) {
  define('QLWCAJAX_SUPPORT_URL', 'https://quadlayers.com/account/support/?utm_source=qlwcajax_admin');
}
if (!defined('QLWCAJAX_GROUP_URL')) {
  define('QLWCAJAX_GROUP_URL', 'https://www.facebook.com/groups/quadlayers');
}

if (!class_exists('QLWCAJAX')) {

  class QLWCAJAX {

    protected static $instance;

    function ajax_dismiss_notice() {

      if ($notice_id = ( isset($_POST['notice_id']) ) ? sanitize_key($_POST['notice_id']) : '') {

        update_user_meta(get_current_user_id(), $notice_id, true);

        wp_send_json($notice_id);
      }

      wp_die();
    }

    function add_product_js() { 

      wp_register_script('woo-ajax-add-to-cart', get_template_directory_uri(__FILE__) . '/woocommerce/js/woo-ajax-add-to-cart.js', array('jquery', 'wc-add-to-cart'), QLWCAJAX_PLUGIN_VERSION, true);

      if (function_exists('is_product') && is_product()) {
        wp_enqueue_script('woo-ajax-add-to-cart');
      }
    }

    function add_notices() {
      if (!get_user_meta(get_current_user_id(), 'qlwcajax-update-notice', true)) {
        ?>
        <div id="qlwcajax-admin-rating" class="qlwcajax-notice notice is-dismissible" data-notice_id="qlwcajax-update-notice">
          <div class="notice-container" style="padding-top: 10px; padding-bottom: 10px; display: flex; justify-content: left; align-items: center;">
            <div class="notice-image">
              <img style="border-radius:50%;max-width: 90px;" src="<?php echo plugins_url('/assets/qlwcdc.png', QLWCAJAX_PLUGIN_FILE); ?>" alt="<?php echo esc_html(QLWCAJAX_PLUGIN_NAME); ?>>">
            </div>
            <div class="notice-content" style="margin-left: 15px;">
              <p>
                <?php printf(esc_html__('Hello! Do you want to improve your sales?', 'woo-ajax-add-to-cart'), QLWCAJAX_PLUGIN_NAME); ?>
                <br/>
                <?php esc_html_e('We want to invite you to meet our WooCommerce Direct Checkout plugin which allows you to simplifies the checkout process by skipping the shopping cart page and other tips.', 'woo-ajax-add-to-cart'); ?>
              </p>
              <a href="<?php echo esc_url(QLWCAJAX_PURCHASE_URL); ?>" class="button-primary" target="_blank">
                <?php esc_html_e('More Info!', 'woo-ajax-add-to-cart'); ?>
              </a>
              <?php if (current_user_can('activate_plugins')): ?>
                <a href="<?php echo wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=woocommerce-direct-checkout'), 'install-plugin_woocommerce-direct-checkout'); ?>" class="button-secondary" target="_blank">
                  <?php esc_html_e('Install', 'woo-ajax-add-to-cart'); ?>
                </a>
              <?php endif; ?>
            </div>				
          </div>
        </div>
        <script>
          (function ($) {
            $('.qlwcajax-notice').on('click', '.notice-dismiss', function (e) {
              e.preventDefault();
              var notice_id = $(e.delegateTarget).data('notice_id');
              $.ajax({
                type: 'POST',
                url: ajaxurl,
                data: {
                  notice_id: notice_id,
                  action: 'qlwcajax_dismiss_notice',
                },
                success: function (response) {
                  console.log(response);
                },
              });
            });
          })(jQuery);
        </script>
        <?php
      }
    }

    function add_action_links($links) {

      $links[] = '<a target="_blank" href="' . QLWCAJAX_PURCHASE_URL . '">' . esc_html__('Premium', 'woo-ajax-add-to-cart') . '</a>';

      return $links;
    }

    function init() {
      add_action('wp_enqueue_scripts', array($this, 'add_product_js'), 99);
      add_action('wp_ajax_qlwcajax_dismiss_notice', array($this, 'ajax_dismiss_notice'));
      add_action('admin_notices', array($this, 'add_notices'));
      add_filter('plugin_action_links_' . plugin_basename(QLWCAJAX_PLUGIN_FILE), array($this, 'add_action_links'));
    }

    public static function instance() {
      if (!isset(self::$instance)) {
        self::$instance = new self();
        self::$instance->init();
      }
      return self::$instance;
    }

  }

  QLWCAJAX::instance();
}
// Ajax add to cart End





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



