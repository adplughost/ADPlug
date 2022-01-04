<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header p-login__header">
    <div class="header__bar">
      <div class="container header__bar-wrapper p-login__header-wrapper">
        <a class="p-login__header-logo" href="<?= home_url(); ?>" aria-label="Adplug"></a>
        <a class="p-login__header-back" href="<?php if( wp_get_referer() ) echo wp_get_referer(); ?>">Back</a>
      </div>
    </div>
  </header>