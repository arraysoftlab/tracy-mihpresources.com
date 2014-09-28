<?php get_header(); ?>
<div class="container animated  fadeInUp">
     <div class="row">
        <?php wp_nav_menu( array('theme_location' => 'menu', 'menu' => 'Top Menu') ); ?>

<h1>
Program Profiles
</h1>
<?php echo do_shortcode('[tax id="agency" before="Agencies: " separator=" | " after=" "]'); ?>

<?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <?php $author_name = get_the_author_meta('nickname'); ?>
    <h2>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <?php the_excerpt(); ?>
  <?php endwhile; wp_reset_query(); ?>
<?php else: ?>
  <h2>No posts found</h2>
<?php endif; ?>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
  <div class="prev">
    <?php next_posts_link( __( '&larr; Older posts' ) ); ?>
  </div>
  <div class="next">
    <?php previous_posts_link( __( 'Newer posts &rarr;' ) ); ?>
  </div>
<?php endif; ?>



     </div>
</div>


<?php get_footer(); ?>