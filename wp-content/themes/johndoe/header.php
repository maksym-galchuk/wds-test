<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
</head>
<body <?php body_class(); ?>>
<header class="header">
  <div class="header__container">
    <?php the_custom_logo( ); ?>
    <?php
    wp_nav_menu(
      [
        'theme_location' => 'johndoe_header_menu',
        'container' => 'nav',
        'container_class' => 'header__nav menu',
        'menu_class' => 'header__menu-list menu__list',
        'link_class' => 'header__menu-link menu__link'
      ]
    );
    ?>
    <button class="burger header__burger">
      <span class="burger__line"></span>
      <span class="burger__line"></span>
      <span class="burger__line"></span>
      <span class="burger__line"></span>
    </button>
  </div>
</header>

