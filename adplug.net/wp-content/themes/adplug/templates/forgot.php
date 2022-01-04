<?php 
/**
 * Template name: Forgot
 */
get_header('login');
?>
<main class="p-login__main">
  <div class="container p-login__main-wrapper">
    <div class="p-login__sign-up p-forgot__sign-up">
      <div class="p-login__sign-up-wrapper">
        <span class="p-login__sign-up-title">Welcome!</span>
        <p class="p-login__sign-up-subtitle">Remembered your passowrd?</p>
        <div class="p-login__sign-up-buttons">
          <a class="button button--white" href="<?= home_url('/login'); ?>">Login</a>
        </div>
      </div>
    </div>
    <div class="p-login__login p-forgot__login">
      <div class="p-login__login-wrapper">
        <div class="p-login__login-header p-forgot__login-header">
          <span class="p-login__login-title p-forgot__login-title">Forgot password</span>
          <p class="p-login__login-text p-forgot__login-text">Enter your email</p>
        </div>
        <div class="p-login__login-form">
          <form class="form form-login p-forgot__form" action="/" method="POST">
            <label class="form__label form__label--icon form__label--email">
              <input class="form__input form__input--transparent form__input--icon" name="email" type="email" placeholder="E-Mail" required />
            </label>
            <div class="form-login__footer p-forgot__form-footer">
              <button class="button form__submit form-login__submit" type="submit">
                Restore
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>