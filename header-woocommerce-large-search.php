<?php
	/**
	 * The header for our theme
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package Bootscore
	 */
	
	?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon//favicon-16x16.png">
    <!-- Loads the internal WP jQuery -->
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Preloader -->
    <div id="preloader" class="bg-light align-items-center justify-content-center position-fixed">
        <div id="status" class="spinner-grow text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Preloader End -->

    <div id="page" class="site">

        <header id="masthead" class="site-header">

            <div id="to-top"></div>

            <nav id="nav-main" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

                <div class="container">



                    <!-- Toggler -->
                    <button class="navbar-toggler" type="button" data-toggle="offcanvas">
                        <div class="toggler-icon"><span></span><span></span><span></span><span></span></div>
                    </button>

                    <!-- Mobile Search Module -->
                    <div class="top-nav-search-mobile ml-2 d-lg-none">
                        <a class="btn btn-link text-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i></a>
                        <div class="dropdown-menu bg-light border-top-0 border-left-0 border-right-0 border-bottom-0 rounded-0" aria-labelledby="dropdownMenuLink">
                            <div class="container">
                                <?php if ( is_active_sidebar( 'top-nav-search' )) : ?>
                                <div>
                                    <?php dynamic_sidebar( 'top-nav-search' ); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- SVG Logo -->
                    <a class="woocommerce navbar-brand d-md-none" href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo/logo-sm.svg" alt="logo" class="logo"></a>
                    <a class="woocommerce navbar-brand d-none d-md-block" href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo/logo.svg" alt="logo" class="logo"></a>


                    <div class="navbar-collapse offcanvas-collapse-left" id="navbar">

                        <a class="menu-header bg-light d-block p-3 d-lg-none" data-toggle="offcanvas" href="javascript:void(0)">
                            <div class="d-flex align-items-center">
                                <span class="mr-auto"><?php esc_html_e('Close menu' , 'bootscore'); ?></span> <i class="fas fa-times"></i>
                            </div>
                        </a>


                        <div class="vert-menu p-3 p-lg-0 ml-auto h-100">
                            <!-- Nav Walker -->
                            <?php
                                wp_nav_menu( array(
               	                    'theme_location'    => 'primary',
               	                    'depth'             => 2,
               	                    'container'         => 'div',
               	                    'container_class'   => 'navbar-collapse offcanvas-collapse',
               	                    'container_id'      => 'bootscore-navbar-collapse',
               	                    'menu_class'        => 'nav navbar-nav',
               	                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
               	                    'walker'            => new WP_Bootstrap_Navwalker(),
                                ) );
                            ?>
                        </div>

                    </div>



                    <!-- Mobile Top Module -->
                    <div class="top-module-1 flex-fill justify-content-end d-flex mr-2 d-lg-none">
                        <?php if ( is_active_sidebar( 'top-nav-module' )) : ?>
                        <div>
                            <?php dynamic_sidebar( 'top-nav-module' ); ?>
                        </div>
                        <?php endif; ?>
                    </div>



                    <!-- Woocommerce Mobile -->
                    <!-- User -->
                    <div class="d-lg-none">
                        <a class="btn btn-link text-secondary pr-0 mr-1" title="Mein Konto" href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>"><i class="fas fa-user"></i></a>
                        <!-- Mini Cart Header Mobile -->
                        <span class="bootscore-cart btn btn-link text-secondary pr-0">
                            <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
									$count = WC()->cart->cart_contents_count;
									?><span class="cart-content" title="<?php _e( 'bootscore-cart ansehen' ); ?>"><?php 
									if ( $count > 0 ) {
									    ?>
                                <span class="cart-content-count bagde badge-danger"><?php echo esc_html( $count ); ?></span>
                                <?php
									}
									    ?></span>
                            <?php } ?>
                        </span>
                        <!-- Mini Cart Header Mobile End-->
                    </div>
                    <!-- Woocommerce Mobile End -->





                    <!-- Large Top Module -->
                    <div class="top-module-1 d-none d-lg-block">
                        <?php if ( is_active_sidebar( 'top-nav-module' )) : ?>
                        <div>
                            <?php dynamic_sidebar( 'top-nav-module' ); ?>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- Large Top Search Module -->
                    <div class="top-nav-search d-none d-lg-block">
                        <?php if ( is_active_sidebar( 'top-nav-search' )) : ?>
                        <div>
                            <?php dynamic_sidebar( 'top-nav-search' ); ?>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- User -->
                    <div class="d-none d-lg-inline">
                        <a class="btn btn-outline-secondary ml-2" title="Mein Konto" href="<?php echo get_permalink( wc_get_page_id( 'myaccount' ) ); ?>"><i class="fas fa-user"></i></a>
                    </div>

                    <!-- Mini Cart Header-->
                    <span class="bootscore-cart btn btn-outline-secondary d-none d-lg-block ml-2">
                        <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
									$count = WC()->cart->cart_contents_count;
									?><span class="cart-content" title="<?php _e( 'bootscore-cart ansehen' ); ?>"><?php 
									if ( $count > 0 ) {
									    ?>
                            <span class="cart-content-count bagde badge-danger"><?php echo esc_html( $count ); ?></span>
                            <?php
									}
									    ?></span>
                        <?php } ?>
                    </span>
                    <!-- Mini Cart Header End-->



                    <div class="opac"></div>

                    <div class="cart-right" id="cart">

                        <a class="cart-header bg-light d-block p-3" data-toggle="cart" href="javascript:void(0)">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-chevron-left"></i> <span class="ml-auto"><?php esc_html_e('Continue shopping' , 'bootscore'); ?></span>
                            </div>
                        </a>



                        <div class="cart-list h-100">

                            <h2 class="p-3"><?php esc_html_e('Cart' , 'bootscore'); ?></h2>





                            <!--Cart Offcanvas -->
                            <?php
                            // echo '<ul>'; // (Used for testing)
                                //echo '<li><a class="parents mini-cart-count" href="'.wc_get_cart_url().'"><i class="fa fa-shopping-cart"></i> Cart - ';
                                ## Ajax refresh: Cart subtotal near the cart icon
                                //echo '<span id="mcart-stotal">'.WC()->cart->get_cart_subtotal().'</span>';
                                //echo '</a>';
                                echo '<div class="mega_menu cart">';
                                echo '<div class="mega_sub">';
                                echo '<span id="mcart-widget">';
                                ## Ajax refresh: Mini cart widget
                                woocommerce_mini_cart();
                                echo '</span>';
                                echo '</div></div>';
                            
                                // echo '</li></ul>'; // (Used for testing)
                            ?>
                            <!-- Cart Offcanvas End -->





                        </div>


                        <div class="cart-footer position-absolute d-block border-top text-center bg-white">
                            <div class="p-3">

                                <div class="font-weight-bold lead text-success">
                                    <?php esc_html_e( 'Subtotal', 'woocommerce' ); ?>:
                                    <?php
                                    //echo '<div class="">Zwischensumme: ';
                                    echo '<span id="mcart-stotal">'.WC()->cart->get_cart_subtotal().'</span>';     
                                    ?>

                                </div>

                                <p class="text-secondary"><?php esc_html_e('To find out your shipping cost , Please proceed to checkout.' , 'bootscore'); ?></p>
                                <a href="<?php echo get_permalink( wc_get_page_id( 'cart' ) ); ?>" class="btn btn-outline-primary btn-block"><?php esc_html_e('Edit cart' , 'bootscore'); ?></a>
                                <a href="<?php echo get_permalink( wc_get_page_id( 'checkout' ) ); ?>" class="btn btn-primary btn-block"><?php esc_html_e('Proceed to checkout' , 'bootscore'); ?></a>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- container -->
            </nav>

        </header>
        <!-- #masthead -->
