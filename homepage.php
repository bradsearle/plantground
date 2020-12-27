<?php /* Template Name: homepage 


<?php get_sidebar(); ?>
  <?php echo get_template_directory_uri(); ?>
<?php get_footer(); ?>
*/ ?>



<?php get_header(); ?>

<style>
#delete{
  display: none;
}
#delete2{
  display: none;
}
</style>



<section>



  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <?php the_content(); ?>

  <?php endwhile; ?>

  <?php else: ?>


  <?php endif; ?>

<!-- <div class="hp-img">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cactus-one.png" />
 
 

</div> -->

</section>