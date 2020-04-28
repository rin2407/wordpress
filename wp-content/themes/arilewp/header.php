<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php esc_url(bloginfo( 'pingback_url' )); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>
<?php 
	$class='theme-wide';
?>

<body <?php body_class(esc_attr($class)); ?>>

    <?php 
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    } 
?>
    <a class="screen-reader-text skip-link" href="#content"><?php esc_html_e( 'Skip to content', 'arilewp' ); ?></a>
    <div id="wrapper" class="menu-header">
        <?php get_template_part('template-parts/site','navbar'); ?>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators carousel-head carousel-ol">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php bloginfo('template_url'); ?>/RHR_LDBOpening_Hero_2_1920x902.png" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php bloginfo('template_url'); ?>/RHR_LDBOpening_Hero_3_1920x902.png" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?php bloginfo('template_url'); ?>/RHR_LDBOpening_Hero_2_1920x902.png" class="d-block w-100"
                    alt="...">
            </div>
        </div>
    </div>
    <section class="search-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0 carousel-bottom text-center">
                            <h5>DESTINATION</h5>
                            <div class="input-group mb-3 s-search">
                                <select class="custom-select" id="inputGroupSelect01">
                                    <option selected> Select a hotel or resort</option>
                                    <?php
                                    if( have_posts() ) : while( have_posts() ) : the_post(); ?>
                                    <option value="<?php the_title();?>"> <?php the_title(); ?></option>
                                    <?php endwhile; ?>
                                    <?php else : ?>
                                    <?php get_template_part('content','none') ?>
                                    <?php endif; ?>
                                </select>
                            </div>


                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0 carousel-bottom text-center">
                            <h5>CHECK IN-CHECK OUT</h5>
                            <input type="text" class="check-in-out text-center" value="">
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 p-0 carousel-bottom text-center">
                            <h5>GUESTS</h5>
                            <P>1Room • 1Adult • 0Child</P>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 p-0 carousel-bottom text-center">
                            <a href="#" class="btn btn-primary btn-lg mt-2 check-rate">CHECK RATES</a>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>