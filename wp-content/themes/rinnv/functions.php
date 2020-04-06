<?php
/**
 * KHAI BAO HANG GIA TRI
 * THEME_URL= lay duong dan thu muc theme
 * CORE = lay duong dan cua thu muc /core
 */
define( "THEME_URL",get_stylesheet_directory() );
define( "CORE", THEME_URL . "/core");
/**
 * nhung file /core/init.php
 */
require_once( CORE . "/init.php");
/**
 * Thiet lap chieu dai noi dung
 */
if( !isset($content_width)){
    $content_width=620;
}
/**
 * Khai bao chuc nang cua them
 */
if( !function_exists('theme_setup')){
    function theme_setup(){
        /*thiet lap textdomain */
        $language_folder= THEME_URL . '/languages';
        load_theme_textdomain('rinnv',$language_folder);
        /* tu dong them link RSS len <head> */
        add_theme_support('automatic-feed-links');
        /* Them post thumbnail */
        add_theme_support('post-thumbnails');
        /* post Format */
        add_theme_support('post-formats',array(
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ));
        /*them title-tag */
        add_theme_support('title-tag');
        /* Them custom background */
        $default_background=array(
           'default-color'=> '#e8e8e8'
        );
        add_theme_support('custom-background',$default_background);
        /* them Menu */
        register_nav_menu( 'primary-menu',__('Primary Menu','rinnv'));
        /* tao sidebar */
        $sidebar= array(
            'name'=> __('Main Sidebar','rinnv'),
            'id'=>'main-sidebar',
            'decription'=> __('Default sidebar'),
            'class'=> 'main-sidebar',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>'
        );
        register_sidebar($sidebar);

    }
    add_action('init','theme_setup');
}
/*template function */
if(!function_exists('theme_header')){
    function theme_header(){
        ?>
<div class="site-name">
    <?php
        if( is_home()){
         printf('<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',get_bloginfo('url'),get_bloginfo('description'),get_bloginfo('sitename'));   
        }else{
         printf('<p><a href="%1$s" title="%2$s">%3$s</a></p>',get_bloginfo('url'),get_bloginfo('description'),get_bloginfo('sitename'));
        }
        ?>
</div>
<div class="site-description">
<?php bloginfo('description'); ?>
</div>
<?php
}
}
/**
 * thiet lap menu
 */
if(!function_exists('theme_menu')){
    function theme_menu($menu){
       $menu=array(
           'theme_location'=> $menu,
           'container' => 'nav',
           'container_class' => $menu
       );
       wp_nav_menu($menu);
    }
}