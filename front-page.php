<?php get_header(); ?>
<main>
    <!-- ヒーローヘッダー -->
    <section class="hero-header">
        <h2 class="catchphrase"><?php echo get_option('ratpost_theme_catchphrase_settings'); ?></h2>
        <img src="dest/img/top-img.jpg" class="hero-header-img" alt="Ratpost_night">
    </section>
    <div class="container">
        <!-- メッセージ文 -->
        <section class="contents-area">
            <h2 class="section-title"><?php echo get_option('ratpost_theme_bodycopy_settings'); ?></h2>
            <p><?php echo get_option('ratpost_theme_bodycopy_phrase_settings'); ?></p>
        </section>
        <!-- サービス一覧 -->
        <section class="contents-area">
            <h2 class="section-title">サービス一覧</h2>
            <div class="service-lists">
                <div class="service-list">
                    <div class="box-icon">
                        <!-- ここにアイコンを刺す仕組みを作る -->
                        <img src="dest/img/top-img-test.jpg" class="box-icon-img" alt="">
                    </div>
                    <h3><?php echo get_option('ratpost_theme_servicelist_first_title_settings'); ?></h3>
                    <p><?php echo get_option('ratpost_theme_servicelist_first_settings'); ?></p>
                </div>
                <div class="service-list">
                    <div class="box-icon">
                        <!-- ここにアイコンを刺す仕組みを作る -->
                        <img src="dest/img/top-img-test.jpg" class="box-icon-img" alt="">
                    </div>
                    <h3><?php echo get_option('ratpost_theme_servicelist_second_title_settings'); ?></h3>
                    <p><?php echo get_option('ratpost_theme_servicelist_second_settings'); ?></p>
                </div>
                <div class="service-list">
                    <div class="box-icon">
                        <!-- ここにアイコンを刺す仕組みを作る -->
                        <img src="dest/img/top-img-test.jpg" class="box-icon-img" alt="">
                    </div>
                    <h3><?php echo get_option('ratpost_theme_servicelist_third_title_settings'); ?></h3>
                    <p><?php echo get_option('ratpost_theme_servicelist_third_settings'); ?></p>
                </div>
            </div>
        </section>
        <!-- ニュース一覧 -->
        <section class="contents-area">
            <h2 class="section-title">ニュース一覧</h2>
            <ul>
                <?php
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post();     
                    $categories = get_the_category();
                    foreach($categories as $category) {
                        echo '<li class="news-list"><span class="date">' . get_the_date('Y年m月d日') . '</span>' .
                        '<div class="category-label"><a href="' . esc_url(get_category_link($category->term_id)) . '" class="category-label-link">' . $category->cat_name . '</a></div>' .
                        '<p class="new-text"><a href="' . esc_url(get_permalink()) . '">' . get_the_title() . '</a></p></li>';
                            }
                        }
                    } else {
                        echo "最新のニュースはありません。";
                    }
                ?>
            </ul>
        </section>
        <!-- 会社概要 -->
        <section class="contents-area">
            <h2 class="section-title">会社概要</h2>
            <table class="company-table">
                <tr>
                    <th>会社名</th>
                    <td><?php echo get_option('ratpost_theme_companyname_settings'); ?></td>
                </tr>
                <tr>
                    <th>設立</th>
                    <td><?php echo get_option('ratpost_theme_establish_settings'); ?></td>
                </tr>
                <tr>
                    <th>資本金</th>
                    <td><?php echo get_option('ratpost_theme_capital_settings'); ?></td>
                </tr>
                <tr>
                    <th>従業員数</th>
                    <td><?php echo get_option('ratpost_theme_employees_settings'); ?></td>
                </tr>
                <tr>
                    <th>代表名</th>
                    <td><?php echo get_option('ratpost_theme_officer_settings'); ?></td>
                </tr>
                <tr>
                    <th>事業内容</th>
                    <td><?php echo get_option('ratpost_theme_business_settings'); ?></td>
                </tr>
                <tr>
                    <th>営業時間</th>
                    <td><?php echo get_option('ratpost_theme_businesshours_settings'); ?></td>
                </tr>
                <tr>
                    <th>TEL</th>
                    <td><?php echo get_option('ratpost_theme_businesstel_settings'); ?></td>
                </tr>
                <tr>
                    <th>ご連絡先</th>
                    <td><?php echo get_option('ratpost_theme_email_settings'); ?></td>
                </tr>
                <tr>
                    <th>本社所在地</th>
                    <td><?php echo get_option('ratpost_theme_location_settings'); ?></td>
                </tr>
                <tr>
                    <th>最寄り駅</th>
                    <td><?php echo get_option('ratpost_theme_nearest_station_settings'); ?></td>
                </tr>
                <!-- Googleマップ -->
            </table>
        </section>       
        <!-- お問い合わせフォーム -->
        <section class="contents-area">
            <h2 class="section-title">ご依頼・ご相談はコチラから</h2>
            <form action="" method="post" action="/">
                <div class="form-parts">
                    <label>ご連絡先のメールアドレス<span class="required">必須</span></label>
                    <input type="text" name="email">
                </div>
                <div class="form-parts">
                    <label>ご連絡先のお電話番号<span class="required">必須</span></label>
                    <input type="text" name="tel">
                </div>
                <div class="form-parts">
                    <label>ご担当者様のお名前<span class="required">必須</span></label>
                    <input type="text" name="name">
                </div>
                <div class="form-parts">
                    <label>ご相談内容・ご質問・その他</label>
                    <textarea name="contents" cols="30" rows="10"></textarea>
                </div>
                <div class="submit-btn">
                    <input type="submit" class="submit-btn-color" value="送信">
                </div>
            </form>
        </section>
    </div>
</main>
<?php get_footer(); ?>