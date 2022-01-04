<?php

function theme_register_nav_menu() {
  register_nav_menus( array(
    'header_menu' => 'Main menu',
  ) );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );

// Filters for header menu
add_filter( 'wp_nav_menu_args', 'filter_wp_nav_menu_args' );
function filter_wp_nav_menu_args( $args ) {
  $path_to_img = get_template_directory_uri() .'/assets/img';
  $url_login = home_url('/login');
  $url_sign_up = home_url('/sign-up');
  $url_profile = home_url('/profile');
  $user = '<li class="menu__user">
            <div class="user user--logged-out">
              <div class="user__logged user__logged--out">
                <a 
                  class="user__link user__login" 
                  href="'. $url_login .'"
                >
                  Log In
                </a>
                <a 
                  class="user__link user__registration button button--light-pink" 
                  href="'. $url_sign_up .'"
                >
                  Sign Up
                </a>
              </div>
              <div class="user__logged user__logged--in">
                <div class="user__tools">
                  <div class="user-tools">
                    <a class="user-tools__profile" href="'.$url_profile.'">
                      <img
                        class="user-tools__profile-photo"
                        src="'.$path_to_img.'/user-photo.jpg"
                        alt="Alt"
                      />
                      <span class="user-tools__profile-name"
                        >Rubi Sparks</span
                      >
                    </a>
                    <div class="user-tools__item user-tools__user-menu">
                      <button
                        class="
                          user-tools__item-toggle
                          user-tools__item-toggle--user-menu
                        "
                        type="button"
                        aria-label="User menu"
                      ></button>
                      <div
                        class="
                          user-tools__item-wrapper
                          user-tools__user-menu-wrapper
                        "
                      >
                        <span class="user-tools__user-menu-title"
                          >Find a casting</span
                        >
                        <div class="user-tools__user-menu-items">
                          <a class="user-tools__user-menu-item" href="#"
                            >Castings</a
                          >
                          <a
                            class="user-tools__user-menu-item"
                            href="/profile.html"
                            >My profile</a
                          >
                          <a class="user-tools__user-menu-item" href="#"
                            >Influencers</a
                          >
                          <a class="user-tools__user-menu-item" href="#"
                            >Brands</a
                          >
                          <a class="user-tools__user-menu-item" href="#"
                            >Exit</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="user-tools__item">
                      <button
                        class="
                          user-tools__item-toggle
                          user-tools__item-toggle--notice
                        "
                        type="button"
                        aria-label="Notifications"
                      ></button>
                      <div class="user-tools__item-wrapper">
                        <span class="user-tools__item-title"
                          >Notifications</span
                        >
                        <div class="user-tools__item-items">
                          <a class="user-tools__item-item" href="#">
                            I would like to receive SMS notifications for
                            collaboration activities
                          </a>
                          <a class="user-tools__item-item" href="#">
                            I would like to receive SMS notifications for
                            collaboration activities
                          </a>
                          <a class="user-tools__item-item" href="#">
                            I would like to receive SMS notifications for
                            collaboration activities
                          </a>
                          <a class="user-tools__item-item" href="#">
                            I would like to receive SMS notifications for
                            collaboration activities
                          </a>
                        </div>
                        <div class="user-tools__item-footer">
                          <button
                            class="
                              user-tools__item-button
                              user-tools__item-button--highlighted
                            "
                            type="button"
                          >
                            Mark as read
                          </button>
                          <a class="user-tools__item-button" href="#"
                            >Show more</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="user-tools__item user-tools__messages">
                      <button
                        class="
                          user-tools__item-toggle
                          user-tools__item-toggle--messages
                        "
                        type="button"
                        aria-label="Messages"
                      ></button>
                      <div class="user-tools__item-wrapper">
                        <span class="user-tools__item-title"
                          >Messages</span
                        >
                        <div class="user-tools__item-items">
                          <a
                            class="
                              user-tools__item-item
                              user-tools__messages-item
                            "
                            href="#"
                          >
                            <img
                              class="user-tools__messages-item-avatar"
                              src="'.$path_to_img.'/message-item-1.jpg"
                              alt="Alt"
                            />
                            <span class="user-tools__messages-item-name"
                              >Marie Sanders</span
                            >
                            <span class="user-tools__messages-item-text">
                              I would like to receive SMS notifications
                              for collaboration
                            </span>
                          </a>
                          <a
                            class="
                              user-tools__item-item
                              user-tools__messages-item
                            "
                            href="#"
                          >
                            <img
                              class="user-tools__messages-item-avatar"
                              src="'.$path_to_img.'/message-item-2.jpg"
                              alt="Alt"
                            />
                            <span class="user-tools__messages-item-name"
                              >Aaron Griffin</span
                            >
                            <span class="user-tools__messages-item-text">
                              I would like to receive SMS notifications
                              for collaboration
                            </span>
                          </a>
                          <a
                            class="
                              user-tools__item-item
                              user-tools__messages-item
                            "
                            href="#"
                          >
                            <img
                              class="user-tools__messages-item-avatar"
                              src="'.$path_to_img.'/message-item-3.jpg"
                              alt="Alt"
                            />
                            <span class="user-tools__messages-item-name"
                              >Kevin Andrews</span
                            >
                            <span class="user-tools__messages-item-text">
                              I would like to receive SMS notifications
                              for collaboration
                            </span>
                          </a>
                          <a
                            class="
                              user-tools__item-item
                              user-tools__messages-item
                            "
                            href="#"
                          >
                            <img
                              class="user-tools__messages-item-avatar"
                              src="'.$path_to_img.'/message-item-4.jpg"
                              alt="Alt"
                            />
                            <span class="user-tools__messages-item-name"
                              >Tyler Wade</span
                            >
                            <span class="user-tools__messages-item-text">
                              I would like to receive SMS notifications
                              for collaboration
                            </span>
                          </a>
                        </div>
                        <div class="user-tools__item-footer">
                          <a
                            class="
                              user-tools__item-button
                              user-tools__item-button--center
                              user-tools__item-button--highlighted
                            "
                            href="#"
                            >All messages</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>';
  if ( $args['theme_location'] === 'header_menu' ) {
    $args['container']  = false;
    $args['menu_class'] = 'menu__list';
    $args['items_wrap'] = '<ul class="%2$s">%3$s'. $user .'</ul>';
  }
  return $args;
}

add_filter( 'nav_menu_item_id', 'filter_nav_menu_item_css_id', 10, 4 );
function filter_nav_menu_item_css_id( $menu_id, $item, $args, $depth ) {
  return $args->theme_location === 'header_menu' ? '' : $menu_id;
}

add_filter( 'nav_menu_css_class', 'filter_nav_menu_item_css_class', 10, 4 );
function filter_nav_menu_item_css_class( $classes, $item, $args, $depth ) {
  if ( $args->theme_location === 'header_menu' ) {
    $classes = [
      'menu__item'
    ];
  }
  return $classes;
}

add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
  if ( $args->theme_location === 'header_menu' ) {
    $atts['class'] = 'menu__link';
    if ( $item->current ) {
      $atts['class'] .= ' menu__link--active';
    }
  }
  return $atts;
}

// // Изменяет класс у вложенного ul
// add_filter( 'nav_menu_submenu_css_class', 'filter_nav_menu_submenu_css_class', 10, 3 );
// function filter_nav_menu_submenu_css_class( $classes, $args, $depth ) {
//   if ( $args->theme_location === 'header_menu' ) {
//     $classes = [
//       'menu__sub-list'
//     ];
//   }
//   return $classes;
// }



// class Theme_Walker_Nav_Menu extends Walker_Nav_Menu {

//   public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
//     $classes = ['menu__item'];

//     if ( $args->walker->has_children ) {
//       $classes[] = 'menu__sub-menu';
//     }
  
//     $args = apply_filters( 'nav_menu_item_args', $args, $item, $depth );
  
//     $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
//     $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';
  
//     $output .= '<li'. $class_names .'>';
  
//     $atts           = array();
//     $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
//     $atts['target'] = ! empty( $item->target ) ? $item->target : '';
//     if ( '_blank' === $item->target && empty( $item->xfn ) ) {
//       $atts['rel'] = 'noopener noreferrer';
//     } else {
//       $atts['rel'] = $item->xfn;
//     }
//     $atts['class'] = 'menu__link';
//     $atts['href']         = ! empty( $item->url ) ? $item->url : '';
//     $atts['aria-current'] = $item->current ? 'page' : '';

//     if ( $item->current ) {
// 			$atts['class'] .= ' menu__link--active';
// 		}
  
//     $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );
  
//     $attributes = '';
//     foreach ( $atts as $attr => $value ) {
//       if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
//         $value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
//         $attributes .= ' ' . $attr . '="' . $value . '"';
//       }
//     }
  
//     $title = apply_filters( 'the_title', $item->title, $item->ID );
//     $title = apply_filters( 'nav_menu_item_title', $title, $item, $args, $depth );
  
//     $item_output  = $args->before;
//     $item_output .= '<a' . $attributes . '>';
//     $item_output .= $args->link_before . $title . $args->link_after;
//     $item_output .= '</a>';
//     $item_output .= $args->after;

//     $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
//   }
  
//   public function start_lvl( &$output, $depth = 0, $args = null ) {
// 		$output .= '<ul class="menu__list menu__sub-list">';
//   }
// }