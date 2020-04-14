<?php
/**
 * ArileWP functions and definitions
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package arilewp
 */

if ( ! function_exists( 'arilewp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function arilewp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on arilewp, use a find and replace
		 * to change 'arilewp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'arilewp', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary'     => esc_html__( 'Primary', 'arilewp' ),
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
		
		// woocommerce support
		
		add_theme_support( 'woocommerce' );
		
		// Woocommerce Gallery Support
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		add_theme_support( 'wc-product-gallery-slider' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 39,
			'width'       => 210,
			'flex-height' => true,
			'flex-width' => true,
			'header-text' => array( 'site-title', 'site-description' ),
			
		) );
		
		/**
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'status',
			'audio',
			'chat',
		) );

		/**
		 * Custom background support.
		 */
		add_theme_support( 'custom-background' );
	}
endif;
add_action( 'after_setup_theme', 'arilewp_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function arilewp_widgets_init() {
	$sidebars = apply_filters( 'arilewp_sidebars_data', array(
	    'sidebar-main'            => esc_html__( 'Sidebar Widget Area', 'arilewp' ),
		'footer-sidebar-one'         => esc_html__( 'Footer Sidebar One', 'arilewp' ),
		'footer-sidebar-two'         => esc_html__( 'Footer Sidebar Two', 'arilewp' ),
		'footer-sidebar-three'         => esc_html__( 'Footer Sidebar Three', 'arilewp' ),
		'footer-sidebar-four'         => esc_html__( 'Footer Sidebar Four', 'arilewp' ),
	) );

	if ( class_exists( 'WooCommerce' ) ) {
		$sidebars['woocommerce']  = esc_html__( 'WooCommerce Sidebar', 'arilewp' );
	}

	foreach ( $sidebars as $id => $name ) :
	

		register_sidebar( array(
			'id'            => $id,
			'name'          => $name,
			'description'   => $name,
			'before_widget' => '<aside id="%1$s" class="widget text_widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );

	endforeach;

}
add_action( 'widgets_init', 'arilewp_widgets_init');

add_filter('woocommerce_show_page_title', '__return_false');
// function rin
if(!function_exists('theme_thumbnail')){
    function theme_thumbnail($size){
        if(is_single() || is_home() && has_post_thumbnail() && !post_password_required() || has_post_format('image') ) : ?>
<figure class="post-thumbnail"> <?php the_post_thumbnail($size) ?></figure>
<?php endif; ?>
<?php

    }
}
/*hien thi tieu de post */
if(!function_exists('theme_entry_header')){
    function theme_entry_header(){
        ?>
<?php if( is_single() ) : ?>
<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
<?php else : ?>
<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<?php endif; ?>
<?php
    }
}
// thumbnail owl
if(!function_exists('theme_thumbnail_owl')){
    function theme_thumbnail_owl($size){
        if(is_single() || is_home() && has_post_thumbnail() && !post_password_required() || has_post_format('image') ) : ?>
<figure class="item"><?php the_post_thumbnail($size) ?></figure>
<?php endif; ?>
<?php

    }
}

if(!function_exists('theme_thumbnail_a')){
    function theme_thumbnail_a($size){
        if(!is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image') ) : ?>
        <?php $imageUrl = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') );
 ?>
<a href="<?php echo $imageUrl ?>" title='<?php theme_entry_content(); ?>'><?php the_post_thumbnail($size) ?></a>
<?php endif; ?>
<?php

    }
}
/* title header */
if(!function_exists('title_header')){
    function title_header(){
        ?>
<?php if( is_single() ) : ?>
<?php the_title(); ?>
<?php else : ?>
<?php the_title(); ?>
<?php endif; ?>
<?php
    }
}
/* theme_entry-content */
if(!function_exists('theme_entry_content')){
    function theme_entry_content(){
     if(!is_single() && !is_page()){
         the_excerpt(); //phần rút gọn nội dung
     }else{
         the_content();
         /*phân trang single */
         $link_pages =array(
             'before'=> __('<p> page:','rinnv'),
             'after'=>('</p>'),
             'nextpagelink'=> __('Next page','rinnv'),
             'previouspagelink'=> __('Previous link','rinnv')
         );
         wp_link_pages($link_pages);
     }
    }
}
function read_more(){
    return '<a class="read-more" href="'. get_permalink( get_the_ID()) .'">'. __('...[Read more]'. '</a>');
}
add_filter('excerpt_more','read_more');
add_filter('acf/settings/remove_wp_meta_box', '__return_false');
/* theme_entry_tag */
if(!function_exists('theme_entry_tag')){
    function theme_entry_tag(){
        if( has_tag()) : 
            echo '<div class="entry-tag">';
            printf( __('Tagged in %1$s','rinnv'),get_the_tag_list('',','));
            echo '</div>';
        endif;
    }
}

/**
 * Enqueue scripts and styles.
 */
function arilewp_scripts() {
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	/**
	 * Styles.
	 */
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css'); 	 
	// Fontawesome.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome/css/font-awesome' . $suffix . '.css', false, '4.7.0' );
	// Theme styles.
	wp_enqueue_style( 'arilewp-style', get_stylesheet_uri() );
	wp_enqueue_style('arilewp-theme-default', get_template_directory_uri() . '/assets/css/theme-default.css');
	wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css');
	wp_enqueue_style('bootstrap-smartmenus-css', get_template_directory_uri() . '/assets/css/bootstrap-smartmenus.css');
	wp_enqueue_style('owl.carousel-css', get_template_directory_uri() . '/assets/css/owl.carousel.css');

	/**
	 * Scripts.
	 */
	wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'));	 
	// Theme JavaScript.
	wp_enqueue_script('smartmenus-js', get_template_directory_uri() . '/assets/js/smartmenus/jquery.smartmenus.js');
	wp_enqueue_script( 'arilewp-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
	wp_enqueue_script('arilewp-custom-js', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'));
	wp_enqueue_script('bootstrap-smartmenus-js', get_template_directory_uri() . '/assets/js/smartmenus/bootstrap-smartmenus.js');
	wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'arilewp_scripts' );

function arilewp_customizer_script() {
	 wp_enqueue_style( 'arilewp-customize',get_template_directory_uri().'/inc/customizer/assets/css/customize.css', ARILEWP_THEME_VERSION, 'screen' );
	wp_enqueue_script( 'arilewp-customizer-script', get_template_directory_uri() .'/inc/customizer/assets/js/customizer-section.js', array("jquery"),'', true  );	
}
add_action( 'customize_controls_enqueue_scripts', 'arilewp_customizer_script' );
function css_style(){
    wp_register_style('main-style',get_template_directory_uri() . "/style.css",'all');
    wp_enqueue_style('main-style');
    // bootstrap
    wp_register_style('bootstrap-style',get_template_directory_uri() . "/css/bootstrap.min.css",'all');
    wp_enqueue_style('bootstrap-style');
    wp_register_style('bootstrap-theme',get_template_directory_uri() . "/css/bootstrap.css",'all');
    wp_enqueue_style('bootstrap-theme');
    //slick
    wp_register_style('slick-theme',get_template_directory_uri() . "/css/slick-theme.css",'all');
    wp_enqueue_style('slick-theme');
    wp_register_style('slick-style',get_template_directory_uri() . "/css/slick.css",'all');
    wp_enqueue_style('slick-style');
    // magnifict
    wp_register_style('magnifict-theme',get_template_directory_uri() . "/css/magnific-popup.css",'all');
    wp_enqueue_style('magnifict-theme');
    //
    wp_register_style('awesome-theme',get_template_directory_uri() . "/css/font-awesome.min.css",'all');
    wp_enqueue_style('awesome-theme');
    // aminate
    wp_register_style('aminate-theme',get_template_directory_uri() . "/css/aminate.css",'all');
    wp_enqueue_style('aminate-theme');
    // owl carousel 
    wp_register_style('carousel-theme',get_template_directory_uri() . "/css/owl.carousel.min.css",'all');
    wp_enqueue_style('carousel-theme');

}
add_action('wp_enqueue_scripts','css_style');
function theme_js(){
    // js bootstrap
    wp_register_script('bootstrap-script',get_template_directory_uri() . "/js/bootstrap.min.js");
    wp_enqueue_script('bootstrap-script');
    // slick js
    wp_register_script('slick-script',get_template_directory_uri() . "/js/slick.js");
    wp_enqueue_script('slick-script');
    ///
    wp_register_script('magnific-script',get_template_directory_uri() . "/js/jquery.magnific-popup.js");
    wp_enqueue_script('magnific-script');
    //
    wp_register_script('common-script',get_template_directory_uri() . "/common.js");
    wp_enqueue_script('common-script');
    wp_register_script('magnifict-script',get_template_directory_uri() . "/js/jquery.magnific-popup.js");
    wp_enqueue_script('magnifict-script');
    // carousel
    wp_register_script('carousel-script',get_template_directory_uri() . "/js/owl.carousel.min.js");
    wp_enqueue_script('carousel-script');
}
add_action('wp_enqueue_scripts','theme_js');

/**
 * Define constants
 */
// Root path/URI.
define( 'ARILEWP_PARENT_DIR', get_template_directory() );
define( 'ARILEWP_PARENT_URI', get_template_directory_uri() );

// Include path/URI.
define( 'ARILEWP_PARENT_INC_DIR', ARILEWP_PARENT_DIR . '/inc' );
define( 'ARILEWP_PARENT_INC_URI', ARILEWP_PARENT_URI . '/inc' );

// Imgges path.
define( 'ARILEWP_PARENT_INC_IMG_URI', ARILEWP_PARENT_URI . '/assets/img/' );
// Customizer path.
define( 'ARILEWP_PARENT_CUSTOMIZER_DIR', ARILEWP_PARENT_INC_DIR . '/customizer' );

// Theme version.
$arilewp_theme = wp_get_theme();
define( 'ARILEWP_THEME_VERSION', $arilewp_theme->get( 'Version' ) );
define ( 'ARILEWP_THEME_NAME', $arilewp_theme->get( 'Name' ) );

// Set default content width.
if ( ! isset( $content_width ) ) {
	$content_width = 800;
}

/**
 * Implement the Custom Header feature.
 */
require ARILEWP_PARENT_INC_DIR . '/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require ARILEWP_PARENT_INC_DIR . '/template-tags.php';

/**
 * Customizer additions.
 */
require ARILEWP_PARENT_INC_DIR . '/customizer/arilewp-customizer.php';
require ARILEWP_PARENT_INC_DIR . '/customizer/arilewp-customizer-options.php';

/**
 * Pgge layout setting.
 */

require ARILEWP_PARENT_INC_DIR . '/metabox.php';

/**
 * Pgge layout setting.
 */

require ARILEWP_PARENT_INC_DIR . '/theme-custom-typography.php';


/**
 * Bootstrap class navwalker.
 */

require ARILEWP_PARENT_INC_DIR . '/class-bootstrap-navwalker.php';

/**
 * Pgge layout setting.
 */
 
$theme = wp_get_theme();
	if ( 'ArileWP' == $theme->name) {
	if ( is_admin() ) {
		require ARILEWP_PARENT_INC_DIR . '/admin/getting-started.php';
	}
}