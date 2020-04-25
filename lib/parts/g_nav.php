<?php
// メニュー機能ON
add_theme_support('menus');
/************************************************************************
グロナビ
*************************************************************************/
register_nav_menu('header-menu', 'ヘッダーメニュー');
register_nav_menu('footer-menu', 'フッターメニュー');
//https://developer.wordpress.org/reference/functions/wp_nav_menu/
//https://wpdocs.osdn.jp/%E3%82%AF%E3%83%A9%E3%82%B9%E3%83%AA%E3%83%95%E3%82%A1%E3%83%AC%E3%83%B3%E3%82%B9/Walker
class Edit_g_nav_list extends Walker_Nav_Menu {
    function start_el(&$nav_ul_lists_start, $item, $depth = 0, $args = null, $id = 0) {
        // var_dump($item);
        $nav_ul_lists_start .= '<li class="g_nav_list">' . '<a href="'. $item->url .'" class="g_nav_list_link">'.$item->title;
    }
    function end_el(&$nav_ul_lists_end, $item, $depth = 0, $args = null) {
        $nav_ul_lists_end .= '</a></li>';
    }
}
?>