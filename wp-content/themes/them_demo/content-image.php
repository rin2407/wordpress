<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-thumbnail">
        <?php theme_thumbnail('large') ?>
    </div>
    <div class="entry-header">
        <?php theme_entry_header(); ?>
        <?php
$attachment= get_children( array('post_parent'=>$post->ID));
$attachment_number= count($attachment);
printf( __('This image post content %1$s photos','rinnv'),$attachment_number);
?>
    </div>
    <div class="entry-content">
        <?php theme_entry_content(); ?>
        <?php ( is_single() ? theme_entry_tag() : ''); ?>
    </div>
</article>