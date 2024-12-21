<?php get_header(); ?>

<section class="category">
<h1 class="category__heading u-headingLv1"><?php single_cat_title(); ?></h1>

<div class="u-contentFlex u-content u-contentPaddingTopBottom">
  <div>
    <div class="u-contentGrid">
      <?php
          if (have_posts()) : 
            while (have_posts()) :
              the_post();
              get_template_part('post');
            endwhile;
          endif;
        ?>
    </div>

    <!-- ページネーションを表示 -->
    <?php  
    the_posts_pagination(array(
        'mid_size' => 1,              
        'prev_text' => '<span class="pagination__prev">戻る</span>', 
        'next_text' => '<span class="pagination__next">次へ</span>', 
        'screen_reader_text' => __('Pagination Navigation'), 
    ));
    ?>

  </div>

  <?php get_sidebar(); ?> 
</div>

</section>


<?php get_footer(); ?>

