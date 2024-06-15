<footer class="footer">
  <a class="footer__logo" href="<?php echo home_url(); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="John Doe">
  </a>
  <?php
  wp_nav_menu(
    [
      'theme_location' => 'johndoe_footer_menu',
      'container' => 'nav',
      'container_class' => 'footer__nav menu',
      'menu_class' => 'footer__menu-list menu__list',
      'link_class' => 'footer__menu-link menu__link'
    ]
  );
  ?>
  <div class="footer__copy font-sm">
    Copyright © 2021 All right reserved
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>