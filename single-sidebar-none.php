<?php
	/*
	 * Template Name: No Sidebar
	 * Template Post Type: post
	 */
	  
	 get_header();  ?>
<div id="content" class="site-content container py-5 mt-4">
    <div id="primary" class="content-area">

        <?php the_breadcrumb(); ?>

        <main id="main" class="site-main">

            <header class="entry-header">
                <?php the_post(); ?>

                <div class="mb-2">
                    <?php
						$thelist = '';
						$i = 0;
						foreach( get_the_category() as $category ) {
						    if ( 0 < $i ) $thelist .= ' ';
						    $thelist .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" class="badge badge-primary">' . $category->name.'</a>';
						    $i++;
						}
						echo $thelist;
						?>
                </div>

                <?php the_title('<h1>', '</h1>'); ?>
                <p class="entry-meta">
                    <small class="text-muted">
                        <?php
							bootscore_date();
							_e(' by ', 'bootscore'); the_author_posts_link();
							bootscore_comment_count();
							bootscore_edit();							
							 ?>
                    </small>
                </p>
                <?php bootscore_post_thumbnail(); ?>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <footer class="entry-footer">
                <!-- Tags & Edit Link -->
                <p>
                    <?php bootscore_tags(); ?>
                </p>

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

            </footer>

            <?php comments_template(); ?>

        </main><!-- #main -->

    </div><!-- #primary -->
</div><!-- #content -->
<?php get_footer(); ?>
