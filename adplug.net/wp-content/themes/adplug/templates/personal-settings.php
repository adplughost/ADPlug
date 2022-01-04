<?php 
/**
 * Template name: Personal Settings
 */
get_header('profile');
?>
<main class="container p-profile__main p-settings__main">
  <div class="p-profile__menu">
    <?php get_template_part('template-parts/menu-profile'); ?>
  </div>

  <div class="b-personal">
    <form class="form form-settings" action="/" method="POST">
      <span class="form-settings__title">Personal settings</span>
      <div class="form-settings__wrapper">
        <label class="form-settings__label form-settings__label--span">
          User ID
          <input class="form-settings__input" type="text" name="user_id" value="rubi4329" />
        </label>
        <label class="form-settings__label">
          Last name
          <input class="form-settings__input" type="text" name="last_name" placeholder="Sparks" />
        </label>
        <label class="form-settings__label">
          First name
          <input class="form-settings__input" type="text" name="first_name" placeholder="Rubi" />
        </label>
        <label class="form-settings__label">
          E-mail
          <input class="form-settings__input" type="email" name="email" placeholder="rubi_sparks@gmail.com" />
        </label>
        <label class="form-settings__label">
          Telephone
          <input class="form-settings__input" type="tel" name="phone" placeholder="+890523421312312" />
        </label>
        <div class="form-settings__label">
          <label for="nation">Nationality</label>
          <div class="form-settings__select">
            <select id="nation" class="form-settings__standard-select" name="nation">
              <option value="South Korea" selected>South Korea</option>
              <option value="USA">USA</option>
              <option value="UK">UK</option>
            </select>
            <span class="form-settings__select-focus"></span>
          </div>
        </div>
        <div class="form-settings__label">
          <label for="gender">Gender</label>
          <div class="form-settings__select">
            <select id="gender" class="form-settings__standard-select" name="gender">
              <option value="Man">Man</option>
              <option value="Woman" selected>Woman</option>
            </select>
            <span class="form-settings__select-focus"></span>
          </div>
        </div>
        <label class="form-settings__label form-settings__label--span">
          Birth date
          <input class="form-settings__input" type="date" name="date" />
        </label>
        <div class="form-settings__label">
          <label for="city">City</label>
          <div class="form-settings__label-wrapper form-settings__label-wrapper--city">
            <input id="city" class="form-settings__input" type="text" name="city" />
          </div>
        </div>
        <label class="form-settings__label">
          Address
          <input class="form-settings__input" type="text" name="address" />
        </label>
        <label class="form-settings__label form-settings__label--span">
          Career
          <input class="form-settings__input" type="text" name="career" />
        </label>
        <button class="button button--light-blue form-settings__submit" type="submit">
          Save settings
        </button>
      </div>
    </form>
  </div>
</main>
<?php get_footer(); ?>