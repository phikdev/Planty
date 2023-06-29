<?php

add_action('wp_enqueue_scripts','theme_enqueue_styles');
function theme_enqueue_styles()
{
    
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/theme.css', array(), filemtime(get_stylesheet_directory() . '/theme.css'));
}