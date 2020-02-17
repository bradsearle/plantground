<?php get_header(); ?>
<?php include get_theme_file_path( 'head.php' );?>

<?php include get_theme_file_path( 'includes/search-nav.php' );?>

<div class="product-single__bg">
<div class="product-single__container">

	<main role="main">
		<!-- section -->
		<section>

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
				<?php endif; ?>
				<!-- /post thumbnail -->

				<!-- post title -->
				<h1>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
				<!-- /post title -->




				<?php the_content(); // Dynamic Content ?>



			</article>
			<!-- /article -->

			<?php endwhile; ?>

			<?php else: ?>



			<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

</div>
			</div>



<?php get_footer(); ?>