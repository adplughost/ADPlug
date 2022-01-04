<?php 
/**
 * Template name: Offer
 */
get_header('profile');
?>
<main class="container">
  <div class="b-offer">
    <div class="b-offer__header">
      <h1 class="b-offer__title">Digital Content Creator</h1>
      <button class="button b-offer__deal" type="button">Offer a deal</button>
      <div class="b-offer__tags">
        <span class="b-offer__tag b-offer__tag--status">Creator</span>
        <span class="b-offer__tag b-offer__tag--location">Worldwide</span>
        <span class="b-offer__tag b-offer__tag--date">August 20, 2021</span>
        <span class="b-offer__tag b-offer__tag--paid">Paid<b>$300</b></span>
      </div>
    </div>
    <div class="b-offer__photos">
      <img class="b-offer__photo" src="<?= get_template_directory_uri(); ?>/assets/img/offer-photo-1.jpg" alt="Alt">
      <img class="b-offer__photo" src="<?= get_template_directory_uri(); ?>/assets/img/offer-photo-2.jpg" alt="Alt">
      <img class="b-offer__photo" src="<?= get_template_directory_uri(); ?>/assets/img/offer-photo-3.jpg" alt="Alt">
    </div>
    <div class="b-offer__info">
      <div class="b-offer__info-item b-offer__info-item--preferences">
        <div class="b-offer__info-item-user">
          <img class="b-offer__info-item-photo" src="<?= get_template_directory_uri(); ?>/assets/img/offer-user-avatar.jpg" alt="Alt">
          <span class="b-offer__info-item-user-name">Studio 21 Shop</span>
          <span class="b-offer__info-item-user-desk">Women’s clothing store</span>
        </div>
        <span class="b-offer__info-item-title">Preferences</span>
        <div class="b-offer__info-item-items b-offer__info-item-items--preferences">
          <div class="b-offer__info-item-item">
            <span class="b-offer__info-item-item-title">Gender</span>
            <p class="b-offer__info-item-item-text">Female</p>
          </div>
          <div class="b-offer__info-item-item">
            <span class="b-offer__info-item-item-title">Height</span>
            <p class="b-offer__info-item-item-text">No matter</p>
          </div>
          <div class="b-offer__info-item-item">
            <span class="b-offer__info-item-item-title">Age</span>
            <p class="b-offer__info-item-item-text">18 to 40</p>
          </div>
          <div class="b-offer__info-item-item">
            <span class="b-offer__info-item-item-title">Experience</span>
            <p class="b-offer__info-item-item-text">3 years</p>
          </div>
        </div>
      </div>
      <div class="b-offer__info-item">
        <span class="b-offer__info-item-title">Payment</span>
        <div class="b-offer__info-item-items">
          <div class="b-offer__info-item-item">
            <span class="b-offer__info-item-item-title">Paid</span>
            <p class="b-offer__info-item-item-text">$300 + $140 weekly bonus</p>
          </div>
          <div class="b-offer__info-item-item">
            <span class="b-offer__info-item-item-title">Shoot or project location</span>
            <p class="b-offer__info-item-item-text">United Arab Emirates</p>
          </div>
          <div class="b-offer__info-item-item">
            <span class="b-offer__info-item-item-title">Job type</span>
            <p class="b-offer__info-item-item-text">Online</p>
          </div>
        </div>
      </div>
      <div class="b-offer__info-item">
        <span class="b-offer__info-item-title">About the client</span>
        <div class="b-offer__info-item-items">
          <div class="b-offer__info-item-item">
            <span class="b-offer__info-item-item-title">Profile</span>
            <p class="b-offer__info-item-item-text">Member since Feb 16, 2021</p>
          </div>
          <div class="b-offer__info-item-item">
            <span class="b-offer__info-item-item-title">Country</span>
            <p class="b-offer__info-item-item-text">United Arab Emirates</p>
          </div>
          <div class="b-offer__info-item-item">
            <span class="b-offer__info-item-item-title">Time zone</span>
            <p class="b-offer__info-item-item-text">1:03 am</p>
          </div>
        </div>
      </div>
    </div>
    <div class="b-offer__requirements">
      <span class="b-offer__requirements-title">Requirements</span>
      <div class="b-offer__requirements-text">
        <p>
          Production company is looking for models and unique talents that would love to live to stream and make digital content for brands.
        </p>
        <p>
          Having worked across the spectrum of feature films, music videos, national campaigns, personalities, podcasts, magazines, life-style brands & businesses, the production company strives to strengthen, cultivate, and market each of their diverse clients to their particular audience.
        </p>
      </div>
      <button class="button b-offer__deal b-offer__requirements-button" type="button">Offer a deal</button>
    </div>
  </div>
</main>
<?php get_footer(); ?>