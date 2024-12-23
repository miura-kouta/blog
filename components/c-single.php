<section class="single">
    <article>
      <?php
      if (have_posts()) : 
        while (have_posts()) :
          the_post();
          get_template_part('/components/contents'); 
        endwhile;
      endif;
      ?>
      <div class="single__postWrap">
        <h2>関連記事</h2>

        <?php get_template_part('/components/singleRelated');  ?>
      </div>
      <div class="single__commentsWrap">
        <?php comments_template('/components/comments.php'); ?>
      </div>
    </article>
</section>