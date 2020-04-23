<?php
/************************************************************************
add_action
*************************************************************************/
// jQueryの二重読み込み回避（wp_head()で自動に読み込まれる既存のjQueryを削除）
function wp_delete_local_jquery() {
    wp_deregister_script('jquery');
}
add_action( 'wp_enqueue_scripts','wp_delete_local_jquery' );
?>