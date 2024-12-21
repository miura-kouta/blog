


<?php get_header();?>
<article id="main-content">
<div class="grid">
<?php
if (have_posts()) : 
  while (have_posts()) :
    the_post();
    get_template_part('page-content');
  endwhile;
endif;
?>
</div>
</article>
<?php get_sidebar();?>
<?php get_footer();?>