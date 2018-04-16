<!-- Can't put the navbar in header.php because it's not the same navbar for every page  -->

<!-- MOBILE NAVBAR START-->
<?php require template_path('components/mobile/mobile-menu-white.php');?>
<!-- MOBILE NAVBAR END-->

<!-- MOBILE START-->
<div class="mobile">

    <div class="mob-container">
    
        <H1>Welcome to the MOBILE about page!</H1>
        <a href="<?php echo get_page_link($contactLink); ?>">contact</a>
    </div><!-- mob-container -->

</div>
<!-- MOBILE END -->