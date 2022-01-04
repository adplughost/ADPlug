<?php
add_theme_support( 'title-tag' );

// Wrapper function for css
function enqueue_versioned_style( $handle, $src = false, $deps = array(), $media = 'all' ) {
  wp_enqueue_style( $handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime( get_stylesheet_directory() . $src ), $media );
}

// Wrapper function for js
function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = true ) {
  wp_enqueue_script( $handle, get_stylesheet_directory_uri() . $src, $deps, filemtime( get_stylesheet_directory() . $src ), $in_footer );
}

/**
 * Register and enqueue styles
 */
function theme_register_css() {
  enqueue_versioned_style('main', '/assets/css/style.css');
  enqueue_versioned_style('tiny-slider', '/assets/css/tiny-slider.css');
  wp_enqueue_style('animations', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');

  if ( is_page_template('templates/my-photos.php') ) {
    wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css');
  }
}
add_action('wp_enqueue_scripts', 'theme_register_css');

/**
 * Register and enqueue scripts
 */
function theme_register_js() {
  if ( is_page_template('templates/my-photos.php') ) {
    wp_enqueue_script(
      'fancybox', 
      'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', 
      array(), 
      '', 
      true
    );
  }
  enqueue_versioned_script('tiny-slider', '/assets/js/tiny-slider.js');
  enqueue_versioned_script('main', '/assets/js/script.min.js');
}
add_action('wp_enqueue_scripts', 'theme_register_js');

add_theme_support(
  'html5',
  array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'script',
    'style',
  )
);

add_action( 'after_setup_theme', 'theme_add_thumbnails' );
function theme_add_thumbnails() {
  add_theme_support( 'post-thumbnails' );
  // set_post_thumbnail_size(650, 450, true);
  // add_image_size( 'post-project', 800, 865, true );
}

function remove_default_image_sizes( $sizes ) {
  /* Default WordPress */
  unset( $sizes[ 'thumbnail' ]);       // Remove Thumbnail (150 x 150 hard cropped)
  unset( $sizes[ 'medium' ]);          // Remove Medium resolution (300 x 300 max height 300px)
  unset( $sizes[ 'medium_large' ]);    // Remove Medium Large (added in WP 4.4) resolution (768 x 0 infinite height)
  unset( $sizes[ 'large' ]);           // Remove Large resolution (1024 x 1024 max height 1024px)
  
  /* With WooCommerce */
  unset( $sizes[ 'shop_thumbnail' ]);  // Remove Shop thumbnail (180 x 180 hard cropped)
  unset( $sizes[ 'shop_catalog' ]);    // Remove Shop catalog (300 x 300 hard cropped)
  unset( $sizes[ 'shop_single' ]);     // Shop single (600 x 600 hard cropped)
  
  return $sizes;
}
// add_filter( 'intermediate_image_sizes_advanced', 'remove_default_image_sizes' );

function aw_custom_add_image_sizes() {
  add_image_size( 'small', 375, 9999 ); // 375px wide unlimited height
  add_image_size( 'medium', 768, 9999 ); // 768px wide unlimited height
  add_image_size( 'medium_large', 1024, 9999 ); // 1024px wide unlimited height
  add_image_size( 'lg', 1200, 9999 ); // 1200px wide unlimited height
  add_image_size( 'xl', 2000, 9999 ); // 2000px wide unlimited height
}
// add_action( 'after_setup_theme', 'aw_custom_add_image_sizes' );

/**
 * Register nav-menus of theme
 */
require get_template_directory() . '/inc/nav_menu.php';

/**
 * Form
 */
// require get_template_directory() . '/inc/form-request.php';

/**
 * Register custom post type
 */
// require get_template_directory() . '/inc/post-type.php';

/**
* Setting the class name for pages
*/
add_filter( 'body_class','my_class_names' );
function my_class_names( $classes ) {
  // Pages
  if( is_front_page() ) {
    $classes[] = 'p-home';
    return $classes;
  }

  if( is_page_template('templates/about-us.php') ) {
    $classes[] = 'page p-about-us';
    return $classes;
  }
  if( is_page_template('templates/models.php') ) {
    $classes[] = 'page p-models';
    return $classes;
  }
  if( is_page_template('templates/brands.php') ) {
    $classes[] = 'page p-models';
    return $classes;
  }
  if( is_page_template('templates/team.php') ) {
    $classes[] = 'page p-team';
    return $classes;
  }
  if( is_page_template('templates/login.php') ) {
    $classes[] = 'p-login';
    return $classes;
  }
  if( is_page_template('templates/sign-up-advertiser.php') ) {
    $classes[] = 'p-login p-sign-up';
    return $classes;
  }
  if( is_page_template('templates/sign-up-creator.php') ) {
    $classes[] = 'p-login p-sign-up';
    return $classes;
  }
  if( is_page_template('templates/sign-up-details-advertiser.php') ) {
    $classes[] = 'p-login p-reg-details';
    return $classes;
  }
  if( is_page_template('templates/sign-up-details-creator.php') ) {
    $classes[] = 'p-login p-reg-details';
    return $classes;
  }
  if( is_page_template('templates/forgot.php') ) {
    $classes[] = 'p-login p-forgot';
    return $classes;
  }

  if( is_page_template('templates/profile.php') ) {
    $classes[] = 'p-profile';
    return $classes;
  }
  if( is_page_template('templates/profile-edit.php') ) {
    $classes[] = 'p-profile p-profile-edit';
    return $classes;
  }
  if( is_page_template('templates/messages.php') ) {
    $classes[] = 'p-profile p-messages';
    return $classes;
  }
  if( is_page_template('templates/my-photos.php') ) {
    $classes[] = 'p-profile p-my-photos';
    return $classes;
  }
  if( is_page_template('templates/social.php') ) {
    $classes[] = 'p-profile p-social';
    return $classes;
  }
  if( is_page_template('templates/notifications.php') ) {
    $classes[] = 'p-profile p-notice';
    return $classes;
  }
  if( is_page_template('templates/follower.php') ) {
    $classes[] = 'p-profile p-follower';
    return $classes;
  }
  if( is_page_template('templates/favourites.php') ) {
    $classes[] = 'p-profile p-follower p-favourites';
    return $classes;
  }
  if( is_page_template('templates/personal-settings.php') ) {
    $classes[] = 'p-profile p-settings p-personal-settings';
    return $classes;
  }
  if( is_page_template('templates/password.php') ) {
    $classes[] = 'p-profile p-settings p-password';
    return $classes;
  }
  if( is_page_template('templates/bank-account.php') ) {
    $classes[] = 'p-profile p-settings p-bank-account';
    return $classes;
  }
  if( is_page_template('templates/settings-notifications.php') ) {
    $classes[] = 'p-profile p-settings p-notifications';
    return $classes;
  }
  if( is_page_template('templates/payment.php') ) {
    $classes[] = 'p-profile p-settings p-bank-account p-payment';
    return $classes;
  }
  if( is_page_template('templates/profile-view.php') ) {
    $classes[] = 'p-profile p-profile-view';
    return $classes;
  }
  if( is_page_template('templates/profile-brand-view.php') ) {
    $classes[] = 'p-profile p-profile-view p-profile-brand-view';
    return $classes;
  }

  if( is_page_template('templates/search.php') ) {
    $classes[] = 'p-profile p-profile--menu p-search';
    return $classes;
  }
  if( is_page_template('templates/offer.php') ) {
    $classes[] = 'p-profile p-offer';
    return $classes;
  }


  // Posts
  // if ( get_post_type() === 'post-news' ) {
  //   $classes[] = 'page-post-news';
  //   return $classes;
  // }

  return $classes;
}

add_filter('use_block_editor_for_post', '__return_false', 10);

// Disable Admin Bar for all users
add_filter( 'show_admin_bar', '__return_false' );

// Activate WordPress Maintenance Mode
function wp_maintenance_mode() {
  if(!current_user_can('edit_themes') || !is_user_logged_in()){
    wp_die('<h1 style="color:red; text-align: center;">The site is under maintenance</h1>');
  }
}
// add_action('get_header', 'wp_maintenance_mode');