<?php 
// Add Scripts
function yts_add_scripts () {
    // Add Main CSS
    wp_enqueue_style('yts-main-style', plugins_url() . '/WordPress-YouTube-Plugin/css/style.css');
    // Add Main JS
    wp_enqueue_script('yts-main-script', plugins_url() . '/WordPress-YouTube-Plugin/js/main.js');
}


add_action('wp_enqueue_scripts', 'yts_add_scripts');

?>