<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Freelancer - Start Bootstrap Theme</title>

 <?php 
 // Ajout des css de manière dynamique grâce à functions.php
 // https://developer.wordpress.org/reference/functions/wp_head/
wp_head();
?> 
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><?php echo get_bloginfo('name'); ?></a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <?php
        // https://developer.wordpress.org/reference/functions/wp_nav_menu/
        wp_nav_menu([
            // 'menu' => 'main-menu',
          'menu_class' => 'navbar-nav ml-auto',
          'theme-location' => 'main-menu',
          'container' => ''
        ]);
        ?>
      </div>
    </div>
  </nav>

