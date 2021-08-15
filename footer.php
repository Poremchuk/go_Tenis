<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package goTenis
 */

?>
  <section class="partners">
    <div class="partners__container">
      <p class="partners__title txt txt_partners">Nasi partnerzy</p>
      <!-- <?php if( have_rows('partners_partners') ): ?>
        <div class="partners__slider">
              <?php while( have_rows('partners_partners') ): the_row();
                $image = get_sub_field('image');
              ?>
              <div class="partners__icon">
                <?php if( !empty( $image ) ): ?>
                  <img src="<?php echo esc_url($image['url']); ?>" alt="company">
                <?php endif; ?>
              </div>
              <?php endwhile; ?>
        </div>
      <?php endif; ?> -->
      <div class="partners__slider">
        <a target="_blanck" href="https://www.itftennis.com/en/" class="partners__icon">
            <img src="<?php bloginfo('template_directory') ?>/custom/img/part1.jpg" alt="company">
        </a>
        <a target="_blanck" href="https://www.ptrtennis.org" class="partners__icon">
            <img src="<?php bloginfo('template_directory') ?>/custom/img/part2.jpg" alt="company">
        </a>
        <a target="_blanck" href="https://www.pzt.pl" class="partners__icon">
            <img src="<?php bloginfo('template_directory') ?>/custom/img/part3.jpg" alt="company">
        </a>
        <a target="_blanck" href="https://www.itftennis.com/en/" class="partners__icon">
            <img src="<?php bloginfo('template_directory') ?>/custom/img/part4.jpg" alt="company">
        </a>
        <a target="_blanck" href="https://www.yonex.pl" class="partners__icon">
            <img src="<?php bloginfo('template_directory') ?>/custom/img/part5.jpg" alt="company">
        </a>
      </div>
    </div>
  </section>
	<footer class="footer">
    <div class="footer__container">
      <div class="footer__head">
        <a href="mailto:info@gotennis.xyz" class="button_footer-link txt">Napisz do nas</a>
        <div class="footer__menu">
          <nav id="site-navigation" class="footer__nav">
            <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'menu-2',
                  'menu_id'        => 'Primary 2',
                )
              );
            ?>
          </nav>
        </div>
        <a href="tel:+48 608 218 353" class="button_footer-link txt">Zadzwoń do nas</a>
      </div>
      <div class="footer__bottom">
        <p class="txt txt_footer">Wszystkie prawa zastrzeżone przez Go Tennis Academy © 2021</p>
        <p class="txt txt_footer">Designed&Developed by Puzzle <img src="<?php bloginfo('template_directory') ?>/custom/img/logo_(1).png" alt="logo 1" /> Studio</p>
      </div>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory') ?>/custom/js/wow.js"></script>
<script src="<?php bloginfo('template_directory') ?>/custom/js/app.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
  var wow = new WOW({
    boxClass: 'wow',
    animateClass: 'animated',
    offset: 0,
    mobile: false,
    live: true,
    scrollContainer: null,
    resetAnimation: true,
  });
  wow.init();
</script>
</body>
</html>
