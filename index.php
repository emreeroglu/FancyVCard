<?php get_header(); ?>

	<?php 
		while ( have_posts() ) : the_post();
	?>
		
		<div class = "jumbotron">
			<h2><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p><?php the_excerpt(); ?></p>
		</div>
		
	<?php 
		endwhile; 
	?>

	

<?php get_footer(); ?>
