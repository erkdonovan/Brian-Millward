<?php /* Template Name: Home Page */  ?>

<?php get_header(); ?>


<div class="hero-image" style="background-image: url('<?php the_field('home_hero_image'); ?>');">
  <div class="home-open-text">
    <h1>Brian Millward</h1>
    <h2><?php the_field('home_opening_lines'); ?></h2> 
  </div>
</div>


<!-- <div class="innerWrapper">

  <div class="home-zoology">
    <img src="<?php the_field('home_zoo_image'); ?>" alt="">
    <h3>Zoology</h3>
    <p><?php the_field('home_zoo_text'); ?></p>
  </div>

  <div class="home-comedy">
    <img src="<?php the_field('home_comedy_image'); ?>" alt="">
    <h3>Comedy</h3>
    <p><?php the_field('home_comedy_text'); ?></p>
  </div>

</div>  --> <!-- innerWrapper -->

<?php get_footer(); ?>