<?php
/*
Template Name: Homepage
*/
 get_header(); ?>



<div class="container">
     <div class="row">

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>



<!-- About section starts here -->
    <div class="container" id="about" name="about">
        <div class="row">
        	<?php the_content(); ?>
        </div>
        
		<div class="panel-group" id="accordion">
		  <div class="panel panel-default">
		    <div class="panel-heading">
		      <h4 class="panel-title">
		        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
		          <span class="glyphicon glyphicon-info-sign"></span> Learn More
		        </a>
		      </h4>
		    </div>
		    <div id="collapseOne" class="panel-collapse collapse">
		      <div class="panel-body">
		      <?php the_block('Learn More'); ?>
		      </div>
		    </div>
		  </div>
		</div>
		</div>
        <br>
    </div>
<!-- about section ends -->
</div>


<!-- Featured Document -->
    <section class="divider  divider-bg-1">
        <div class="container">
        <?php the_block('Featured Document'); ?>
        </div>
    </section>
<!-- End Featured Document -->
 <div class="container">
 <?php the_block('MIHP Program Profiles'); ?>
        
<!-- Resources Start -->
<div class="feature-wrap  left" id="resources" name="resources">
   <div class="container">
   <h1 class="center">Resources</h1>
   	<h2>White Papers</h2>
   	<div class="whitepaper">
	<?php the_block('White Papers'); ?>
   	</div>
	
	<h2>Posters</h2>
	<?php the_block('Posters'); ?>
	
	<h2>Videos & Media Resources</h2>
	<?php the_block('Videos and Media Resources'); ?>
	
	<h2>Articles</h2>
	<?php the_block('Articles'); ?>
	
	<h2>Other Resource Sites</h2>
	<?php the_block('Other Resource Sites'); ?>
   </div>
</div>
  
<?php endwhile; wp_reset_query(); ?>

     </div>
</div>


<?php get_footer(); ?>