    <!-- DESKTOP START-->
    <div class="desktop-container desktop">

        <nav class="navbar">
            <div class="menu-wrapper">
                    <ul class="navbar-nav">
                    <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
                    </ul><!-- /navbar -->
            </div><!-- menu-wrapper -->
        </nav>

        <?php require template_path('/main.php');?>    

    </div>
    <!-- DESKTOP END -->