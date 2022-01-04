<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header">
    <div class="header__bar">
      <div class="container header__bar-wrapper">
        <a class="logo header__logo" href="<?= home_url(); ?>">
          <img
            class="logo__image"
            src="<?= get_template_directory_uri(); ?>/assets/img/logo.svg"
            alt="Ad Plug"
            data-san="animate__fadeInLeft"
          />
        </a>
        <div class="header__menu">
          <nav id="menu" class="menu">
            <button
              type="button"
              class="menu__button"
              aria-expanded="false"
              aria-controls="menu__list"
            >
              <span class="menu__icon">
                <img
                  class="menu__icon-menu"
                  src="<?= get_template_directory_uri(); ?>/assets/img/toggle.svg"
                  alt="Open menu"
                />
                <img
                  class="menu__icon-cross"
                  src="<?= get_template_directory_uri(); ?>/assets/img/cross.svg"
                  alt="Close menu"
                />
              </span>
            </button>
            <?php wp_nav_menu( ['theme_location' => 'header_menu'] ); ?>
          </nav>
        </div>
      </div>
    </div>
  </header>