<?php /* Template Name: homepage 


<?php get_sidebar(); ?>

<?php get_footer(); ?>
*/ ?>





<?php get_header(); ?>


<section>



  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <?php the_content(); ?>

  <?php endwhile; ?>

  <?php else: ?>


  <?php endif; ?>

</section>