<?php
get_header(); ?>
	<div id="primary" class="content-area col-sm-12 col-md-8">
		<main id="main" class="site-main" role="main">
        <?php include 'content-films.php';
        if ( have_posts() ) : 
             while ( have_posts() ) : the_post(); 
				get_template_part( 'content', get_post_format() ); 
			 endwhile; 
			 unite_paging_nav(); 
		 endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
