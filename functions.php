<?php 

// LOAD CSS AND JS
function guyslandscaping_files() {
  wp_enqueue_script('main_js', get_template_directory_uri() . '/js/min/script-min.js', NULL, '', true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Raleway:wght@400;500;700&display=swap');
  wp_enqueue_style('style_css', get_stylesheet_uri());

}
add_action('wp_enqueue_scripts', 'guyslandscaping_files');

function guyslandscaping_features() {
  add_theme_support('title-tag');
  add_theme_support('menus');
  add_theme_support( 'post-thumbnails' );
}

add_action('after_setup_theme', 'guyslandscaping_features');



// Theme Support
function register_theme_menus() {
  register_nav_menus(
      array(
          'header-menu'  =>  __( 'Header Menu' )
      )
  );
}
add_action( 'after_setup_theme', 'register_theme_menus' );


?>