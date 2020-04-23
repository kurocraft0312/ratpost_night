<?php
require_once('lib/admin/ogp.php');
require_once('lib/functions/remove_action.php');
require_once('lib/functions/add_action.php');
/************************************************************************
add_theme_support
*************************************************************************/
// タイトル表示
add_theme_support('title-tag');
/************************************************************************
グロナビ
*************************************************************************/
register_nav_menu('header-menu', 'ヘッダーメニュー');
register_nav_menu('footer-menu', 'フッターメニュー');
//https://developer.wordpress.org/reference/functions/wp_nav_menu/
class edit_g_nav_list extends Walker_Nav_Menu {
    // function 
}
?>