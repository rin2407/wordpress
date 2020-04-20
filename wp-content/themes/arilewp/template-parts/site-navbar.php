<?php 
$arilewp_menu_style = get_theme_mod('arilewp_menu_style', 'sticky');   
$arilewp_menu_container_size = get_theme_mod('arilewp_menu_container_size', 'container-full');
?>
<!-- Theme Menubar -->
<div class="container">
    <div class="row mt-4 header-start">
        <div class="col-md-4"></div>
        <div class="col-md-4 logo-hotel float-right">
            <img src="https://fareast.net.au/wp-content/uploads/2018/02/Rosewood-Hotel-Logo-v2.png" class="l-hotel"
                alt="">
        </div>
        <div class="col-md-4 language">
            <a href="#" class="btn btn-light btn-small check float-right">CHECK RATES</a>
            <ul id="menu" class="mr-4 float-right">
                <li><a href="#">ENGLISH</a>
                    <ul id="sub">
                        <li><a href="#">日本語</a></li>
                        <li><a href="#">中国</a></li>
                    </ul>

                </li>
            </ul>
        </div>
    </div>
</div>
<nav
    class="navbar navbar-expand-lg not-sticky navbar-light <?php if($arilewp_menu_style == 'sticky'){echo 'header-sticky'; }?>">
    <div class="<?php echo esc_attr($arilewp_menu_container_size); ?>">
        <div class="row align-self-center">

            <?php 
						wp_nav_menu( array(
							 'theme_location'  => 'primary',
							 'container'       => 'div',
							 'container_class' => 'collapse navbar-collapse nav-768',
							 'container_id' => 'navbarNavDropdown',
							 'menu_class'      => 'nav navbar-nav',
							 'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
							 'walker'          => new wp_bootstrap_navwalker()
						) );
					?>
            <div class="align-self-center">
                <button class="navbar-toggler btn-nav" type="button" data-toggle="collapse"
                    data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

        </div>
    </div>
</nav>
<!-- /Theme Menubar -->