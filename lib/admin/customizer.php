<?php
function theme_customize_register($wp_customize) {
    // セクション設定（テーマカスタマイザーのメニュー名を設定）
    $wp_customize->add_section('ratpost_theme_options', array(
        'title' => 'キャッチフレーズ',
        'priority' => 10,
        'description' => 'トップページのキャッチフレーズを設定できます。',
        'active_callback' => 'is_front_page'
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_settings' , array(
        'default' => '',
        
    ));

    // コントロール設定
    $wp_customize->add_control();
}
add_action('customize_register','theme_customize_register');
?>