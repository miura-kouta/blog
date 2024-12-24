

<?php

//アイキャッチ画像
add_theme_support('post-thumbnails');

//cssとjavascript呼び出し
function my_enqueue_scripts()
{
  wp_enqueue_style('reset-style', get_template_directory_uri() . '/style/setting/reset.css', array(), '1.0.0', 'all');
  wp_enqueue_style('style-name', get_template_directory_uri() . '/style/style.css', array('reset-style'), '1.0.0', false);
  wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_enqueue_scripts');


//[…] を ... に変更
function custom_excerpt_more($more)
{
  return '...'; // 
}
add_filter('excerpt_more', 'custom_excerpt_more');

//コメントフォームでのオートリンク機能を無効化）
remove_filter('comment_text', 'make_clickable', 9);

//本ブログのfunction.php（コメントフォームで使用できるタグを無効化）
add_filter('comments_open', 'custom_comment_tags');
add_filter('pre_comment_approved', 'custom_comment_tags');
function custom_comment_tags($data)
{
  global $allowedtags;
  unset($allowedtags['a']);
  unset($allowedtags['abbr']);
  unset($allowedtags['acronym']);
  unset($allowedtags['b']);
  unset($allowedtags['div']);
  unset($allowedtags['cite']);
  unset($allowedtags['code']);
  unset($allowedtags['del']);
  unset($allowedtags['em']);
  unset($allowedtags['i']);
  unset($allowedtags['q']);
  unset($allowedtags['strike']);
  unset($allowedtags['strong']);
  return $data;
}

