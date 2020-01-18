<?php 
// Add Scripts
function yts_add_scripts () {
    // Add Main CSS
    wp_enqueue_style('yts-main-style', plugin_url() . '/youtubesubs/css/style.css');
    // Add Main JS
    wp_enqueue_script('yts-main-script', plugin_url() . '/youtubesubs/js/script.js');
}


?>