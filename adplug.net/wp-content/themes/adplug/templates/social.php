<?php 
/**
 * Template name: Social
 */
get_header('profile');
?>
<main class="container p-profile__main p-profile__main--col-2">
  <div class="p-profile__menu">
    <?php get_template_part('template-parts/menu-profile'); ?>
  </div>
  <div class="p-profile__body">
    <div class="p-profile__body-header">
      <span class="p-profile__body-title">Social networks</span>
    </div>
    <form class="form p-social__form" action="/" method="POST">
      <div class="p-social__form-label">
        <label for="instagram" class="p-social__form-label-text">Instagram</label>
        <div class="p-social__form-label-wrapper">
          <img class="p-social__form-label-icon" src="<?= get_template_directory_uri(); ?>/assets/img/social-nw-im.svg" alt="Instagram" />
          <input id="instagram" class="p-social__form-label-input" type="text" name="instagram" placeholder="@username" />
        </div>
      </div>
      <div class="p-social__form-label">
        <label for="facebook" class="p-social__form-label-text">Facebook</label>
        <div class="p-social__form-label-wrapper">
          <img class="p-social__form-label-icon" src="<?= get_template_directory_uri(); ?>/assets/img/social-nw-fb.svg" alt="Facebook" />
          <input id="facebook" class="p-social__form-label-input" type="url" name="facebook" placeholder="Facebook link" />
        </div>
      </div>
      <div class="p-social__form-label">
        <label for="youTube" class="p-social__form-label-text">YouTube</label>
        <div class="p-social__form-label-wrapper">
          <img class="p-social__form-label-icon" src="<?= get_template_directory_uri(); ?>/assets/img/social-nw-yt.svg" alt="YouTube" />
          <input id="youTube" class="p-social__form-label-input" type="url" name="youTube" placeholder="YouTube channel link" />
        </div>
      </div>
      <div class="p-social__form-label">
        <label for="tiktok" class="p-social__form-label-text">TikTok</label>
        <div class="p-social__form-label-wrapper">
          <img class="p-social__form-label-icon" src="<?= get_template_directory_uri(); ?>/assets/img/social-nw-tt.svg" alt="TikTok" />
          <input id="tiktok" class="p-social__form-label-input" type="text" name="tiktok" placeholder="@username" />
        </div>
      </div>
      <div class="p-social__form-label">
        <label for="website" class="p-social__form-label-text">Link to a personal website</label>
        <div class="p-social__form-label-wrapper">
          <img class="p-social__form-label-icon" src="<?= get_template_directory_uri(); ?>/assets/img/social-nw-ws.svg" alt="Personal website" />
          <input id="website" class="p-social__form-label-input" type="url" name="website" placeholder="Link your website" />
        </div>
      </div>
      <button class="button button--light-blue p-social__form-submit" type="submit">Add social networks</button>
    </form>
  </div>
</main>
<?php get_footer(); ?>