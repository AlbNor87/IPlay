<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#6d9aea">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <?php wp_head(); ?>

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body <?php body_class(); ?>>

    <header>

    <nav class="navbar navbar-expand-lg navbar-inverse bg-faded mb-3 al-nav" style="background-color: #000000;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button><!-- /navbar-toggler -->

        <a class="navbar-brand" href="<?php echo site_url(); ?>"><span style="color: white;"><?php bloginfo('name'); ?></span></a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <?php foreach (get_pages() as $page): ?>
                    <li class="nav-item <?php if (is_page($page)) { echo 'active'; } ?>">
                        <a class="nav-link" href="<?php echo get_permalink($page); ?>">
                            <?php echo $page->post_title; ?>
                        </a><!-- /nav-link -->
                    </li><!-- /nav-item -->
                <?php endforeach; ?>
            </ul><!-- /navbar -->
        </div><!-- /collapse -->

        <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> 
    </nav><!-- /navbar -->

     
    </header>
