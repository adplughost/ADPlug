<?php 
/**
 * Template name: Sign Up Details Advertiser
 */
get_header('sign-up');
?>
<main>
  <div class="container p-reg-details__wrapper">
    <h1 class="p-reg-details__title">Registration</h1>
    <form
      class="form reg-form p-reg-details__form"
      action="/"
      method="POST"
    >
      <div id="step-1" class="reg-form__step">
        <div class="reg-form__details">
          <span class="reg-form__title reg-form__details-title"
            >Your details</span
          >
          <label class="reg-form__label reg-form__label--required">
            <span class="reg-form__label-text"> Full name </span>
            <input
              class="reg-form__input"
              type="text"
              name="name"
              placeholder="Ruby Sparks"
              required
            />
          </label>
          <label class="reg-form__label reg-form__label--required">
            <span class="reg-form__label-text"> Company name </span>
            <input
              class="reg-form__input"
              type="text"
              name="company_name"
              placeholder="Enter your company name"
              required
            />
          </label>
          <label class="reg-form__label">
            <span class="reg-form__label-text"> Nationality </span>
            <input
              class="reg-form__input"
              type="text"
              name="nation"
              placeholder="Enter your nationality"
            />
          </label>
          <label
            class="
              reg-form__label reg-form__label--row reg-form__label--required
            "
          >
            <span class="reg-form__label-text">Address</span>
            <span class="reg-form__label-items">
              <span class="reg-form__label-item">
                 Country
                <input
                  class="reg-form__input"
                  type="text"
                  name="country"
                  placeholder="USA"
                  required
                />
              </span>
              <span class="reg-form__label-item">
                City
                <input
                  class="reg-form__input"
                  type="text"
                  name="city"
                  placeholder="Enter a city"
                  required
                />
              </span>
            </span>
          </label>
          <label class="reg-form__label reg-form__label--required">
            <span class="reg-form__label-text"> Birth date </span>
            <input
              class="reg-form__input"
              type="text"
              name="nation"
              placeholder="Enter your nationality"
            />
          </label>
          <label class="reg-form__label reg-form__label--required">
            <span class="reg-form__label-text"> Phone </span>
            <input
              class="reg-form__input"
              type="tel"
              name="phone"
              placeholder="Enter your phone number"
            />
            <span class="reg-form__label-notice"
              >Will not show publicly</span
            >
          </label>
          <label class="reg-form__label">
            <span class="reg-form__label-text"> Website </span>
            <input
              class="reg-form__input"
              type="url"
              name="website"
              placeholder="Enter your website"
            />
          </label>
        </div>
        <div class="reg-form__footer">
          <button
            id="reg-form-next"
            class="button reg-form__button reg-form__next"
            type="button"
          >
            Next
          </button>
        </div>
      </div>
      <div id="step-2" class="reg-form__step">
        <div class="reg-form__avatar">
          <span class="reg-form__title reg-form__avatar-title"
            >Profile Photo</span
          >
          <div class="form__photo reg-form__avatar-wrapper">
            <label for="form-photo">
              <img
                class="form__photo-image reg-form__avatar-image"
                src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-photo.svg"
                alt="Profile photo"
              />
            </label>
            <label class="form__photo-label">
              <input
                id="form-photo"
                class="form__photo-input"
                type="file"
                name="photo"
                required
              />
              <span class="form__photo-text">Add photo</span>
            </label>
          </div>
        </div>
        <div class="reg-form__activity">
          <span class="reg-form__title reg-form__activity-title"
            >Field of activity</span
          >
          <div class="reg-form__activity-items">
            <label class="form__radio">
              <input
                class="form__radio-input"
                type="checkbox"
                name="cosmetics"
              />
              <span class="form__radio-circle"></span>
              <span class="form__radio-text">Cosmetics</span>
            </label>
            <label class="form__radio">
              <input
                class="form__radio-input"
                type="checkbox"
                name="cosmetics"
              />
              <span class="form__radio-circle"></span>
              <span class="form__radio-text">Cosmetics</span>
            </label>
            <label class="form__radio">
              <input
                class="form__radio-input"
                type="checkbox"
                name="cosmetics"
              />
              <span class="form__radio-circle"></span>
              <span class="form__radio-text">Cosmetics</span>
            </label>
            <label class="form__radio">
              <input
                class="form__radio-input"
                type="checkbox"
                name="cosmetics"
              />
              <span class="form__radio-circle"></span>
              <span class="form__radio-text">Cosmetics</span>
            </label>
            <label class="form__radio">
              <input
                class="form__radio-input"
                type="checkbox"
                name="tech"
              />
              <span class="form__radio-circle"></span>
              <span class="form__radio-text">Technologies</span>
            </label>
            <label class="form__radio">
              <input
                class="form__radio-input"
                type="checkbox"
                name="tech"
              />
              <span class="form__radio-circle"></span>
              <span class="form__radio-text">Technologies</span>
            </label>
            <label class="form__radio">
              <input
                class="form__radio-input"
                type="checkbox"
                name="clothing"
              />
              <span class="form__radio-circle"></span>
              <span class="form__radio-text">Clothing</span>
            </label>
            <label class="form__radio">
              <input
                class="form__radio-input"
                type="checkbox"
                name="clothing"
              />
              <span class="form__radio-circle"></span>
              <span class="form__radio-text">Clothing</span>
            </label>
            <label class="form__radio">
              <input
                class="form__radio-input"
                type="checkbox"
                name="tech"
              />
              <span class="form__radio-circle"></span>
              <span class="form__radio-text">Technologies</span>
            </label>
            <label class="form__radio">
              <input
                class="form__radio-input"
                type="checkbox"
                name="products"
              />
              <span class="form__radio-circle"></span>
              <span class="form__radio-text">Products</span>
            </label>
            <label class="form__radio">
              <input
                class="form__radio-input"
                type="checkbox"
                name="products"
              />
              <span class="form__radio-circle"></span>
              <span class="form__radio-text">Products</span>
            </label>
            <label class="form__radio">
              <input
                class="form__radio-input"
                type="checkbox"
                name="other"
              />
              <span class="form__radio-circle"></span>
              <span class="form__radio-text">Other</span>
            </label>
          </div>
        </div>
        <div class="reg-form__portfolio">
          <span class="reg-form__title reg-form__portfolio-title"
            >Portfolio</span
          >
          <div class="reg-form__portfolio-items">
            <div class="form__photo reg-form__portfolio-item">
              <label
                for="portfolio_photo_1"
                class="reg-form__portfolio-item-label-image"
              >
                <img
                  class="form__photo-image"
                  src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                  alt="Portfolio photo"
                />
              </label>
              <label
                class="form__photo-label reg-form__portfolio-item-label"
              >
                <input
                  id="portfolio_photo_1"
                  class="form__photo-input"
                  type="file"
                  name="portfolio_photo_1"
                />
                <span
                  class="
                    form__photo-text form__photo-text--hide
                    reg-form__portfolio-item-text
                  "
                  >Add photo</span
                >
              </label>
            </div>
            <div class="form__photo reg-form__portfolio-item">
              <label
                for="portfolio_photo_2"
                class="reg-form__portfolio-item-label-image"
              >
                <img
                  class="form__photo-image"
                  src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                  alt="Portfolio photo"
                />
              </label>
              <label
                class="form__photo-label reg-form__portfolio-item-label"
              >
                <input
                  id="portfolio_photo_2"
                  class="form__photo-input"
                  type="file"
                  name="portfolio_photo_2"
                />
                <span
                  class="
                    form__photo-text form__photo-text--hide
                    reg-form__portfolio-item-text
                  "
                  >Add photo</span
                >
              </label>
            </div>
            <div class="form__photo reg-form__portfolio-item">
              <label
                for="portfolio_photo_3"
                class="reg-form__portfolio-item-label-image"
              >
                <img
                  class="form__photo-image"
                  src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                  alt="Portfolio photo"
                />
              </label>
              <label
                class="form__photo-label reg-form__portfolio-item-label"
              >
                <input
                  id="portfolio_photo_3"
                  class="form__photo-input"
                  type="file"
                  name="portfolio_photo_3"
                />
                <span
                  class="
                    form__photo-text form__photo-text--hide
                    reg-form__portfolio-item-text
                  "
                  >Add photo</span
                >
              </label>
            </div>
            <div class="form__photo reg-form__portfolio-item">
              <label
                for="portfolio_photo_4"
                class="reg-form__portfolio-item-label-image"
              >
                <img
                  class="form__photo-image"
                  src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                  alt="Portfolio photo"
                />
              </label>
              <label
                class="form__photo-label reg-form__portfolio-item-label"
              >
                <input
                  id="portfolio_photo_4"
                  class="form__photo-input"
                  type="file"
                  name="portfolio_photo_4"
                />
                <span
                  class="
                    form__photo-text form__photo-text--hide
                    reg-form__portfolio-item-text
                  "
                  >Add photo</span
                >
              </label>
            </div>
          </div>
          <p class="reg-form__portfolio-skip">
            you can skip this step and fill it in later
          </p>
        </div>
        <div class="reg-form__footer">
          <label class="form__radio reg-form__agree">
            <input
              class="form__radio-input"
              type="checkbox"
              name="agree"
              checked
              required
            />
            <span class="form__radio-circle"></span>
            By clicking Confirm, I certify that I have read and agree to the
            AD Plug Privacy Policy and Terms of Service, and to receive
            account-related
          </label>
          <button
            id="reg-form-return"
            class="button button--white reg-form__button reg-form__return"
            type="button"
          >
            Return
          </button>
          <!-- <button
            class="button reg-form__button reg-form__confirm"
            type="submit"
          >
            Confirm
          </button> -->
          <a class="button reg-form__button reg-form__confirm" href="<?= home_url('/profile'); ?>">
            Confirm
          </a>
        </div>
      </div>
    </form>
  </div>
</main>
<?php get_footer(); ?>