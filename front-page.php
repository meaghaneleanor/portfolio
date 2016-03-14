<?php get_header();  ?>

  <div class="hero" style="background-image:url(<?php echo hackeryou_get_thumbnail_url($post) ?>)">

    <div id="nameBlockContainer">
      <div class="nameBlock">
        <h1><?php the_field('name') ?></h1>
        <h3><span><?php the_field('field') ?></span></h3>
      </div>
      <div class="yellowBox"></div>
    </div>
  </div>


  <div class="underline"></div>

<!--About Section-->
  <section id="about">
  
    <h3><?php the_title(); ?></h3>
    <div class="underline3"></div>

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <div class="aboutFlex">
      <div class="aboutMe">
        <?php the_content(); ?>
      </div>

      <div class="aboutMeImage">
         <?php $image = get_field('image') ?>
                <img src="<?php echo $image['url'] ?> " alt="">
      </div>

    </div>
    <?php endwhile; // end the loop?>

    <h3><?php the_field('skills_title') ?></h3>
    <div class="underline3"></div>

  <div class="skills">
      <div class="skillsAbout">
        <p class="skillsAboutP">
          <?php the_field('skills_about') ?>
        </p>

      </div>
      
      <!--Skills-->
      <div class="skillsFlex clearfix">
         <?php while(has_sub_field('skills')): ?>     
          <div class="skillsFlex2">
            <p class="skillsP"><?php the_sub_field('skill_description') ?></p>
            <p class="skillsP2"><?php the_sub_field('skill_description2') ?></p>
            <p class="skillsP3"><?php the_sub_field('skill_description3') ?></p>
          </div>
              
        <?php endwhile; ?>
    
   
      
         <?php while(has_sub_field('skills3')): ?>     
              
        <?php endwhile; ?>
      </div>

  </div><!--End of Skills Section-->

      <!--View Portfolio Link-->
      <div class="viewPortfolio">
        <p><a href="<?php the_field('view_portfolio') ?>">Check out my portfolio!</a></p>
      </div>
        <div class="underline4"></div>
  </section>


<!--Contact Section-->
  <section id="contact" >
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

<?php get_footer(); ?>