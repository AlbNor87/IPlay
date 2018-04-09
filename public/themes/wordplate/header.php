<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#6d9aea">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="video-background"> 
        <div class="video-foreground">
            <iframe src="https://www.youtube.com/embed/lZA-57h64kE?controls=0&showinfo=0&rel=0&start=10&autoplay=1&loop=1&mute=1&iv_load_policy=3&playlist=lZA-57h64kE" frameborder="0" style="filter: grayscale(100%)"></iframe>
        </div>
    </div>

    <div class="overlay-white"></div>

    <!-- DESKTOP -->
    <header>

        <nav class="navbar">
            <div class="menu-wrapper">
                    <ul class="navbar-nav">
                    <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
                    </ul><!-- /navbar -->
            </div><!-- menu-wrapper -->
        </nav>

    </header>

    <!-- MOBILE -->
