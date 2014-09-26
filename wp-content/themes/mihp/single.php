<?php get_header(); ?>

<div class="container animated  fadeInUp" id="about" name="about">
        <div class="row">
         <?php wp_nav_menu( array('theme_location' => 'primary') ); ?>
    
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <h1 class="animated  fadeInUp"><?php the_title(); ?></h1>
  <?php the_content(); ?>
<?php endwhile; wp_reset_query(); ?>
        </div>
</div>



<?php get_footer(); ?>