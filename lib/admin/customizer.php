<?php
/***************
キャッチコピーの追加
***************/
function theme_customize_register_catchphrase($wp_customize) {
    // セクション設定（テーマカスタマイザーのメニュー名を設定）
    $wp_customize->add_section('ratpost_theme_catchphrase_options', array(
        'title' => 'キャッチコピー',
        'priority' => 25,
        'description' => 'トップページのキャッチコピーを設定できます。',
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_catchphrase_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_catchphrase_controls' , array(
        'settings' => 'ratpost_theme_catchphrase_settings',
        'label' => 'キャッチコピーを入力',
        'description' => 'トップページに表示するキャッチコピーを入力してください。',
        'section' => 'ratpost_theme_catchphrase_options',
        'type' => 'text'
    ));
}
add_action('customize_register','theme_customize_register_catchphrase');

/***************
ボディーコピーの追加
***************/
function theme_customize_register_bodycopy($wp_customize) {
    // セクション設定（テーマカスタマイザーのメニュー名を設定）
    $wp_customize->add_section('ratpost_theme_bodycopy_options', array(
        'title' => 'ボディーコピー',
        'priority' => 30,
        'description' => 'トップページのボディーコピーを設定できます。',
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_bodycopy_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_bodycopy_controls' , array(
        'settings' => 'ratpost_theme_bodycopy_settings',
        'label' => 'ボディーコピーを入力',
        'description' => 'トップページに表示するボディーコピーを入力してください。',
        'section' => 'ratpost_theme_bodycopy_options',
        'type' => 'text'
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_bodycopy_phrase_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_bodycopy_phrase_controls' , array(
        'settings' => 'ratpost_theme_bodycopy_phrase_settings',
        'label' => 'ボディーコピー下に説明文を入力',
        'description' => 'トップページに表示するボディーコピー下に説明文を入力してください。',
        'section' => 'ratpost_theme_bodycopy_options',
        'type' => 'text'
    ));
}
add_action('customize_register','theme_customize_register_bodycopy');
?>