<?php get_header(); ?>

<div class="video-background">
    <div class="video-foreground">
      <iframe src="https://www.youtube.com/embed/lZA-57h64kE?controls=0&showinfo=0&rel=0&start=10&autoplay=1&loop=1&mute=1&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<div class="overlay-white">

<main role="main">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <article>
            <header>
                <h1><?php the_title(); ?></h1>
            </header>

            <?php the_content(); ?>
        </article>
    <?php endwhile; else: ?>
        <article>
            <p>Nothing to see.</p>
        </article>
    <?php endif; ?>
</main>

</div>
    <!-- <div id="vidtop-content">
    <div class="vid-info">
        <h1>YouTube Fullscreen Background Demo</h1>
        <p>The International Space Station orbits the Earth every 92 minutes, with its crew seeing a sunrise 15 times a day. It exists as a scientific, educational, and engineering platform in low orbit, 330 to 435 kilometres above the Earth.
        <p>Original timelapse by Riccardo Rossi (ISAA), used under a Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License. Raw photos courtesy of http://eol.jsc.nasa.gov/
        <a href="/500/Use-YouTube-Videos-as-Fullscreen-Web-Page-Backgrounds">Full article</a>
    </div>
    </div> -->





<?php get_footer();
