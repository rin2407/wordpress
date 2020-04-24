<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package arilewp
 */

get_header();
$arilewp_general_blog_container_size = get_theme_mod('arilewp_general_blog_container_size', 'container');
if($arilewp_general_blog_container_size == 'container-full'){$container = '9';}else{$container = '8';}
?>
<div class="group-know wow fadeInUp">
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-12">
                <h2 class="text-center  title-know"> IN THE KNOW </h2>
            </div>
        </div>
    </div>
    <div class="know-color">
        <div class="slider">
            <?php 
if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <?php get_template_part('template-parts/content')?>
            <?php endwhile; ?>
            <?php else : ?>
            <?php get_template_part('content','none') ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="slider-multiple wow fadeInUp">
        <?php
if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <?php get_template_part('template-parts/content-slider')?>
        <?php endwhile; ?>
        <?php else : ?>
        <?php get_template_part('content','none') ?>
        <?php endif; ?>
    </div>
</div>
<div class="container">
    <div class="video  wow fadeInUp">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <div class="text">
                    <h2 class="wow bounceInDown">ROSEWOOD LIMITED EDITION</h2>
                </div>
                <div class="play mt-2 wow fadeInDownBig">
                    <a class="popup-vimeo" href="https://www.youtube.com/watch?v=jOeEJ0EaNME">
                        <i class="fas fa-play" aria-hidden="true"> Watch Video</i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="more-color">
    <div class="container">
        <div class="background-more  wow fadeInUp">
        </div>
        <div class="more">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 more-6  wow fadeInUp">
                    <h2 class="text-center">MORE ROSEWOOD</h2>
                    <h4 class="text-center">ENJOY A COMPLIMENTARY NIGHT</h4>
                    <p>Enjoy a complimentary night on your stay with More Rosewood. Escape to the warmth of the
                        tropics,
                        the
                        serenity of the countryside or the excitement of a capital city and experience an
                        unforgettable
                        destination
                        with more time to roam.</p>
                    <a href="#" class="button border dynamic-width"
                        aria-label="View Properties with this offer - enjoy a complimentary night">View Properties with  this offer</a>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</div>
<div class="feature-des">
    <div class="container">
        <div class="slider-2 wow fadeInUp">
            <h2 class="text-center title-feature">FEATURED DESTINATIONS</h2>
            <div class="owl-carousel owl-theme owl2">
                <?php
if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                <?php theme_thumbnail_owl('large') ?>
                <?php endwhile; ?>
                <?php else : ?>
                <?php get_template_part('template-past/content','none') ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- end -->
<div class="through-eyes  wow fadeInUp">
    <div class="container">
        <h2 class="text-center through">THROUGH YOUR EYES</h2>
        <p class="text-center">Explore Rosewood through the eyes of our guests.<br>
         Share your own Rosewood journey by using <a rel="noopener noreferrer" href="https://www.instagram.com/rosewoodhotels/" target="_blank">@RosewoodHotels</a>&nbsp;and&nbsp;<a rel="noopener noreferrer" href="https://www.instagram.com/explore/tags/rwjourneys/" target="_blank">#RWJourneys</a>.</p>
        <div class="slider-3 popup-gallery">
            <?php
    if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <div class="items">
                <div class="row image-a">
                    <?php theme_thumbnail_a('large') ?>
                </div>
                <div class="title"><span><?php the_title(); ?></span></div>
            </div>
            <?php endwhile; ?>
            <?php else : ?>
            <?php get_template_part('content','none') ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="container">
<h2 class="text-center more-rosewood wow fadeInUp">MORE FROM ROSEWOOD</h2>
    <div class="row mt-4 mb-4">
        <?php
    if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <?php get_template_part('template-parts/content-more') ?>
        <?php endwhile; ?>
        </div>
        <?php pagination_tdc(); ?>
        <?php else : ?>
        <?php get_template_part('content','none') ?>
        <?php endif; ?>
</div>
<?php
get_footer();