<?php 
/**
 * Template name: Home
 */
get_header();
?>
  <main>
    <div class="promo">
      <div class="container promo__wrapper">
        <h1 class="promo__title" data-san="animate__fadeInUp" data-san-delay="400">
          Connecting creators and small businesses around the
          <span class="promo__title-highlighter">world</span>
        </h1>
        <!-- <img class="promo__image" src="<?= get_template_directory_uri(); ?>/assets/img/promo.png" alt="Ad Plug" /> -->
        <div class="promo__cards">
          <div class="promo__card" data-pos="0">
            <img class="promo__card-image" src="<?= get_template_directory_uri(); ?>/assets/img/promo-card-1.jpg" alt="Annet Smit">
            <div class="promo__card-info">
              <span class="promo__card-name">Annet Smit</span>
              <div class="info-social promo__card-social">
                <span class="info-social__item info-social__item--location">Seul</span>
                <span class="info-social__item info-social__item--insragram">35K</span>
                <span class="info-social__item info-social__item--youtube">19K</span>
                <span class="info-social__item info-social__item--tiktok">13K</span>
              </div>
            </div>
          </div>
          <div class="promo__card" data-pos="-1">
            <img class="promo__card-image" src="<?= get_template_directory_uri(); ?>/assets/img/promo-card-2.jpg" alt="Rockin Tockin">
            <div class="promo__card-info">
              <span class="promo__card-name">Rockin Tockin</span>
              <div class="info-social promo__card-social">
                <span class="info-social__item info-social__item--location">China</span>
                <span class="info-social__item info-social__item--insragram">71K</span>
                <span class="info-social__item info-social__item--youtube">18K</span>
                <span class="info-social__item info-social__item--tiktok">25K</span>
              </div>
            </div>
          </div>
          <div class="promo__card" data-pos="1">
            <img class="promo__card-image" src="<?= get_template_directory_uri(); ?>/assets/img/promo-card-3.jpg" alt="Ruby Sparks">
            <div class="promo__card-info">
              <span class="promo__card-name">Ruby Sparks</span>
              <div class="info-social promo__card-social">
                <span class="info-social__item info-social__item--location">USA</span>
                <span class="info-social__item info-social__item--insragram">91K</span>
                <span class="info-social__item info-social__item--youtube">43K</span>
                <span class="info-social__item info-social__item--tiktok">21K</span>
              </div>
            </div>
          </div>
        </div>
        <div class="promo__text" data-san="animate__fadeInDown" data-san-delay="600">
          <p>
            <b>ADPlug</b> is a plug-in platform that provides interaction
            between influencers and small business products anywhere in the
            world
          </p>
        </div>
        <div class="promo__buttons">
          <a 
            class="button promo__button" 
            href="<?= home_url('/sign-up-as-creator'); ?>" 
            data-san="animate__fadeInUp" 
            data-san-delay="900"
          >
            I'm Influencer
          </a>
          <a 
            class="button button--white promo__button" 
            href="<?= home_url('/sign-up-as-advertiser'); ?>" 
            data-san="animate__fadeInDown" 
            data-san-delay="1200"
          >
            I'm a business
          </a>
        </div>
      </div>
    </div>

    <div class="how-work">
      <div class="container">
        <h2 class="title how-work__title" data-san="animate__fadeInUp">How it works:</h2>
        <div class="how-work__wrapper">
          <div class="how-work__nav">
            <button
              class="how-work__nav-item how-work__nav-item--prev"
              aria-label="Prev"
            ></button>
            <button
              class="how-work__nav-item how-work__nav-item--next"
              aria-label="Next"
            ></button>
          </div>
          <div class="how-work__items">
            <div class="how-work__item" data-san="animate__fadeInDown" data-san-delay="300">
              <span class="how-work__number">1</span>
              <div class="how-work__icon how-work__icon--account"></div>
              <p class="how-work__text">
                Create account and upload your portfolio
              </p>
            </div>
            <div class="how-work__item" data-san="animate__fadeInUp" data-san-delay="600">
              <span class="how-work__number">2</span>
              <div class="how-work__icon how-work__icon--casting"></div>
              <p class="how-work__text">
                Сreates casting and looks at the portfolio of creators
              </p>
            </div>
            <div class="how-work__item" data-san="animate__fadeInDown" data-san-delay="300">
              <span class="how-work__number">3</span>
              <div class="how-work__icon how-work__icon--access"></div>
              <p class="how-work__text">
                Creators - get access to thousands of castings
              </p>
            </div>
            <div class="how-work__item" data-san="animate__fadeInUp">
              <span class="how-work__number">4</span>
              <div class="how-work__icon how-work__icon--chat"></div>
              <p class="how-work__text">
                Discuss the details of the project and the fee in an online chat
              </p>
            </div>
            <div class="how-work__item" data-san="animate__fadeInDown">
              <span class="how-work__number">5</span>
              <div class="how-work__icon how-work__icon--contract"></div>
              <p class="how-work__text">
                The fee is deposited until the work is completed by a smart contract
              </p>
            </div>
            <div class="how-work__item" data-san="animate__fadeInUp">
              <span class="how-work__number">6</span>
              <div class="how-work__icon how-work__icon--payment"></div>
              <p class="how-work__text">
                When the work is completed the payment is transferred to the contractor
              </p>
            </div>
            <div class="how-work__item" data-san="animate__fadeInDown">
              <span class="how-work__number">7</span>
              <div class="how-work__icon how-work__icon--feedback"></div>
              <p class="how-work__text">
                Get the product and leave feedback about the cooperation
              </p>
            </div>
            <div class="how-work__item" data-san="animate__fadeInUp">
              <span class="how-work__number">8</span>
              <div class="how-work__icon how-work__icon--project"></div>
              <p class="how-work__text">
                Create new creative projects with AdPlug!
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="p-home__partners">
      <?php get_template_part('template-parts/partners'); ?>
    </div>

    <div class="brands">
      <div class="container">
        <h2 class="title brands__title" data-san="animate__fadeInUp">Popular brands</h2>
        <p class="brands__subtitle" data-san="animate__fadeInDown" data-san-delay="300">
          Join the community of professionals
        </p>
        <div class="brands__items">
          <a 
            class="brands__item" 
            href="<?= home_url('/profile-brand-view') ?>" 
            data-san="animate__fadeInLeft" 
            data-san-delay="100"
          >
            <img
              class="brands__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/brands-item-1.jpg"
              alt="Alt"
            />
            <div class="brands__item-info">
              <span class="brands__item-status">I'm a business</span>
              <span class="brands__item-status-info"
                >Women's clothing store</span
              >
              <span class="brands__item-title">Topshop women</span>
            </div>
          </a>
          <a 
            class="brands__item" 
            href="<?= home_url('/profile-brand-view') ?>" 
            data-san="animate__fadeInRight" 
            data-san-delay="400"
          >
            <img
              class="brands__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/brands-item-2.jpg"
              alt="Alt"
            />
            <span class="button button--white brands__item-button"
              >To apply</span
            >
          </a>
          <a 
            class="brands__item" 
            href="<?= home_url('/profile-brand-view') ?>" 
            data-san="animate__fadeInUp" 
            data-san-delay="100"
          >
            <img
              class="brands__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/brands-item-3.jpg"
              alt="Alt"
            />
            <div class="brands__item-info">
              <span class="brands__item-status">I'm a business</span>
              <span class="brands__item-status-info"
                >Men's clothing store</span
              >
              <span class="brands__item-title">Rokky boy</span>
            </div>
          </a>
          <a 
            class="brands__item" 
            href="<?= home_url('/profile-brand-view') ?>" 
            data-san="animate__fadeInDown" 
            data-san-delay="400"
          >
            <img
              class="brands__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/brands-item-4.jpg"
              alt="Alt"
            />
            <div class="brands__item-info">
              <span class="brands__item-status">I'm a business</span>
              <span class="brands__item-status-info"
                >Women's clothing store</span
              >
              <span class="brands__item-title">Ampir</span>
            </div>
          </a>
          <a 
            class="brands__item" 
            href="<?= home_url('/profile-brand-view') ?>" 
            data-san="animate__fadeInUp" 
            data-san-delay="400"
          >
            <img
              class="brands__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/brands-item-5.jpg"
              alt="Alt"
            />
            <div class="brands__item-info">
              <span class="brands__item-status">I'm a business</span>
              <span class="brands__item-status-info"
                >Pet's clothing store</span
              >
              <span class="brands__item-title">Good shop dog</span>
            </div>
          </a>
          <a 
            class="brands__item" 
            href="<?= home_url('/profile-brand-view') ?>" 
            data-san="animate__fadeInDown" 
            data-san-delay="400"
          >
            <img
              class="brands__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/brands-item-6.jpg"
              alt="Alt"
            />
            <div class="brands__item-info">
              <span class="brands__item-status">I'm a business</span>
              <span class="brands__item-status-info"
                >Women's accessories store</span
              >
              <span class="brands__item-title">Studio 21</span>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="models" data-mode="row">
      <div class="container">
        <h2 class="title models__title" data-san="animate__fadeInUp">
          Popular models & creators
        </h2>
        <div class="models__nav">
          <button
            class="
              button button--white
              models__nav-item models__nav-item--active
            "
            type="button" 
            data-san="animate__fadeInDown" 
            data-san-delay="200"
          >
            Advertiser
          </button>
          <button 
            class="button button--white models__nav-item" 
            type="button" 
            data-san="animate__fadeInUp" 
            data-san-delay="400"
          >
            Fitting Model
          </button>
          <button 
            class="button button--white models__nav-item" 
            type="button" 
            data-san="animate__fadeInDown" 
            data-san-delay="600"
          >
            Photo Model
          </button>
          <button 
            class="button button--white models__nav-item" 
            type="button" 
            data-san="animate__fadeInUp" 
            data-san-delay="200"
          >
            Creator
          </button>
          <span class="models__nav-gap"></span>
        </div>
        <div class="models__items">
          <a class="models__item models__item--active" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-1.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">Ruby Sparks</span>
              <span class="models__item-desk">Upload portfolios of models and creators</span>
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location">USA</span>
                <span class="info-social__item info-social__item--insragram">71K</span>
                <span class="info-social__item info-social__item--youtube">18K</span>
                <span class="info-social__item info-social__item--tiktok">4K</span>
              </div>
            </div>
          </a>
          <a class="models__item" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-2.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">John Gordon</span>
              <span class="models__item-desk">Upload portfolios of models and creators</span>
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location">USA</span>
                <span class="info-social__item info-social__item--insragram">71K</span>
                <span class="info-social__item info-social__item--youtube">18K</span>
                <span class="info-social__item info-social__item--tiktok">4K</span>
              </div>
            </div>
          </a>
          <a class="models__item" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-3.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">Ryan Clarke</span>
              <span class="models__item-desk">Upload portfolios of models and creators</span>
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location">USA</span>
                <span class="info-social__item info-social__item--insragram">71K</span>
                <span class="info-social__item info-social__item--youtube">18K</span>
                <span class="info-social__item info-social__item--tiktok">4K</span>
              </div>
            </div>
          </a>
          <a class="models__item" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-4.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">Ruby Sparks</span>
              <span class="models__item-desk">Upload portfolios of models and creators</span>
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location">USA</span>
                <span class="info-social__item info-social__item--insragram">71K</span>
                <span class="info-social__item info-social__item--youtube">18K</span>
                <span class="info-social__item info-social__item--tiktok">4K</span>
              </div>
            </div>
          </a>
          <a class="models__item" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-5.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">Ann Sparks</span>
              <span class="models__item-desk">Upload portfolios of models and creators</span>
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location">USA</span>
                <span class="info-social__item info-social__item--insragram">71K</span>
                <span class="info-social__item info-social__item--youtube">18K</span>
                <span class="info-social__item info-social__item--tiktok">4K</span>
              </div>
            </div>
          </a>
          
        </div>
        <div class="models__items">
          <a class="models__item models__item--active" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-6.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">Ruby Sparks</span>
              <span class="models__item-desk">Upload portfolios of models and creators</span>
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location">USA</span>
                <span class="info-social__item info-social__item--insragram">71K</span>
                <span class="info-social__item info-social__item--youtube">18K</span>
                <span class="info-social__item info-social__item--tiktok">4K</span>
              </div>
            </div>
          </a>
          <a class="models__item" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-7.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">John Gordon</span>
              <span class="models__item-desk"
                >Upload portfolios of models and creators</span
              >
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location"
                  >USA</span
                >
                <span class="info-social__item info-social__item--insragram"
                  >71K</span
                >
                <span class="info-social__item info-social__item--youtube"
                  >18K</span
                >
                <span class="info-social__item info-social__item--tiktok"
                  >4K</span
                >
              </div>
            </div>
          </a>
          <a class="models__item" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-8.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">Ryan Clarke</span>
              <span class="models__item-desk"
                >Upload portfolios of models and creators</span
              >
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location"
                  >USA</span
                >
                <span class="info-social__item info-social__item--insragram"
                  >71K</span
                >
                <span class="info-social__item info-social__item--youtube"
                  >18K</span
                >
                <span class="info-social__item info-social__item--tiktok"
                  >4K</span
                >
              </div>
            </div>
          </a>
          <a class="models__item" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-9.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">Ruby Sparks</span>
              <span class="models__item-desk"
                >Upload portfolios of models and creators</span
              >
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location"
                  >USA</span
                >
                <span class="info-social__item info-social__item--insragram"
                  >71K</span
                >
                <span class="info-social__item info-social__item--youtube"
                  >18K</span
                >
                <span class="info-social__item info-social__item--tiktok"
                  >4K</span
                >
              </div>
            </div>
          </a>
          <a class="models__item" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-10.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">Ann Sparks</span>
              <span class="models__item-desk"
                >Upload portfolios of models and creators</span
              >
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location"
                  >USA</span
                >
                <span class="info-social__item info-social__item--insragram"
                  >71K</span
                >
                <span class="info-social__item info-social__item--youtube"
                  >18K</span
                >
                <span class="info-social__item info-social__item--tiktok"
                  >4K</span
                >
              </div>
            </div>
          </a>
          
        </div>
        <div class="models__items">
          <a class="models__item models__item--active" href="#">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-11.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">Ruby Sparks</span>
              <span class="models__item-desk"
                >Upload portfolios of models and creators</span
              >
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location"
                  >USA</span
                >
                <span class="info-social__item info-social__item--insragram"
                  >71K</span
                >
                <span class="info-social__item info-social__item--youtube"
                  >18K</span
                >
                <span class="info-social__item info-social__item--tiktok"
                  >4K</span
                >
              </div>
            </div>
          </a>
          <a class="models__item" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-12.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">John Gordon</span>
              <span class="models__item-desk"
                >Upload portfolios of models and creators</span
              >
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location"
                  >USA</span
                >
                <span class="info-social__item info-social__item--insragram"
                  >71K</span
                >
                <span class="info-social__item info-social__item--youtube"
                  >18K</span
                >
                <span class="info-social__item info-social__item--tiktok"
                  >4K</span
                >
              </div>
            </div>
          </a>
          <a class="models__item" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-13.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">Ryan Clarke</span>
              <span class="models__item-desk"
                >Upload portfolios of models and creators</span
              >
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location"
                  >USA</span
                >
                <span class="info-social__item info-social__item--insragram"
                  >71K</span
                >
                <span class="info-social__item info-social__item--youtube"
                  >18K</span
                >
                <span class="info-social__item info-social__item--tiktok"
                  >4K</span
                >
              </div>
            </div>
          </a>
          <a class="models__item" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-14.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">Ruby Sparks</span>
              <span class="models__item-desk"
                >Upload portfolios of models and creators</span
              >
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location"
                  >USA</span
                >
                <span class="info-social__item info-social__item--insragram"
                  >71K</span
                >
                <span class="info-social__item info-social__item--youtube"
                  >18K</span
                >
                <span class="info-social__item info-social__item--tiktok"
                  >4K</span
                >
              </div>
            </div>
          </a>
          <a class="models__item" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-15.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">Ann Sparks</span>
              <span class="models__item-desk"
                >Upload portfolios of models and creators</span
              >
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location"
                  >USA</span
                >
                <span class="info-social__item info-social__item--insragram"
                  >71K</span
                >
                <span class="info-social__item info-social__item--youtube"
                  >18K</span
                >
                <span class="info-social__item info-social__item--tiktok"
                  >4K</span
                >
              </div>
            </div>
          </a>
          
        </div>
        <div class="models__items">
          <a class="models__item models__item--active" href="#">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-13.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">Ruby Sparks</span>
              <span class="models__item-desk"
                >Upload portfolios of models and creators</span
              >
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location"
                  >USA</span
                >
                <span class="info-social__item info-social__item--insragram"
                  >71K</span
                >
                <span class="info-social__item info-social__item--youtube"
                  >18K</span
                >
                <span class="info-social__item info-social__item--tiktok"
                  >4K</span
                >
              </div>
            </div>
          </a>
          <a class="models__item" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-14.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">John Gordon</span>
              <span class="models__item-desk"
                >Upload portfolios of models and creators</span
              >
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location"
                  >USA</span
                >
                <span class="info-social__item info-social__item--insragram"
                  >71K</span
                >
                <span class="info-social__item info-social__item--youtube"
                  >18K</span
                >
                <span class="info-social__item info-social__item--tiktok"
                  >4K</span
                >
              </div>
            </div>
          </a>
          <a class="models__item" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-15.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">Ryan Clarke</span>
              <span class="models__item-desk"
                >Upload portfolios of models and creators</span
              >
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location"
                  >USA</span
                >
                <span class="info-social__item info-social__item--insragram"
                  >71K</span
                >
                <span class="info-social__item info-social__item--youtube"
                  >18K</span
                >
                <span class="info-social__item info-social__item--tiktok"
                  >4K</span
                >
              </div>
            </div>
          </a>
          <a class="models__item" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-16.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">Ruby Sparks</span>
              <span class="models__item-desk"
                >Upload portfolios of models and creators</span
              >
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location"
                  >USA</span
                >
                <span class="info-social__item info-social__item--insragram"
                  >71K</span
                >
                <span class="info-social__item info-social__item--youtube"
                  >18K</span
                >
                <span class="info-social__item info-social__item--tiktok"
                  >4K</span
                >
              </div>
            </div>
          </a>
          <a class="models__item" href="<?= home_url('/profile-view') ?>">
            <img
              class="models__item-image"
              src="<?= get_template_directory_uri(); ?>/assets/img/models-item-17.jpg"
              alt="Alt"
            />
            <div class="models__item-info">
              <span class="models__item-name">Ann Sparks</span>
              <span class="models__item-desk"
                >Upload portfolios of models and creators</span
              >
              <div class="info-social models__item-social">
                <span class="info-social__item info-social__item--location"
                  >USA</span
                >
                <span class="info-social__item info-social__item--insragram"
                  >71K</span
                >
                <span class="info-social__item info-social__item--youtube"
                  >18K</span
                >
                <span class="info-social__item info-social__item--tiktok"
                  >4K</span
                >
              </div>
            </div>
          </a>
          
        </div>
      </div>
    </div>
    <?php get_template_part('template-parts/stories'); ?>
    <?php get_template_part('template-parts/join-us'); ?>
  </main>
<?php get_footer(); ?>