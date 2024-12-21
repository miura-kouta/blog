


<?php get_header();?>
  <div class="single__container u-contentFlex u-content u-contentPaddingTopBottom">
  <section class="single">
    <article>
      <?php
      if (have_posts()) : 
        while (have_posts()) :
          the_post();
          get_template_part('content');
        endwhile;
      endif;
      ?>
      <div class="single__postWrap">
        <h1>関連記事</h1>
        <?php get_template_part('singleRelated'); ?>   
        </div>
        <div class="single__commentsWrap">
            <?php comments_template(); ?>
        </div>
    </article>

  </section>
<?php get_sidebar();?>
  </div>
<?php get_footer();?>