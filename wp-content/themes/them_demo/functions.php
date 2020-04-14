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
           'container_class' => $menu,
           'items_wrap'=>'<ul id="%1$s" class="%2$s sf-menu">%3$s</ul>'
       );
       wp_nav_menu($menu);
    }
}
/* ham phan trang */
if( !function_exists('theme_pagination')){
    function theme_pagination(){
        if($GLOBALS['wp_query']->max_num_pages <2){
            return '';
        }
        ?>
<nav class="pagination" role="pagination">
    <?php if( get_next_posts_link() ) : ?>
    <div class="prev">
        <?php next_posts_link( __('Older post','rinnv')); ?> </div>
    <?php endif; ?>
    <?php if(get_previous_posts_link()) : ?>
    <div class="next">
        <?php previous_posts_link( __('newest post','rinnv')); ?>
    </div>
    <?php endif;?>
</nav>
<?php
    }
}
/*hien thi thumbnail */
if(!function_exists('theme_thumbnail')){
    function theme_thumbnail($size){
        if(is_single() || is_home() && has_post_thumbnail() && !post_password_required() || has_post_format('image') ) : ?>
<figure class="post-thumbnail"> <?php the_post_thumbnail($size) ?></figure>
<?php endif; ?>
<?php

    }
}
// thumbnail owl
if(!function_exists('theme_thumbnail_owl')){
    function theme_thumbnail_owl($size){
        if(is_single() || is_home() && has_post_thumbnail() && !post_password_required() || has_post_format('image') ) : ?>
<figure class="item"> <?php the_post_thumbnail($size) ?></figure>
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
/* theme_entry_meta */
if(!function_exists('theme_entry_meta')){
    function theme_entry_meta(){
         ?>
<?php if(!is_page() ) : ?>
<div class="entry-meta">
    <?php
         printf( __('<span class="author">Posted by %1$s ','rinnv'),get_the_author() );
         printf( __('<span class="date-published">at %1$s ','rinnv'),get_the_date() );
         printf( __('<span class="category">in %1$s ','rinnv'),get_the_category_list(',') );
         if( comments_open() ): 
            echo '<span class="meta-reply">';
            comments_popup_link(
                __('Leave a comment','rinnv'),
                __('One comment','rinnv'),
                __('% comments','rinnv'),
                __('Read all comments','rinnv')
            );
            echo '</span>';
        endif;

         ?>
</div>
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
/* Nhung style.css */
function css_style(){
    wp_register_style('main-style',get_template_directory_uri() . "/style.css",'all');
    wp_enqueue_style('main-style');
    wp_register_style('reset-style',get_template_directory_uri() . "/reset.css",'all');
    wp_enqueue_style('reset-style');
    // superfish
    wp_register_style('superfish-style',get_template_directory_uri() . "/superfish.css",'all');
    wp_enqueue_style('superfish-style');
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
    wp_register_script('superfish-script',get_template_directory_uri() . "/superfish.js",array('jquery' ));
    wp_enqueue_script('superfish-script');
    // custom
    wp_register_script('custom-script',get_template_directory_uri() . "/custom.js");
    wp_enqueue_script('custom-script');
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
