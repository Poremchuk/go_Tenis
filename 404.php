<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package goTenis
 */

get_header();
?>

<main id="primary" class="site-main">

  <section class="error-404">
    <div class="page-content">
      <div class="not-found">
        <div class="not-found__left">
          <h3>UPS! Dotarłeś dalej niż my</h3>

          <p>Bardzo nam przykro, ale tu<br />
            już nic nie ma :(</p>

          <a href="/">
            < Wróć na stronę główną</a>
        </div>
        <div class="not-found__right">
          <h1>404</h1>
          <p>404</p>
        </div>
      </div>
    </div><!-- .widget -->

    </div><!-- .page-content -->
  </section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
