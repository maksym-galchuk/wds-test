<?php

function johndoe_scripts() {
  $cssFilePath = glob( get_template_directory() . '/assets/css/main.*.css' );
  $cssFileURI = get_template_directory_uri() . '/assets/css/' . basename($cssFilePath[0]);
  wp_enqueue_style( 'main_css', $cssFileURI );

  $jsFilePath = glob( get_template_directory() . '/assets/js/main.*.js' );
  $jsFileURI = get_template_directory_uri() . '/assets/js/' . basename($jsFilePath[0]);
  wp_enqueue_script( 'main_js', $jsFileURI , null , null , true );
}
add_action('wp_enqueue_scripts', 'johndoe_scripts' );

function johndoe_config() {
  register_nav_menus(
    [
      'johndoe_header_menu' => 'John Doe Header Menu',
      'johndoe_footer_menu' => 'John Doe Footer Menu'
    ]
  );

  add_theme_support('menus' );
}
add_action('after_setup_theme', 'johndoe_config');

// Add class to menu link
function johndoe_menu_link_class($classes, $item, $args) {
  if(isset($args->link_class)) {
    $classes["class"] = $args->link_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'johndoe_menu_link_class', 1, 3);

// Add title tag to menu link
function johndoe_menu_link_title($atts, $item, $args) {
  $atts['title'] = $item->title;
  return $atts;
}
add_filter('nav_menu_link_attributes', 'johndoe_menu_link_title', 1, 3);



