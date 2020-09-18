<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 */

?>

	

<footer>

    <div class="bootscore-footer bg-light pt-5 pb-3">
        <div class="container">
            
            <!-- Top Footer Widget -->
            <?php if ( is_active_sidebar( 'top-footer' )) : ?>
                <div>
                    <?php dynamic_sidebar( 'top footer' ); ?>
                </div>
            <?php endif; ?>            
            
            <div class="row">

                <!-- Footer 1 Widget -->
                <div class="col-md-6 col-lg-3">
                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div>
                            <?php dynamic_sidebar( 'footer-1' ); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Footer 2 Widget -->
                <div class="col-md-6 col-lg-3">
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div>
                            <?php dynamic_sidebar( 'footer-2' ); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Footer 3 Widget -->
                <div class="col-md-6 col-lg-3">
                    <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                        <div>
                            <?php dynamic_sidebar( 'footer-3' ); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Footer 4 Widget -->
                <div class="col-md-6 col-lg-3">
                    <?php if ( is_active_sidebar( 'footer-4' )) : ?>
                        <div>
                            <?php dynamic_sidebar( 'footer-4' ); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <!-- Footer Widgets End -->

            </div>
            
            <!-- Footer Menu -->
            <div id="footer-menu" class="footer-menu">
           		<nav class="nav">
            		<?php
               			wp_nav_menu( array(
               				'theme_location'    => 'secondary',
               				'depth'             => 1,
               				'container'         => 'div',
               				'container_class'   => 'footer-menu',
               				'container_id'      => 'footer-menu',
               				'menu_class'        => 'nav',
               				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
               				'walker'            => new WP_Bootstrap_Navwalker(),
               			) );
               		?>  
				</nav>
            </div>
            <!-- Footer Menu -->
            
        </div>
    </div>
    <div class="bootscore-info bg-light text-muted border-top py-2 text-center">
        <div class="container">
            <small>&copy;&nbsp;<?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></small>    
        </div>
    </div>

</footer>

    <!-- Cookie Consent -->
    <div id="gdpr-box" class="cookies-accept bg-light text-center py-3">
		<div class="container">
			<?php esc_html_e('Cookies help us deliver our services. By using our services, you agree to our use of cookies.', 'bootscore'); ?>&nbsp;<a href="<?php echo get_home_url(); ?><?php esc_html_e('/privacy-policy', 'bootscore'); ?>" class="privacylink"><?php esc_html_e('More Information', 'bootscore'); ?></a>&nbsp;&nbsp;&nbsp;<button class="gdpr-button-accept btn btn-primary btn-sm"><?php esc_html_e('Accept', 'bootscore'); ?></button>		
		</div>
	</div>
    <!-- Cookie Consent End -->

    <!-- To Top Button -->
    <div class="top-button">
        <a href="#to-top" class="btn btn-primary shadow"><i class="fas fa-chevron-up"></i><a>
    </div>
    <!-- To Top Button End -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
