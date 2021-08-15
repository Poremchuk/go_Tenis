<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goTenis
 */

get_header();
?>

<main id="primary" class="site-main">
  <section class="main-screen">
    <?php if (have_rows('slider_main')) : ?>
      <div class="main-screen__header">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php while (have_rows('slider_main')) : the_row();
              $imageVideo = get_sub_field('main_bunner');
              $title = get_sub_field('title');
              $subTitle = get_sub_field('subtitle');
              $link = get_sub_field('button');
            ?>
              <div class="swiper-slide">
                <!-- <img src="<?php echo $imageVideo ?>" alt="bunner" class="main-screen__bunner"> -->
                <?php if (strripos($imageVideo, '.mp4') === false) :  ?>
                  <img class="main-screen__bunner" src="<?php echo $imageVideo; ?>" alt="background" />
                <?php else : ?>
                  <video class="main-screen__bunner" loop muted playisinline autoplay>
                    <?php
                    if ($imageVideo) : ?>
                      <source src="<?php echo $imageVideo; ?>" type="video/mp4">
                    <?php endif; ?>
                  </video>
                <?php endif; ?>

                <div class="main-screen__content">
                  <h1 class="main-screen__title wow fadeInUp"><?php echo $title ?></h1>
                  <?php echo $subTitle ?>
                  <?php
                  if ($link) :
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                  ?>
                    <a class="button wow fadeInUp" data-wow-delay="0.5s" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
                  <?php endif; ?>
                </div>
              </div>
            <?php endwhile; ?>
          </div>

        </div>
      </div>
    <?php endif; ?>
    <div class="main-screen__bottom track">
      <div class="main-screen__bottom-container">
        <a href="#tab_faq" class="main-screen__w-dol wow fadeInLeft" data-wow-delay="0.4s">
          <img src="<?php bloginfo('template_directory') ?>/custom/img/down-arrow.svg" alt="arrow down" />
          <p class="txt txt_w-dol">W dół</p>
        </a>
        <div class="main-screen__navigation wow fadeInRight" data-wow-delay="0.5s">
          <div class="swiper-button-prev">
            <img src="<?php bloginfo('template_directory') ?>/custom/img/down-arrow.svg" alt="arrow down" />
          </div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-next">
            <img src="<?php bloginfo('template_directory') ?>/custom/img/down-arrow.svg" alt="arrow down" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="tab_faq" class="faq">
    <div class="faq__container tab">
      <div class="tab__triggers">
        <div class="tab__title wow fadeInLeft" data-wow-delay="0.1s">
          <span class="circle-yellow"></span>
          <p class="txt_tab-title"><?php the_field('title_faq'); ?></p>
        </div>
        <div class="tab__title _active wow fadeInLeft" data-wow-delay="0.2s">
          <span class="circle-yellow"></span>
          <p class="txt_tab-title"><?php the_field('title_faq_2'); ?></p>
        </div>
        <div class="tab__title wow fadeInLeft" data-wow-delay="0.3s">
          <span class="circle-yellow"></span>
          <p class="txt_tab-title"><?php the_field('title_faq_3'); ?></p>
        </div>
        <div class="tab__title wow fadeInLeft" data-wow-delay="0.4s">
          <span class="circle-yellow"></span>
          <p class="txt_tab-title"><?php the_field('title_faq_4'); ?></p>
        </div>
      </div>
      <div class="tab__descriptions">
        <div class="tab__txt txt_tab animated fadeInUp" data-wow-delay="0.1s"><?php the_field('description_faq'); ?></div>
        <div class="tab__txt txt_tab animated fadeInUp" data-wow-delay="0.2s"><?php the_field('description_faq_2'); ?></div>
        <div class="tab__txt txt_tab animated fadeInUp" data-wow-delay="0.3s"><?php the_field('description_faq_3'); ?></div>
        <div class="tab__txt txt_tab animated fadeInUp" data-wow-delay="0.4s"><?php the_field('description_faq_4'); ?></div>
      </div>
      <div class="tab__navigation">
        <span class="up wow fadeInUp faq__next" data-wow-delay="0.5s">
          <img src="<?php bloginfo('template_directory') ?>/custom/img/down-arrow.svg" alt="arrow down" />
        </span>
        <span class="down wow fadeInDown  faq__prev" data-wow-delay="0.6s">
          <img src="<?php bloginfo('template_directory') ?>/custom/img/down-arrow.svg" alt="arrow down" />
        </span>
      </div>
    </div>
  </section>
  <section class="about">
    <img src="<?php bloginfo('template_directory') ?>/custom/img/inline.png" alt="inline" class="about__inline">
    <div class="about__container">
      <div class="about__mobile about__bottom-txt wow fadeInLeft" data-wow-delay="0.1s">
        <?php the_field('txt_about'); ?>
      </div>
      <div class="about__head">
        <div class="about__image wow fadeInLeft" data-wow-delay="0.1s">
          <?php if (get_field('image')) : ?>
            <img src="<?php the_field('image'); ?>" alt="go tenis" class="about__image-img">
          <?php else : ?>
            <img src="<?php bloginfo('template_directory') ?>/custom/img/go-tenis.png" alt="go tenis" class="about__image-img">
          <?php endif; ?>
        </div>
        <div class="about__descktop about__button wow fadeInUp" data-wow-delay="0.3s">
          <?php
          $link = get_field('about_button');
          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
          ?>
            <a class="button button_about" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
        </div>
      </div>
      <div class="about__bottom">
        <div class="about__descktop about__bottom-txt wow fadeInLeft" data-wow-delay="0.1s">
          <?php the_field('txt_about'); ?>
        </div>
        <p class="about__bottom-description txt txt_about-bottom-description wow fadeInRight" data-wow-delay="0.2s">
          <?php the_field('description_about_2'); ?>
        </p>
        <div class="about__mobile about__button wow fadeInUp" data-wow-delay="0.3s">
          <?php
          $link = get_field('about_button');
          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
          ?>
            <a class="button button_about" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="whats-tenis">
    <div class="whats-tenis__container">
      <div class="whats-tenis__head">
        <?php if (have_rows('cards')) : ?>
          <div class="cards">
            <?php $i = 0.1; ?>
            <div class="card card__title">
              <p class="txt txt_whats-tenis-title wow fadeInLeft" data-wow-delay="0.1s"><?php the_field('title_whats_next_tenis'); ?></p>
            </div>
            <?php while (have_rows('cards')) : the_row();
              $icon = get_sub_field('icon_card');
              $title = get_sub_field('title_card');
              $description = get_sub_field('description_card');
              $class = get_sub_field('card_class');
              $modalText = get_sub_field('text_modal_whats_next_tenis');
            ?>
              <div class="card card_click <?php echo $class ? $class : 'orange'; ?> animated fadeInUp" data-wow-delay="<?php echo $i += 0.2; ?>s">
                <div class="card__icon">
                  <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" class="card__icon-img" />
                </div>
                <p class="txt txt_card-title"><?php echo $title ?></p>
                <div class="txt txt_card-description"><?php echo $description ?></div>
                <div class="card__modal whats-tenis__modal">
                  <img class="whats-tenis__modal-cancel" src="<?php bloginfo('template_directory') ?>/custom/img/cancel.png" alt="cansel" />
                  <div class="txt txt_whats-tenis-modal">
                    <?php echo $modalText; ?>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
            <div class="card card__last animated fadeInUp" data-wow-delay="<?php echo $i += 0.2; ?>s">
              <p class="txt txt_card-last"><?php the_field('last_block'); ?></p>
              <?php
              $icon = get_field('icon');
              if (!empty($icon)) : ?>
                <img class="card__last-icon" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
              <?php endif; ?>
              <div class="txt txt_card-description"><?php the_field('hover_text'); ?></div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <section class="lecture">
    <div class="lecture__container">
      <div class="lecture__head">
        <h2 class="txt txt_lecture"><?php the_field('title_lecture'); ?></h2>
        <p class="txt txt_lecture-mini"><?php the_field('text_mini_right_lecture'); ?></p>
      </div>
      <div class="lecture__content">
        <div class="lecture__triggers">
          <div class="lecture__flex">
            <div class="lecture__tabs">
              <div class="lecture__title wow fadeInLeft" data-wow-delay="0.1s">
                <span class="circle-yellow"></span>
                <p class="txt_tab-title"><?php the_field('tab_title_lecture'); ?></p>
              </div>
              <div class="lecture__title wow fadeInLeft" data-wow-delay="0.3s">
                <span class="circle-yellow"></span>
                <p class="txt_tab-title"><?php the_field('tab_title_lecture_2'); ?></p>
              </div>
              <div class="lecture__title wow fadeInLeft" data-wow-delay="0.4s">
                <span class="circle-yellow"></span>
                <p class="txt_tab-title"><?php the_field('tab_title_lecture_3'); ?></p>
              </div>
            </div>
            <div class="lecture__navigator">
              <span class="up wow fadeInUp lecture__next" data-wow-delay="0.5s">
                <img src="<?php bloginfo('template_directory') ?>/custom/img/down-arrow.svg" alt="arrow down" />
              </span>
              <span class="down wow fadeInDown  lecture__prev" data-wow-delay="0.6s">
                <img src="<?php bloginfo('template_directory') ?>/custom/img/down-arrow.svg" alt="arrow down" />
              </span>
            </div>
          </div>
          <div class="lecture__image-fake"></div>
        </div>
        <div class="lecture__description">
          <div class="lecture__tab-content">
            <div class="lecture__tab-txt txt txt_lecture-tab animated fadeInUp" data-wow-delay="0.1s">
              <?php the_field('tab_description_lecture'); ?>

              <div class="mobile-close-info">
                <img src="<?php bloginfo('template_directory') ?>/custom/img/cancel.svg" alt="cancel" />
                <p class="txt txt_info txt_close">Zamknij</p>
              </div>
            </div>
            <div class="lecture__tab-bunner wow fadeInRight" data-wow-delay="0.4s">
              <div class="mobile-info">
                <img src="<?php bloginfo('template_directory') ?>/custom/img/info.png" alt="info" />
                <p class="txt txt_info">Więcej</p>
              </div>
              <?php
              $image = get_field('tab_image_lecture');
              if (!empty($image)) : ?>
                <img class="lecture__tab-bunner-backgorund" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
              <?php
              $imageMobile = get_field('mobile_image');
              if (!empty($imageMobile)) : ?>
                <img class="lecture__tab-bunner-backgorund lecture__tab-bunner-backgorund_mobile" src="<?php echo esc_url($imageMobile['url']); ?>" alt="<?php echo esc_attr($imageMobile['alt']); ?>" />
              <?php endif; ?>
              <?php
              $link = get_field('tab_link_lecture');
              if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
              ?>
                <a class="button button_orange animated fadeInUp hover" data-wow-delay="0.5s" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
              <?php endif; ?>
            </div>
          </div>
          <div class="lecture__tab-content green">
            <div class="lecture__tab-txt txt txt_lecture-tab animated fadeInUp">
              <?php the_field('tab_description_lecture_2'); ?>

              <div class="mobile-close-info">
                <img src="<?php bloginfo('template_directory') ?>/custom/img/cancel.svg" alt="cancel" />
                <p class="txt txt_info txt_close">Zamknij</p>
              </div>
            </div>
            <div class="lecture__tab-bunner">
              <div class="mobile-info">
                <img src="<?php bloginfo('template_directory') ?>/custom/img/info.png" alt="info" />
                <p class="txt txt_info">Więcej</p>
              </div>
              <?php
              $image = get_field('tab_image_lecture_2');
              if (!empty($image)) : ?>
                <img class="lecture__tab-bunner-backgorund" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
              <?php
              $imageMobile = get_field('mobile_image_2');
              if (!empty($imageMobile)) : ?>
                <img class="lecture__tab-bunner-backgorund lecture__tab-bunner-backgorund_mobile" src="<?php echo esc_url($imageMobile['url']); ?>" alt="<?php echo esc_attr($imageMobile['alt']); ?>" />
              <?php endif; ?>
              <?php
              $link = get_field('tab_link_lecture_2');
              if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
              ?>
                <a class="button button_orange animated fadeInUp hover" data-wow-delay="0.5s" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
              <?php endif; ?>
            </div>
          </div>
          <div class="lecture__tab-content blue">
            <div class="lecture__tab-txt txt txt_lecture-tab animated fadeInUp">
              <?php the_field('tab_description_lecture_3'); ?>

              <div class="mobile-close-info">
                <img src="<?php bloginfo('template_directory') ?>/custom/img/cancel.svg" alt="cancel" />
                <p class="txt txt_info txt_close">Zamknij</p>
              </div>
            </div>
            <div class="lecture__tab-bunner">
              <div class="mobile-info">
                <img src="<?php bloginfo('template_directory') ?>/custom/img/info.png" alt="info" />
                <p class="txt txt_info">Więcej</p>
              </div>
              <?php
              $image = get_field('tab_image_lecture_3');
              if (!empty($image)) : ?>
                <img class="lecture__tab-bunner-backgorund" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
              <?php
              $imageMobile = get_field('mobile_image_3');
              if (!empty($imageMobile)) : ?>
                <img class="lecture__tab-bunner-backgorund lecture__tab-bunner-backgorund_mobile" src="<?php echo esc_url($imageMobile['url']); ?>" alt="<?php echo esc_attr($imageMobile['alt']); ?>" />
              <?php endif; ?>
              <?php
              $link = get_field('tab_link_lecture_3');
              if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
              ?>
                <a class="button button_orange animated fadeInUp hover" data-wow-delay="0.8s" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="feedback">
    <div class="feedback__left">
      <div class="feedback__title txt txt_feedback-title wow fadeInDown"><?php the_field('title_feedback'); ?></div>
      <div class="feedback__slider wow fadeInUp" data-wow-delay="0.3s">
        <?php if (have_rows('slider_feedback')) : ?>
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <?php while (have_rows('slider_feedback')) : the_row();
                $avatar = get_sub_field('avatar_feedback');
                $name = get_sub_field('name_feedback');
                $linkInsta = get_sub_field('link_instagram_feedback');
                $feedback = get_sub_field('feedback_feedback');
              ?>
                <div class="swiper-slide feedback__slider-flex">
                  <div class="feedback__slider-peson">
                    <div class="feedback__slider-avatar">
                      <?php if (!empty($avatar)) : ?>
                        <img src="<?php echo esc_url($avatar['url']); ?>" alt="avatar" />
                      <?php endif; ?>
                    </div>
                    <p class="feedback__slider-name txt txt_feedback-name"><?php echo $name ?></p>
                    <?php
                    if ($linkInsta) :
                      $link_url = $linkInsta['url'];
                      $link_title = $linkInsta['title'];
                      $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                      <a class="button-txt txt wow fadeInUp" data-wow-delay="0.3s" href="<?php echo esc_url($link_url); ?>" target="_blanck"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                  </div>
                  <div class="feedback__slider-feedback">
                    <?php echo $feedback ?>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>
            <div class="feedback__navigation">
              <div class="swiper-button-prev"><img src="<?php bloginfo('template_directory') ?>/custom/img/feedback-prev.png" alt="" /></div>
              <div class="swiper-pagination txt"></div>
              <div class="swiper-button-next"><img src="<?php bloginfo('template_directory') ?>/custom/img/feedback-next.png" alt="" /></div>
            </div>
          </div>

        <?php endif; ?>
      </div>
    </div>
    <div class="feedback__right">
      <p class="feedback__right-title txt txt_feedback-right-title wow fadeInLeft" data-wow-delay="0.1s"><?php the_field('title_tab_head_feedback'); ?></p>
      <div class="feedback__triggers">
        <p class="feedback__tab _active wow fadeInUp" data-wow-delay="0.3s"><?php the_field('title_tab_feedback'); ?></p>
        <p class="feedback__tab wow fadeInUp" data-wow-delay="0.5s"><?php the_field('title_tab_feedback_2'); ?></p>
        <p class="feedback__tab wow fadeInUp" data-wow-delay="0.7s"><?php the_field('title_tab_feedback_3'); ?></p>
      </div>
      <div class="feedback__description">
        <div class="feedback__content animated fadeInUp">
          <p class="txt txt_feedback-content"><?php the_field('description_feedback'); ?></p>
          <?php
          $link = get_field('link_tab_feedback');
          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
          ?>
            <a class="button_feedback-tab-link txt" data-wow-delay="0.3s" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
        </div>
        <div class="feedback__content animated fadeInUp">
          <p class="txt txt_feedback-content"><?php the_field('description_feedback_2'); ?></p>
          <?php
          $link = get_field('link_tab_feedback_2');
          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
          ?>
            <a class="button_feedback-tab-link txt" data-wow-delay="0.3s" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
        </div>
        <div class="feedback__content animated fadeInUp">
          <p class="txt txt_feedback-content"><?php the_field('description_feedback_3'); ?></p>
          <?php
          $link = get_field('link_tab_feedback_3');
          if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
          ?>
            <a class="button_feedback-tab-link txt" data-wow-delay="0.3s" href="<?php echo esc_url($link_url); ?>"><?php echo esc_html($link_title); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <section class="top-blog">
    <div class="top-blog__container">
      <div class="top-blog__flex">
        <div class="top-blog__left">
          <p class="top-blog__title txt txt_blog-title wow fadeInRight" data-wow-delay="0.1s">Go Tennis blog</p>
          <?php
          $posts = get_posts(array(
            'numberposts' => 1,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'post_type'   => 'post',
            'suppress_filters' => true,
          ));
          foreach ($posts as $post) :
            setup_postdata($post);
          ?>
            <div class="top-blog__image wow fadeInLeft" data-wow-delay="0.1s">
              <?php
              $image = get_field('image_blog');
              if (!empty($image)) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              <?php endif; ?>
            </div>
        </div>
        <div class="top-blog__description">
          <div class="top-blog__description-head">
            <div class="top-blog__txt txt txt_blog-description wow fadeInRight" data-wow-delay="0.3s"><?php echo get_field('description_blog'); ?></div>
            <a class="button_blog-link txt wow fadeInRight" data-wow-delay="0.5s" href="<?php the_permalink() ?>">Czytaj dalej</a>
          </div>
          <a class="button button_blog wow fadeInRight" data-wow-delay="0.6s" href="/blog">Inne artykuły</a>
        </div>
      <?php endforeach; ?>

      <?php wp_reset_postdata(); ?>
      </div>

    </div>
  </section>
</main><!-- #main -->

<?php
get_footer();
