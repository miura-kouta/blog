<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.webp">
    <?php if (is_singular()) wp_enqueue_script("comment-reply"); ?>
    <title>
        <?php
        global $page, $paged;
        if (is_search()) : 
        wp_title('', true, 'left');
        echo ' | ';
        else :
        wp_title('|', true, 'right');
        endif;
        bloginfo('name');
        if ($paged >= 2 || $page >= 2) : 
        echo ' | ' . sprintf('%sページ', max($paged, $page));
        endif;
        ?>
    </title>
<?php wp_head();?>
</head>
<body>
<header class="header u-content">
    <h1 class="header__logo"><a href="<?php echo home_url('/');?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" alt="サイトのロゴ"></a></h1>
    <div id="cntctAndSrch" class="search">
        <div id="contact_and_search" class="clearfix">
            <div id="searchBox">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</header>
<main>