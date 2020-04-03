<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootscore
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found">
				<div class="page-404">
							
					<h1>404</h1>
					<!-- Remove this line and place some widgets -->
					<p><?php esc_html_e('Place some widgets here and remove this line in the 404.php.', 'bootscore'); ?></p>					
					<!-- 404 Widget -->
					<?php if ( is_active_sidebar( '404-page' )) : ?>
               		<div><?php dynamic_sidebar( '404-page' ); ?></div>
               		<?php endif; ?>
					<a class="my-3 btn btn-outline-primary" href="<?php echo esc_url( home_url() ); ?>" role="button"><?php esc_html_e('Back Home &raquo;', 'bootscore'); ?></a>
               		
				</div>
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();


