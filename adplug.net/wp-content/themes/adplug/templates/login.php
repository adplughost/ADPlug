<?php 
/**
 * Template name: Login
 */
get_header('login');
?>
<main class="p-login__main">
  <div class="container p-login__main-wrapper">
    <div class="p-login__sign-up">
      <div class="p-login__sign-up-wrapper">
        <span class="p-login__sign-up-title">Welcome!</span>
        <p class="p-login__sign-up-subtitle">No account yet?</p>
        <div class="p-login__sign-up-buttons">
          <a 
            class="button button--white p-login__sign-up-button" 
            href="<?= home_url('/sign-up-as-advertiser'); ?>"
          >
            Sign up advertiser
          </a>
          <a 
            class="button button--white p-login__sign-up-button" 
            href="<?= home_url('/sign-up-as-creator'); ?>"
          >
            Sign up creator
          </a>
        </div>
      </div>
    </div>
    <div class="p-login__login">
      <div class="p-login__login-wrapper">
        <div class="p-login__login-header">
          <span class="p-login__login-title">Log In</span>
          <div class="p-login__login-social">
            <div class="auth-social">
              <a 
                class="auth-social__item auth-social__item--fb" 
                href="<?= home_url('/profile'); ?>" 
                aria-label="Facebook"
              ></a>
              <a 
                class="auth-social__item auth-social__item--im" 
                href="<?= home_url('/profile'); ?>" 
                aria-label="Instagram"
              ></a>
              <a 
                class="auth-social__item auth-social__item--tw" 
                href="<?= home_url('/profile'); ?>" 
                aria-label="Twitter"
              ></a>
              <a 
                class="auth-social__item auth-social__item--tt" 
                href="<?= home_url('/profile'); ?>" 
                aria-label="TikTok"
              ></a>
            </div>
          </div>
          <p class="p-login__login-text">
            Login using social networks or use your email
          </p>
        </div>
        <div class="p-login__login-form">
          <form class="form form-login" action="/" method="POST">
            <label class="form__label form__label--icon form__label--email">
              <input class="form__input form__input--transparent form__input--icon" name="email" type="email" placeholder="E-Mail" required />
            </label>
            <label class="form__label form__label--icon form__label--password">
              <input class="form__input form__input--transparent form__input--icon" name="password" type="password" placeholder="Password" required />
            </label>
            <p class="form-login__forgot">
              Forgot password?
              <a class="form-login__forgot-link" href="<?= home_url('/forgot'); ?>">Restore</a>
            </p>
            <div class="form-login__footer">
              <label class="form__radio form-login__remember">
                <input class="form__radio-input" type="checkbox" name="remember" />
                <span class="form__radio-circle"></span>
                Remember me
              </label>
              <a class="button form__submit form-login__submit" href="<?= home_url('/profile'); ?>">
                Login
              </a>
              <!-- <button class="button form__submit form-login__submit" type="submit">
                Login
              </button> -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>