

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
.deletea2{
    display:none;
    }
.site-search {
     
    display: none!important;
    }

    .primary-navigation{
        display: none!important;
    }







    .animated-title {
    color: #222;
    margin-top:200px;
    font-family: Roboto, Arial, sans-serif;
    height: 520px;
    left: 100%;
    position: absolute;
    transform: translate(-100%);
    width: 100%;
}
.animated-title > div {
  height: 500px;
  overflow: hidden;
  position: absolute;
  width: 100%;
}
.animated-title > div div {
    font-size: 7vw;
    white-space:nowrap;
    padding: 0px;
  position: absolute;
}
.animated-title > div div span {
  display: block;
}
.animated-title > div.text-top {
  border-bottom: 1px solid #000;
 
}


.ohy {
  animation: showTopText 1s;
  animation-delay: 0.7s;
  animation-fill-mode: forwards;
  bottom: 0;
  transform: translate(0, 100%);
}

    



    </style>

 <?php /* Template Name: Homepage development */ get_header(); ?>


<div class="hp-view__wrap">
<div class="container">



  <div class="heading animatable">backyard suculents and</div>
  <div class="heading animatable2 liner">cactus for sale</div>


<!-- <div class="animated-title">
  <div class="text-top">
    <div class="ohy">
      <span>backyard sucuulents and</span>
      <span>cactus for sale</span>
    </div>
  </div>

</div> -->












</div>
</div>




<div class="container">
<?php the_content(); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
