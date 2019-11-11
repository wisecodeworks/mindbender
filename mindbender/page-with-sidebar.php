
<?php
/*
 * Template Name: page and sidebar Template
 * description:
  Page template without sidebar
 */
get_header(); ?>
<div id="primary" class="container site-content">
  <div class="row">
    <div class="col-md-8">

      <?php
  if ( have_posts() ) : while ( have_posts() ) : the_post();
  get_template_part( 'content-regular', get_post_format() );endwhile; endif;
      ?>




    </div>
  <div class="col-md-4">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Name of Widgetized Area") ) : ?>
<?php endif;?>

  </div>
  </div>
</div>




<?php get_footer(); ?>
