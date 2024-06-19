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
  add_theme_support( 'custom-logo', [
    'height'      => 65,
    'width'       => 290,
    'flex-width'  => true,
    'flex-height' => true,
  ] );
}
add_action('after_setup_theme', 'johndoe_config');

function johndoe_post_types() {
  register_post_type('testimonial', [
    'public' => true,
    'labels' => [
      'name' => 'Testimonials',
      'add_new_item' => 'Add New Testimonial',
      'add_new' => 'Add New Testimonial',
      'edit_item' => 'Edit Testimonial',
      'all_items' => 'All Testimonials',
      'singular_name' => 'Testimonial',
    ],
    'menu_icon' => 'dashicons-testimonial',
    'supports' => ['title']
  ]);
}
add_action('init', 'johndoe_post_types');

// Add class to menu link
function johndoe_menu_link_class($classes, $item, $args) {
  if(isset($args->link_class)) {
    $classes["class"] = $args->link_class;
  }
  return $classes;
}
add_filter('nav_menu_link_attributes', 'johndoe_menu_link_class', 1, 3);

// Add data tag to menu link
function johndoe_menu_link_title($atts, $item, $args) {
  $atts['data-content'] = $item->title;
  return $atts;
}
add_filter('nav_menu_link_attributes', 'johndoe_menu_link_title', 1, 3);

// Disable Gutenberg for post type
add_filter('use_block_editor_for_post_type', 'johndoe_disable_gutenberg', 10, 2);
function johndoe_disable_gutenberg($current_status, $post_type) {
  if ( $post_type == 'page' ) return false;
  return $current_status;
}

// Allow SVG Upload
function johndoe_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'johndoe_mime_types');


// Change Populate Form Submit Placeholders
add_filter('hf_form_markup', 'johndoe_form_placeholders', 10, 1);
function johndoe_form_placeholders($markup) {
  $markup = str_replace('#name-placeholder#', get_field('cta_name_placeholder', get_option('page_on_front')), $markup);
  $markup = str_replace('#email-placeholder#', get_field('cta_email_placeholder', get_option('page_on_front')), $markup);
  $markup = str_replace('#message-placeholder#', get_field('cta_message_placeholder', get_option('page_on_front')), $markup);
  $markup = str_replace('#submit-button#', get_field('cta_button_label', get_option('page_on_front')), $markup);
  return $markup;
}



