<?
/* Template Name: Lokalizacje Page */
?>

<?php get_header(); ?>
<main id="primary" class="site-localisation">
  <section class="location track">
    <div class="location__header">
      <div class="location__header-left txt txt_location-left"><?php the_field('title_local') ?></div>
      <div class="location__header-right txt txt_location-right"><?php the_field('title-description_right') ?></div>
    </div>
    <div class="location__bottom">
      <div class="location__bottom-maps">
        <div class="location__triggers">
          <img src="<?php bloginfo('template_directory') ?>/custom/img/maps.png" alt="maps" />
          <?php
          $posts = get_posts(array(
            'numberposts' => -1,
            'category'    => 0,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'post_type'   => 'localization',
            'suppress_filters' => true,
          ));
          foreach ($posts as $post) :
            setup_postdata($post);
          ?>
            <a href="<?php the_permalink() ?>" class="txt txt_location-city"><?php the_title(); ?></a>
          <?php endforeach; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
      <div class="location__bottom-right">
        <?php
        $imageRight = get_field('right_image_local');
        if (!empty($imageRight)) : ?>
          <img class="location__bottom-background" src="<?php echo esc_url($imageRight['url']); ?>" alt="<?php echo esc_attr($imageRight['alt']); ?>" />
        <?php endif; ?>
        <div class="localtion__bottom-description txt txt_location-description">
          <?php the_field('text_for_image_local'); ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer();
