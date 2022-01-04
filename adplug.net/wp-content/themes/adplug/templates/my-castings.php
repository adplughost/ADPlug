<?php 
/**
 * Template name: My castings
 */
get_header('profile');
?>
<main class="container p-profile__main p-profile__main--col-2">
  <div class="p-profile__menu">
    <?php get_template_part('template-parts/menu-profile'); ?>
  </div>
  <div class="b-my-castings">
    <div class="b-my-castings__wrapper">
      <div class="b-my-castings__no-castings">
        <span class="b-my-castings__no-castings-title">You don’t have any active castings</span>
        <p class="b-my-castings__no-castings-text">
          Go to the casting page and leave a suggestion for the task you
          like
        </p>
        <button
          class="
            button button--light-blue
            b-my-castings__no-castings-button
          "
          type="button"
        >
          Find a casting
        </button>
        <!-- For influencers -->
        <a
          style="display: none"
          href="/castings.html"
          class="
            button button--light-blue
            b-my-castings__no-castings-button
          "
          type="button"
        >
          Take part in casting
        </a>
      </div>

      <div class="b-my-castings__header">
        <div class="b-my-castings__tabs">
          <button
            class="b-my-castings__tab b-my-castings__tab--active"
            type="button"
          >
            Active
          </button>
          <button class="b-my-castings__tab" type="button">
            Completed
          </button>
          <button class="b-my-castings__tab" type="button">Archive</button>
        </div>
        <button
          class="button button--light-blue b-my-castings__find"
          type="button"
        >
          Find a casting
        </button>
      </div>

      <div class="b-my-castings__items">
        <article class="b-my-castings__item">
          <img
            class="b-my-castings__item-image"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-castings-item-1.jpg"
            alt="Alt"
          />
          <div class="b-my-castings__item-content">
            <h2 class="b-my-castings__item-title">
              Nike Content Advertising
            </h2>
            <ul class="b-my-castings__item-info">
              <li class="b-my-castings__item-info-item">Worldwide</li>
              <li class="b-my-castings__item-info-item">August 20, 2021</li>
              <li class="b-my-castings__item-info-item">300</li>
            </ul>
            <footer class="b-my-castings__item-footer">
              <a class="b-my-castings__item-link" href="#">More details</a>
            </footer>
          </div>
        </article>
        <article class="b-my-castings__item">
          <img
            class="b-my-castings__item-image"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-castings-item-2.jpg"
            alt="Alt"
          />
          <div class="b-my-castings__item-content">
            <h2 class="b-my-castings__item-title">Alexia photographer</h2>
            <ul class="b-my-castings__item-info">
              <li class="b-my-castings__item-info-item">Worldwide</li>
              <li class="b-my-castings__item-info-item">August 20, 2021</li>
              <li class="b-my-castings__item-info-item">300</li>
            </ul>
            <footer class="b-my-castings__item-footer">
              <a class="b-my-castings__item-link" href="#">More details</a>
            </footer>
          </div>
        </article>
        <article class="b-my-castings__item">
          <img
            class="b-my-castings__item-image"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-castings-item-3.jpg"
            alt="Alt"
          />
          <div class="b-my-castings__item-content">
            <h2 class="b-my-castings__item-title">Bershka shop</h2>
            <ul class="b-my-castings__item-info">
              <li class="b-my-castings__item-info-item">Worldwide</li>
              <li class="b-my-castings__item-info-item">August 20, 2021</li>
              <li class="b-my-castings__item-info-item">300</li>
            </ul>
            <footer class="b-my-castings__item-footer">
              <a class="b-my-castings__item-link" href="#">More details</a>
            </footer>
          </div>
        </article>
        <article class="b-my-castings__item">
          <img
            class="b-my-castings__item-image"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-castings-item-4.jpg"
            alt="Alt"
          />
          <div class="b-my-castings__item-content">
            <h2 class="b-my-castings__item-title">Lilis Shop</h2>
            <ul class="b-my-castings__item-info">
              <li class="b-my-castings__item-info-item">Worldwide</li>
              <li class="b-my-castings__item-info-item">August 20, 2021</li>
              <li class="b-my-castings__item-info-item">300</li>
            </ul>
            <footer class="b-my-castings__item-footer">
              <a class="b-my-castings__item-link" href="#">More details</a>
            </footer>
          </div>
        </article>
        <article class="b-my-castings__item">
          <img
            class="b-my-castings__item-image"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-castings-item-5.jpg"
            alt="Alt"
          />
          <div class="b-my-castings__item-content">
            <h2 class="b-my-castings__item-title">Supreme Brand</h2>
            <ul class="b-my-castings__item-info">
              <li class="b-my-castings__item-info-item">Worldwide</li>
              <li class="b-my-castings__item-info-item">August 20, 2021</li>
              <li class="b-my-castings__item-info-item">300</li>
            </ul>
            <footer class="b-my-castings__item-footer">
              <a class="b-my-castings__item-link" href="#">More details</a>
            </footer>
          </div>
        </article>
        <article class="b-my-castings__item">
          <img
            class="b-my-castings__item-image"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-castings-item-6.jpg"
            alt="Alt"
          />
          <div class="b-my-castings__item-content">
            <h2 class="b-my-castings__item-title">
              Nike Content Advertising Limited edition 2021
            </h2>
            <ul class="b-my-castings__item-info">
              <li class="b-my-castings__item-info-item">Worldwide</li>
              <li class="b-my-castings__item-info-item">August 20, 2021</li>
              <li class="b-my-castings__item-info-item">300</li>
            </ul>
            <footer class="b-my-castings__item-footer">
              <a class="b-my-castings__item-link" href="#">More details</a>
            </footer>
          </div>
        </article>
        <article class="b-my-castings__item">
          <img
            class="b-my-castings__item-image"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-castings-item-7.jpg"
            alt="Alt"
          />
          <div class="b-my-castings__item-content">
            <h2 class="b-my-castings__item-title">You S21 Shop</h2>
            <ul class="b-my-castings__item-info">
              <li class="b-my-castings__item-info-item">Worldwide</li>
              <li class="b-my-castings__item-info-item">August 20, 2021</li>
              <li class="b-my-castings__item-info-item">300</li>
            </ul>
            <footer class="b-my-castings__item-footer">
              <a class="b-my-castings__item-link" href="#">More details</a>
            </footer>
          </div>
        </article>
        <article class="b-my-castings__item">
          <img
            class="b-my-castings__item-image"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-castings-item-8.jpg"
            alt="Alt"
          />
          <div class="b-my-castings__item-content">
            <h2 class="b-my-castings__item-title">Nike men</h2>
            <ul class="b-my-castings__item-info">
              <li class="b-my-castings__item-info-item">Worldwide</li>
              <li class="b-my-castings__item-info-item">August 20, 2021</li>
              <li class="b-my-castings__item-info-item">300</li>
            </ul>
            <footer class="b-my-castings__item-footer">
              <a class="b-my-castings__item-link" href="#">More details</a>
            </footer>
          </div>
        </article>
        <article class="b-my-castings__item">
          <img
            class="b-my-castings__item-image"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-castings-item-1.jpg"
            alt="Alt"
          />
          <div class="b-my-castings__item-content">
            <h2 class="b-my-castings__item-title">Nike Men</h2>
            <ul class="b-my-castings__item-info">
              <li class="b-my-castings__item-info-item">Worldwide</li>
              <li class="b-my-castings__item-info-item">August 20, 2021</li>
              <li class="b-my-castings__item-info-item">300</li>
            </ul>
            <footer class="b-my-castings__item-footer">
              <a class="b-my-castings__item-link" href="#">More details</a>
            </footer>
          </div>
        </article>
      </div>
      <div class="b-my-castings__items">
        <article class="b-my-castings__item">
          <img
            class="b-my-castings__item-image"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-castings-item-4.jpg"
            alt="Alt"
          />
          <div class="b-my-castings__item-content">
            <h2 class="b-my-castings__item-title">Lilis Shop</h2>
            <ul class="b-my-castings__item-info">
              <li class="b-my-castings__item-info-item">Worldwide</li>
              <li class="b-my-castings__item-info-item">August 20, 2021</li>
              <li class="b-my-castings__item-info-item">300</li>
            </ul>
            <footer class="b-my-castings__item-footer">
              <a class="b-my-castings__item-link" href="#">More details</a>
            </footer>
          </div>
        </article>
        <article class="b-my-castings__item">
          <img
            class="b-my-castings__item-image"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-castings-item-5.jpg"
            alt="Alt"
          />
          <div class="b-my-castings__item-content">
            <h2 class="b-my-castings__item-title">Supreme Brand</h2>
            <ul class="b-my-castings__item-info">
              <li class="b-my-castings__item-info-item">Worldwide</li>
              <li class="b-my-castings__item-info-item">August 20, 2021</li>
              <li class="b-my-castings__item-info-item">300</li>
            </ul>
            <footer class="b-my-castings__item-footer">
              <a class="b-my-castings__item-link" href="#">More details</a>
            </footer>
          </div>
        </article>
        <article class="b-my-castings__item">
          <img
            class="b-my-castings__item-image"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-castings-item-6.jpg"
            alt="Alt"
          />
          <div class="b-my-castings__item-content">
            <h2 class="b-my-castings__item-title">
              Nike Content Advertising Limited edition 2021
            </h2>
            <ul class="b-my-castings__item-info">
              <li class="b-my-castings__item-info-item">Worldwide</li>
              <li class="b-my-castings__item-info-item">August 20, 2021</li>
              <li class="b-my-castings__item-info-item">300</li>
            </ul>
            <footer class="b-my-castings__item-footer">
              <a class="b-my-castings__item-link" href="#">More details</a>
            </footer>
          </div>
        </article>
        <article class="b-my-castings__item">
          <img
            class="b-my-castings__item-image"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-castings-item-7.jpg"
            alt="Alt"
          />
          <div class="b-my-castings__item-content">
            <h2 class="b-my-castings__item-title">You S21 Shop</h2>
            <ul class="b-my-castings__item-info">
              <li class="b-my-castings__item-info-item">Worldwide</li>
              <li class="b-my-castings__item-info-item">August 20, 2021</li>
              <li class="b-my-castings__item-info-item">300</li>
            </ul>
            <footer class="b-my-castings__item-footer">
              <a class="b-my-castings__item-link" href="#">More details</a>
            </footer>
          </div>
        </article>
        <article class="b-my-castings__item">
          <img
            class="b-my-castings__item-image"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-castings-item-8.jpg"
            alt="Alt"
          />
          <div class="b-my-castings__item-content">
            <h2 class="b-my-castings__item-title">Nike men</h2>
            <ul class="b-my-castings__item-info">
              <li class="b-my-castings__item-info-item">Worldwide</li>
              <li class="b-my-castings__item-info-item">August 20, 2021</li>
              <li class="b-my-castings__item-info-item">300</li>
            </ul>
            <footer class="b-my-castings__item-footer">
              <a class="b-my-castings__item-link" href="#">More details</a>
            </footer>
          </div>
        </article>
      </div>
      <div class="b-my-castings__items">
        <article class="b-my-castings__item">
          <img
            class="b-my-castings__item-image"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-castings-item-7.jpg"
            alt="Alt"
          />
          <div class="b-my-castings__item-content">
            <h2 class="b-my-castings__item-title">You S21 Shop</h2>
            <ul class="b-my-castings__item-info">
              <li class="b-my-castings__item-info-item">Worldwide</li>
              <li class="b-my-castings__item-info-item">August 20, 2021</li>
              <li class="b-my-castings__item-info-item">300</li>
            </ul>
            <footer class="b-my-castings__item-footer">
              <a class="b-my-castings__item-link" href="#">More details</a>
            </footer>
          </div>
        </article>
        <article class="b-my-castings__item">
          <img
            class="b-my-castings__item-image"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-castings-item-8.jpg"
            alt="Alt"
          />
          <div class="b-my-castings__item-content">
            <h2 class="b-my-castings__item-title">Nike men</h2>
            <ul class="b-my-castings__item-info">
              <li class="b-my-castings__item-info-item">Worldwide</li>
              <li class="b-my-castings__item-info-item">August 20, 2021</li>
              <li class="b-my-castings__item-info-item">300</li>
            </ul>
            <footer class="b-my-castings__item-footer">
              <a class="b-my-castings__item-link" href="#">More details</a>
            </footer>
          </div>
        </article>
        <article class="b-my-castings__item">
          <img
            class="b-my-castings__item-image"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-castings-item-1.jpg"
            alt="Alt"
          />
          <div class="b-my-castings__item-content">
            <h2 class="b-my-castings__item-title">Nike Men</h2>
            <ul class="b-my-castings__item-info">
              <li class="b-my-castings__item-info-item">Worldwide</li>
              <li class="b-my-castings__item-info-item">August 20, 2021</li>
              <li class="b-my-castings__item-info-item">300</li>
            </ul>
            <footer class="b-my-castings__item-footer">
              <a class="b-my-castings__item-link" href="#">More details</a>
            </footer>
          </div>
        </article>
      </div>
    </div>

    <div class="b-castings-find">
      <form
        class="
          form
          my-castings-form
          b-my-castings__form
          b-castings-find__form
        "
        action="/"
        method="POST"
      >
        <button class="b-my-castings__form-back" type="button">back</button>
        <div class="my-castings-form__item my-castings-form__looking">
          <span
            class="
              my-castings-form__item-title my-castings-form__looking-title
            "
            >I'm looking for</span
          >
          <div class="my-castings-form__types">
            <label class="my-castings-form__type">
              Fitting Model
              <input
                class="my-castings-form__type-input"
                type="radio"
                name="type"
                value="fitting_model"
                checked
              />
              <span class="my-castings-form__type-focus"></span>
            </label>
            <label class="my-castings-form__type">
              Photo Model
              <input
                class="my-castings-form__type-input"
                type="radio"
                name="type"
                value="photo_model"
              />
              <span class="my-castings-form__type-focus"></span>
            </label>
            <label class="my-castings-form__type">
              Creator
              <input
                class="my-castings-form__type-input"
                type="radio"
                name="type"
                value="creator"
              />
              <span class="my-castings-form__type-focus"></span>
            </label>
            <label class="my-castings-form__type">
              Not matter
              <input
                class="my-castings-form__type-input"
                type="radio"
                name="type"
                value="not_matter"
              />
              <span class="my-castings-form__type-focus"></span>
            </label>
          </div>
        </div>
        <div class="my-castings-form__item my-castings-form__located">
          <span class="my-castings-form__item-title">Located</span>
          <div class="my-castings-form__located-wrapper">
            <label class="form__label my-castings-form__label">
              Country
              <input
                class="form__input"
                type="text"
                name="country"
                placeholder="Enter a country"
              />
            </label>
            <label class="form__label my-castings-form__label">
              City
              <input
                class="form__input"
                type="text"
                name="city"
                placeholder="Enter a city"
              />
            </label>
          </div>
        </div>
        <div class="my-castings-form__item">
          <span class="my-castings-form__item-title"
            >What should be done?</span
          >
          <input
            class="form__input my-castings-form__input"
            type="text"
            name="task"
            placeholder="Briefly describe the task"
          />
        </div>
        <div class="my-castings-form__item my-castings-form__features">
          <div class="my-castings-form__feature">
            <span class="my-castings-form__feature-title">Age</span>
            <input
              class="my-castings-form__feature-input"
              type="text"
              name="age"
              placeholder="Enter need age"
            />
          </div>
          <div class="my-castings-form__feature">
            <span class="my-castings-form__feature-title">Gender</span>
            <div class="my-castings-form__feature-gender">
              <label
                class="form__radio my-castings-form__feature-gender-radio"
              >
                <input
                  class="form__radio-input"
                  type="radio"
                  name="gender"
                  value="female"
                />
                <span class="form__radio-circle"></span>
                Famale
              </label>
              <label
                class="form__radio my-castings-form__feature-gender-radio"
              >
                <input
                  class="form__radio-input"
                  type="radio"
                  name="gender"
                  value="male"
                />
                <span class="form__radio-circle"></span>
                Male
              </label>
            </div>
          </div>
          <div class="my-castings-form__feature">
            <span class="my-castings-form__feature-title">Height</span>
            <input
              class="my-castings-form__feature-input"
              type="text"
              name="height"
              placeholder="enter need height"
            />
          </div>
          <div class="my-castings-form__feature">
            <span class="my-castings-form__feature-title">Experience</span>
            <input
              class="my-castings-form__feature-input"
              type="text"
              name="experience"
              placeholder="number of years"
            />
          </div>
        </div>
        <div class="my-castings-form__item my-castings-form__details">
          <span class="my-castings-form__item-title"
            >Describe the details of the task</span
          >
          <textarea
            class="form__textarea my-castings-form__details-textarea"
            name="details_task"
            placeholder="Write your wishes and details so that the performers would better appreciate your task"
          ></textarea>
        </div>
        <div class="my-castings-form__item my-castings-form__pay">
          <div class="my-castings-form__pay-header">
            <span class="my-castings-form__item-title">Budget</span>
            <span class="my-castings-form__item-title">Payment method</span>
          </div>
          <div class="my-castings-form__pay-wrapper">
            <span class="my-castings-form__item-title">Budget</span>
            <div class="my-castings-form__budget">
              <label class="form__label my-castings-form__budget-label">
                <span class="my-castings-form__budget-label-text">
                  How much are you willing to pay?
                </span>
                <input
                  class="form__input my-castings-form__budget-input"
                  type="text"
                  name="budget"
                  placeholder="1000$"
                />
              </label>
              <label class="form__label my-castings-form__budget-label">
                <span class="my-castings-form__budget-label-text">
                  If there is a bonus, indicate its amount
                </span>
                <input
                  class="form__input my-castings-form__budget-input"
                  type="text"
                  name="bonus"
                  placeholder="200$"
                />
              </label>
            </div>

            <span class="my-castings-form__item-title">Payment method</span>
            <div class="my-castings-form__payment">
              <p class="my-castings-form__payment-text">
                Select a payment method
              </p>
              <div class="my-castings-form__payment-wrapper">
                <label
                  class="
                    form__radio
                    my-castings-form__payment-radio
                    my-castings-form__payment-radio--card
                  "
                >
                  Credit card
                  <input
                    class="form__radio-input"
                    type="radio"
                    name="method"
                    value="credit"
                  />
                  <span class="form__radio-circle"></span>
                </label>
                <label
                  class="
                    form__radio
                    my-castings-form__payment-radio
                    my-castings-form__payment-radio--paypal
                  "
                >
                  Paypal
                  <input
                    class="form__radio-input"
                    type="radio"
                    name="method"
                    value="paypal"
                  />
                  <span class="form__radio-circle"></span>
                </label>
                <label
                  class="
                    form__radio
                    my-castings-form__payment-radio
                    my-castings-form__payment-radio--admon
                  "
                >
                  ADMON wallets
                  <input
                    class="form__radio-input"
                    type="radio"
                    name="method"
                    value="admon"
                  />
                  <span class="form__radio-circle"></span>
                </label>
                <button
                  class="
                    my-castings-form__payment-add
                    b-castings-find__payment-add
                  "
                  type="button"
                >
                  Добавть карту
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="my-castings-form__wrapper-footer">
          <div class="my-castings-form__item my-castings-form__photos">
            <div class="form__photo my-castings-form__photo">
              <label
                for="my_photo_1"
                class="my-castings-form__photo-label-image"
              >
                <img
                  class="form__photo-image"
                  src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                  alt="My photo"
                />
              </label>
              <label class="form__photo-label">
                <input
                  id="my_photo_1"
                  class="form__photo-input"
                  type="file"
                  name="my_photo_1"
                />
                <span class="form__photo-text form__photo-text--hide"
                  >Add photo</span
                >
              </label>
            </div>
            <div class="form__photo my-castings-form__photo">
              <label
                for="my_photo_2"
                class="my-castings-form__photo-label-image"
              >
                <img
                  class="form__photo-image"
                  src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                  alt="My photo"
                />
              </label>
              <label class="form__photo-label">
                <input
                  id="my_photo_2"
                  class="form__photo-input"
                  type="file"
                  name="my_photo_2"
                />
                <span class="form__photo-text form__photo-text--hide"
                  >Add photo</span
                >
              </label>
            </div>
            <div class="form__photo my-castings-form__photo">
              <label
                for="my_photo_3"
                class="my-castings-form__photo-label-image"
              >
                <img
                  class="form__photo-image"
                  src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                  alt="My photo"
                />
              </label>
              <label class="form__photo-label">
                <input
                  id="my_photo_3"
                  class="form__photo-input"
                  type="file"
                  name="my_photo_3"
                />
                <span class="form__photo-text form__photo-text--hide"
                  >Add photo</span
                >
              </label>
            </div>
            <div class="form__photo my-castings-form__photo">
              <label
                for="my_photo_4"
                class="my-castings-form__photo-label-image"
              >
                <img
                  class="form__photo-image"
                  src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                  alt="My photo"
                />
              </label>
              <label class="form__photo-label">
                <input
                  id="my_photo_4"
                  class="form__photo-input"
                  type="file"
                  name="my_photo_4"
                />
                <span class="form__photo-text form__photo-text--hide"
                  >Add photo</span
                >
              </label>
            </div>
          </div>
          <div class="my-castings-form__footer">
            <div class="my-castings-form__job">
              <span class="my-castings-form__job-title">Job type</span>
              <div class="my-castings-form__job-labels">
                <label class="form__radio my-castings-form__job-radio">
                  <input
                    class="form__radio-input"
                    type="radio"
                    name="job"
                    value="online"
                  />
                  <span class="form__radio-circle"></span>
                  Online
                </label>
                <label class="form__radio my-castings-form__job-radio">
                  <input
                    class="form__radio-input"
                    type="radio"
                    name="job"
                    value="ofline"
                    checked
                  />
                  <span class="form__radio-circle"></span>
                  Ofline
                </label>
              </div>
            </div>
            <p class="my-castings-form__check-data">
              Check the entered data before publishing
            </p>
            <button
              class="button button--light-blue my-castings-form__submit"
              type="submit"
            >
              Find a casting
            </button>
          </div>
        </div>
      </form>

      <div class="b-bank-account b-castings-find__bank-account">
        <button
          class="b-castings-find__bank-account-close"
          aria-label="Close"
        ></button>
        <div class="p-profile__body-header">
          <span class="b-castings-find__bank-account-title"
            >Bank account</span
          >
        </div>
        <form
          class="
            form form-settings
            b-bank-account__form
            b-castings-find__bank-account-form
          "
          action="/"
          method="POST"
        >
          <div class="form-settings__fieldset">
            <div
              class="form-settings__wrapper b-bank-account__form-wrapper"
            >
              <div class="form-settings__label">
                Credit card
                <div class="b-bank-account__form-cards">
                  <div class="b-bank-account__form-card">
                    <div class="b-bank-account__form-card-header">
                      <span class="b-bank-account__form-card-balance"
                        >Current balance</span
                      >
                      <span class="b-bank-account__form-card-amount"
                        >10 000$</span
                      >
                    </div>
                    <div class="b-bank-account__form-card-footer">
                      <span class="b-bank-account__form-card-name"
                        >Rubi Sparks</span
                      >
                      <span class="b-bank-account__form-card-number"
                        >8898 5757 5535 7787</span
                      >
                      <span class="b-bank-account__form-card-date"
                        >06/23</span
                      >
                    </div>
                  </div>
                  <div class="b-bank-account__form-new-card">
                    <button
                      class="b-bank-account__form-new-card-button"
                      type="button"
                    >
                      Add a new card
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-settings__fieldset">
            <span class="form-settings__legend">Paypal</span>
            <div
              class="form-settings__wrapper b-bank-account__form-wrapper"
            >
              <div
                class="
                  form-settings__label
                  b-bank-account__form-wallet
                  b-bank-account__form-wallet--paypal
                "
              >
                <label for="paypal">Your account</label>
                <div class="b-bank-account__form-wallet-wrapper">
                  <img
                    class="
                      b-bank-account__form-wallet-icon
                      b-bank-account__form-wallet-icon--paypal
                    "
                    src="<?= get_template_directory_uri(); ?>/assets/img/wallet-paypal.svg"
                    alt="PayPal"
                  />
                  <input
                    id="paypal"
                    class="
                      form-settings__input
                      b-bank-account__form-wallet-input
                    "
                    type="text"
                    name="wallet_paypal"
                    placeholder="@PayPal wallet"
                  />
                  <a class="b-bank-account__form-wallet-link" href="#"
                    >Link wallet</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="form-settings__fieldset">
            <span class="form-settings__legend">ADMON wallets</span>
            <div
              class="form-settings__wrapper b-bank-account__form-wrapper"
            >
              <div
                class="
                  form-settings__label
                  b-bank-account__form-wallet
                  b-bank-account__form-wallet--admon
                "
              >
                <label for="admon">Your account</label>
                <div class="b-bank-account__form-wallet-wrapper">
                  <img
                    class="
                      b-bank-account__form-wallet-icon
                      b-bank-account__form-wallet-icon--admon
                    "
                    src="<?= get_template_directory_uri(); ?>/assets/img/wallet-admon.svg"
                    alt="Admon"
                  />
                  <input
                    id="admon"
                    class="
                      form-settings__input
                      b-bank-account__form-wallet-input
                    "
                    type="text"
                    name="wallet_admon"
                    placeholder="0xd7847aff46badbf167072b5c47692429d6839cca"
                  />
                  <a class="b-bank-account__form-wallet-link" href="#"
                    >Wallet address ERC-20</a
                  >
                </div>
              </div>
            </div>
          </div>
          <button
            class="button button--light-blue form-settings__submit"
            type="submit"
          >
            Save settings
          </button>
        </form>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>