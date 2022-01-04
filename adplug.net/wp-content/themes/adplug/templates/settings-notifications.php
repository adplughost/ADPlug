<?php 
/**
 * Template name: Notifications settings
 */
get_header('profile');
?>
<main class="container p-profile__main p-settings__main">
  <div class="p-profile__menu">
    <?php get_template_part('template-parts/menu-profile'); ?>
  </div>

  <div class="b-notifications">
    <form class="form form-settings p-notifications__form" action="/" method="POST">
      <span class="form-settings__title">Notifications</span>
      <div class="form-settings__wrapper p-notifications__form-wrapper">
        <label class="form__check form-settings__check">
          <input class="form__check-input" type="checkbox" name="notice_text" />
          <span class="form__check-box"></span>
          <span class="form__check-text">Text Messages</span>
          <span class="form-settings__check-details-text">
              I would like to receive SMS notifications for collaboration
              activities
            </span>
        </label>

        <label class="form__check form-settings__check">
          <input class="form__check-input" type="checkbox" name="notice_email" />
          <span class="form__check-box"></span>
          <span class="form__check-text">Email Notifications</span>
          <span class="form-settings__check-details-text">
              I would like to receive Email notifications for collaboration
              activities
            </span>
        </label>

        <button class="button button--light-blue form-settings__submit" type="submit">
          Save settings
        </button>
      </div>
    </form>
  </div>
</main>
<?php get_footer(); ?>