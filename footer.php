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

	</div><!-- #content -->

<footer>

    <div class="bootscore-footer bg-light pt-5 pb-3 border-top">
        <div class="container">
            <div class="row">

                <!-- Footer Widgets -->
                <div class="col-md-3">
                    <?php if ( is_active_sidebar( 'footer-1' )) : ?>
                        <div>
                            <?php dynamic_sidebar( 'footer-1' ); ?>
                        </div>
                        <?php endif; ?>
                </div>

                <!-- Footer 2 Widget -->
                <div class="col-md-3">
                    <?php if ( is_active_sidebar( 'footer-2' )) : ?>
                        <div>
                            <?php dynamic_sidebar( 'footer-2' ); ?>
                        </div>
                        <?php endif; ?>
                </div>

                <!-- Footer 3 Widget -->
                <div class="col-md-3">
                    <?php if ( is_active_sidebar( 'footer-3' )) : ?>
                        <div>
                            <?php dynamic_sidebar( 'footer-3' ); ?>
                        </div>
                        <?php endif; ?>
                </div>

                <!-- Footer 4 Widget -->
                <div class="col-md-3">
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
               				'depth'             => 2,
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
    <div class="bootscore-info bg-light text-secondary border-top pt-2 pb-2 text-center">
        <div class="container">
            <small>&copy;<?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></small>    
        </div>
    </div>

    <!-- Google Analytics -->
    <!--<script> 
    	var gaProperty = 'UA-123456789-X'; 
    	var disableStr = 'ga-disable-' + gaProperty; 
    	if (document.cookie.indexOf(disableStr + '=true') > -1) { 
        	window[disableStr] = true;
    	} 
    	function gaOptout() { 
        	document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/'; 
        	window[disableStr] = true; 
        	// alert('Google Analytics has been disabled'); 
    	} 
    	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ 
            	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), 
        	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) 
    	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga'); 

    	ga('create', 'UA-123456789-X', 'auto'); 
    	ga('set', 'anonymizeIp', true); 
    	ga('send', 'pageview'); 
	</script>-->
    <!-- Google Analytics End -->

</footer>

    <!-- Cookie Consent -->
    <div id="gdpr-box" class="cookies-accept bg-light text-center border-top pt-3 pb-3">
		<div class="container">
			<?php esc_html_e('Cookies help us deliver our services. By using our services, you agree to our use of cookies.', 'bootscore'); ?>&nbsp;<a href="<?php bloginfo('site_url'); ?><?php esc_html_e('/privacy', 'bootscore'); ?>" class="privacylink"><?php esc_html_e('More Information', 'bootscore'); ?></a>&nbsp;&nbsp;&nbsp;<button class="gdpr-button-accept btn btn-primary btn-sm"><?php esc_html_e('Accept', 'bootscore'); ?></button>		
		</div>
	</div>
    <!-- Cookie Consent End -->

    <!-- To Top Button -->
    <a href="#to-top" class="d-flex top-button align-items-center justify-content-center bg-light border rounded-circle">
        <div>
            <i class="fas fa-arrow-up"></i>
        </div>
    <a>
    <!-- To Top Button End -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
