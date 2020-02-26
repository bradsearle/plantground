<?php get_header(); ?>
<?php include get_theme_file_path( 'head.php' );?>
<?php include get_theme_file_path( 'includes/search-nav.php' );?>

<div class="container">
	<main role="main">
		<section>
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
				<?php endif; ?>

				<h1>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
				<?php the_content(); // Dynamic Content ?>
			</article>
			<?php endwhile; ?>
			<?php else: ?>
			<?php endif; ?>
		</section>
	</main>

</div>



<?php get_footer(); ?>