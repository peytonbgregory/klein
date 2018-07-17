<?php
/**
 * The template for displaying all pages.
 */

get_header(); ?>
	<div class="container-fluid" id="sub-page">
        <div class="container" id="sub-page-inner">
            <div class="row">
                <div class="col-md-8">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main" role="main">
                
                            <?php while ( have_posts() ) : the_post(); ?>
                
                                <?php get_template_part( 'content', 'page' ); ?>
                
                            <?php endwhile; // end of the loop. ?>
                
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .col-md-8 -->
                
                <div class="col-md-4 hidden-xs">
                    <?php get_sidebar(); ?>
                </div><!-- .col-md-4 -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- container fluid-->
<?php get_footer(); ?>
