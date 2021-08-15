
<?
/* Template Name: Lekcje tenisa mlodziezy Page */
?>

<?php get_header(); ?>
	<main id="primary" class="site-lecture">
    <section class="lecture-page">
      <div class="lecture-page__bunner">
        <img src="<?php bloginfo('template_directory') ?>/custom/img/shadow-bunner.png" alt="shadow" class="lecture-page__shadow">
        <?php
        $image = get_field('image_lecture');
        if( !empty( $image ) ): ?>
            <img class="lecture-page__image" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
        <?php
        $imageMobile = get_field('image_mobile');
        if( !empty( $imageMobile ) ): ?>
            <img class="lecture-page__image lecture-page__image_mobile" src="<?php echo esc_url($imageMobile['url']); ?>" alt="<?php echo esc_attr($imageMobile['alt']); ?>" />
        <?php endif; ?>
        <div class="lecture-page__bunner-container">
          <h1 class="txt txt_lecture-page-title wow fadeInLeft" data-wow-delay="0.1s"><?php the_field('title_lecture') ?></h1>
          <?php
          $link = get_field('link_lecture');
          if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
          ?>
            <a class="button button_lecture-page button_lecture-green wow fadeInRight" data-wow-delay="0.2s" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>
        </div>
      </div>
      <div class="lecture-page__container track">
        <div class="lecture-page__left txt wow fadeInLeft" data-wow-delay="0.3s">
          <?php the_field('description_left_lecture') ?>
        </div>
        <div class="lecture-page__right green wow fadeInDown" data-wow-delay="0.5s">
          <div class="lecture-page__head">
            <?php the_field('text_right_header_lecture'); ?>
          </div>
          <div class="lecture-page__bottom">
            <?php the_field('text_right_bottom_lecture'); ?>
          </div>
          <?php
          $link = get_field('link_right_lecture');
          if( $link ):
            $link_url = $link['url'];
            $link_title = $link['title'];
          ?>
            <a class="button button_lecture-page button_lecture-green" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer();
