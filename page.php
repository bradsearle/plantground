<?php get_header(); ?>
<?php include get_theme_file_path( 'head.php' );?>
<?php include get_theme_file_path( 'includes/search-nav.php' );?>



<div class="container">

<main role="main">
	
	<section>

		<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); ?>

			<?php comments_template( '', true ); // Remove if you don't want comments ?>

			

		</article>

		<?php endwhile; ?>

		<?php else: ?>

		<article>
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
		</article>
		<?php endif; ?>
	</section>
</main>
		</div>

<?php get_footer(); ?>