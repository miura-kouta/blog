

<?php

//アイキャッチ画像
add_theme_support( 'post-thumbnails' );

//cssとjavascript呼び出し
function my_enqueue_scripts() {
  wp_enqueue_style( 'style-name', get_template_directory_uri() . '/style/style.css', array(), '1.0.0', false );

  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true );
 
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_scripts' );


//[…] を ... に変更
function custom_excerpt_more( $more ) {
  return '...'; // 
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );