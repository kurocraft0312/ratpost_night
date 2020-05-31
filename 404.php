<?php get_header(); ?>
<div id="container">
    <h2>お探しのページは見つかりませんでした。</h2>
    <p>指定されたページは存在しないか、または移動した可能性がございます。また、もし続けてお探しになる際は、以下の検索ボックスも合わせてご活用ください。</p>
    <?php get_search_form(); ?>
    <p><a href="<?php echo home_url(); ?>">トップページへ戻る</a></p>
</div>
<?php get_footer(); ?>