<?php 
/**
 * Template name: Profile View
 */
get_header('profile');
?>
<main class="container p-profile__main">
  <div class="p-profile__menu">
    <?php get_template_part('template-parts/menu-profile'); ?>
  </div>
  <div class="b-profile">
    <div class="b-profile__info p-profile-view__info">
      <div class="b-profile__info-picture">
        <img class="b-profile__info-avatar" src="<?= get_template_directory_uri(); ?>/assets/img/profile-avatar.jpg" alt="Alt" />
        <span class="b-profile__info-status b-profile__info-status--online"></span>
      </div>
      <div class="b-profile__info-desk">
        <span class="b-profile__info-name">Rubi Sparks</span>
        <span class="b-profile__info-location">Rosario, Argentina</span>
        <div class="b-profile__info-rating p-profile-view__info-rating">
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
        <div class="b-profile__info-bio">
          <span class="b-profile__info-bio-title">BIO</span>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
      </div>
      <div class="b-profile__info-social p-profile-view__info-social">
        <div class="b-profile__info-social-item b-profile__info-social-item--im">975k</div>
        <div class="b-profile__info-social-item b-profile__info-social-item--yt">730k</div>
        <div class="b-profile__info-social-item b-profile__info-social-item--tt">1.2m</div>
      </div>
      <div class="p-profile-view__info-tools">
        <button class="p-profile-view__info-tools-item" type="button">Follow</button>
        <button class="p-profile-view__info-tools-item" type="button">Message</button>
        <button class="p-profile-view__info-tools-item" type="button">Favourite</button>
        <button class="p-profile-view__info-tools-item" type="button">Share</button>
      </div>
      <button class="button p-profile-view__info-offer" type="button">Offer casting</button>
    </div>

    <div class="b-profile__item b-profile__albums">
      <span class="b-profile__item-title">My albums</span>
      <a class="b-profile__albums-more" href="#">view all photos</a>
      <div class="b-profile__albums-items">
        <div class="b-profile__albums-item">
          <img class="b-profile__albums-item" src="<?= get_template_directory_uri(); ?>/assets/img/profile-album-1.jpg" alt="Album" />
        </div>
        <div class="b-profile__albums-item">
          <img class="b-profile__albums-item" src="<?= get_template_directory_uri(); ?>/assets/img/profile-album-2.jpg" alt="Album" />
        </div>
        <div class="b-profile__albums-item">
          <img class="b-profile__albums-item" src="<?= get_template_directory_uri(); ?>/assets/img/profile-album-3.jpg" alt="Album" />
        </div>
        <div class="b-profile__albums-item">
          <img class="b-profile__albums-item" src="<?= get_template_directory_uri(); ?>/assets/img/profile-album-4.jpg" alt="Album" />
        </div>
      </div>
    </div>

    <div class="b-profile__item b-profile__information">
      <span class="b-profile__item-title b-profile__information-title">Information</span>
      <div class="b-profile__information-item">
        <span class="b-profile__information-item-title">Age</span>
        <span class="b-profile__information-item-text">23</span>
      </div>
      <div class="b-profile__information-item">
        <span class="b-profile__information-item-title">Gender</span>
        <span class="b-profile__information-item-text">Female</span>
      </div>
      <div class="b-profile__information-item">
        <span class="b-profile__information-item-title">Height</span>
        <span class="b-profile__information-item-text">170cm / 5´7”</span>
      </div>
      <div class="b-profile__information-item">
        <span class="b-profile__information-item-title">Experience</span>
        <span class="b-profile__information-item-text">3 years</span>
      </div>
      <div class="b-profile__information-item">
        <span class="b-profile__information-item-title">Recommend</span>
        <span class="b-profile__information-item-text">14</span>
      </div>
    </div>

    <div class="b-profile__item b-profile__category">
      <span class="b-profile__item-title b-profile__category-title">Categories</span>
      <div class="b-profile__category-items">
        <div class="b-profile__category-item">Fashion</div>
        <div class="b-profile__category-item">High Fashion</div>
        <div class="b-profile__category-item">Body Parts</div>
      </div>
    </div>

    <div class="b-profile__item b-profile__category">
      <span class="b-profile__item-title b-profile__category-title">Disciplines</span>
      <div class="b-profile__category-items">
        <div class="b-profile__category-item">Actors</div>
        <div class="b-profile__category-item">Event</div>
        <div class="b-profile__category-item">Model</div>
        <div class="b-profile__category-item">Runway</div>
        <div class="b-profile__category-item">Dancer</div>
        <div class="b-profile__category-item">Catalog</div>
        <div class="b-profile__category-item">Artistic</div>
        <div class="b-profile__category-item">Actors</div>
        <div class="b-profile__category-item">Event</div>
      </div>
    </div>

    <div class="b-profile__item b-profile__social">
      <span class="b-profile__item-title">Social networks</span>
      <div class="b-profile__social-items">
        <div class="b-profile__social-item">
          <a class="b-profile__social-link b-profile__social-link--im" href="#" target="_blank">@Rubi_Sparks</a>
          <div class="b-profile__social-info">
            <div class="b-profile__social-info-item">
              <span class="b-profile__social-info-item-count">750k</span>
              <span class="b-profile__social-info-item-text"
                  >Follovers</span>
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
          <a class="b-profile__social-link b-profile__social-link--yt" href="#" target="_blank">@Rubi_Sparks</a>
          <div class="b-profile__social-info">
            <div class="b-profile__social-info-item">
              <span class="b-profile__social-info-item-count">437k</span>
              <span class="b-profile__social-info-item-text"
                  >Follovers</span>
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
        <div class="b-profile__social-item">
          <a class="b-profile__social-link b-profile__social-link--tt" href="#" target="_blank">@Rubi Sparks</a>
          <div class="b-profile__social-info">
            <div class="b-profile__social-info-item">
              <span class="b-profile__social-info-item-count">1.3m</span>
              <span class="b-profile__social-info-item-text"
                  >Follovers</span>
            </div>
            <div class="b-profile__social-info-item">
              <span class="b-profile__social-info-item-count">957</span>
              <span class="b-profile__social-info-item-text">Posts</span>
            </div>
            <div class="b-profile__social-info-item">
              <span class="b-profile__social-info-item-count">15</span>
              <span class="b-profile__social-info-item-text">Rebury</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="p-profile__aside">
    <div class="p-profile__aside-item">
      <h6 class="p-profile__aside-title">
        Verefications
        <span class="p-profile__aside-subtitle">Since 10.12.21</span>
      </h6>
      <div class="profile-verefications">
        <div class="
              profile-verefications__item
              profile-verefications__item--verified
            ">
          Identity verified
        </div>
        <div class="
              profile-verefications__item
              profile-verefications__item--verified
            ">
          Payment method verified
        </div>
        <div class="
              profile-verefications__item
              profile-verefications__item--verified
            ">
          Email address verified
        </div>
        <div class="profile-verefications__item">Linked to instagram</div>
        <div class="profile-verefications__item">Linked to You Tube</div>
        <div class="profile-verefications__item">Linked to Tik Tok</div>
      </div>
    </div>
    <div class="p-profile__aside-item">
      <h6 class="p-profile__aside-title">Reviews</h6>
      <div class="profile-reviews">
        <div class="profile-reviews__items">
          <div class="profile-reviews__item">
            <div class="profile-reviews__item-header">
              <img class="profile-reviews__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/reviews-item-1.jpg" alt="Alt" />
              <span class="profile-reviews__item-name">Jose Wagner</span>
              <span class="profile-reviews__item-company">Company</span>
            </div>
            <span class="profile-reviews__item-status"
                >Model for presentation</span>
            <p class="profile-reviews__item-text">
              Guys! You are the best! Everything is fast and clear, everything
              is fine, I’m glad that I found you and stayed with you!
            </p>
            <div class="profile-reviews__item-footer">
              <div class="profile-reviews__item-rating">
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
              <span class="profile-reviews__item-date">03.10.2021</span>
            </div>
          </div>
          <div class="profile-reviews__item">
            <div class="profile-reviews__item-header">
              <img class="profile-reviews__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/reviews-item-2.jpg" alt="Alt" />
              <span class="profile-reviews__item-name">Jose Wagner</span>
              <span class="profile-reviews__item-company">Company</span>
            </div>
            <span class="profile-reviews__item-status"
                >Model for presentation</span>
            <p class="profile-reviews__item-text">
              Guys! You are the best! Everything is fast and clear, everything
              is fine, I’m glad that I found you and stayed with you!
            </p>
            <div class="profile-reviews__item-footer">
              <div class="profile-reviews__item-rating">
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
              <span class="profile-reviews__item-date">03.10.2021</span>
            </div>
          </div>
          <div class="profile-reviews__item">
            <div class="profile-reviews__item-header">
              <img class="profile-reviews__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/reviews-item-3.jpg" alt="Alt" />
              <span class="profile-reviews__item-name">Tom Sawyer</span>
              <span class="profile-reviews__item-company">Company</span>
            </div>
            <span class="profile-reviews__item-status"
                >Model for presentation</span>
            <p class="profile-reviews__item-text">
              Guys! You are the best! Everything is fast and clear, everything
              is fine, I’m glad that I found you and stayed with you!
            </p>
            <div class="profile-reviews__item-footer">
              <div class="profile-reviews__item-rating">
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
              <span class="profile-reviews__item-date">03.10.2021</span>
            </div>
          </div>
        </div>
        <a class="profile-reviews__more" href="/reviews.html">see more reviews</a>
      </div>
    </div>
  </div>

</main>
<?php get_footer(); ?>