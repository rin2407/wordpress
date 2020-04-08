<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
<div class="entry-thumbnail">
<?php theme_thumbnail('thumbnail') ?>
</div>
<div class="entry-header">
<?php theme_entry_header(); ?>
<?php theme_entry_meta(); ?>
</div>
<div class="entry-content">
<?php theme_entry_content(); ?>
<?php ( is_single() ? theme_entry_tag() : ''); ?>
</div>
</article>