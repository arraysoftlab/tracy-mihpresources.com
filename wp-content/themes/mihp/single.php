<?php get_header(); ?>

<div class="container animated  fadeInUp" id="about" name="about">
        <div class="row">
          <?php wp_nav_menu( array('theme_location' => 'menu', 'menu' => 'Top Menu') ); ?>
          
          

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <h1 class="animated  fadeInUp"><?php the_title(); ?></h1>
  c<?php the_content(); ?>
  
  <?php //echo do_shortcode('[custom_fields_block]'); ?>

<p>
<strong>Date of latest update</strong> <?php echo do_shortcode('[ct id="ct_Date_of_la_text_575d" property="title | description | value"]'); ?></p><p>
<strong>Location</strong> <?php echo do_shortcode('[ct id="ct_Location_text_2e1e" property="title | description | value"]'); ?> </p><p>
<strong>For More Information Contact</strong> <?php echo do_shortcode('[ct id="ct_For_More_I_text_d898" property="title | description | value"]'); ?></p><p>
<strong>Population Served</strong><?php echo do_shortcode('[ct id="ct_Population_textarea_9c60" property="title | description | value"]'); ?></p><p>
<strong>The Need</strong> <?php echo do_shortcode('[ct id="ct_The_Need_textarea_15ac" property="title | description | value"]'); ?> </p><p>
<strong>The Goal</strong> <?php echo do_shortcode('[ct id="ct_The_Goal_text_06cf" property="title | description | value"]'); ?> </p><p>
<strong>Medical Oversight</strong> <?php echo do_shortcode('[ct id="ct_Medical_Ov_textarea_e4ea" property="title | description | value"]'); ?></p><p>
<strong>Key Partners</strong> <?php echo do_shortcode('[ct id="ct_Key_Partne_textarea_17b6" property="title | description | value"]'); ?></p><p>
<strong>Personnel</strong> <?php echo do_shortcode('[ct id="ct_Personnel_textarea_2796" property="title | description | value"]'); ?></p><p>
<strong>Funding</strong> <?php echo do_shortcode('[ct id="ct_Funding_textarea_6ed0" property="title | description | value"]'); ?> </p><p>
<strong>Plans for Sustainability</strong> <?php echo do_shortcode('[ct id="ct_Plans_for__textarea_7e70" property="title | description | value"]'); ?></p><p>
<strong>Technology Used</strong> <?php echo do_shortcode('[ct id="ct_Technology_textarea_67b6" property="title | description | value"]'); ?></p><p>
<strong>Program Results</strong> <?php echo do_shortcode('[ct id="ct_Program_Re_textarea_b1f0" property="title | description | value"]'); ?></p>
    
    
    
<?php endwhile; wp_reset_query(); ?>
        </div>
</div>



<?php get_footer(); ?>