<?php
	/**
	 * Template Name: Left Sidebar
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package Bootscore
	 */
	
	get_header();
	?>	
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="row">
			<!-- sidebar -->
			<?php get_sidebar(); ?>
			<div class="col-md-8 order-first order-md-last">
				<header class="entry-header">
					<?php the_post(); ?>
					<!-- Category -->
					<?php the_category(', ') ?><?php the_terms( $post->ID, 'isopost_categories', ' ', ' / ' ); ?>
					<!-- Title -->
					<?php the_title('<h1>', '</h1>'); ?>
					<!-- Featured Image-->
					<?php bootscore_post_thumbnail(); ?>
					<!-- .entry-header -->
				</header>
				<div class="entry-content">
					<!-- Content -->
					<?php the_content(); ?>
					<!-- .entry-content -->
               		<?php wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bootscore' ),
					'after'  => '</div>',
					) );
					?>
				</div>
				<footer class="entry-footer">
					<!-- Edit Link -->
					<?php bootscore_edit();?>
					<!-- .entry-footer -->
				</footer>
				<!-- Comments -->
				<?php comments_template(); ?>
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