<?php get_header(); ?>

  <section class="hero" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/hero-img.png);">
    <div class="hero__container">
      <h1 class="hero__title">John Doe</h1>
      <p class="hero__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dolor magna risus sed. Et dictumst vel.</p>
      <a href="#" class="hero__button btn">Free Seo Consulting Training</a>
    </div>
  </section>
  <section class="seo">
    <div class="seo__container">
      <div class="seo__text">
        <h2 class="seo__title">Superstar SEO</h2>
        <p class="seo__description">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam amet, platea diam rhoncus, sem tortor, turpis ac tincidunt. Nisi adipiscing a suspendisse justo eleifend volutpat et vitae ac. Consequat in mi iaculis hendrerit mauris mattis. Lacus risus amet at magna urna. Felis nec orci a, quis nullam vel sem nunc enim. Sit mi tellus eget commodo augue.
        </p>
      </div>
      <div class="seo__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/seo-img.png" alt="SEO Image">
      </div>
    </div>
  </section>
  <section class="testimonials container">
    <div class="splide">
      <div class="splide__top">
        <h2 class="splide__title">What My <span>Clients Say</h2>
        <div class="splide__arrows">
          <button class="splide__arrow arrow-btn splide__arrow--prev">
            <svg width="20" height="20" viewBox="0 0 20 20">
              <use href="#arrow-left" />
            </svg>
          </button>
          <button class="splide__arrow arrow-btn splide__arrow--next">
            <svg width="20" height="20" viewBox="0 0 20 20">
              <use href="#arrow-left" />
            </svg>
          </button>
        </div>
      </div>
      <div class="splide__track">
        <ul class="splide__list">
          <li class="splide__slide">
            <div class="splide__slide-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-img.jpg" alt="Testimonial Image">
            </div>
            <blockquote class="splide__slide-quote">
              <p class="splide__slide-quote-text font-italic-lg">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing diam, tortor, egestas euismod neque venenatis, viverra. Ante nibh morbi egestas quam lorem ipsum. Eget sit praesent a laoreet. Mi, phasellus quis mauris sollicitudin non. Iaculis ac duis mauris enim. “</p>
              <footer>
                <p class="splide__slide-quote-author font-bold">Frank Hardy</p>
                <p class="splide__slide-quote-pos font-sm">Your Marketing Crew CEO</p>
              </footer>
            </blockquote>
          </li>
          <li class="splide__slide">
            <div class="splide__slide-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-img.jpg" alt="Testimonial Image">
            </div>
            <blockquote class="splide__slide-quote">
              <p class="splide__slide-quote-text font-italic-lg">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing diam, tortor, egestas euismod neque venenatis, viverra. Ante nibh morbi egestas quam lorem ipsum. Eget sit praesent a laoreet. Mi, phasellus quis mauris sollicitudin non. Iaculis ac duis mauris enim. “</p>
              <footer>
                <p class="splide__slide-quote-author font-bold">Frank Hardy</p>
                <p class="splide__slide-quote-pos font-sm">Your Marketing Crew CEO</p>
              </footer>
            </blockquote>
          </li>
          <li class="splide__slide">
            <div class="splide__slide-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/testimonial-img.jpg" alt="Testimonial Image">
            </div>
            <blockquote class="splide__slide-quote">
              <p class="splide__slide-quote-text font-italic-lg">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Adipiscing diam, tortor, egestas euismod neque venenatis, viverra. Ante nibh morbi egestas quam lorem ipsum. Eget sit praesent a laoreet. Mi, phasellus quis mauris sollicitudin non. Iaculis ac duis mauris enim. “</p>
              <footer>
                <p class="splide__slide-quote-author font-bold">Frank Hardy</p>
                <p class="splide__slide-quote-pos font-sm">Your Marketing Crew CEO</p>
              </footer>
            </blockquote>
          </li>
        </ul>
      </div>
    </div>
  </section>
<section class="cta">
  <div class="container cta__container">
    <div class="cta__col">
      <h2 class="cta__title">Get in Touch</h2>
      <a href="mailto:hello@domainexample.com" class="cta__link">hello@domainexample.com</a>
      <p class="cta__address">237 Haylee Islands Suite 960</p>
    </div>
    <div class="cta__col">
      <?= do_shortcode('[hf_form slug="contact"]'); ?>
    </div>

  </div>
</section>

<footer class="footer">
  <a class="footer__logo" href="<?php echo home_url(); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" alt="John Doe">
  </a>
  <?php
    wp_nav_menu(
      [
        'theme_location' => 'johndoe_footer_menu',
        'container' => 'nav',
        'container_class' => 'footer__nav',
        'menu_class' => 'footer__menu-list',
        'link_class' => 'footer__menu-link'
      ]
    );
  ?>
  <div class="footer__copy">
    Copyright © 2021 All right reserved
  </div>
</footer>

  <svg style="display: none">
    <defs>
      <symbol id="arrow-left" viewBox="0 0 20 20">
        <path d="M0.229141 9.44704C0.229376 9.44681 0.22957 9.44654 0.229843 9.4463L4.31203 5.38381C4.61785 5.07947 5.1125 5.08061 5.41691 5.38646C5.72129 5.69228 5.72012 6.18693 5.4143 6.49131L2.67352 9.2188H19.2188C19.6502 9.2188 20 9.56857 20 10.0001C20 10.4315 19.6502 10.7813 19.2188 10.7813H2.67355L5.41426 13.5088C5.72008 13.8132 5.72125 14.3078 5.41687 14.6136C5.11246 14.9195 4.61777 14.9206 4.31199 14.6163L0.229805 10.5538C0.22957 10.5536 0.229374 10.5533 0.229101 10.5531C-0.0768757 10.2477 -0.0758991 9.75142 0.229141 9.44704Z"/>
      </symbol>
      <symbol id="envelope" viewBox="0 0 20 20">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.81818 4.85267L9.39603 11.5885C9.74047 11.8947 10.2595 11.8947 10.604 11.5885L18.1818 4.85267V15.4545C18.1818 15.9566 17.7748 16.3636 17.2727 16.3636H2.72727C2.22519 16.3636 1.81818 15.9566 1.81818 15.4545V4.85267ZM3.1865 3.63635H16.8134L9.99995 9.69276L3.1865 3.63635Z"/>
      </symbol>
    </defs>
  </svg>

<?php get_footer(); ?>