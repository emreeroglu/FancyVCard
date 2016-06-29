<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<?php 
		while ( have_posts() ) : the_post();
	?>
		
		<div class = "jumbotron">
			<h1><?php the_title(); ?> </h1>
			<?php the_content(); ?>
		</div>
		
	<?php 
		endwhile; 
		wp_get_theme()->get_page_templates()
	?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->


<?php get_footer(); ?>
