<section class="content">
      <article class="content__wrap">
        <div class="content__headingWrap">
          <p class="content__DateAndTitleText"><?php the_time('Y/n/d'); ?>　|　<?php $cat = get_the_category(); $cat = $cat[0]; $cat_name = $cat->cat_name; echo $cat_name; ?></p>
          <h2 class="content__heading u-headingLv2"><?php the_title();?></h2>
        </div>
        <?php the_post_thumbnail(); ?> 
        <div class="content__body"><?php the_content();?></div> 
      </article>

        <nav class="content__postWrap">
            <div class="content__postBox">
              <p class="content__postText">←前の記事</p>
                <?php
                // フィルターフックを利用して previous_post_link の出力にカスタマイズを加える
                add_filter('previous_post_link', function ($output) {
                    // 出力される <a> タグにクラス属性 'content__postLink' を追加
                    return str_replace('<a ', '<a class="content__postLink" ', $output);
                });
                previous_post_link('%link', '%title');
                ?>

            </div> 
            <div class="content__postBox">
              <p class="content__postText">次の記事→<p>
                <?php
                  // フィルターフックを利用して next_post_link の出力にカスタマイズを加える
                  add_filter('next_post_link', function ($output) {
                      // 出力される <a> タグにクラス属性 'content__nextPostLink' を追加
                      return str_replace('<a ', '<a class="content__postLink" ', $output);
                  });

                  // 実際にリンクを出力するコード
                  next_post_link('%link', '%title');
                ?>
            </div>
        </nav>
</section>