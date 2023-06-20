<?php


function blog_support(){

    register_nav_menus(
        array(
            'header_menu' => __('header menu', 'text_domain')
        )
        );
    add_theme_support('menus');
    add_theme_support("post-thumbnails");

    add_theme_support( 'custom-logo', 
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'blog_support');

