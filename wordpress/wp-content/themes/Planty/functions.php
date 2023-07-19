<?php

add_action('wp_enqueue_scripts','theme_enqueue_styles');
function theme_enqueue_styles()
{
    
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/theme.css', array(), filemtime(get_stylesheet_directory() . '/theme.css'));
}

function montheme_supports()
{
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}

add_action('after_setup_theme', 'montheme_supports');

add_theme_support( 'custom-logo' );
function themename_custom_logo_setup() { 
    $defaults = array( 
      'height' => 100, 
      'width' => 300, 
      'flex-height' => true, 
      'flex-width' => true, 
      'header-text' => array( 'site-title', 'site-description' ), 
      'unlink-homepage-logo' => false, 
    ); 
 
    add_theme_support( 'custom-logo', $defaults ); 
 } 
 add_action( 'after_setup_theme', 'themename_custom_logo_setup' );