<? /* Template Name: Prices Page */ ?>

<?php get_header(); ?>
	<main class="prices-page">
    <section class="price track">
      <div class="price__container">
        <h1 class="txt txt_price-title wow fadeInLeft" data-wow-delay="0.1s"><?php the_field('title_page_price') ?></h1>
        <div class="price__prices">
          <div class="price__navigation">
            <div class="swiper-button-prev">
              <img src="<?php bloginfo('template_directory') ?>/custom/img/down-arrow.svg" alt="arrow down" />
            </div>
            <div class="swiper-button-next">
              <img src="<?php bloginfo('template_directory') ?>/custom/img/down-arrow.svg" alt="arrow down" />
            </div>
          </div>
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="price-card green wow fadeInUp" data-wow-delay="0.3s">
                <div class="price-card__info">
                  <span>Więcej</span>
                  <img src="<?php bloginfo('template_directory') ?>/custom/img/info.svg" alt="icon info" class="price-card__icon-info" />
                </div>
                <div class="price-card__icon">
                  <?php
                  $icon = get_field('icon');
                  if( !empty( $icon ) ): ?>
                      <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                  <?php endif; ?>
                </div>
                <div class="price-card__price-and-description">
                  <?php the_field('prices_and_description') ?>
                </div>
                <div class="price__info">
                  <img src="<?php bloginfo('template_directory') ?>/custom/img/cancel-white.svg" alt="cancel" class="price__info-close" />
                  <?php the_field('info_price') ?>
                </div>
              </div>
              </div>
              <div class="swiper-slide">
              <div class="price-card blue wow fadeInUp" data-wow-delay="0.5s">
              <div class="price-card__info">
                <span>Więcej</span>
                <img src="<?php bloginfo('template_directory') ?>/custom/img/info.svg" alt="icon info" class="price-card__icon-info" />
              </div>
              <div class="price-card__icon">
                <?php
                $icon = get_field('icon_2');
                if( !empty( $icon ) ): ?>
                    <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                <?php endif; ?>
              </div>
              <div class="price-card__price-and-description">
                <?php the_field('prices_and_description_2') ?>
              </div>
              <div class="price__info">
                <img src="<?php bloginfo('template_directory') ?>/custom/img/cancel-white.svg" alt="cancel" class="price__info-close" />
                <?php the_field('info_price_2') ?>
              </div>
            </div>
              </div>
              <div class="swiper-slide">
              <div class="price-card orange wow fadeInUp" data-wow-delay="0.7s">
              <div class="price-card__info">
                <span>Więcej</span>
                <img src="<?php bloginfo('template_directory') ?>/custom/img/info.svg" alt="icon info" class="price-card__icon-info" />
              </div>
              <div class="price-card__icon">
                <?php
                $icon = get_field('icon_3');
                if( !empty( $icon ) ): ?>
                    <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
                <?php endif; ?>
              </div>
              <div class="price-card__price-and-description">
                <?php the_field('prices_and_description_3') ?>
              </div>
              <div class="price__info">
                <img src="<?php bloginfo('template_directory') ?>/custom/img/cancel-white.svg" alt="cancel" class="price__info-close" />
                <?php the_field('info_price_3') ?>
              </div>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<?php get_footer();
