<section class="comments">

    <?php if (have_comments()): ?>

        <ol class="comments-list">
            <?php
            function my_custom_comment_format($comment, $args, $depth)
            {
            ?>
                <li <?php comment_class('my-custom-class'); ?> id="comment-<?php comment_ID(); ?>">
                    <h3>コメント</h3>
                    <div class="comment__content">
                        <p class="comment__authorName"><?php comment_author_link(); ?></p>
                        <p class="comment-date">
                            <!-- <?php comment_date(); ?> at <?php comment_time(); ?> -->
                            <?php
                            $date_format = 'Y/n/j'; // カスタム日付形式
                            $time_format = 'H:i '; // カスタム時刻形式
                            echo get_comment_date($date_format) . ' at ' . get_comment_time($time_format);
                            ?>
                        </p>
                        <div class="comment-text"><?php comment_text(); ?></div>
                    </div>
                </li>
            <?php
            }
            ?>
            <?php wp_list_comments(array('callback' => 'my_custom_comment_format', 'avatar_size' => 0)); ?>

        </ol>
    <?php endif; ?>

    <?php
    $aria_req = (get_option('require_name_email') ? ' aria-required="true"' : '');
    $html5 = current_theme_supports('html5', 'comment-form');
    ?>

    <?php
    $args = array(
        'class_form' => 'comments__form',
        'title_reply' => '<p class="comments__title">コメントを残す</p>',
        'label_submit' => 'コメントを送信する',
        'comment_notes_before' => '<p class="commentsNotesBefore">入力エリアすべてが必須項目です。メールアドレスが公開されることはありません。</p>',
        'comment_notes_after'  => '<p class="commentsNotesAfter">内容をご確認の上、送信してください。</p>',
        'fields' => array(
            'author' => '<p class="comments__formNameText">
                        <label for="author">名前</label> 
                        <input id="author" class="comments__formNameInput" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" placeholder="名前を入力してください" />
                     </p>',
            'email'  => '<p class="comments__formEmailText">
                        <label for="email">メールアドレス</label>
                        <input id="email" class="comments__formEmailInput" name="email" ' . ($html5 ? 'type="email"' : 'type="text"') . ' value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' placeholder="メールアドレスを入力してください" />
                     </p>',
            'url'    => '',
        ),
        'comment_field' => '<p class="comments-form-comment">
                            <label for="comment">コメント</label>
                            <textarea id="comment" class="comments__formTextarea" name="comment" cols="50" rows="6" aria-required="true"' . $aria_req . ' placeholder="コメントを入力してください"></textarea>
                        </p>',
    );
    comment_form($args);
    ?>



</section>