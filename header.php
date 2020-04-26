<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- OGP利用宣言 -->
    <head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/website# article: https://ogp.me/ns/article#">
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
    <?php require_once('lib/admin/ogp.php'); ?>
    <!-- canonical（内容が同じページがある時にURLを統一する。主にSSL化の際に用いられる） -->
    <link rel="canonical" href="">
    <!-- favicon -->
    <link rel="icon" href="./favicon.ico">
    <!-- Web Clip(Retina対応) -->
    <link rel="apple-touch-icon" href="Web Clip用のアイコンURL貼る">
    <link rel="apple-touch-icon" sizes="57x57" href="iPhone 3G">
    <link rel="apple-touch-icon" sizes="72x72" href="非Retina版のiPad 2、iPad miniの用、iOS 6以前">
    <link rel="apple-touch-icon" sizes="76x76" href="非Retina版のiPad 2、iPad miniの用、iOS 7以降">
    <link rel="apple-touch-icon" sizes="114x114" href="Retina版のiPhone、iPod touch用、iOS 6以前">
    <link rel="apple-touch-icon" sizes="120x120" href="Retina版のiPhone、iPod touch用、iOS 7以降">
    <link rel="apple-touch-icon" sizes="144x144" href="Retina版のiPad、iPad mini用、iOS 6以前">
    <link rel="apple-touch-icon" sizes="152x152" href="Retina版のiPad、iPad mini用、iOS 7以降">
    <link rel="apple-touch-icon" sizes="180x180" href="iPhone 6 plus">
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