<?php get_header(); ?>

<main id="primary" class="site-localisation">
  <section class="local-post track">
    <div class="local-post__header">
      <?php $i = 0.1 ?>
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
        <a data-link="<?php echo get_permalink() ?>" href="<?php the_permalink() ?>" class="txt txt_location-city wow fadeInUp" data-wow-delay="<?php echo $i += 0.2; ?>s"><?php the_title(); ?></a>
      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
    </div>
    <div class="local-post__content">
      <div class="local-post__left wow fadeInLeftBig">
        <div class="local-post__bunner wow fadeInRight" data-wow-delay="1s">
          <?php
          $image = get_field('image');
          if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
        <div class="local-post__address txt txt_local-address wow fadeInUp" data-wow-delay="0.4s">
          <?php the_field('address') ?>
        </div>
        <?php
        $link = get_field('link_for_map');
        if ($link) :
          $link_url = $link['url'];
          $link_title = $link['title'];
          $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
          <a class="button button_localization wow fadeInUp" data-wow-delay="0.2s" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
        <?php endif; ?>
      </div>
      <div class="local-post__right">
        <div class="local-post__head txt txt_local-head wow fadeInRight" data-wow-delay="0.2s">
          <?php the_field('description_top') ?>
        </div>
        <div class="local-post__bottom txt txt_local-bottom wow fadeInRight" data-wow-delay="0.2s">
          <?php the_field('description_bottom') ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer();
