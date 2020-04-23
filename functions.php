<?php
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
wp_nav_menu( array(
    'container' => 'nav',
    'echo' => true,
    'depth' => 0,
    'theme_location' => 'ヘッダーナビ'
));
?>