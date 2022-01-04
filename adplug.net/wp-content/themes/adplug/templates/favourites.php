<?php 
/**
 * Template name: Favourites
 */
get_header('profile');
?>
<main class="container p-profile__main p-profile__main--col-2">
  <div class="p-profile__menu">
    <?php get_template_part('template-parts/menu-profile'); ?>
  </div>
  <div class="p-profile__body b-follower">
    <div class="p-profile__body-header b-follower__header">
      <div class="b-follower__nav">
        <button class="p-profile__body-title b-follower__nav-item b-follower__nav-item--active" type="button">
          Your favourites
        </button>
      </div>
      <button class="p-profile__body-action b-follower__remove" type="button" aria-label="Remove favourites">
        <span class="p-profile__body-action-text b-follower__remove-text">Remove favourites</span>
      </button>
    </div>
    <div class="b-follower__body">
      <div class="b-follower__items">
        <div class="b-follower__items-plug p-favourites__plug">
          <b class="b-follower__items-plug-notice"
              >You haven’t added anything to your favourites</b>
          <p class="b-follower__items-plug-text">
            Add your favorite brands to your favourites and keep track of
            their current offers
          </p>
          <a class="button button--light-blue b-follower__items-plug-button p-favourites__plug-button" href="#">Find a casting</a>
        </div>
        <div class="b-follower__item">
          <a class="b-follower__item-link" href="#">
            <img class="b-follower__item-photo" src="<?= get_template_directory_uri(); ?>/assets/img/follower-item-1.jpg" alt="Alt" />
          </a>
          <a class="b-follower__item-link" href="#">
            <span class="b-follower__item-name">Tom Ronin</span>
          </a>
          <button class="b-follower__item-delete" type="button" aria-label="Remove"></button>
        </div>
        <div class="b-follower__item">
          <a class="b-follower__item-link" href="#">
            <img class="b-follower__item-photo" src="<?= get_template_directory_uri(); ?>/assets/img/follower-item-2.jpg" alt="Alt" />
          </a>
          <a class="b-follower__item-link" href="#">
            <span class="b-follower__item-name">Tom Ronin</span>
          </a>
          <button class="b-follower__item-delete" type="button" aria-label="Remove"></button>
        </div>
        <div class="b-follower__item">
          <a class="b-follower__item-link" href="#">
            <img class="b-follower__item-photo" src="<?= get_template_directory_uri(); ?>/assets/img/follower-item-3.jpg" alt="Alt" />
          </a>
          <a class="b-follower__item-link" href="#">
            <span class="b-follower__item-name">Tom Ronin</span>
          </a>
          <button class="b-follower__item-delete" type="button" aria-label="Remove"></button>
        </div>
        <div class="b-follower__item">
          <a class="b-follower__item-link" href="#">
            <img class="b-follower__item-photo" src="<?= get_template_directory_uri(); ?>/assets/img/follower-item-4.jpg" alt="Alt" />
          </a>
          <a class="b-follower__item-link" href="#">
            <span class="b-follower__item-name">Tom Ronin</span>
          </a>
          <button class="b-follower__item-delete" type="button" aria-label="Remove"></button>
        </div>
        <div class="b-follower__item">
          <a class="b-follower__item-link" href="#">
            <img class="b-follower__item-photo" src="<?= get_template_directory_uri(); ?>/assets/img/follower-item-5.jpg" alt="Alt" />
          </a>
          <a class="b-follower__item-link" href="#">
            <span class="b-follower__item-name">Tom Ronin</span>
          </a>
          <button class="b-follower__item-delete" type="button" aria-label="Remove"></button>
        </div>
        <div class="b-follower__item">
          <a class="b-follower__item-link" href="#">
            <img class="b-follower__item-photo" src="<?= get_template_directory_uri(); ?>/assets/img/follower-item-1.jpg" alt="Alt" />
          </a>
          <a class="b-follower__item-link" href="#">
            <span class="b-follower__item-name">Tom Ronin</span>
          </a>
          <button class="b-follower__item-delete" type="button" aria-label="Remove"></button>
        </div>
        <div class="b-follower__item">
          <a class="b-follower__item-link" href="#">
            <img class="b-follower__item-photo" src="<?= get_template_directory_uri(); ?>/assets/img/follower-item-2.jpg" alt="Alt" />
          </a>
          <a class="b-follower__item-link" href="#">
            <span class="b-follower__item-name">Tom Ronin</span>
          </a>
          <button class="b-follower__item-delete" type="button" aria-label="Remove"></button>
        </div>
        <div class="b-follower__item">
          <a class="b-follower__item-link" href="#">
            <img class="b-follower__item-photo" src="<?= get_template_directory_uri(); ?>/assets/img/follower-item-3.jpg" alt="Alt" />
          </a>
          <a class="b-follower__item-link" href="#">
            <span class="b-follower__item-name">Tom Ronin</span>
          </a>
          <button class="b-follower__item-delete" type="button" aria-label="Remove"></button>
        </div>
        <div class="b-follower__item">
          <a class="b-follower__item-link" href="#">
            <img class="b-follower__item-photo" src="<?= get_template_directory_uri(); ?>/assets/img/follower-item-4.jpg" alt="Alt" />
          </a>
          <a class="b-follower__item-link" href="#">
            <span class="b-follower__item-name">Tom Ronin</span>
          </a>
          <button class="b-follower__item-delete" type="button" aria-label="Remove"></button>
        </div>
      </div>
      <div class="b-follower__items b-follower__items--empty">
        <div class="b-follower__items-plug">
          <b class="b-follower__items-plug-notice"
              >You don't have any subscribers</b>
          <p class="b-follower__items-plug-text">
            Subscribe to people who are important to you
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>