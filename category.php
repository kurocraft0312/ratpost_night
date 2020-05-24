<?php get_header(); ?>
    <p><?php single_cat_title(); ?>カテゴリ記事の一覧です</p>
<?php 
    if(have_posts()) {
        while(have_posts()) {
            the_post();
        }
?>
    <!-- ループしたい内容 -->
    <!-- https://noumenon-th.net/programming/2016/06/19/wordpress06/ -->
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    
<?php 
    } else {
        echo "記事が見つかりません。";
    } 
?>

<?php get_footer(); ?>