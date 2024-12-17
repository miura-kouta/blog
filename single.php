


<?php get_header();?>
<div class="single__container u-contentFlex u-contentWidth u-contentPaddingTop">
<section class="single">
  <article id="main-content">
  <div class="grid">
  <?php
  if (have_posts()) : 
    while (have_posts()) :
      the_post();
      get_template_part('content');
    endwhile;
  endif;
  ?>
  <div class="col-full">
    <div class="wrap-col">
      <div class="related_post">
      <h1>関連記事</h1>
      <?php get_template_part('single_related'); ?>
      </div>
    </div>
  </div>

  <div class="col-full">
    <div class="wrap-col">
      <?php comments_template(); ?>
    </div>
  </div>

  </div>
  </article>

</section>
<?php get_sidebar();?>
</div>
<?php get_footer();?>