<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header">
    <div class="container header__bar-wrapper">
      <a class="logo header__logo" href="<?= home_url(); ?>">
        <img class="logo__image" src="<?= get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Ad Plug" />
      </a>
      <a class="button button--light-pink" href="<?= wp_logout_url( home_url() ); ?>">Log out</a>
    </div>
  </header>