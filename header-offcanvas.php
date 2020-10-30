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
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/safari-pinned-tab.svg" color="#007bff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Loads the internal WP jQuery -->
    <?php wp_enqueue_script('jquery'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Preloader -->
    <div id="preloader" class="align-items-center justify-content-center position-fixed">
        <div id="status" class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Preloader End -->
    <div id="page" class="site">
        <header id="masthead" class="site-header">
            <div id="to-top"></div>

            <nav id="nav-main" class="navbar navbar-expand-lg bg-light navbar-light fixed-top">

                <div class="container px-sm-3">

                    <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/logo/logo.svg" alt="logo" class="logo"></a>

                    <div class="top-widget order-lg-3 flex-grow-1 flex-lg-grow-0 d-flex justify-content-end">
                        <?php if ( is_active_sidebar( 'top-nav-module' )) : ?>
                        <div>
                            <?php dynamic_sidebar( 'top-nav-module' ); ?>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- Mobile Search Module -->
                    <div class="top-nav-search-mobile d-lg-none">
                        <a class="btn btn-outline-secondary btn-sm ml-2" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i></a>
                        <div class="dropdown-menu bg-light border-top-0 border-left-0 border-right-0 border-bottom-0 rounded-0" aria-labelledby="dropdownMenuLink">
                            <div class="container">
                                <?php if ( is_active_sidebar( 'top-nav-search' )) : ?>
                                <div class="w-100">
                                    <?php dynamic_sidebar( 'top-nav-search' ); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Toggler -->
                    <button class="navbar-toggler ml-2" type="button" data-toggle="offcanvas" data-target="#bootscore-navbar-collapse" aria-controls="#bootscore-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="toggler-icon-animated"><span></span><span></span><span></span><span></span></div>
                    </button>

                    <!-- Nav Walker -->
                    <?php
                       wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'navbar-collapse offcanvas-collapse justify-content-end bg-light',
                        'container_id'      => 'bootscore-navbar-collapse',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                       ) );
                    ?>

                    <!-- Large Top Search Module -->
                    <div class="top-nav-search d-none d-lg-block order-lg-3">
                        <?php if ( is_active_sidebar( 'top-nav-search' )) : ?>
                        <div>
                            <?php dynamic_sidebar( 'top-nav-search' ); ?>
                        </div>
                        <?php endif; ?>
                    </div>

                </div><!-- . container -->

            </nav>

        </header><!-- #masthead -->


        <div class="opac z11"></div>
