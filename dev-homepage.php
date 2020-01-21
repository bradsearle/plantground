<?php /* Template Name: dev-homepage */ ?>





<?php get_header(); ?>

<?php include get_theme_file_path( 'head.php' );?>
<?php include get_theme_file_path( 'includes/search-nav.php' );?>



<!-- <div class="welcome">
  <img class="welcome__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-daisey.jpg" />
  <?php echo get_template_directory_uri(); ?>
  
  (template img)
  
</div> -->



<div class="products__container">
  <main role="main">
    <section>
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; ?>
      <?php else: ?>
      <?php endif; ?>
    </section>
  </main>
</div>







<?php get_footer(); ?>