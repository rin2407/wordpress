<?php get_header(); ?>
<div class="row mb-2">
    <div class="col-md-12">
        <h1 class="text-center"> IN THE KNOW </h1>
    </div>
</div>
<div class="slider">
<?php 
if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<?php get_template_part('content')?>
<?php endwhile; ?>
<?php else : ?>
<?php get_template_part('content','none') ?>
<?php endif; ?>
</div>
<div class="slider-multiple">
<?php
if( have_posts() ) : while( have_posts() ) : the_post(); ?>
<?php get_template_part('content','slider')?>
<?php endwhile; ?>
<?php else : ?>
<?php get_template_part('content','none') ?>
<?php endif; ?>
</div>
<?php get_template_part('content','video') ?>

<?php get_footer();?>