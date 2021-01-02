<?php /* Template Name: hmmm */ get_header(); ?>

<?php include get_theme_file_path('includes/head.php'); ?>
test

		<?php
		if ( have_posts() ) :

			get_template_part( 'loop' );

		else :

			get_template_part( 'content', 'none' );

		endif;
		?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
