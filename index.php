<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- OGP利用宣言 -->
    <head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# article: https://ogp.me/ns/article#">
    <!-- BASIC -->
    <meta name="description" content="Night WordPress theme.">
    <meta name="keywords" content="Night WordPress theme,WordPress theme">
    <meta name="author" content="kurocraft0312">
    <!-- Win/Safari -->
    <meta name="format-detection" content="telephone=no,email=no,address=no">
    <meta name="msapplication-config" content="/browserconfig.xml">
    <meta name="msapplication-TileColor" content="Win8+用のタイルカラー">
    <meta name="msapplication-TitleImage" content="Win8+用のタイル画像">
    <!-- CSRF対策 -->
    <meta name="csrf-param" content="">
    <meta name="csrf-token" content="">
    <!-- OGP -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Ratpost_night">
    <meta property="og:title" content="Night WordPress theme.">
    <meta property="og:description" content="Night WordPress theme.">
    <meta property="og:url" content="ページURL">
    <meta property="og:image" content="画像URL">
    <meta property="og:image:alt" content="画像の説明URL">
    <meta property="og:local" content="ja_JP">
    <!-- SNS -->
    <meta property="fb:app_id" content="APP-ID（15文字）">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@kurocraft0312">
    <meta name="twitter:image" content="OGP画像のURL">
    <!-- canonical -->
    <link rel="canonical" href="">
    <!-- favicon -->
    <link rel="icon" href="./favicon.ico">
    <!-- Web Clip(Retina対応) -->
    <link rel="apple-touch-icon" href="">
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>/../assets/css/reset.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header class="site-header">
        <div id="title-header" class="container">
            <h1 class="site-title"><a href="/" class="site-title-link">Ratpost_night</a></h1>
            <?php
                wp_nav_menu( array(
                    'container' => 'nav',
                    'menu_class' => 'g_nav',
                    'echo' => true,
                    'depth' => 0,
                    'walker' => 'new Edit_g_nav_list',
                    'theme_location' => 'ヘッダーナビ',
                ));
            ?>
            <!-- HTML -->
            <nav class="g_nav">
                <ul class="g_nav_lists">
                    <li class="g_nav_list"><a href="#" class="g_nav_list_link">ホーム</a></li>
                    <li class="g_nav_list"><a href="#" class="g_nav_list_link">サービス一覧</a></li>
                    <li class="g_nav_list"><a href="#" class="g_nav_list_link">ニュース</a></li>
                    <li class="g_nav_list"><a href="#" class="g_nav_list_link">会社概要</a></li>
                    <li class="g_nav_list"><a href="#" class="g_nav_list_link">お問い合わせ</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <!-- ヒーローヘッダー -->
        <section class="hero-header">
            <h2 class="catchphrase">ここにキャッチコピーを入れる</h2>
            <img src="assets/img/top-img.jpg" class="hero-header-img" alt="Ratpost_night">
        </section>
        <div class="container">
            <!-- メッセージ文 -->
            <section class="contents-area">
                <h2 class="section-title">WEBのプロフェッショナル集団が、あなたの店舗の売上を最大化します</h2>
                <p>ここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入ります</p>
                <p>ここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入ります</p>
            </section>
            <!-- サービス一覧 -->
            <section class="contents-area">
                <h2 class="section-title">サービス一覧</h2>
                <div class="service-lists">
                    <div class="service-list">
                        <div class="box-icon">
                            <!-- ここにアイコンを刺す仕組みを作る -->
                            <img src="assets/img/top-img-test.jpg" class="box-icon-img" alt="">
                        </div>
                        <h3>1.記事作成</h3>
                        <p>分野の素人が読んでも理解できる文章を作成します。</p>
                    </div>
                    <div class="service-list">
                        <div class="box-icon">
                            <!-- ここにアイコンを刺す仕組みを作る -->
                            <img src="assets/img/top-img-test.jpg" class="box-icon-img" alt="">
                        </div>
                        <h3>2.記事添削</h3>
                        <p>誰でも読める文章になるよう文章を添削します。</p>
                    </div>
                    <div class="service-list">
                        <div class="box-icon">
                            <!-- ここにアイコンを刺す仕組みを作る -->
                            <img src="assets/img/top-img-test.jpg" class="box-icon-img" alt="">
                        </div>
                        <h3>3.記事更新</h3>
                        <p>世界中の方に読んでもらえるようネット上に文章を公開します。</p>
                    </div>
                </div>
            </section>
            <!-- ニュース一覧 -->
            <section class="contents-area">
                <h2 class="section-title">ニュース一覧</h2>
                <ul>
                    <li class="news-list"><span class="date">2020年04月19日</span><div class="category-label"><a href="#" class="category-label-link">お知らせ</a></div><p class="new-text"><a href="#">テストテスト</a></p></li>
                    <li class="news-list"><span class="date">2020年04月19日</span><div class="category-label"><a href="#" class="category-label-link">お知らせ</a></div><p class="new-text"><a href="#">テストテスト</a></p></li>
                    <li class="news-list"><span class="date">2020年04月19日</span><div class="category-label"><a href="#" class="category-label-link">お知らせ</a></div><p class="new-text"><a href="#">テストテスト</a></p></li>
                    <li class="news-list"><span class="date">2020年04月19日</span><div class="category-label"><a href="#" class="category-label-link">お知らせ</a></div><p class="new-text"><a href="#">テストテスト</a></p></li>
                    <li class="news-list"><span class="date">2020年04月19日</span><div class="category-label"><a href="#" class="category-label-link">お知らせ</a></div><p class="new-text"><a href="#">テストテスト</a></p></li>
                </ul>
            </section>
            <!-- 会社概要 -->
            <section class="contents-area">
                <h2 class="section-title">会社概要</h2>
                <table class="company-table">
                    <tr>
                        <th>屋号</th>
                        <td>Ratpost（ラットポスト）</td>
                    </tr>
                    <tr>
                        <th>代表者名（活動名）</th>
                        <td>黒川　シュン（くろかわ　しゅん）</td>
                    </tr>
                    <tr>
                        <th>活動開始時期</th>
                        <td>2020年6月～</td>
                    </tr>
                    <tr>
                        <th>事業内容</th>
                        <td>WEB制作/ホームページ制作</td>
                    </tr>
                    <tr>
                        <th>取引先</th>
                        <td>株式会社ラットポスト</td>
                    </tr>
                    <tr>
                        <th>事務所所在地</th>
                        <td>〒332-0006</td>
                    </tr>
                    <tr>
                        <th>最寄り駅</th>
                        <td>川口駅</td>
                    </tr>
                    <tr>
                        <th>営業時間</th>
                        <td>平日・土日祝日</td>
                    </tr>
                    <tr>
                        <th>ご連絡先</th>
                        <td>kurocraft0312@gmail.com</td>
                    </tr>
                    <tr>
                        <th>事務所アクセス</th>
                        <td>埼玉県川口駅徒歩8分</td>
                    </tr>
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
    <footer>
        <div class="copyright">
            <small lang="en">&copy; 2020 Ratpost by Kurokawa Shun</small>
            <p>WordPress Ratpost_night Theme is provided by "<a class="official-link" href="https://www.rat-post-official.com/" target="_blank">Ratpost</a>".</p>
        </div>
    </footer>
    <?php wp_footer(); ?>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script defer src="assets/js/index.js"></script>
</body>
</html>