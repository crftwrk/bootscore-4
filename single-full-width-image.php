<?php
	/*
	 * Template Name: Full width image
	 * Template Post Type: post
	 */
	  
	 get_header();  ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="row">
			<div class="col">
				<header class="entry-header">
					<?php the_post(); ?>
					<!-- Featured Image-->
					<div class="width-100 height-75 bg-dark text-light align-items-end dflex mb-3"
					<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
					<div id="featured-full-image" class"page-full-image" style="background-image: url('<?php echo $thumb['0'];?>')">
						<!-- Title -->
						<div class="container align-items-end d-flex h-100 pb-3">
							<?php the_title('<h1>', '</h1>'); ?>
						</div>
					</div>
				</header>
				<div class="entry-content">
					<!-- Category Badge -->
					<div class="mb-2">
						<?php
							$thelist = '';
							$i = 0;
							foreach( get_the_category() as $category ) {
							    if ( 0 < $i ) $thelist .= ' ';
							    $thelist .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="badge badge-secondary">' . $category->name.'</a>';
							    $i++;
							}
							echo $thelist;
							?>
					</div>
					<!-- Meta -->
					<p class="entry-meta">
						<small class="text-secondary">
						<?php
							bootscore_date();
							_e(' by ', 'bootscore'); the_author_posts_link();
							bootscore_comment_count();
							bootscore_edit();							
							 ?>
						</small>
						<!-- .entry-meta -->
					</p>
					<!-- Content -->
					<?php the_content(); ?>
					<!-- .entry-content -->
				</div>
				<footer class="entry-footer">
					<!-- Tags & Edit Link -->
					<p>
						<?php 
							bootscore_tags(); 
							
							?>
					</p>
					<!-- Pagination -->
					<nav aria-label="Page navigation example">
						<ul class="pagination justify-content-center">
							<li class="page-item">
								<?php previous_post_link('%link'); ?>
							</li>
							<li class="page-item">
								<?php next_post_link('%link'); ?>
							</li>
						</ul>
					</nav>
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
<?php get_footer(); ?>