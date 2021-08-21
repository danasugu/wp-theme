<?php

/* adding CSS */
function basic_enqueue_styles() {
  wp_register_style( 'styles', get_template_directory_uri() . '/css/styles.css' );
  $depedencies = array('styles');
  wp_enqueue_style( 'basic-style', get_stylesheet_uri(), $depedencies );

}
/* adding Javascript */
// function basic_enqueue_scripts() {
//   $dependencies = array('javascript');
//   wp_enqueue_script('bootstrap' get_template_directory_uri() . '/js/scripts.js', $depedencies);
// }

add_action( 'wp_enqueue', 'basic_enqueue_styles' );

// add_action( 'wp_enqueue', 'bassic_enqueue_scripts');

?>