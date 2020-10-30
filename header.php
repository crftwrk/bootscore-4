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



                    <!--
                        <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        -->

                    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#bootscore-navbar-collapse" aria-controls="#cw-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <div class="toggler-icon-animated"><span></span><span></span><span></span><span></span></div>
                    </button>



                    <!--<div class="collapse navbar-collapse" id="bootscore-navbar-collapse">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>

      
                        </div>-->

                    <?php
						wp_nav_menu( array(
							'theme_location'    => 'primary',
							'depth'             => 3,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse justify-content-end',
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
