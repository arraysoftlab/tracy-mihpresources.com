<?php get_header(); ?>



<div class="container animated  fadeInUp">
     <div class="row center">
     <?php wp_nav_menu( array('theme_location' => 'menu', 'menu' => 'Top Menu') ); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <h1 class="animated  fadeInUp"><?php the_title(); ?></h1>
  <?php the_content(); ?>
<?php endwhile; wp_reset_query(); ?>

     </div>
</div>


<?php get_footer(); ?>