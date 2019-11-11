
<?php
/*
 * Template Name: Full-Width Template
 * description:
  Page template without sidebar
 */
get_header(); ?>
<div id="primary" class="container site-content">
  <div class="row">
    <div class="col-md-12">

      <?php
  if ( have_posts() ) : while ( have_posts() ) : the_post();
  get_template_part( 'content-regular', get_post_format() );endwhile; endif;
      ?>




    </div>

  </div>
</div>




<?php get_footer(); ?>
