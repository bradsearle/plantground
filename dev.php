<?php /* Template Name: Homepage DEV */ get_header(); ?>



<?php include get_theme_file_path('head.php'); ?>




<style>

.hp-view__wrap{
    height:100vh;

    }



    .test{
        height: 60vh;
        background-position: 92% -15px;
    background-size: 54% auto;

    /* background-image: url("/wp-content/uploads/homepage/cactus1.png");
    background-repeat: no-repeat;
    background-size:contain; */
    }

.homegrown__background8{


    width: 100%;
}

    </style>




<div class="hp-view__wrap">
<div class="container">
 



<div class="test animatablel liner">
<div class="homegrown__background8">

  <div class="heading animatable">backyard suculents and</div>
  <div class="heading animatable2">cactus for sale</div>
</div>
</div>
  












</div>
</div>




<div class="container">
<?php the_content(); ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
