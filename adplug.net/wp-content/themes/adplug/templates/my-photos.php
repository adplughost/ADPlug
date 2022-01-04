<?php 
/**
 * Template name: My Photos
 */
get_header('profile');
?>
<main class="container p-profile__main p-profile__main--col-2">
  <div class="p-profile__menu">
    <?php get_template_part('template-parts/menu-profile'); ?>
  </div>
  <div class="b-add-my-photos">
    <div class="b-albums b-add-my-photos__albums">
      <div class="b-albums__thumbnails">
        <div class="b-albums__thumbnails-header">
          <span class="b-albums__thumbnails-title">My Albums</span>
        </div>
        <div class="b-albums__thumbnails-items">
          <div class="b-albums__item">
            <img
              class="b-albums__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-1.jpg"
              alt="Alt"
            />
            <span class="b-albums__item-title">Your Instagram photo</span>
          </div>
          <div class="b-albums__item">
            <img
              class="b-albums__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-2.jpg"
              alt="Alt"
            />
            <span class="b-albums__item-title">Vogue 2021</span>
          </div>
          <div class="b-albums__item">
            <img
              class="b-albums__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-3.jpg"
              alt="Alt"
            />
            <span class="b-albums__item-title"
              >Photosession for a clothing brand</span
            >
          </div>
          <div class="b-albums__item">
            <img
              class="b-albums__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-4.jpg"
              alt="Alt"
            />
            <span class="b-albums__item-title">Show in Paris catwalk</span>
          </div>
          <div class="b-albums__item">
            <img
              class="b-albums__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-5.jpg"
              alt="Alt"
            />
            <span class="b-albums__item-title">2019 casting</span>
          </div>
        </div>
      </div>

      <div class="b-album" data-fancybox-key="gallery-1">
        <div class="b-album__header">
          <span class="b-album__title">Your Instagram photo</span>
          <button class="b-album__back" type="button">
            back <span>to albums</span>
          </button>
        </div>
        <div class="b-album__images">
          <img
            class="b-album__image"
            data-fancybox="gallery-1"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-1.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-1"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-2.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-1"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-3.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-1"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-4.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-1"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-5.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-1"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-6.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-1"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-7.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-1"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-8.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-1"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-9.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-1"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-10.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-1"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-11.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-1"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-12.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-1"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-13.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-1"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-14.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-1"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-15.jpg"
            alt="Alt"
          />
        </div>
      </div>
      <div class="b-album" data-fancybox-key="gallery-2">
        <div class="b-album__header">
          <span class="b-album__title">Vogue 2021</span>
          <button class="b-album__back" type="button">
            back <span>to albums</span>
          </button>
        </div>
        <div class="b-album__images">
          <img
            class="b-album__image"
            data-fancybox="gallery-2"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-1.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-2"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-2.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-2"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-3.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-2"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-4.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-2"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-5.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-2"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-6.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-2"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-7.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-2"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-8.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-2"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-9.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-2"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-10.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-2"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-11.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-2"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-12.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-2"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-13.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-2"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-14.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-2"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-15.jpg"
            alt="Alt"
          />
        </div>
      </div>
      <div class="b-album" data-fancybox-key="gallery-3">
        <div class="b-album__header">
          <span class="b-album__title"
            >Photosession for a clothing brand</span
          >
          <button class="b-album__back" type="button">
            back <span>to albums</span>
          </button>
        </div>
        <div class="b-album__images">
          <img
            class="b-album__image"
            data-fancybox="gallery-3"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-1.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-3"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-2.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-3"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-3.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-3"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-4.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-3"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-5.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-3"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-6.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-3"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-7.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-3"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-8.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-3"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-9.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-3"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-10.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-3"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-11.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-3"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-12.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-3"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-13.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-3"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-14.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-3"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-15.jpg"
            alt="Alt"
          />
        </div>
      </div>
      <div class="b-album" data-fancybox-key="gallery-4">
        <div class="b-album__header">
          <span class="b-album__title">Show in Paris catwalk</span>
          <button class="b-album__back" type="button">
            back <span>to albums</span>
          </button>
        </div>
        <div class="b-album__images">
          <img
            class="b-album__image"
            data-fancybox="gallery-4"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-1.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-4"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-2.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-4"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-3.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-4"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-4.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-4"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-5.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-4"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-6.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-4"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-7.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-4"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-8.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-4"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-9.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-4"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-10.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-4"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-11.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-4"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-12.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-4"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-13.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-4"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-14.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-4"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-15.jpg"
            alt="Alt"
          />
        </div>
      </div>
      <div class="b-album" data-fancybox-key="gallery-5">
        <div class="b-album__header">
          <span class="b-album__title">2019 casting</span>
          <button class="b-album__back" type="button">
            back <span>to albums</span>
          </button>
        </div>
        <div class="b-album__images">
          <img
            class="b-album__image"
            data-fancybox="gallery-5"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-1.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-5"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-2.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-5"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-3.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-5"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-4.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-5"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-5.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-5"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-6.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-5"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-7.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-5"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-8.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-5"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-9.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-5"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-10.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-5"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-11.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-5"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-12.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-5"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-13.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-5"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-14.jpg"
            alt="Alt"
          />
          <img
            class="b-album__image"
            data-fancybox="gallery-5"
            src="<?= get_template_directory_uri(); ?>/assets/img/my-photos-albums-item-15.jpg"
            alt="Alt"
          />
        </div>
      </div>
    </div>

    <div class="b-add-my-photos__item">
      <span class="b-add-my-photos__title">Add photos to your profile</span>
      <form class="form b-add-my-photos__form" action="/" method="POST">
        <div class="b-add-my-photos__form-photos">
          <div class="form__photo b-add-my-photos__form-photo">
            <label
              for="my_photo_1"
              class="b-add-my-photos__form-label-image"
            >
              <img
                class="form__photo-image"
                src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                alt="My photo"
              />
            </label>
            <label class="form__photo-label b-add-my-photos__form-label">
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
          <div class="form__photo b-add-my-photos__form-photo">
            <label
              for="my_photo_2"
              class="b-add-my-photos__form-label-image"
            >
              <img
                class="form__photo-image"
                src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                alt="My photo"
              />
            </label>
            <label class="form__photo-label b-add-my-photos__form-label">
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
          <div class="form__photo b-add-my-photos__form-photo">
            <label
              for="my_photo_3"
              class="b-add-my-photos__form-label-image"
            >
              <img
                class="form__photo-image"
                src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                alt="My photo"
              />
            </label>
            <label class="form__photo-label b-add-my-photos__form-label">
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
          <div class="form__photo b-add-my-photos__form-photo">
            <label
              for="my_photo_4"
              class="b-add-my-photos__form-label-image"
            >
              <img
                class="form__photo-image"
                src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                alt="My photo"
              />
            </label>
            <label class="form__photo-label b-add-my-photos__form-label">
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
          <div class="form__photo b-add-my-photos__form-photo">
            <label
              for="my_photo_5"
              class="b-add-my-photos__form-label-image"
            >
              <img
                class="form__photo-image"
                src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                alt="My photo"
              />
            </label>
            <label class="form__photo-label b-add-my-photos__form-label">
              <input
                id="my_photo_5"
                class="form__photo-input"
                type="file"
                name="my_photo_5"
              />
              <span class="form__photo-text form__photo-text--hide"
                >Add photo</span
              >
            </label>
          </div>
        </div>
        <div
          class="
            b-add-my-photos__form-photos b-add-my-photos__form-photos--more
          "
        >
          <div class="form__photo b-add-my-photos__form-photo">
            <label
              for="my_photo_6"
              class="b-add-my-photos__form-label-image"
            >
              <img
                class="form__photo-image"
                src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                alt="My photo"
              />
            </label>
            <label class="form__photo-label b-add-my-photos__form-label">
              <input
                id="my_photo_6"
                class="form__photo-input"
                type="file"
                name="my_photo_6"
              />
              <span class="form__photo-text form__photo-text--hide"
                >Add photo</span
              >
            </label>
          </div>
          <div class="form__photo b-add-my-photos__form-photo">
            <label
              for="my_photo_7"
              class="b-add-my-photos__form-label-image"
            >
              <img
                class="form__photo-image"
                src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                alt="My photo"
              />
            </label>
            <label class="form__photo-label b-add-my-photos__form-label">
              <input
                id="my_photo_7"
                class="form__photo-input"
                type="file"
                name="my_photo_7"
              />
              <span class="form__photo-text form__photo-text--hide"
                >Add photo</span
              >
            </label>
          </div>
          <div class="form__photo b-add-my-photos__form-photo">
            <label
              for="my_photo_8"
              class="b-add-my-photos__form-label-image"
            >
              <img
                class="form__photo-image"
                src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                alt="My photo"
              />
            </label>
            <label class="form__photo-label b-add-my-photos__form-label">
              <input
                id="my_photo_8"
                class="form__photo-input"
                type="file"
                name="my_photo_8"
              />
              <span class="form__photo-text form__photo-text--hide"
                >Add photo</span
              >
            </label>
          </div>
          <div class="form__photo b-add-my-photos__form-photo">
            <label
              for="my_photo_9"
              class="b-add-my-photos__form-label-image"
            >
              <img
                class="form__photo-image"
                src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                alt="My photo"
              />
            </label>
            <label class="form__photo-label b-add-my-photos__form-label">
              <input
                id="my_photo_9"
                class="form__photo-input"
                type="file"
                name="my_photo_9"
              />
              <span class="form__photo-text form__photo-text--hide"
                >Add photo</span
              >
            </label>
          </div>
          <div class="form__photo b-add-my-photos__form-photo">
            <label
              for="my_photo_10"
              class="b-add-my-photos__form-label-image"
            >
              <img
                class="form__photo-image"
                src="<?= get_template_directory_uri(); ?>/assets/img/reg-details-portfolio.jpg"
                alt="My photo"
              />
            </label>
            <label class="form__photo-label b-add-my-photos__form-label">
              <input
                id="my_photo_10"
                class="form__photo-input"
                type="file"
                name="my_photo_10"
              />
              <span class="form__photo-text form__photo-text--hide"
                >Add photo</span
              >
            </label>
          </div>
        </div>
        <div class="b-add-my-photos__form-footer">
          <button
            class="button button--white b-add-my-photos__form-more"
            type="button"
          >
            Add more
          </button>
          <button
            class="button button--light-blue b-add-my-photos__form-submit"
            type="submit"
          >
            Save photo
          </button>
        </div>
      </form>
    </div>
    <div class="b-add-my-photos__item">
      <span class="b-add-my-photos__title">Import from instagram</span>
      <form class="form b-add-my-photos__im" action="/" method="POST">
        <label class="b-add-my-photos__im-label">
          <span class="b-add-my-photos__im-label-text"
            >Your Instagram profile</span
          >
          <img
            class="b-add-my-photos__im-icon"
            src="<?= get_template_directory_uri(); ?>/assets/img/social-nw-im.svg"
            alt="Instagram"
          />
          <input
            class="b-add-my-photos__im-input"
            type="text"
            placeholder="@username"
          />
        </label>
        <button
          class="button button--light-blue b-add-my-photos__im-submit"
          type="submit"
        >
          Add a photo
        </button>
      </form>
    </div>
  </div>
</main>
<?php get_footer(); ?>