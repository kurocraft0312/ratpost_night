<?php
function theme_customize_register($wp_customize) {
    // セクション設定（テーマカスタマイザーのメニュー名を設定）
    $wp_customize->add_section('ratpost_theme_options', array(
        'title' => 'キャッチフレーズ',
        'priority' => 10,
        'description' => 'トップページのキャッチフレーズを設定できます。',
        'active_callback' => 'is_front_page'// 表示させるページを限定化したいときに使う
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_settings' , array(
        'default' => '',
        // 'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_controls' , array(
        'label' => 'キャッチフレーズを入力',
        'description' => 'トップペー',
        'section' => 'ratpost_theme_options',
        'type' => 'text'
    ));
}
add_action('customize_register','theme_customize_register');
?>