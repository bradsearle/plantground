<?php /* Template Name: Homepage development */ get_header(); ?>

<?php include get_theme_file_path( 'head.php' );?>


<div class="welcome">
<img class="welcome__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-daisey.jpg"/>
</div>


<div class="container">
<?php the_content(); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
