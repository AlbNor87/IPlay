<!-- MOBILE START-->
<div class="mobile">

    <div class="mob-container">
    
        <img src="/themes/wordplate/images/mockup.png" alt="logo" class="mob-mockup">

        <ul class="navbar-nav mr-auto">
      <?php foreach (get_pages() as $page): ?>

        <li class="nav-item <?php if (is_page($page)) { echo 'active'; } ?>">
                        <a class="nav-link" href="<?php echo get_permalink($page); ?>">
                            <?php echo $page->post_title; ?>
                        </a><!-- /nav-link -->
                    </li><!-- /nav-item -->
                <?php endforeach; ?>

    </ul>

    </div><!-- mob-container -->

</div>
<!-- MOBILE END -->