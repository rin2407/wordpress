<?php get_header(); ?>
<div class="content">
    <div class="main-content">
<?php 
  _e('<h2> 404 NOT FOUND </h2>','rinnv');
  _e('<p> The article you are looking for was not found, but maybe try looking again</p>','rinnv');
  get_search_form();
  _e('<h3> Content category: </h3>','rinnv');
  echo '<div class="404-cat-list">';
  wp_list_categories(array('title_li'=>''));
  echo '</div>';
?>
    </div>
    <div id="sidebar">
    <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer();?>