<?php


function basic_enqueue_styles() {
  wp_register_style( 'styles', get_template_directory_uri() . '/css/styles.css' );
  $depedencies = array('styles');
  wp_enqueue_style( 'basic-style', get_stylesheet_uri(), $depedencies );

}

add_action( 'wp_enqueue', 'basic_enqueue_styles');

?>