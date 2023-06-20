<?php

function blog_assets(){
    wp_enqueue_style('blog-style', get_template_directory_uri() ."./css/style.css", microtime());
    // Kinukuha si style.css sa directory para mareach si style.css, microtime -> mabilis ma-read si css
}

add_action('wp_enqueue_scripts', 'blog_assets'); 
// add_action -> _________________
