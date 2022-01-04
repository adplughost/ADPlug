<div class="menu-profile">
  <ul class="menu-profile__list">
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
        href="<?= home_url('/profile'); ?>"
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
            href="<?= home_url('/password'); ?>">
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