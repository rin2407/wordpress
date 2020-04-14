<?php get_header(); ?>
<div class="container">
    <div class="row mb-2">
        <div class="col-md-12">
            <h1 class="text-center"> IN THE KNOW </h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="slider">
        <?php 
if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <?php get_template_part('content')?>
        <?php endwhile; ?>
        <?php else : ?>
        <?php get_template_part('content','none') ?>
        <?php endif; ?>
    </div>
</div>
<div class="container">
    <div class="slider-multiple">
        <?php
if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <?php get_template_part('content','slider')?>
        <?php endwhile; ?>
        <?php else : ?>
        <?php get_template_part('content','none') ?>
        <?php endif; ?>
    </div>
</div>
<div class="container">
    <div class="video bounceInUp animated">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <div class="text">
                    <h2>ROSEWOOD LIMITED EDITION</h2>
                </div>
                <div class="play mt-2">
                    <a class="popup-vimeo" href="https://www.youtube.com/watch?v=jOeEJ0EaNME">
                        <i class="fas fa-play" aria-hidden="true"> Watch Video</i></a>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="background-more">
    </div>
    <div class="more">
        <h2 class="text-center">MORE ROSEWOOD</h2>
        <h4 class="text-center">ENJOY A COMPLIMENTARY NIGHT</h4>
        <p>Enjoy a complimentary night on your stay with More Rosewood. Escape to the warmth of the tropics, the
            serenity of the countryside or the excitement of a capital city and experience an unforgettable destination
            with more time to roam.</p>
        <a href="#" class="button border dynamic-width"
            aria-label="View Properties with this offer - enjoy a complimentary night">View Properties with this
            offer</a>
    </div>
</div>
<div class="container">
    <div class="slider-2">
        <h2 class="text-center">FEATURED DESTINATIONS</h2>
        <div class="owl-carousel owl-theme owl2">
        <?php
if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <?php get_template_part('content','theme_thumbnail_owl')?>
        <?php endwhile; ?>
        <?php else : ?>
        <?php get_template_part('content','none') ?>
        <?php endif; ?>
        </div>
    </div>
</div>
<div class="container">
    <h2 class="text-center through">THROUGH YOUR EYES</h2>
    <p class="text-center">Explore Rosewood through the eyes of our guests.</p>
    <div class="slider-3 popup-gallery">
        <?php
    if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <?php get_template_part('content','slider3')?>
        <?php endwhile; ?>
        <?php else : ?>
        <?php get_template_part('content','none') ?>
        <?php endif; ?>
    </div>
</div>
<?php get_footer();?>