<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ページのタイトルをサイトタイトルと一緒に出力させるソース -->
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
<header class="header u-contentWidth">
    <h1><a href="<?php echo home_url('/');?>"><?php bloginfo('name');?></a></h1>
    <!-- //ページ上のアイコンやサーチボックスのソース、手順5に記載あり -->
    <div id="cntctAndSrch" class="search">
        <div id="contact_and_search" class="clearfix">
            <div id="searchBox">
                <?php get_search_form(); ?>
            </div>
        </div>
    </div>
</header>
<main>