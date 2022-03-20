<?php 


function guyslandscaping_files() {
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Raleway:wght@400;500;700&display=swap');
  wp_enqueue_style('guyslandscaping_main_styles', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'guyslandscaping_files');


?>