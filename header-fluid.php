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
		<!-- Loads the internal WP jQuery -->
		<?php wp_enqueue_script('jquery'); ?>
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
    	
    	<!-- Preloader -->
    	<div id="preloader" class="bg-light align-items-center justify-content-center position-fixed">
			<div id="status" class="spinner-grow" role="status">
  				<span class="sr-only">Loading...</span>
			</div>
    	</div>
    	<!-- Preloader End -->	
	
		<div id="page" class="site">
		
		<header id="masthead" class="site-header">
			
			<div id="to-top"></div>
			
			<nav id="nav-main" class="navbar navbar-expand-lg navbar-light bg-light fixed-top border-bottom">
				
				<div class="container-fluid">
					
					<!-- SVG Logo -->
					<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo/logo.svg" alt="logo" class="logo" ></a>
					
					<!-- Customizer Title & Logo -->
					<!--<div class="navbar-brand">
						<div class="site-branding">
							<?php
								the_custom_logo();
								if ( is_front_page() && is_home() ) :
									?>
							<strong class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></strong>
							<?php
								else :
									?>
							<strong class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></strong>
							<?php
								endif;
								$bootscore_description = get_bloginfo( 'description', 'display' );
								if ( $bootscore_description || is_customize_preview() ) :
									?>
							<br>
							<small class="site-description text-secondary"><?php echo $bootscore_description; /* WPCS: xss ok. */ ?></small>
							<?php endif; ?>
						</div>
					</div>-->
					
					<!-- Mobile Top Module -->
					<div class="top-module-1 flex-fill justify-content-end d-flex pr-3 d-lg-none">
						<?php if ( is_active_sidebar( 'top-nav-module' )) : ?>
						<div>
							<?php dynamic_sidebar( 'top-nav-module' ); ?>
						</div>
						<?php endif; ?>
					</div>
					
					<!-- Mobile Search Module -->
					<div class="top-nav-search-mobile justify-content-end pr-3 d-lg-none">
						<a class="btn btn-secondary btn-sm" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i></a>
						<div class="dropdown-menu bg-light border-top-0 border-left-0 border-right-0 border-bottom-1 rounded-0" aria-labelledby="dropdownMenuLink">
							<div class="container">
								<?php if ( is_active_sidebar( 'top-nav-search' )) : ?>
								<div>
									<?php dynamic_sidebar( 'top-nav-search' ); ?>
								</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
					
					<!-- Toggler -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bootscore-navbar-collapse" aria-controls="#cw-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
						<div class="toggler-icon-animated"><span></span><span></span><span></span><span></span></div>
					</button>
					
					<!-- Nav Walker -->
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
					
				</div>
				<!-- container -->
			</nav>
			
		</header>
		<!-- #masthead -->
		
		<div id="content" class="site-content container pb-5">