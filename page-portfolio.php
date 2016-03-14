<?php
/*
  Template Name: portfolio Page
*/

 get_header(); ?>

  <div class="hero2" style="background-image:url(<?php echo hackeryou_get_thumbnail_url($post) ?>)">>

    <div class="nameBlock2">
      <h1>Meaghan Eleanor</h1>
      <h3>Front End Web Developer</h3>
    </div>
  <div class="yellowBox2"></div>
  </div>

  <div class="underline"></div>
  <!-- <div class="hero">
    <div class="nameBlock">
      <h1><?php the_field('name') ?></h1>
      <h3><?php the_field('field') ?></h3>
    </div>

    <div class="yellowBox"></div>

<div class="underline"></div> -->

  <section class="portfolio">
    <h3> Portfolio </h3>
    <div class="underline3"></div>

    <?php $portfolioQuery = new WP_Query(array(
            'posts_per_page' => 4,
            'post_type' => 'portfolio'
        )); ?>

        <?php if ($portfolioQuery-> have_posts()): ?>

          <?php while($portfolioQuery->have_posts()): ?>
            <?php $portfolioQuery-> the_post(); ?>
            <!--What we want to show goes here-->
          <div class="projects">
            <div class="projectImage">
              <?php $image = get_field('image') ?>
              <img src="<?php echo $image['url'] ?> " alt="">
            </div>
                  
            <div class="projectInfo">
                <h3><?php the_field('project_title'); ?></h3>
                <h4><?php the_content(); ?></h4>

                <div class="portfolioSkills">
                  <?php while(has_sub_field('tags')): ?>
                   
                      <p><?php the_sub_field('single_skill') ?></p>
              

                  <?php endwhile; ?>
                </div>
                
                <div class="demoNGithub">
                  <p class="demo"><a href="<?php the_field('demo'); ?>">Live</a></p>

                  <p class="github"><a href="<?php the_field('github'); ?>">Github</a></p>
                </div>
            </div>
          </div>

          <?php endwhile; 
        endif;
        ?>

  </section>

  <!--Contact Section-->
    <section id="contact">
      <div class="underline"></div>

        <div class="contactMe">   
          <h5><?php the_field('get_at_me') ?></h5>
          <p><a href="mailto:<?php the_field('email') ?>"><?php the_field('email')?></a></p>
        </div>
        <div class="underline6"></div>

      <div class="footerMenu">
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_location' => 'footer'
        )); ?> 
      </div>
        
      <div class="underline"></div>
    </section>

</div><!--/.wrapper-->



<?php get_footer(); ?>