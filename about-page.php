<?
/* Template Name: About Page */
?>

<?php get_header(); ?>
	<main id="primary" class="site-lecture">
    <section class="about-page track">
      <div class="about-page__container">
        <div class="about-page__header">
          <div class="about-page__header-left">
            <div class="about-page__description txt txt_about-description-left">
              <?php the_field('left_text_about') ?>
            </div>
            <?php
            $link = get_field('link');
            if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                ?>
                <a class="button button_about-link" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
          </div>
          <div class="about-page__header-right">
            <h1 class="txt txt_about-title"><?php the_field('title_about') ?></h1>
            <div class="about-page__bunner">
              <?php
              $imageRight = get_field('image_right');
              if( !empty( $imageRight ) ): ?>
                <img src="<?php echo esc_url($imageRight['url']); ?>" alt="<?php echo esc_attr($imageRight['alt']); ?>" />
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
        <div class="about-page__teacher">
          <div class="about-page__container">

            <div class="about-page__name-photo">
              <h2 class="txt txt_about-name"><?php the_field('name_about') ?></h2>
              <div class="about-page__avatar">
                <?php
                  $imageAvatar = get_field('image_teacher');
                  if( !empty( $imageAvatar ) ): ?>
                      <img src="<?php echo esc_url($imageAvatar['url']); ?>" alt="<?php echo esc_attr($imageAvatar['alt']); ?>" />
                <?php endif; ?>
              </div>
            </div>
            <div class="about-page__right">
              <div class="about-page__teacher-info txt txt_about-info">
                <?php the_field('about_teacher') ?>
              </div>
              <?php
              $link = get_field('link_contact');
              if( $link ):
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  ?>
                  <a class="button button_about-white" href="<?php echo esc_url( $link_url ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
            </div>

          </div>
        </div>
    </section>
  </main>
<?php get_footer();