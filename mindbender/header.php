<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">


  <style media="screen">
  $('.js-toggle-menu').click(function(e){
e.preventDefault();
$('.mobile-header-nav').slideToggle();
$(this).toggleClass('open');
});
  </style>

  <title>Blog Template for Bootstrap</title>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>-->
    <!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>-->
  <!--     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->

  <?php wp_head();?>
</head>

<body>

  <div class="messagetop">
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("siteheadalert") ) : ?>
<?php endif;?>
  </div>

  <div class="blog-masthead">
    <div class="container">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><?php if ( function_exists( 'the_custom_logo' ) ) {
 the_custom_logo();
}?>Logo Here</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse hide" id="navbarCollapse" style="">
    <ul class="navbar-nav bender-nav">
        <li class="bender-nav-item">

          <?php wp_list_pages( '&title_li=' ); ?>  </li>
    </ul>

    </div>
    </nav>

    </div>
  </div>





  <div class="container">

    <div class="blog-header">
      <h1 class="blog-title">
        <a href="<?php echo get_bloginfo( 'wpurl' );?>">
          <?php echo get_bloginfo( 'name' ); ?></a>
        </h1>
      <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
    </div>
