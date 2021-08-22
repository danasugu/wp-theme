<?php


// function basic_enqueue_styles() {
//   wp_register_style( 'styles', get_template_directory_uri() . '/css/styles.css' );
//   $depedencies = array('styles');
//   wp_enqueue_style( 'basic-style', get_stylesheet_uri(), $depedencies );

/* adding CSS */
function scripts()
{
    wp_register_style('style', get_template_directory_uri() . '/css/style.css', [], 1, 'all');
    wp_enqueue_style('style');

    wp_enqueue_script('jquery');

    // wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], 1, true);
    wp_enqueue_script('app');
}

add_action('wp_enqueue_scripts', 'scripts');



// }
/* adding Javascript */
// function basic_enqueue_scripts() {
//   $dependencies = array('javascript');
//   wp_enqueue_script('bootstrap' get_template_directory_uri() . '/js/scripts.js', $depedencies);
// }

add_action( 'wp_enqueue_style', 'scripts' );

// add_action( 'wp_enqueue', 'bassic_enqueue_scripts');


add_theme_support( 'post-thumbnails' );

?>