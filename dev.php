

<style>
#masthead{
    /* display: none; */
}
.storefront-breadcrumb{
    /* display: none; */

}
.hp-view__wrap{
    height:100vh;

    }
}
    </style>

<?php /* Template Name: Homepage development */ get_header(); ?>

<!-- <div class="welcome">
<img class="welcome__img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/hero-daisey.jpg"/>
</div> -->

<div class="hp-view__wrap">

</div>

<?php include get_theme_file_path( 'main-navigation.php' );?>


<div class="container">
<?php the_content(); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
