<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package goTenis
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="blog track">
    <div class="blog__container">
      <div class="blog__image track wow fadeInUp">
        <?php
        $bunner = get_field('image_blog');
        if (!empty($bunner)) : ?>
          <img src="<?php echo esc_url($bunner['url']); ?>" alt="<?php echo esc_attr($bunner['alt']); ?>" />
        <?php endif; ?>
      </div>
      <div class="blog__flex">
        <h1 class="txt txt_blog-title wow fadeInLeft" data-wow-delay="0.1s"><?php the_title(); ?></h1>
        <p class="txt txt_blog-date wow fadeInRight" data-wow-delay="0.3s"><?php the_date() ?></p>
      </div>
      <div class="blog__green wow fadeInUp" data-wow-delay="0.3s">
        <?php echo get_field('green_mask_blog'); ?>
      </div>
      <div class="blog__content wow fadeInLeft" data-wow-delay="0.3s">
        <?php echo get_field('text_blog'); ?>
      </div>
      <?php
      $link = get_field('link_blog');
      if ($link) :
        $link_url = $link['url'];
        $link_title = $link['title'];
      ?>
        <a class="button button_blog-post wow fadeInright" href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
      <?php endif; ?>
    </div>
  </div>
</article>