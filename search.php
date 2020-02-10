<?php get_header(); ?>

<?php include get_theme_file_path( 'head.php' );?>
<?php include get_theme_file_path( 'includes/search-nav.php' );?>


	<main role="main">
		<!-- section -->
		<section>

			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
