<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package goTenis
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom/css/animated.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/custom/css/base.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <style>.nav{position:relative;margin-right:7.875rem;margin-top:1.875rem}.nav-menu{display:flex;justify-content:flex-end;flex-wrap:wrap;align-items:center}.nav-menu li{position:relative;margin-right:3.6875rem}.nav-menu li a{position:relative;padding:0 .4375rem;font-size:1.375rem;font-weight:400;font-style:normal;letter-spacing:normal;line-height:normal;text-align:left;color:#000;text-decoration:none;transition:color .3s;cursor:pointer}.nav-menu li a:before{content:"";position:absolute;bottom:-.875rem;right:0;width:0;height:.3125rem;background-color:rgba(0,0,0,.3);transition:.3s cubic-bezier(.645,.045,.355,1)}.nav-menu li a:hover{color:rgba(0,0,0,.3)}.nav-menu li a:hover:before{width:100%;left:0;right:auto}.nav-menu li a.current_page_item{color:rgba(0,0,0,.3)}.nav-menu li a.current_page_item:before{width:100%;left:0;right:auto}.nav-menu li:last-child{margin-right:0}.nav-menu li .sub-menu{position:absolute;padding:1.25rem 0;top:calc(100% + 10px);left:-.9375rem;width:15.625rem;right:0;margin:auto;transform:translateY(2.5rem);opacity:0;z-index:999999;visibility:hidden;transition:transform .5s,opacity .5s,visibility .5s}.nav-menu li .sub-menu li{margin-right:0;margin-bottom:1.25rem;padding-left:.9375rem}.nav-menu li .sub-menu li a{display:inline-block}.nav-menu li .sub-menu.show{transform:translateY(0);opacity:1;visibility:visible}.nav-menu li.current_page_item a{opacity:.3}.nav-menu li.current_page_item a:before{width:100%;left:0;right:auto}.nav__logo{display:none}@media (max-width:1211px){.nav{margin-right:1.875rem}.nav-menu li{margin-right:1.25rem}}@media (max-width:1000px){.menu-toggle{display:none!important}.menu-menu-1-container{height:100%}.nav{position:fixed;top:0;left:0;width:100%;height:100vh;height:calc(var(--vh, 1vh)*100);background:#fff;z-index:9999;display:none;overflow:auto;padding-top:0;margin-top:0}.nav__logo{position:absolute;top:.625rem;left:.625rem;display:none;width:70%;opacity:1}.nav-menu{flex-direction:column;align-items:center;justify-content:center;margin-left:0;height:100%}.nav-menu li{padding:.9375rem 0;display:inline-block;margin-right:0}.nav-menu li a{display:inline-block;padding:.3125rem 0;font-size:1rem}.nav-menu li a:before{display:none}.nav-menu li .sub-menu{position:static;top:auto;left:auto;right:auto;bottom:auto;transform:none;width:auto;height:auto;position:relative;background:none;margin:0;padding:0;transition:height .25s ease;overflow:hidden}.nav-menu li .sub-menu li{display:block;margin-bottom:0;padding-left:0}.nav-menu li .sub-menu:not(.show){display:none}.nav-menu .hover-menu{position:relative;text-align:center}.nav-menu .hover-menu>a{display:flex}.nav-menu .hover-menu>a:after{content:"+";font-family:Hellix - Light;display:block;font-size:1rem;color:#000;font-weight:300;margin-left:.625rem;transform:scale(1.1) translateY(.5px);transition:transform .5s}.nav-menu .hover-menu._active>a:after{transform:rotate(45deg) scale(1.1) translateY(.5px)}.nav._active{display:block}.nav-menu li .sub-menu li a{padding:0}}</style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <!-- <div class="preloader"></div> -->
	<header id="masthead" class="header">
    <div class="header__container">
      <a href="/" class="header__logo">
        <img src="<?php bloginfo('template_directory') ?>/custom/img/logo.png" alt="logo" />
      </a>
      <div class="header__menu-social">
        <nav id="site-navigation" class="nav">
          <img class="nav__logo" src="<?php bloginfo('template_directory') ?>/custom/img/logo.png" alt="logo" />
          <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'gotenis' ); ?></button>
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'primary-menu',
            )
          );
          ?>
        </nav>
        <div class="header__social">
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'menu-3',
                'menu_id'        => 'social media',
              )
            );
            ?>
        </div>
      </div>
      <div class="header__burger">
        <i class="header__burger-circle"></i>
        <i class="header__burger-circle"></i>
        <i class="header__burger-circle"></i>
      </div>
    </div>
	</header><!-- #masthead -->
