<?php 
/**
 * Template name: Profile Edit
 */
get_header('profile');
?>
<main class="container p-profile__main">
  <div class="p-profile__menu">
    <?php get_template_part('template-parts/menu-profile'); ?>
  </div>
  <form
    class="form profile-edit-form p-profile-edit__form"
    action="/"
    method="POST"
  >
    <div class="b-profile">
      <div class="b-profile__info profile-edit-form__info">
        <div class="b-profile__info-picture">
          <div class="form__photo">
            <label for="form-photo">
              <img
                class="form__photo-image b-profile__info-avatar"
                src="<?= get_template_directory_uri(); ?>/assets/img/profile-avatar.jpg"
                alt="Profile photo"
              />
            </label>
            <label class="form__photo-label">
              <input
                id="form-photo"
                class="form__photo-input"
                type="file"
                name="photo"
              />
            </label>
          </div>
        </div>
        <div class="b-profile__info-desk">
          <input 
            class="b-profile__info-name profile-edit-form__input profile-edit-form__info-name"
            type="text"
            name="name"
            placeholder="Rubi Sparks"
          />
          <span class="b-profile__info-location profile-edit-form__info-location">Rosario, Argentina</span>
          <div class="b-profile__info-rating">
            <div class="rating" data-rating="4">
              <svg class="rating__item" aria-label="Star">
                <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
              </svg>
              <svg class="rating__item" aria-label="Star">
                <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
              </svg>
              <svg class="rating__item" aria-label="Star">
                <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
              </svg>
              <svg class="rating__item" aria-label="Star">
                <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
              </svg>
              <svg class="rating__item" aria-label="Star">
                <use href="<?= get_template_directory_uri(); ?>/assets/img/sprite.svg#star"></use>
              </svg>
              <div class="rating__value">
                <span class="rating__value-current"></span>/5
              </div>
            </div>
          </div>
          <div class="b-profile__info-bio profile-edit-form__info-bio">
            <span class="b-profile__info-bio-title">BIO</span>
            <textarea
              class="profile-edit-form__info-bio-text profile-edit-form__textarea"
              name="bio"
            >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</textarea>
          </div>
        </div>
        <div class="b-profile__info-social">
          <div class="b-profile__info-social-item b-profile__info-social-item--im">
            975k
          </div>
          <div class="b-profile__info-social-item b-profile__info-social-item--yt">
            730k
          </div>
          <div class="b-profile__info-social-item b-profile__info-social-item--tt">
            1.2m
          </div>
        </div>
      </div>

      <div class="b-profile__item b-profile__information profile-edit-form__information">
        <span class="b-profile__item-title b-profile__information-title">
          Information
        </span>
        <div class="b-profile__information-item">
          <span class="b-profile__information-item-title">Age</span>
          <input
            class="b-profile__information-item-text profile-edit-form__input profile-edit-form__information-input-age
            "
            type="text"
            name="age"
            placeholder="23"
          />
        </div>
        <div class="b-profile__information-item">
          <label for="gender" class="b-profile__information-item-title">Gender</label>
          <div class="form-settings__select profile-edit-form__select">
            <select
              id="gender"
              class="form-settings__standard-select"
              name="gender"
            >
              <option value="male">Male</option>
              <option value="female" selected>Female</option>
            </select>
            <span class="form-settings__select-focus"></span>
          </div>
        </div>
        <div class="b-profile__information-item">
          <span class="b-profile__information-item-title">Height</span>
          <input
            class="
              b-profile__information-item-text
              profile-edit-form__input
              profile-edit-form__information-input-height
            "
            type="text"
            name="height"
            placeholder="170cm"
          />
        </div>
        <div class="b-profile__information-item">
          <span class="b-profile__information-item-title">Experience</span>
          <input
            class="
              b-profile__information-item-text
              profile-edit-form__input
              profile-edit-form__information-input-experience
            "
            type="text"
            name="experience"
            placeholder="3 years"
          />
        </div>
        <div class="b-profile__information-item">
          <span class="b-profile__information-item-title">Recommend</span>
          <input
            class="
              b-profile__information-item-text
              profile-edit-form__input
              profile-edit-form__information-input-recommend
            "
            type="text"
            name="recommend"
            placeholder="14"
          />
        </div>
      </div>

      <div class="b-profile__item b-profile__category profile-edit-form__category">
        <span class="b-profile__item-title b-profile__category-title">Categories</span>

        <div class="b-profile__category-items">
          <div class="b-profile__category-item">Fashion</div>
          <div class="b-profile__category-item">High Fashion</div>
          <div class="b-profile__category-item">Body Parts</div>
          <div class="b-profile__category-item profile-edit-form__category-add">Add new</div>
        </div>

        <div class="b-category-add profile-edit-form__category-add-form">
          <div class="b-category-add__header">
            <span class="b-category-add__title">Categories</span>
            <button
              class="b-category-add__close"
              type="button"
              aria-label="Close"
            ></button>
          </div>
          <div class="b-category-add__wrapper">
            <label class="b-category-add__check">
              <input
                class="b-category-add__check-input"
                type="checkbox"
                name="fashion"
                checked
              />
              <span class="b-category-add__check-box">Fashion</span>
            </label>
            <label class="b-category-add__check">
              <input
                class="b-category-add__check-input"
                type="checkbox"
                name="high-fashion"
                checked
              />
              <span class="b-category-add__check-box">High Fashion</span>
            </label>
            <label class="b-category-add__check">
              <input
                class="b-category-add__check-input"
                type="checkbox"
                name="body-parts"
                checked
              />
              <span class="b-category-add__check-box">Body Parts</span>
            </label>
            <label class="b-category-add__check">
              <input
                class="b-category-add__check-input"
                type="checkbox"
                name="actress"
              />
              <span class="b-category-add__check-box">Аctress</span>
            </label>
          </div>
          <div class="b-category-add__footer">
            <button class="button b-category-add__save" type="button">Save</button>
          </div>
        </div>
      </div>

      <div class="b-profile__item b-profile__category profile-edit-form__category">
        <span class="b-profile__item-title b-profile__category-title">Disciplines</span>

        <div class="b-profile__category-items">
          <div class="b-profile__category-item">Actors</div>
          <div class="b-profile__category-item">Event</div>
          <div class="b-profile__category-item">Model</div>
          <div class="b-profile__category-item">Runway</div>
          <div class="b-profile__category-item">Dancer</div>
          <div class="b-profile__category-item profile-edit-form__category-add">Add new</div>
        </div>

        <div class="b-category-add profile-edit-form__category-add-form">
          <div class="b-category-add__header">
            <span class="b-category-add__title">Disciplines</span>
            <button
              class="b-category-add__close"
              type="button"
              aria-label="Close"
            ></button>
          </div>
          <div class="b-category-add__wrapper">
            <label class="b-category-add__check">
              <input
                class="b-category-add__check-input"
                type="checkbox"
                name="actors"
                checked
              />
              <span class="b-category-add__check-box">Actors</span>
            </label>
            <label class="b-category-add__check">
              <input
                class="b-category-add__check-input"
                type="checkbox"
                name="event"
                checked
              />
              <span class="b-category-add__check-box">Event</span>
            </label>
            <label class="b-category-add__check">
              <input
                class="b-category-add__check-input"
                type="checkbox"
                name="model"
                checked
              />
              <span class="b-category-add__check-box">Model</span>
            </label>
            <label class="b-category-add__check">
              <input
                class="b-category-add__check-input"
                type="checkbox"
                name="runway"
                checked
              />
              <span class="b-category-add__check-box">Runway</span>
            </label>
            <label class="b-category-add__check">
              <input
                class="b-category-add__check-input"
                type="checkbox"
                name="dancer"
                checked
              />
              <span class="b-category-add__check-box">Dancer</span>
            </label>
          </div>
          <div class="b-category-add__footer">
            <button class="button b-category-add__save" type="button">Save</button>
          </div>
        </div>
      </div>

      <div class="b-profile__item b-profile__social profile-edit-form__social">
        <span class="b-profile__item-title">Social networks</span>
        <div class="b-profile__social-items">
          <div class="b-profile__social-item">
            <a
              class="b-profile__social-link b-profile__social-link--im"
              href="#"
              target="_blank"
            >
              @Rubi_Sparks
            </a>
            <div class="b-profile__social-info">
              <div class="b-profile__social-info-item">
                <span class="b-profile__social-info-item-count">750k</span>
                <span class="b-profile__social-info-item-text">Follovers</span>
              </div>
              <div class="b-profile__social-info-item">
                <span class="b-profile__social-info-item-count">155</span>
                <span class="b-profile__social-info-item-text">Posts</span>
              </div>
              <div class="b-profile__social-info-item">
                <span class="b-profile__social-info-item-count">125</span>
                <span class="b-profile__social-info-item-text">Rebury</span>
              </div>
            </div>
          </div>
          <div class="b-profile__social-item">
            <a
              class="b-profile__social-link b-profile__social-link--yt"
              href="#"
              target="_blank"
            >
              @Rubi_Sparks
            </a>
            <div class="b-profile__social-info">
              <div class="b-profile__social-info-item">
                <span class="b-profile__social-info-item-count">437k</span>
                <span class="b-profile__social-info-item-text">Follovers</span>
              </div>
              <div class="b-profile__social-info-item">
                <span class="b-profile__social-info-item-count">95</span>
                <span class="b-profile__social-info-item-text">Posts</span>
              </div>
              <div class="b-profile__social-info-item">
                <span class="b-profile__social-info-item-count">50</span>
                <span class="b-profile__social-info-item-text">Rebury</span>
              </div>
            </div>
          </div>
          <button
            class="b-profile__social-item profile-edit-form__social-add"
            type="button"
          >
            <span>Add new</span>
          </button>
        </div>
        <div class="profile-edit-form__social-form">
          <span class="profile-edit-form__social-form-title">
            Social networks
          </span>
          <button
            class="profile-edit-form__social-form-close"
            type="button"
            aria-label="Close"
          ></button>
          <div class="p-social__form-label">
            <label for="instagram" class="p-social__form-label-text">Instagram</label>
            <div class="p-social__form-label-wrapper">
              <img
                class="p-social__form-label-icon"
                src="<?= get_template_directory_uri(); ?>/assets/img/social-nw-im.svg"
                alt="Instagram"
              />
              <input
                id="instagram"
                class="p-social__form-label-input"
                type="text"
                name="instagram"
                value="Rubi_Sparks"
                placeholder="@username"
              />
            </div>
          </div>
          <div class="p-social__form-label">
            <label for="facebook" class="p-social__form-label-text">Facebook</label>
            <div class="p-social__form-label-wrapper">
              <img
                class="p-social__form-label-icon"
                src="<?= get_template_directory_uri(); ?>/assets/img/social-nw-fb.svg"
                alt="Facebook"
              />
              <input
                id="facebook"
                class="p-social__form-label-input"
                type="url"
                name="facebook"
                placeholder="Facebook link"
              />
            </div>
          </div>
          <div class="p-social__form-label">
            <label for="youTube" class="p-social__form-label-text">YouTube</label>
            <div class="p-social__form-label-wrapper">
              <img
                class="p-social__form-label-icon"
                src="<?= get_template_directory_uri(); ?>/assets/img/social-nw-yt.svg"
                alt="YouTube"
              />
              <input
                id="youTube"
                class="p-social__form-label-input"
                type="text"
                name="youTube"
                value="Rubi_Sparks"
                placeholder="YouTube channel link"
              />
            </div>
          </div>
          <div class="p-social__form-label">
            <label for="tiktok" class="p-social__form-label-text">TikTok</label>
            <div class="p-social__form-label-wrapper">
              <img
                class="p-social__form-label-icon"
                src="<?= get_template_directory_uri(); ?>/assets/img/social-nw-tt.svg"
                alt="TikTok"
              />
              <input
                id="tiktok"
                class="p-social__form-label-input"
                type="text"
                name="tiktok"
                placeholder="@username"
              />
            </div>
          </div>
          <div class="p-social__form-label">
            <label for="website" class="p-social__form-label-text">Link to a personal website</label>
            <div class="p-social__form-label-wrapper">
              <img
                class="p-social__form-label-icon"
                src="<?= get_template_directory_uri(); ?>/assets/img/social-nw-ws.svg"
                alt="Personal website"
              />
              <input
                id="website"
                class="p-social__form-label-input"
                type="url"
                name="website"
                placeholder="Link your website"
              />
            </div>
          </div>
          <button class="button p-social__form-submit" type="button">Add network</button>
        </div>
      </div>

      <button
        class="button button--light-blue profile-edit-form__submit"
        type="submit"
      >
        Save changes
      </button>
    </div>
  </form>

  <div class="p-profile__aside">
    <div class="p-profile__aside-item">
      <h6 class="p-profile__aside-title">
        Verefications
        <span class="p-profile__aside-subtitle">Since 10.12.21</span>
      </h6>
      <div class="profile-verefications">
        <div class="profile-verefications__item profile-verefications__item--verified">
          Identity verified
        </div>
        <div class="profile-verefications__item profile-verefications__item--verified">
          Payment method verified
        </div>
        <div class="profile-verefications__item profile-verefications__item--verified">
          Email address verified
        </div>
        <div class="profile-verefications__item">Linked to instagram</div>
        <div class="profile-verefications__item">Linked to You Tube</div>
        <div class="profile-verefications__item">Linked to Tik Tok</div>
        <a class="button profile-verefications__button" href="<?= home_url('/social'); ?>">Add information</a>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>