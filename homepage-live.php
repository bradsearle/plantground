
<?php 
/**
 * 	Template Name: /homepage-live
 *
 *
*/





get_header(); // This fxn gets the header.php file and renders it ?>


<style>
.test{
	display: none;
}
</style>



<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
	
</body>
</html>