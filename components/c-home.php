<section class="home">
    <div class="u-contentGrid u-contentOverflowWrap">
        <?php
        /* get_query_var('paged')現在のページ番号を取得（'paged'パラメータが設定されていない場合は1を使用）  */
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        /* WP_Queryで投稿を取得（ページネーション対応）  */
        $args = array(
            'posts_per_page' => 6, // 1ページに表示する投稿数
            'paged' => $paged,     // 現在のページ番号
        );

        //WP_Queryとは？ WordPressで投稿（post）やカスタム投稿タイプ、ページ、カテゴリ、タグなどのデータを取得するためのクラスです
        $newslist = new WP_Query($args);

        // 投稿があるかチェック
        //have_posts()の意味: have_posts()は、クエリが投稿を持っているかを判定するメソッドで、投稿がある場合はtrueを返します。投稿がない場合はfalseを返します。
        if ($newslist->have_posts()) :
            while ($newslist->have_posts()) :
                $newslist->the_post();

                // 各投稿のテンプレートを読み込む
                get_template_part('components/post');

            endwhile;

            // 投稿データをリセット
            wp_reset_postdata();
        else :
            // 投稿がない場合のメッセージ
            echo '<p>投稿が見つかりませんでした。</p>';
        endif;
        ?>

    </div>

    <?php
    //ページネーションを表示
    the_posts_pagination(array(
        'mid_size' => 1,               // 現在のページの前後に表示するリンク数
        'prev_text' => __('戻る'), // 「前へ」リンクのテキスト
        'next_text' => __('次へ'),    // 「次へ」リンクのテキスト
        'total' => $newslist->max_num_pages, // 全体のページ数
        'current' => $paged, // 現在のページ番号
    ));
    ?>





</section>