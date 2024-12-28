<section class="comments">

    <?php if (have_comments()): ?>

        <ol class="comments__menu">
            <h3 class="comments__headingLv3">コメント</h3>
            <?php
            function my_custom_comment_format($comment, $args, $depth)
            {
            ?>
                <li <?php comment_class('comments__list'); ?> id="comment-<?php comment_ID(); ?>">

                    <div class="comments__content">
                        <p class="comments__authorName"><?php comment_author_link(); ?></p>
                        <p class="comments__date">
                            <!-- <?php comment_date(); ?> at <?php comment_time(); ?> -->
                            <?php
                            $date_format = 'Y/n/j';
                            $time_format = 'H:i ';
                            echo get_comment_date($date_format) . ' at ' . get_comment_time($time_format);
                            ?>
                        </p>
                        <div class="comment__text"><?php comment_text(); ?></div>
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

        'comment_field' => '<p class="comments__formCommentText">
        <label class="comments__formCommentLabel" for="comment">コメント<span class="comments__requiredText">必須</span></label>
        <textarea id="comment" class="comments__formTextarea" name="comment" cols="50" rows="6" aria-required="true"' . $aria_req . ' placeholder="コメントを入力してください"></textarea>
        </p>',
        'fields' => array(
            'author' => '<p class="comments__formNameText">
                        <label class="comments__formCommentLabel" for="author">名前<span class="comments__requiredText">必須</span></label> 
                        <input id="author" class="comments__formNameInput" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" placeholder="名前を入力してください" />
                     </p>',
            'email'  => '<p class="comments__formEmailText">
                        <label class="comments__formCommentLabel" for="email">メールアドレス<span class="comments__requiredText">必須</span></label>
                        <input id="email" class="comments__formEmailInput" name="email" ' . ($html5 ? 'type="email"' : 'type="text"') . ' value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' placeholder="メールアドレスを入力してください" />
                     </p>',
            'url'    => '',
        ),

    );
    comment_form($args);
    ?>

</section>