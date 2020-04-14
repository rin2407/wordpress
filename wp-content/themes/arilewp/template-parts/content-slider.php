
<div class="items">
        <div class="row">
            <div class="col-md-7 float-right select-image">
                <div class="change-image"> <?php theme_thumbnail('large') ?> </div>
            </div>
            <div class="col-md-5 contents">
                <div class="text-wrap" data-header='<?php the_title() ?>' data-content='<?php theme_entry_content(); ?>'>
                    <?php theme_entry_header(); ?>
                </div>
            </div>
        </div>
</div>