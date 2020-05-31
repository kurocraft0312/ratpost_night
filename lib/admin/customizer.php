<?php
/***************
キャッチコピーの追加
***************/
function theme_customize_register_catchphrase($wp_customize) {
    // セクション設定（テーマカスタマイザーのメニュー名を設定）
    $wp_customize->add_section('ratpost_theme_options', array(
        'title' => 'キャッチコピー',
        'priority' => 10,
        'description' => 'トップページのキャッチコピーを設定できます。',
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_controls' , array(
        'settings' => 'ratpost_theme_settings',
        'label' => 'キャッチコピーを入力',
        'description' => 'トップページに表示するキャッチコピーを入力してください。',
        'section' => 'ratpost_theme_options',
        'type' => 'text'
    ));
}
add_action('customize_register','theme_customize_register_catchphrase');
?>