<?php 
/**
 * Template name: Password
 */
get_header('profile');
?>
<main class="container p-profile__main p-settings__main">
  <div class="p-profile__menu">
    <?php get_template_part('template-parts/menu-profile'); ?>
  </div>

  <div class="b-personal">
    <form class="form form-settings" action="/" method="POST">
      <span class="form-settings__title">Password</span>
      <div class="form-settings__wrapper">
        <label class="form-settings__label form-settings__label--span">
          Old password
          <input class="form-settings__input" type="password" name="old_pass" placeholder="***********" />
        </label>
        <label class="form-settings__label">
          New password
          <input class="form-settings__input" type="password" name="new_pass" placeholder="***********" />
        </label>
        <label class="form-settings__label">
          Confirm New Password
          <input class="form-settings__input" type="password" name="confirm_new_pass" placeholder="***********" />
        </label>
        <button class="button button--light-blue form-settings__submit" type="submit">
          Save settings
        </button>
      </div>
    </form>
  </div>
</main>
<?php get_footer(); ?>