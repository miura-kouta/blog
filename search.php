<?php get_header(); ?>
  <div class="search__container">
    <h1><?php single_cat_title(); ?></h1>
    <div class="u-contentFlex u-content u-contentPaddingTopBottom">
      <div>
        <div class="search u-contentGrid u-contentOverflowWrap">
          <?php
          if (have_posts()) : 
            while (have_posts()) :
              the_post();
              get_template_part('post');
            endwhile;
          else : ?>
            <div class="no-results">
              <p>検索結果が見つかりませんでした。</p>
              <p>別のキーワードで再度検索してください。</p>
            </div>
          <?php endif; ?>
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
  </div>
<?php get_footer(); ?>


