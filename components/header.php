<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:url" content="<?php echo home_url('/'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="気ままになんでも書くブログ『MK Blog』">
    <meta property="og:description" content="日々の出来事や趣味、気になったことを気ままに綴るブログ。役立つ情報から雑記まで、自由な発信をしています。">
    <meta name="keywords" content="ブログ, 雑記, 趣味, 日常, 気ままなブログ">
    <meta property="og:site_name" content="MK Blog" />
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/images/og-image.webp" />
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@mk_craft_tokyo" />
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.webp">
    <?php if (is_singular()) wp_enqueue_script("comment-reply"); ?>
    <?php wp_head(); ?>
</head>

<body>
    <header class="header u-content">
        <div class="header__logo">
            <a href="<?php echo home_url('/'); ?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" alt="サイトのロゴ"></a>
        </div>
        <?php get_template_part('components/searchform'); ?>
    </header>
    <main>