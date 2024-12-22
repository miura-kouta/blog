<section class="search">
        <div class="u-contentGrid u-contentOverflowWrap">
          <?php
          if (have_posts()) : 
            while (have_posts()) :
              the_post();
              get_template_part('post');
            endwhile;
          else : ?>
            <div>
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
</section>