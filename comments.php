<div id="comment" class="comment">
<?php
$aria_req = ( get_option( 'require_name_email' ) ? ' aria-required="true"' : '' );
$html5 = current_theme_supports('html5', 'comment-form');
?>
<?php if(have_comments()): ?>
<h3>Comments</h3>
<ol class="comments-list">
<?php wp_list_comments('avatar_size=48'); ?>
</ol>
<?php endif; ?>
<?php
$args = array(
    'title_reply' => 'コメントを残す',
    'label_submit' => 'コメントを送信する',
    'comment_notes_before' => '<p class="commentNotesBefore">入力エリアすべてが必須項目です。メールアドレスが公開されることはありません。</p>',
    'comment_notes_after'  => '<p class="commentNotesAfter">内容をご確認の上、送信してください。</p>',
    'fields' => array(
            'author' => '<p class="comment__formNameText">' .
                        '<input id="author" class="comment__formNameInput" name="author"  type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . ' placeholder="名前を入力してください" /></p>',
            'email'  => '<p class="comment__formEmailText">' .
                        '<input id="email" class="comment__formEmailInput" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' placeholder="メールアドレスを入力してください" /></p>',
            'url'    => '',
            ),
    'comment_field' => '<p class="comment-form-comment">' . '<textarea id="comment" class="comment__formTextarea" name="comment" cols="50" rows="6" aria-required="true"' . $aria_req . ' placeholder="コメントを入力してください" /></textarea></p>',
);
comment_form( $args );
?>
</div>

