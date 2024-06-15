<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
  <title>Document</title>
</head>
<body <?php body_class(); ?>>
<header class="header">
  <div class="header__container">
    <a class="header__logo" href="<?php echo home_url(); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="John Doe">
    </a>
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

