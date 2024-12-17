<?php get_header(); ?>

<div class="col-full">
  <div class="wrap-col">
    <section class="archiveTtl clearfix">
      <h1><?php single_cat_title(); ?></h1>
    </section>
  </div>
</div>

<?php
if (have_posts()) : 
  while (have_posts()) :
    the_post();
    get_template_part('post');
  endwhile;
endif;
?>

<?php get_sidebar(); ?> 
<?php get_footer(); ?>


