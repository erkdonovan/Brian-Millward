<?php /* Template Name: Zoology Page */  ?>

<?php get_header(); ?>


<div class="inner-image left" style="background-image: url('<?php the_field('zoology_hero_image'); ?>');">
</div>



<div class="inner-text right">
<div class="innerWrapper">
    <p><?php the_field('zoology_bio'); ?></p> 

  <div class="articles">
    <h2>Articles</h2>
    <?php if( have_rows('zoology_articles') ): ?>

  <ul class="slides">

  <?php while( have_rows('zoology_articles') ): the_row(); 

    // vars
    $title = get_sub_field('zoology_articles_title');
    $link = get_sub_field('zoology_articles_url');
    $date = get_sub_field('zoology_articles_date');

    ?>

    <li class="slide">

     <i class="fa fa-newspaper-o" aria-hidden="true"></i><?php if( $link ): ?>
        <a href="<?php echo $link; ?>">
      <?php endif; ?>

        <?php echo $title; ?>

      <?php if( $link ): ?>
        </a>
      <?php endif; ?>

       <?php echo $date; ?>

    </li>

  <?php endwhile; ?>

  </ul>

<?php endif; ?>
  </div>


  <div class="gallery">
      <h2>Gallery</h2>
  <?php 

$images = get_field('zoology_gallery');

if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
                <a href="<?php echo $image['url']; ?>">
                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
</div>



</div> <!-- innerWrapper -->
</div>

<?php get_footer(); ?>

