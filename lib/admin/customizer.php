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
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => 'ここにテキストを入力してください'
        )
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
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => 'ボディーコピーを入力してください'
        )
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
        'type' => 'textarea',
        'input_attrs' => array(
            'placeholder' => 'ここにテキストを入力してください'
        )
    ));
}
add_action('customize_register','theme_customize_register_bodycopy');

/***************
サービス一覧の追加
***************/
function theme_customize_register_servicelist($wp_customize) {
    // セクション設定（テーマカスタマイザーのメニュー名を設定）
    $wp_customize->add_section('ratpost_theme_servicelist_options', array(
        'title' => 'サービス一覧',
        'priority' => 35,
        'description' => 'トップページのサービス一覧を設定できます。',
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_servicelist_first_title_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_servicelist_first_title_controls' , array(
        'settings' => 'ratpost_theme_servicelist_first_title_settings',
        'label' => 'サービスタイトル1を入力',
        'description' => 'トップページに表示するサービスタイトル1を入力してください。',
        'section' => 'ratpost_theme_servicelist_options',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => '例）1.記事作成'
        )
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_servicelist_first_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_servicelist_first_controls' , array(
        'settings' => 'ratpost_theme_servicelist_first_settings',
        'label' => 'サービス内容1を入力',
        'description' => 'トップページに表示するサービス内容1を入力してください。',
        'section' => 'ratpost_theme_servicelist_options',
        'type' => 'textarea',
        'input_attrs' => array(
            'placeholder' => '例）分野の素人が読んでも理解できる文章を作成します。'
        )
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_servicelist_second_title_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_servicelist_second_title_controls' , array(
        'settings' => 'ratpost_theme_servicelist_second_title_settings',
        'label' => 'サービスタイトル2を入力',
        'description' => 'トップページに表示するサービスタイトル2を入力してください。',
        'section' => 'ratpost_theme_servicelist_options',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => '例）2.記事添削'
        )
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_servicelist_second_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_servicelist_second_controls' , array(
        'settings' => 'ratpost_theme_servicelist_second_settings',
        'label' => 'サービス内容2を入力',
        'description' => 'トップページに表示するサービス内容2を入力してください。',
        'section' => 'ratpost_theme_servicelist_options',
        'type' => 'textarea',
        'input_attrs' => array(
            'placeholder' => '例）誰でも読める文章になるよう文章を添削します。'
        )
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_servicelist_third_title_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_servicelist_third_title_controls' , array(
        'settings' => 'ratpost_theme_servicelist_third_title_settings',
        'label' => 'サービスタイトル3を入力',
        'description' => 'トップページに表示するサービスタイトル3を入力してください。',
        'section' => 'ratpost_theme_servicelist_options',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => '例）3.記事更新'
        )
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_servicelist_third_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_servicelist_third_controls' , array(
        'settings' => 'ratpost_theme_servicelist_third_settings',
        'label' => 'サービス内容3を入力',
        'description' => 'トップページに表示するサービス内容3を入力してください。',
        'section' => 'ratpost_theme_servicelist_options',
        'type' => 'textarea',
        'input_attrs' => array(
            'placeholder' => '例）世界中の方に読んでもらえるようネット上に文章を公開します。'
        )
    ));
}
add_action('customize_register','theme_customize_register_servicelist');

/***************
会社概要の追加
***************/
function theme_customize_register_companyprofile($wp_customize) {
    // セクション設定（テーマカスタマイザーのメニュー名を設定）
    $wp_customize->add_section('ratpost_theme_companyprofile_options', array(
        'title' => '会社概要',
        'priority' => 40,
        'description' => 'トップページの会社概要を設定できます。',
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_companyname_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_companyname_controls' , array(
        'settings' => 'ratpost_theme_companyname_settings',
        'label' => '会社名を入力',
        'description' => '会社名を入力してください。',
        'section' => 'ratpost_theme_companyprofile_options',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => '例）株式会社ラットポスト'
        )
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_establish_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_establish_controls' , array(
        'settings' => 'ratpost_theme_establish_settings',
        'label' => '設立時期を入力',
        'description' => '設立時期を入力してください。',
        'section' => 'ratpost_theme_companyprofile_options',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => '例）2020年06月'
        )
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_capital_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_capital_controls' , array(
        'settings' => 'ratpost_theme_capital_settings',
        'label' => '資本金を入力',
        'description' => '資本金を入力してください。',
        'section' => 'ratpost_theme_companyprofile_options',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => '例）1億円'
        )
    ));
    
    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_employees_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_employees_controls' , array(
        'settings' => 'ratpost_theme_employees_settings',
        'label' => '従業員数を入力',
        'description' => '従業員数を入力してください。',
        'section' => 'ratpost_theme_companyprofile_options',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => '例）280人'
        )
    ));
    
    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_officer_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_officer_controls' , array(
        'settings' => 'ratpost_theme_officer_settings',
        'label' => '代表名を入力',
        'description' => '代表名を入力してください。',
        'section' => 'ratpost_theme_companyprofile_options',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => '例）黒川　シュン'
        )
    ));
    
    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_business_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_business_controls' , array(
        'settings' => 'ratpost_theme_business_settings',
        'label' => '事業内容を入力',
        'description' => '事業内容を入力してください。',
        'section' => 'ratpost_theme_companyprofile_options',
        'type' => 'textarea',
        'input_attrs' => array(
            'placeholder' => '例）WEBプロモーション事業・WEB制作事業　他'
        )
    ));
    
    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_businesshours_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_businesshours_controls' , array(
        'settings' => 'ratpost_theme_businesshours_settings',
        'label' => '営業時間を入力',
        'description' => '営業時間を入力してください。',
        'section' => 'ratpost_theme_companyprofile_options',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => '例）09:00～17:00'
        )
    ));
    
    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_businesstel_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_businesstel_controls' , array(
        'settings' => 'ratpost_theme_businesstel_settings',
        'label' => '電話番号を入力（ハイフン不要）',
        'description' => '連絡窓口となる電話番号を入力してください。',
        'section' => 'ratpost_theme_companyprofile_options',
        'type' => 'number',
        'input_attrs' => array(
            'placeholder' => '例）00000000000'
        )
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_email_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_email_controls' , array(
        'settings' => 'ratpost_theme_email_settings',
        'label' => 'メールアドレスを入力',
        'description' => '連絡窓口となるメールアドレスを入力してください。',
        'section' => 'ratpost_theme_companyprofile_options',
        'type' => 'email',
        'input_attrs' => array(
            'placeholder' => '例）xxx@gmail.com'
        )
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_location_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_location_controls' , array(
        'settings' => 'ratpost_theme_location_settings',
        'label' => '本社の所在地を入力',
        'description' => '本社の所在地を入力してください。',
        'section' => 'ratpost_theme_companyprofile_options',
        'type' => 'textarea',
        'input_attrs' => array(
            'placeholder' => '例）埼玉県川口市末広1-17-8'
        )
    ));

    // テーマ設定（メニュー名の中の項目を設定）
    $wp_customize->add_setting('ratpost_theme_nearest_station_settings' , array(
        'default' => '',
        'type' => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // コントロール設定
    $wp_customize->add_control('ratpost_theme_nearest_station_controls' , array(
        'settings' => 'ratpost_theme_nearest_station_settings',
        'label' => '最寄り駅を入力',
        'description' => '最寄り駅を入力してください。',
        'section' => 'ratpost_theme_companyprofile_options',
        'type' => 'text',
        'input_attrs' => array(
            'placeholder' => '例）川口駅東口より徒歩8分'
        )
    ));
}
add_action('customize_register','theme_customize_register_companyprofile');
?>