<?
/* Template Name: Blog */
?>

<?php get_header(); ?>
	<main id="primary" class="site-blog">
    <section class="blog-page track">
      <div class="blog-page__container">
        <div class="blog-page__posts">
          <?php $i = 0.1; ?>
          <?php
            $posts = get_posts(array(
              'numberposts' => -1,
              'category'    => 0,
              'orderby'     => 'date',
              'order'       => 'DESC',
              'include'     => array(),
              'exclude'     => array(),
              'post_type'   => 'post',
              'suppress_filters' => true,
            ));
            foreach( $posts as $post ):
            setup_postdata($post);
            ?>
              <div class="post-card wow fadeInUp" data-wow-delay="<?php echo $i == 0.5 ? $i -= 0.4 : $i += 0.2; ?>s">
                <a href="<?php the_permalink() ?>" class="post-card__image">
                  <?php
                  $image = get_field('image_blog');
                  if( !empty( $image ) ): ?>
                      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                  <?php endif; ?>
                </a>
                <div class="post-card__flex">
                  <a href="<?php the_permalink() ?>" class="txt txt_post-card-name"><?php the_title(); ?></a>
                  <p class="txt txt_post-card-date"><?php the_date(); ?></p>
                </div>
                <div class="post-card__description txt">
                  <?php echo get_field('green_mask_blog'); ?>
                </div>
              </div>
          <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer();
