<?php
	/**
	 * Template Name: No Title
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package Bootscore
	 */
	
	get_header();
	?>	
<div id="primary" class="content-area no-title">
	<main id="main" class="site-main">
		<div class="row">
			<div class="col">
				<div class="entry-content">
					<?php the_post(); ?>
					<?php the_content(); ?>
               		<?php wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bootscore' ),
					'after'  => '</div>',
					) );
					?>
				</div>
				<!-- col -->
			</div>
			<!-- row -->
		</div>
		<!-- #main -->	
	</main>
	<!-- #primary -->	
</div>
<?php
get_footer();