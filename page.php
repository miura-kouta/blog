


<!-- 本ブログのpage.php -->
<?php get_header();?>
<!--------------MainContent--------------->
<article id="main-content">
<div class="grid"><!-- GRID MOTHER -->
<?php
if (have_posts()) : 
  while (have_posts()) :
    the_post();
    get_template_part('content-page');
  endwhile;
endif;
?>
</div><!-- ^ .grid = GRID MOTHER END-->
</article><!-- ^ main-content END-->
<?php get_sidebar();?>
<?php get_footer();?>