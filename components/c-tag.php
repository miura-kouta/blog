<section class="tag">
  <div class="u-contentGrid u-contentOverflowWrap">
    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
        get_template_part('/components/post');
      endwhile;
    endif;
    ?>
  </div>

  <?php /*  ページネーションを表示 */ ?>
  <?php
  the_posts_pagination(array(
    'mid_size' => 1,
    'prev_text' => '<span class="pagination__prev">戻る</span>',
    'next_text' => '<span class="pagination__next">次へ</span>',
    'screen_reader_text' => __('Pagination Navigation'),
  ));
  ?>
</section>