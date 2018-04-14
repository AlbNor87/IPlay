<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#6d9aea">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- DESKTOP NAVBAR START-->
<div class="desktop">

  <nav class="navbar">

      <div class="menu-wrapper">

        <ul class="navbar-nav">
          
          <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>

        </ul><!-- /navbar -->

      </div><!-- menu-wrapper -->

  </nav>

</div><!-- desktop -->
<!-- DESKTOP NAVBAR END -->


<!-- MOBILE NAVBAR START-->
<div class="mobile">

    <div class="mob-nav">

        <img src="/themes/wordplate/images/iplaylogo_white.svg" alt="logo" class="mob-logo">

        <!-- Hamburger-Menu -->
        <?php require template_path('components/mobile/mobile-menu.php');?>

    </div><!-- mob-nav -->

</div><!-- mobile -->
<!-- MOBILE NAVBAR END -->