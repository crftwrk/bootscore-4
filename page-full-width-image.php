<?php
    /**
     * Template Name: Full Width Image
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
                    <!-- Content -->
                    <?php the_content(); ?>
                    <!-- .entry-content -->
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