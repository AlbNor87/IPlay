<div class="mobile-menu-container">

    <div class="menuToggle">

        <input type="checkbox"/>

        <span></span>
        <span></span>
        <span></span>

    </div>
    <!-- menuToggle -->

    <ul class="mobile-menu">
        <a href="<?php echo get_home_url(); ?>"><li>Home</li></a>
        <li class="accordion">Features<img src="/themes/wordplate/images/downarrow.png" alt="scroll-down arrow" class="mob-arrow-down-menu"></li>
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

</div><!-- mobile-menu-container -->

<script>

const menuToggle = document.querySelector('.menuToggle');
const menu = document.querySelector('.mobile-menu');

menuToggle.addEventListener('click', function(){

    console.log('HEj!');

    menu.classList.toggle('active')

})

</script>