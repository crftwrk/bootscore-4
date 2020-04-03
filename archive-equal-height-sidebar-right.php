<?php
	/**
	 * Archive Template: Equal Height Sidebar Right
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package Bootscore
	 */
	
	get_header();
	?>
<div id="content" class="site-content container py-5 mt-5">
    <div id="primary" class="content-area">

        <div class="row">
            <div class="col">

                <main id="main" class="site-main">

                    <header class="page-header mb-4">
                        <?php
                            the_archive_title( '<h1 class="page-title">', '</h1>' );
                            the_archive_description( '<p class="archive-description">', '</p>' );
                        ?>
                    </header>

                    <div class="row">
                        <?php if (have_posts() ) : ?>
                        <?php while (have_posts() ) : the_post(); ?>
                        <div class="col-md-12 col-lg-6 mb-4">
                            <div class="card h-100">

                                <?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>

                                <div class="card-body d-flex flex-column">
                                    
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
                                    
                                    <h2 class="blog-post-title">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h2>
                                    
                                    <?php if ( 'post' === get_post_type() ) : ?>
                                    <small class="text-secondary mb-2">
                                        <?php
									bootscore_date();
									bootscore_author();
									bootscore_comments();
									bootscore_edit();
									?>
                                    </small>
                                    <?php endif; ?>
                                    
                                    <div class="card-text mt-auto">
                                        <?php the_excerpt(); ?> <a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read more', 'bootscore'); ?></a>
                                    </div>
                                   
                                    <?php bootscore_tags(); ?>
                                    
                                </div>
                            </div><!-- card -->
                        </div><!-- col -->
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                  
                    <div>
                        <?php 
						if (function_exists("bootscore_pagination"))
						{
						  	bootscore_pagination();
						}
						?>
                    </div>

                </main><!-- #main -->

            </div><!-- col -->
            <?php get_sidebar(); ?>
        </div><!-- row -->

    </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
