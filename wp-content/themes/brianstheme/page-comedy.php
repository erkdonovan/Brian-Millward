<?php /* Template Name: Comedy Page */  ?>

<?php get_header(); ?>

<div class="inner-image left" style="background-image: url('<?php the_field('comedy_hero_image'); ?>');">
<!-- <div class="w3-content w3-display-container">
  <img class="mySlides" src="img_nature.jpg">
  <img class="mySlides" src="img_fjords.jpg">
  <img class="mySlides" src="img_mountains.jpg">
  <div class="w3-center w3-display-bottomleft" style="width:100%">
    <div class="w3-left" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border" onclick="currentDiv(3)"></span>
  </div>
</div> -->
</div>

<div class="inner-text right">
<div class="innerWrapper">
    <p><?php the_field('comedy_bio'); ?></p>

<div class="blog">
    <h2>Posts</h2>
    <?php if( have_rows('comedy_blog') ): ?>

  <ul class="slides">

  <?php while( have_rows('comedy_blog') ): the_row(); 

    // vars
    $title = get_sub_field('comedy_blog_title');
    $link = get_sub_field('comedy_blog_url');
    $date = get_sub_field('comedy_blog_date');

    ?>

    <li class="slide">

      <i class="fa fa-pencil" aria-hidden="true"></i><?php if( $link ): ?>
        <a href="<?php echo $link; ?>">
      <?php endif; ?>

        <?php echo $title; ?>

      <?php if( $link ): ?>
        </a>
      <?php endif; ?> / <?php echo $date; ?>

    </li>

  <?php endwhile; ?>

  </ul>

<?php endif; ?>
  </div>

  <div class="articles">
    <h2>Articles</h2>
    <?php if( have_rows('comedy_articles') ): ?>

  <ul class="slides">

  <?php while( have_rows('comedy_articles') ): the_row(); 

    // vars
    $title = get_sub_field('comedy_articles_title');
    $link = get_sub_field('comedy_articles_url');
    $date = get_sub_field('comedy_articles_date');

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

  <div class="events">
    <h2>Events</h2>
    <?php if( have_rows('comedy_events') ): ?>

  <ul class="slides">

  <?php while( have_rows('comedy_events') ): the_row(); 

    // vars
    $title = get_sub_field('event_title');
    $date = get_sub_field('event_date');
    $time = get_sub_field('event_time');
    $link = get_sub_field('event_venue_url');
    ?>

    <li class="slide">

     <i class="fa fa-calendar" aria-hidden="true"></i><?php if( $link ): ?>
        <a href="<?php echo $link; ?>">
      <?php endif; ?>

        <?php echo $title; ?>

      <?php if( $link ): ?>
        </a>
      <?php endif; ?>

        on <?php echo $date; ?> at <?php echo $time; ?>

    </li>

  <?php endwhile; ?>

  </ul>

<?php endif; ?>
  </div>

<div class="gallery">
      <h2>Gallery</h2>
  <?php 

$images = get_field('comedy_gallery');

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