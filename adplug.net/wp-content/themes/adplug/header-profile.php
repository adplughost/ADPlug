<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header header-profile">
    <div class="header__bar header-profile__bar">
      <div class="container header__bar-wrapper header-profile__wrapper">
        <div class="header-profile__item header-profile__item--menu">
          <div class="menu-profile header-profile__menu">
            <button
              type="button"
              class="header-profile__menu-button"
              aria-expanded="false"
              aria-controls="profile-menu"
            ></button>
            <ul
              id="profile-menu"
              class="menu-profile__list header-profile__menu-list"
            >
              <li class="menu-profile__item menu-profile__item--balance">
                <div class="menu-profile__balance">
                  <span class="menu-profile__balance-title">My balance:</span>
                  <div class="menu-profile__balance-items">
                    <div class="menu-profile__balance-item">
                      <img
                        class="menu-profile__balance-item-image"
                        src="<?= get_template_directory_uri(); ?>/assets/img/balance-usd.svg"
                        alt="USD"
                      />
                      <div class="menu-profile__balance-item-price">
                        <span class="menu-profile__balance-item-count">7500</span>
                        USD
                      </div>
                    </div>
                    <div class="menu-profile__balance-item">
                      <img
                        class="menu-profile__balance-item-image"
                        src="<?= get_template_directory_uri(); ?>/assets/img/balance-admon.svg"
                        alt="ADMON"
                      />
                      <div class="menu-profile__balance-item-price">
                        <span class="menu-profile__balance-item-count">30000</span>
                        Admon
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="menu-profile__item menu-profile__item--profile">
                <a
                  class="menu-profile__link menu-profile__link--active"
                  href="<?= home_url('/profile') ?>"
                >
                  My profile
                </a>
              </li>
              <li class="menu-profile__item menu-profile__item--messages">
                <a class="menu-profile__link" href="<?= home_url('/messages'); ?>">Messages</a>
              </li>
              <li class="menu-profile__item menu-profile__item--castings">
                <a class="menu-profile__link" href="<?= home_url('/my-castings'); ?>">My castings</a>
              </li>
              <li class="menu-profile__item menu-profile__item--photos">
                <a class="menu-profile__link" href="<?= home_url('/my-photos'); ?>">My photos</a>
              </li>
              <li class="menu-profile__item menu-profile__item--edit">
                <a class="menu-profile__link" href="<?= home_url('/edit'); ?>">Edit profile</a>
              </li>
              <li class="menu-profile__item menu-profile__item--social">
                <a class="menu-profile__link" href="<?= home_url('/social'); ?>">Social</a>
              </li>
              <li class="menu-profile__item menu-profile__item--notice">
                <a class="menu-profile__link" href="<?= home_url('/notifications'); ?>">Notifications</a>
              </li>
              <li class="menu-profile__item menu-profile__item--favourites">
                <a class="menu-profile__link" href="<?= home_url('/favourites'); ?>">Favourites</a>
              </li>
              <li class="menu-profile__item menu-profile__item--payment">
                <a class="menu-profile__link" href="<?= home_url('/payment'); ?>">Payment</a>
              </li>
              <li class="menu-profile__item menu-profile__item--following">
                <a class="menu-profile__link" href="<?= home_url('/follower'); ?>">Follower</a>
              </li>
              <li class="menu-profile__item menu-profile__item--settings">
                <a class="menu-profile__link" href>Settings</a>
                <ul class="menu-profile__sub-list menu-profile__settings">
                  <li class="menu-profile__sub-list-item menu-profile__settings-item">
                    <a
                      class="menu-profile__settings-link"
                      href="<?= home_url('/personal-settings'); ?>"
                    >
                      Personal settings
                    </a>
                  </li>
                  <li class="menu-profile__sub-list-item menu-profile__settings-item">
                    <a
                      class="menu-profile__settings-link"
                      href="<?= home_url('/password'); ?>"
                    >
                      Password
                    </a>
                  </li>
                  <li class="menu-profile__sub-list-item menu-profile__settings-item">
                    <a
                      class="menu-profile__settings-link"
                      href="<?= home_url('/bank-account'); ?>"
                    >
                      Bank account
                    </a>
                  </li>
                  <li class="menu-profile__sub-list-item menu-profile__settings-item">
                    <a
                      class="menu-profile__settings-link"
                      href="<?= home_url('/settings-notifications'); ?>"
                    >
                      Notifications
                    </a>
                  </li>
                </ul>
              </li>
              <li class="menu-profile__item menu-profile__item--log-out">
                <a class="menu-profile__link" href="<?= wp_logout_url( home_url() ); ?>">Log out</a>
              </li>
            </ul>
          </div>

          <a class="logo header__logo" href="<?= home_url(); ?>">
            <img
              class="logo__image"
              src="<?= get_template_directory_uri(); ?>/assets/img/logo.svg"
              alt="Ad Plug"
              data-san="animate__fadeInLeft"
            />
          </a>
        </div>
        <div class="header-profile__item">
          <div class="user-tools">
            <a class="user-tools__profile" href="<?= home_url('/profile'); ?>">
              <img
                class="user-tools__profile-photo"
                src="<?= get_template_directory_uri(); ?>/assets/img/user-photo.jpg"
                alt="Alt"
              />
              <span class="user-tools__profile-name">Rubi Sparks</span>
            </a>
            <div class="user-tools__item user-tools__user-menu">
              <button
                class="user-tools__item-toggle user-tools__item-toggle--user-menu"
                type="button"
                aria-label="User menu"
              ></button>
              <div class="user-tools__item-wrapper user-tools__user-menu-wrapper">
                <span class="user-tools__user-menu-title">Find a casting</span>
                <div class="user-tools__user-menu-items">
                  <a class="user-tools__user-menu-item" href="<?= home_url('/my-castings'); ?>">Castings</a>
                  <a class="user-tools__user-menu-item" href="<?= home_url('/profile'); ?>">My profile</a>
                  <a class="user-tools__user-menu-item" href="<?= home_url('/search'); ?>">Influencers</a>
                  <a class="user-tools__user-menu-item" href="<?= home_url('/search'); ?>">Brands</a>
                  <a class="user-tools__user-menu-item" href="<?= wp_logout_url( home_url() ); ?>">Exit</a>
                </div>
              </div>
            </div>
            <div class="user-tools__item">
              <button
                class="user-tools__item-toggle user-tools__item-toggle--notice"
                type="button"
                aria-label="Notifications"
              ></button>
              <div class="user-tools__item-wrapper">
                <span class="user-tools__item-title">Notifications</span>
                <div class="user-tools__item-items">
                  <a class="user-tools__item-item" href="<?= home_url('/notifications'); ?>">
                    I would like to receive SMS notifications for
                    collaboration activities
                  </a>
                  <a class="user-tools__item-item" href="<?= home_url('/notifications'); ?>">
                    I would like to receive SMS notifications for
                    collaboration activities
                  </a>
                  <a class="user-tools__item-item" href="<?= home_url('/notifications'); ?>">
                    I would like to receive SMS notifications for
                    collaboration activities
                  </a>
                  <a class="user-tools__item-item" href="<?= home_url('/notifications'); ?>">
                    I would like to receive SMS notifications for
                    collaboration activities
                  </a>
                </div>
                <div class="user-tools__item-footer">
                  <button
                    class="user-tools__item-button user-tools__item-button--highlighted"
                    type="button"
                  >
                    Mark as read
                  </button>
                  <a class="user-tools__item-button" href="<?= home_url('/notifications'); ?>">Show more</a>
                </div>
              </div>
            </div>
            <div class="user-tools__item user-tools__messages">
              <button
                class="
                  user-tools__item-toggle user-tools__item-toggle--messages
                "
                type="button"
                aria-label="Messages"
              ></button>
              <div class="user-tools__item-wrapper">
                <span class="user-tools__item-title">Messages</span>
                <div class="user-tools__item-items">
                  <a
                    class="user-tools__item-item user-tools__messages-item"
                    href="<?= home_url('/messages'); ?>"
                  >
                    <img
                      class="user-tools__messages-item-avatar"
                      src="<?= get_template_directory_uri(); ?>/assets/img/message-item-1.jpg"
                      alt="Alt"
                    />
                    <span class="user-tools__messages-item-name">Marie Sanders</span>
                    <span class="user-tools__messages-item-text">
                      I would like to receive SMS notifications for
                      collaboration
                    </span>
                  </a>
                  <a
                    class="user-tools__item-item user-tools__messages-item"
                    href="<?= home_url('/messages'); ?>"
                  >
                    <img
                      class="user-tools__messages-item-avatar"
                      src="<?= get_template_directory_uri(); ?>/assets/img/message-item-2.jpg"
                      alt="Alt"
                    />
                    <span class="user-tools__messages-item-name">Aaron Griffin</span>
                    <span class="user-tools__messages-item-text">
                      I would like to receive SMS notifications for
                      collaboration
                    </span>
                  </a>
                  <a
                    class="user-tools__item-item user-tools__messages-item"
                    href="<?= home_url('/messages'); ?>"
                  >
                    <img
                      class="user-tools__messages-item-avatar"
                      src="<?= get_template_directory_uri(); ?>/assets/img/message-item-3.jpg"
                      alt="Alt"
                    />
                    <span class="user-tools__messages-item-name">Kevin Andrews</span>
                    <span class="user-tools__messages-item-text">
                      I would like to receive SMS notifications for
                      collaboration
                    </span>
                  </a>
                  <a
                    class="user-tools__item-item user-tools__messages-item"
                    href="<?= home_url('/messages'); ?>"
                  >
                    <img
                      class="user-tools__messages-item-avatar"
                      src="<?= get_template_directory_uri(); ?>/assets/img/message-item-4.jpg"
                      alt="Alt"
                    />
                    <span class="user-tools__messages-item-name">Tyler Wade</span>
                    <span class="user-tools__messages-item-text">
                      I would like to receive SMS notifications for
                      collaboration
                    </span>
                  </a>
                </div>
                <div class="user-tools__item-footer">
                  <a
                    class="user-tools__item-button user-tools__item-button--center user-tools__item-button--highlighted"
                    href="<?= home_url('/messages'); ?>"
                  >
                    All messages
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
