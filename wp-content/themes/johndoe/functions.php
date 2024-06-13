<?php

function johndoe_scripts() {
  $cssFilePath = glob( get_template_directory() . '/assets/css/main.*.css' );
  $cssFileURI = get_template_directory_uri() . '/assets/css/' . basename($cssFilePath[0]);
  wp_enqueue_style( 'main_css', $cssFileURI );

  $jsFilePath = glob( get_template_directory() . '/assets/js/main.*.js' );
  $jsFileURI = get_template_directory_uri() . '/assets/js/' . basename($jsFilePath[0]);
  wp_enqueue_script( 'main_js', $jsFileURI , null , null , true );
}
add_action( 'wp_enqueue_scripts', 'johndoe_scripts' );
