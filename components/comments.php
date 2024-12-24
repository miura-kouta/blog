<section class="comments">
    <?php
    $aria_req = (get_option('require_name_email') ? ' aria-required="true"' : '');
    $html5 = current_theme_supports('html5', 'comment-form');
    ?>
    <?php if (have_comments()): ?>
        <h3>Comments</h3>
        <ol class="comments-list">
            <?php wp_list_comments('avatar_size=48'); ?>
        </ol>
    <?php endif; ?>
    <?php
    $args = array(
        'class_form' => 'comments__form',
        'title_reply' => '<p class="comments__title">コメントを残す</p>',
        'label_submit' => 'コメントを送信する',
        'comment_notes_before' => '<p class="commentsNotesBefore">入力エリアすべてが必須項目です。メールアドレスが公開されることはありません。</p>',
        'comment_notes_after'  => '<p class="commentsNotesAfter">内容をご確認の上、送信してください。</p>',
        'fields' => array(
            'author' => '<p class="comments__formNameText">' .
                '<input id="author" class="comments__formNameInput" name="author"  type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . ' placeholder="名前を入力してください" /></p>',
            'email'  => '<p class="comments__formEmailText">' .
                '<input id="email" class="comments__formEmailInput" name="email" ' . ($html5 ? 'type="email"' : 'type="text"') . ' value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' placeholder="メールアドレスを入力してください" /></p>',
            'url'    => '',
        ),
        'comment_field' => '<p class="comments-form-comment">' . '<textarea class="comments__formTextarea" name="comment" cols="50" rows="6" aria-required="true"' . $aria_req . ' placeholder="コメントを入力してください" /></textarea></p>',
    );
    comment_form($args);
    ?>
</section>