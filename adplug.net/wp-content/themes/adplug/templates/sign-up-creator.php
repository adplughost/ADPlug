<?php 
/**
 * Template name: Sign Up Creator
 */
get_header('login');
?>
<main class="p-login__main">
  <div class="container p-login__main-wrapper">
    <div class="p-login__sign-up">
      <div class="p-login__sign-up-wrapper">
        <span class="p-login__sign-up-title">Welcome!</span>
        <p class="p-login__sign-up-subtitle">Already registered?</p>
        <div class="p-login__sign-up-buttons">
          <a class="button button--white p-login__sign-up-button" href="<?= home_url('/login'); ?>">Login</a>
        </div>
      </div>
    </div>
    <div class="p-login__login">
      <div class="p-login__login-wrapper">
        <div class="p-login__login-header">
          <span class="p-login__login-title">Sign up</span>
          <div class="p-login__login-social">
            <div class="auth-social">
              <a 
                class="auth-social__item auth-social__item--fb" 
                href="<?= home_url('/sign-up-details-for-creator'); ?>" 
                aria-label="Facebook"></a>
              <a 
                class="auth-social__item auth-social__item--im" 
                href="<?= home_url('/sign-up-details-for-creator'); ?>" 
                aria-label="Instagram"></a>
              <a 
                class="auth-social__item auth-social__item--tw" 
                href="<?= home_url('/sign-up-details-for-creator'); ?>" 
                aria-label="Twitter"></a>
              <a 
                class="auth-social__item auth-social__item--tt" 
                href="<?= home_url('/sign-up-details-for-creator'); ?>" 
                aria-label="TikTok"></a>
            </div>
          </div>
          <p class="p-login__login-text">
            Register using social networks or use your email
          </p>
        </div>
        <div class="p-login__login-form p-sign-up__form">
          <form class="form form-login form-sign-up" action="/" method="POST">
            <div class="form-sign-up__status">
              <label class="form__radio form-sign-up__status-item">
                <input class="form__radio-input" type="radio" name="status" value="advertiser" />
                <span class="form__radio-circle"></span>
                I'm an Advertiser
              </label>
              <label class="form__radio form-sign-up__status-item">
                <input class="form__radio-input" type="radio" name="status" value="creator" checked />
                <span class="form__radio-circle"></span>
                I'm an creator
              </label>
            </div>
            <label class="form__label form__label--icon form__label--name">
              <input class="form__input form__input--transparent form__input--icon" name="name" type="text" placeholder="Name" required />
            </label>
            <label class="form__label form__label--icon form__label--email">
              <input class="form__input form__input--transparent form__input--icon" name="email" type="email" placeholder="E-Mail" required />
            </label>
            <label class="form__label form__label--icon form__label--password">
              <input class="form__input form__input--transparent form__input--icon" name="password" type="password" placeholder="Password" required />
            </label>
            <div class="form-login__footer form-sign-up__footer">
              <label class="form__radio form-login__remember">
                <input class="form__radio-input" type="checkbox" name="agree" required checked />
                <span class="form__radio-circle"></span>
                I agree with the policy
              </label>
              <label class="form__radio form-login__remember">
                <input class="form__radio-input" type="checkbox" name="remember" />
                <span class="form__radio-circle"></span>
                Remember me
              </label>
              <!-- <button class="button form__submit form-sign-up__submit" type="submit">
                Register now as&nbsp;<span class="form-sign-up__submit-status">Creator</span>
              </button> -->
              <a 
                class="button form__submit form-sign-up__submit" 
                href="<?= home_url('/sign-up-details-for-creator'); ?>"
              >
                Register now as&nbsp;<span class="form-sign-up__submit-status">Creator</span>
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>