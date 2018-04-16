<?php require template_path('components/menu-logic.php');?>
<!-- MOBILE NAVBAR START-->
<div class="mobile">

    <div class="mob-nav-white">

        <img src="/themes/wordplate/images/iplaylogo.svg" alt="logo" class="mob-logo">
        <div class="mobile-menu-container">

            <div class="menuToggleWhite">

                <input type="checkbox"/>

                <span></span>
                <span></span>
                <span></span>
                
                <ul class="mobile-menu">
                    <a href="<?php echo get_home_url(); ?>"><li>Home</li></a>
                    <li class="accordion">Features</li>
                    <div class="panel">
                    <ul>
                        <li><a href="<?php echo get_page_link($athletesLink); ?>">Atheletes</a></li>
                        <li><a href="<?php echo get_page_link($fansLink); ?>">Fans</a></li>
                        <li>Other</li>
                        <li><a href="<?php echo get_page_link($featureRoadmapLink); ?>">Feature Road Map</a></li>
                    </ul>
                    </div>
                    <a href="<?php echo get_page_link($pressLink); ?>"><li>Press</li></a>
                    <a href="<?php echo get_page_link($contactLink); ?>"><li>Contact</li></a>
                    <a href="<?php echo get_page_link($aboutUsLink); ?>"><li>About Us</li></a>
                </ul>

            </div><!-- menuToggle -->

        </div><!-- mobile-menu-container -->

    </div><!-- mob-nav-white -->

</div><!-- mobile -->
<!-- MOBILE NAVBAR END -->