<?php

register_nav_menus( array('primary' => 'Primary Menu') );
register_sidebar( array('name' => 'Sidebar') );

add_theme_support( 'automatic-feed-links' );

function my_init_method() {
  if(!is_admin()) {
    wp_enqueue_script( 'jquery' );
    wp_register_style( 'global', get_bloginfo('template_directory') . '/assets/css/bootstrap.css');
    wp_enqueue_style( 'global' );
  }
}
add_action('init', 'my_init_method');

add_filter("gform_confirmation_anchor", create_function("","return false;"));



?>
