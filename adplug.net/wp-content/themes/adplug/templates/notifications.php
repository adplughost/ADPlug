<?php 
/**
 * Template name: Notifications
 */
get_header('profile');
?>
<main class="container p-profile__main p-profile__main--col-2">
  <div class="p-profile__menu">
    <?php get_template_part('template-parts/menu-profile'); ?>
  </div>
  <div class="p-profile__body b-notice">
    <div class="p-profile__body-header">
      <span class="p-profile__body-title">Notifications</span>
      <button class="p-profile__body-action b-notice__action" type="button" aria-label="Read all notifications">
        <span class="p-profile__body-action-text">Read all notifications</span>
      </button>
    </div>
    <div class="b-notice__body">
      <div class="b-notice__item b-notice__item--new">
        <p class="b-notice__item-text">
          A recent sign-in to your Adplug account from an unknown device or
          browser.
        </p>
        <span class="b-notice__item-date">3 hours ago</span>
      </div>
      <div class="b-notice__item">
        <p class="b-notice__item-text">
          To use all the functionality of the service, link your social
          networks and link your mobile phone
        </p>
        <span class="b-notice__item-date">3 hours ago</span>
      </div>
      <div class="b-notice__item">
        <p class="b-notice__item-text">
          A recent sign-in to your Adplug account from an unknown device or
          browser.
        </p>
        <span class="b-notice__item-date">3 hours ago</span>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>