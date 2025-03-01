<?php
// function custom_blocks_main_nav_block_init() {
// register_block_type( __DIR__ . '/build/main-nav' );
// register_block_type(__DIR__ . '/build/instructors-list');
// register_block_type(__DIR__ . '/build/lessons-list');
// }
// add_action( 'init', 'custom_blocks_main_nav_block_init' );

function bma_theme_setup() {
add_theme_support("menus");

register_nav_menus([
"primary" => __("Primary Menu", "collinsblock"),
]);
}
add_action("after_setup_theme", "bma_theme_setup");
?>