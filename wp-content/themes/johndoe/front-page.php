<?php get_header(); ?>


  <section class="hero">
    <div class="hero__container">
      <h1 class="hero__title">
        <?php
        $title = get_field('hero_title');
        if(isset($title["green"])) {
          $title["green"] = "<span>" . $title["green"] . "</span>";
        }
        echo join(" ", get_field('hero_title'));
        ?>
      </h1>
      <p class="hero__description">
        <?= get_field('hero_text'); ?>
      </p>
      <a href="<?= get_field('hero_button_link'); ?>" class="hero__button btn">
        <?= get_field('hero_button_label'); ?>
      </a>
    </div>
    <div class="hero__image">
      <img src="<?= get_field('hero_image')['url'] ?>" alt="<?= get_field('hero_image')['alt'] ?>">
    </div>
  </section>
  <section class="seo" id="about">
    <div class="seo__container">
      <div class="seo__text">
        <h2 class="seo__title">
          <?php
          $title = get_field('seo_title');
          if(isset($title["green"])) {
            $title["green"] = "<span>" . $title["green"] . "</span>";
          }
          echo join(" ", $title);
          ?>
        </h2>
        <p class="seo__description">
          <?= get_field('seo_text'); ?>
        </p>
      </div>
      <div class="seo__image">
        <img src="<?= get_field('seo_image')['url']; ?>" alt="<?= get_field('seo_image')['alt']; ?>">
      </div>
    </div>
  </section>
  <section class="testimonials container" id="testimonials">
    <div class="splide">
      <div class="splide__top">
        <h2 class="splide__title">
          <?php
          $title = get_field('testimonials_title');
          if(isset($title["green"])) {
            $title["green"] = "<span>" . $title["green"] . "</span>";
          }
          echo join(" ",$title);
          ?>
        </h2>
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
          <?php $testimonials = get_field('testimonials_list');
          foreach($testimonials as $testimonial) : ?>
            <li class="splide__slide">
              <div class="splide__slide-image">
                <img src="<?= get_field('image', $testimonial)['url']; ?>" alt="<?= get_field('image', $testimonial)['alt']; ?>">
              </div>
              <blockquote class="splide__slide-quote">
                <p class="splide__slide-quote-text font-italic-lg">
                  <?= get_field('text', $testimonial); ?>
                </p>
                <footer>
                  <p class="splide__slide-quote-author font-bold">
                    <?= get_field('author', $testimonial); ?>
                  </p>
                  <p class="splide__slide-quote-pos font-sm">
                    <?= get_field('position', $testimonial); ?>
                  </p>
                </footer>
              </blockquote>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </section>
  <section class="cta" id="contact">
    <div class="container cta__container">
      <div class="cta__col">
        <h2 class="cta__title">
          <?php
          $title = get_field('cta_title');
          if(isset($title["green"])) {
            $title["green"] = "<span>" . $title["green"] . "</span>";
          }
          echo join(" ",$title);
          ?>
        </h2>
        <div class="cta__bottom">

          <a href="mailto:<?= get_field('cta_email'); ?>" class="cta__link">
            <?php if (get_field('cta_email')) {
              echo get_field('cta_email');
            } else {
              echo get_option('admin_email');
            } ?>
          </a>
          <p class="cta__address"><?= get_field('cta_address'); ?></p>
        </div>
      </div>
      <div class="cta__col">
        <?= do_shortcode('[hf_form slug="contact"]'); ?>
      </div>

    </div>
  </section>
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