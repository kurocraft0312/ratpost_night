<?php
function custom_meta_ogp() {
    if ( is_front_page() || is_home() || is_singular() ) {
        global $post;
        $ogp_title = '';
        $ogp_descr = '';
        $ogp_url = '';
        $ogp_img = '';
        $insert = '';
  
    if ( is_singular() ) { //記事＆固定ページ
        setup_postdata($post);
        $ogp_title = $post->post_title;
        $ogp_descr = mb_substr(get_the_excerpt(), 0, 120);
        $ogp_url = get_permalink();
        wp_reset_postdata();
    } elseif ( is_front_page() || is_home() ) { //トップページ
        $ogp_title = get_bloginfo('name');
        $ogp_descr = get_bloginfo('description');
        $ogp_url = home_url();
    }

    //og:type
    $ogp_type = ( is_front_page() || is_home() ) ? 'website' : 'article';

    //og:image
    if ( is_singular() && has_post_thumbnail() ) {
        $ps_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
        $ogp_img = $ps_thumb[0];
    } else {
        //例）get_template_directory_uri().'/img/logo2.png';
        $ogp_img = 'TOPページ＆アイキャッチ画像がないときに使われる画像のURL';
        }

        $insert .= '<meta property="og:title" content="'.esc_attr($ogp_title).'">' . "\n";
        $insert .= '<meta property="og:description" content="'.esc_attr($ogp_descr).'">' . "\n";
        $insert .= '<meta property="og:type" content="'.$ogp_type.'">' . "\n";
        $insert .= '<meta property="og:url" content="'.esc_url($ogp_url).'">' . "\n";
        $insert .= '<meta property="og:image" content="'.esc_url($ogp_img).'">' . "\n";
        $insert .= '<meta property="og:site_name" content="'.esc_attr(get_bloginfo('name')).'">' . "\n";
        $insert .= '<meta name="twitter:card" content="summary_large_image">' . "\n";
        $insert .= '<meta name="twitter:site" content="ツイッターのアカウント名">' . "\n";
        $insert .= '<meta property="og:locale" content="ja_JP">' . "\n";
        $insert .= '<meta property="fb:app_id" content="ここにappIDを入力">' . "\n";

        echo $insert;
    }
  } 
add_action('wp_head','custom_meta_ogp');
?>