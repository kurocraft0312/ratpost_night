<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- OGP利用宣言 -->
    <head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# article: https://ogp.me/ns/article#">
    <!-- BASIC -->
    <meta name="description" content="Night WordPress theme.">
    <meta name="keywords" content="Night WordPress theme,WordPress theme">
    <meta name="author" content="kurocraft0312">
    <!-- Win/Safari -->
    <meta name="format-detection" content="telephone=no,email=no,address=no">
    <meta name="msapplication-config" content="/browserconfig.xml">
    <meta name="msapplication-TileColor" content="Win8+用のタイルカラー">
    <meta name="msapplication-TitleImage" content="Win8+用のタイル画像">
    <!-- CSRF対策 -->
    <meta name="csrf-param" content="">
    <meta name="csrf-token" content="">
    <!-- OGP -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Ratpost_night">
    <meta property="og:title" content="Night WordPress theme.">
    <meta property="og:description" content="Night WordPress theme.">
    <meta property="og:url" content="ページURL">
    <meta property="og:image" content="画像URL">
    <meta property="og:image:alt" content="画像の説明URL">
    <meta property="og:local" content="ja_JP">
    <!-- SNS -->
    <meta property="fb:app_id" content="APP-ID（15文字）">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@kurocraft0312">
    <meta name="twitter:image" content="OGP画像のURL">
    <!-- canonical -->
    <link rel="canonical" href="">
    <!-- favicon -->
    <link rel="icon" href="./favicon.ico">
    <!-- Web Clip(Retina対応) -->
    <link rel="apple-touch-icon" href="">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/../assets/css/reset.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body>
<header class="site-header">
    <div id="title-header" class="container">
        <h1 class="site-title"><a href="/" class="site-title-link">Ratpost_night</a></h1>
        <nav class="g_nav">
        <?php
            wp_nav_menu( array(
                'container' => 'ul',
                'menu_class' => 'g_nav_lists',
                'echo' => true,
                'depth' => 0,
                'walker' => new Edit_g_nav_list(),
                'theme_location' => '',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>'
            ));
        ?>
        </nav>
    </div>
</header>