<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arilewp
 */
$arilewp_footer_widgets_enabled = get_theme_mod('arilewp_footer_widgets_enabled', true);  
$arilewp_footer_container_size = get_theme_mod('arilewp_footer_container_size', 'container-full');
$arilewp_footer_copright_enabled = get_theme_mod('arilewp_footer_copright_enabled', true);
$arilewp_footer_copright_text = get_theme_mod('arilewp_footer_copright_text', __('Copyright &copy; 2020 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> ArileWP theme by <a target="_blank" href="//themearile.com/">ThemeArile</a>', 'arilewp'));
$arilewp_scroll_to_top_enabled = get_theme_mod('arilewp_scroll_to_top_enabled', true); 
?>
<!--Footer-->
<footer class="site-footer">
    <?php if($arilewp_footer_widgets_enabled == true): ?>
    <div class="<?php echo esc_attr($arilewp_footer_container_size); ?>">
        <!--Footer Widgets-->
        <div class="row footer-sidebar">
            <?php get_template_part('sidebar','footer');?>
        </div>
    </div>
    <!--/Footer Widgets-->
    <?php endif; ?>
    <?php if($arilewp_footer_copright_enabled == true): ?>
    <!--Site Info copyright-->
    <div class="site-info text-center">
        <div class="container">
            <div class="share d-flex">
                <p>Connect with us</p>
                <div class="icon">
                    <a href=""><span><i class="fas fa-share-alt"></i></span></a>
                    <a href=""><span><i class="fas fa-sms"></i></span></a>
                    <a href=""><span><i class="fab fa-facebook-f"></i></span></a>
                    <a href=""><span><i class="fab fa-twitter-square"></i></span></a>
                    <a href=""><span><i class="fab fa-pinterest"></i></span></a>
                    <a href=""><span><i class="fab fa-instagram-square"></i></span></a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="title-h5 float-left">
                        <strong>ROOM RESERVATIONS</strong>
                    </div>
                    <br>
                    <div class="intro float-left">
                        <p>Toll-Free Reservations (U.S. and Canada):<br>
                            <strong class="float-left">T: 888 ROSEWOOD<br>
                                &nbsp;&nbsp;
                                +1 888 767 3966</strong> <br>
                            <br>
                            <p class="float-left">International Direct Dial</p>
                            <br>
                            <strong class="float-left ">T:&nbsp;+1 817 567 7562</strong>
                        </p>
                        <br>
                        <a href="#pop-reservation" class="_lightbox with-arrow gtm-footer cboxElementn float-left">See
                            All Toll-Free
                            Numbers</a>
                    </div>
                </div>
                <div class="col-md-4 links">
                    <div class="links-content">
                        <?php 
						wp_nav_menu( array(
							 'theme_location'  => 'primary',
							 'container'       => 'div',
							 'container_class' => 'collapse navbar-collapse',
							 'container_id' => 'navbarNavDropdown',
							 'menu_class'      => 'nav navbar-nav',
							 'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
							 'walker'          => new wp_bootstrap_navwalker()
						) );
					?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-content">
                        <div class="row upper-wraper">
                                <div class="title-h5"><strong>Stay in Touch</strong></div>
                                <br>
                                <p class="text-left">Sign up now to receive special offers and promotions.</p>
                                <div id="subscription" class="button-wrapper"><input class="light" type="text"
                                        name="lname" placeholder="Enter your email" aria-label="Enter your email"><a
                                        class="submit-area gtm-footer" aria-label="Submit Your Email"
                                        href="/en/email-sign-up">
                                    </a>
                                    <button class="btn btn-outline-info btn-sm submit-mail"> Submit</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="language-bottom">
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="#">ENGLISH</a> |
                    <a href="#">日本語</a> |
                    <a href="#">中国</a>
                </div>
            </div>
        </div>
        <?php echo wp_kses_post($arilewp_footer_copright_text); ?>
    </div>
    <!--/Site Info copyright-->
    <?php endif; ?>
</footer>
<!--/Footer-->
<?php if($arilewp_scroll_to_top_enabled == true): ?>
<!--Page Scroll to Top-->
<div class="page-scroll-up"><a href="#totop"><i class="fa fa-angle-up"></i></a></div>
<!--/Page Scroll to Top-->
<?php endif; ?>
<?php wp_footer(); ?>

</body>

</html>