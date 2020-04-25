<header class="site-header">
    <div id="title-header" class="container">
        <h1 class="site-title"><a href="/" class="site-title-link">Ratpost_night</a></h1>
        <nav class="g_nav">
        <?php
            wp_nav_menu( array(
                'container' => 'ul',
                'menu_class' => 'g_nav_lists',
                'echo' => true,
                'depth' => 0,
                'walker' => new Edit_g_nav_list(),
                'theme_location' => '',
                'items_wrap' => '<ul class="%2$s">%3$s</ul>'
            ));
        ?>
        </nav>
    </div>
</header>