<footer class="footer">
  <?php the_custom_logo( ); ?>
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
    <?= get_field('copy_text'); ?>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>