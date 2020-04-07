<?php 
/* Template Name: Contact
*/
 ?>
<?php get_header(); ?>
<div class="content">
    <div class="main-content">
 <div class="contact-info">
 <h4>Address</h4>
 <p>46 kagreub,8889 quaeusksn</p>
 <p>0976432187</p>
 </div>
 <div class="contact-inform">
 <?php echo do_shortcode('[contact-form-7 id="1401" title="Contact form 1"]') ?>
 </div>
    </div>
    <div id="sidebar">
    <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer();?>
