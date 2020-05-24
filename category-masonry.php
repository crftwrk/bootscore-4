<?php
	/**
	 * Category Template: Masonry
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
	 *
	 * @package Bootscore
	 */
	
	get_header();
	?>

<div id="content" class="site-content container py-5 mt-5">
    <div id="primary" class="content-area">

        <main id="main" class="site-main">

            <header class="page-header mb-4">
                <h1><?php single_cat_title(); ?></h1>
                <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
            </header>

            <div class="card-columns">
                <?php if (have_posts() ) : ?>
                <?php while (have_posts() ) : the_post(); ?>
                <div class="card mb-4">

                    <?php the_post_thumbnail('medium', array('class' => 'card-img-top')); ?>

                    <div class="card-body d-flex flex-column">
                        <div class="mb-2">
                            <!-- Category Badge -->
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
                        <!-- Title -->
                        <h2 class="blog-post-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <!-- Meta -->
                        <?php if ( 'post' === get_post_type() ) : ?>
                        <small class="text-muted mb-2">
                            <?php
								bootscore_date();
								bootscore_author();
								bootscore_comments();
								bootscore_edit();
								?>
                        </small>
                        <?php endif; ?>
                        <!-- Excerpt & Read more -->
                        <div class="card-text mt-auto">
                            <?php the_excerpt(); ?> <a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read more', 'bootscore'); ?></a>
                        </div>

                        <?php bootscore_tags(); ?>
                    </div>
                </div>

                <?php endwhile; ?>
                <?php endif; ?>

            </div><!-- card-columns -->

            <div>
                <?php 
                    if (function_exists("bootscore_pagination"))
					{
                    bootscore_pagination();
				    }
				?>
            </div>

        </main><!-- #main -->

    </div><!-- #primary -->
</div><!-- #content -->
<?php
get_footer();
