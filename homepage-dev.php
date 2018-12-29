
<?php 
/**
 * 	Template Name: /homepage-dev
 *
 *
*/




get_header(); // This fxn gets the header.php file and renders it ?>


<!-- <style>
.hp-live{
	display: none;
}
</style>
 -->


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
	
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
<!-- <?php echo do_shortcode('[product_page id="10"]'); ?> -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>