<?php get_header(); ?>



	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<?php the_content(); // Dynamic Content ?>

	<?php endwhile; ?>

	<?php else: ?>

	

	<?php endif; ?>

	
	<!-- /section -->
	

<?php get_sidebar(); ?>

<?php get_footer(); ?>




