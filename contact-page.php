<?
/* Template Name: Kontakt */ ?>

<?php get_header(); ?>
	<main id="primary" class="site-contact">
    <section class="contact track">
      <div class="contact__container">
        <div class="contact__header">
          <div class="contact__left">
            <div class="contact__contact txt txt_contact">
              <?php the_field('contact_contact') ?>
            </div>
            <div class="contact__working-day txt txt_contact">
              <?php the_field('working_days') ?>
            </div>
            <div class="contact__contact contact__address contact__address_mobile  txt txt_contact">
              <?php the_field('address_contact') ?>
            </div>
          </div>
          <div class="contact__open">
            <p class="button button_contact-open">Napisz</p>
          </div>
        </div>
        <div class="contact__bottom">
          <div class="contact__green txt txt_contact-green">
            <?php the_field('green_box') ?>
          </div>
          <div class="contact__address  txt txt_contact">
            <?php the_field('address_contact') ?>
          </div>
        </div>
      </div>

      <div class="contact__form">
        <img class="contact__form-cancel" src="<?php bloginfo('template_directory') ?>/custom/img/cancel.png" alt="cancel" />
        <img class="contact__form-bg" src="<?php bloginfo('template_directory') ?>/custom/img/form-bg.png" alt="form background" />
        <?php echo do_shortcode('[contact-form-7 id="303" title="Contact form 1"]'); ?>
      </div>
    </section>
  </main>
<?php get_footer();
