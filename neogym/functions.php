<?php

if (!function_exists('mythemefunction')){
    function mythemefunction(){
        add_theme_support('post_thumbnails');
        add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
}

add_action('after_setup_theme', 'mythemefunction');
?>