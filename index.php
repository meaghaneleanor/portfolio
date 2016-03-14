<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="wrapper">
	<section class="portfolio">


	</section>


	<section id="contact">
	  <div class="underline"></div>

	    <h5><?php the_field('get_at_me') ?></h5>
	    <p><?php the_field('email') ?></p>

	    <?php wp_nav_menu( array(
	      'container' => false,
	      'theme_location' => 'footer'
	    )); ?> 
	    
	  <div class="underline"></div>
	</section>

</div><!--/.wrapper-->



<?php get_footer(); ?>