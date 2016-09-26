<?php /* Template Name: Contact */ ?>

<?php get_header();  ?>

		<div class="innerWrapper clear">

			<?php // Start the loop ?>
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>

		<?php endwhile; // end the loop?>

		<div class="form"><form action="http://formspree.io/hello@dankalmar.com" method="POST"><input name="name" type="text" placeholder="Name" />
			<input name="_replyto" type="email" placeholder="Email" />
			<textarea id="message" class="textarea" spellcheck="true" cols="50" name="message" rows="10" placeholder="Message"></textarea>
			<input type="submit" value="Send" /></form>
			<h2>Connect with Me!</h2>
		</div>
		<div class="social">
		<ul>
		<li><a href="http://www.twitter.com/dankalmar" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
		<li><a href="http://www.rdio.com/people/dankalmar/" target="_blank"><i class="fa fa-music fa-2x"></i></a></li>
		<li><a href="http://instagram.com/dankalmar" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
		</div>
	</ul>
	</div> <!-- /.innerWrapper -->

<?php get_footer(); ?>