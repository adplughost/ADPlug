<?php 
/**
 * Template name: Models
 */
get_header();
?>
  <main>
    <div class="p-models__promo">
      <div class="container p-models__promo-container">
        <h1 class="p-models__promo-title" data-san="animate__fadeInDown">
          The easiest way to find your brand's face
        </h1>
        <div class="video p-models__promo-video">
          <video 
            class="video__stream" 
            src="<?= get_template_directory_uri(); ?>/assets/img/models-video.mp4" 
            poster="<?= get_template_directory_uri(); ?>/assets/img/models-video-poster.jpeg" 
            autoplay 
            muted></video>
          <button class="video__play" type="button" aria-label="Play"></button>
        </div>
        <div class="p-models__promo-text" data-san="animate__fadeInUp" data-san-delay="300">
          <p>
            Find a model, photographer or creator with a responsive audience
            for your product!
          </p>
        </div>
        <div class="p-models__promo-links">
          <a 
            class="p-models__promo-link" 
            href="#" 
            data-san="animate__fadeInDown" 
            data-san-delay="500"
          >
            Watch video
          </a>
          <a 
            class="button button--dark-purple p-models__promo-button" 
            href="<?= home_url('/sign-up-as-creator'); ?>" 
            data-san="animate__fadeInUp" 
            data-san-delay="800"
          >
            Join now
          </a>
        </div>
      </div>
    </div>

    <div class="p-models__how-work">
      <div class="container p-models__how-work-wrapper">
        <h2 class="title p-models__how-work-title" data-san="animate__fadeInUp">
          How does It work?
        </h2>
        <div class="p-models__how-work-items">
          <div class="p-models__how-work-item" data-san="animate__fadeInDown">
            <img class="p-models__how-work-item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-how-work-item-1.svg" alt="Register on the platform" />
            <h5 class="p-models__how-work-item-title">
              Register on the platform
            </h5>
            <div class="p-models__how-work-item-text">
              <p>
                Lorem ipsum dolor sit amet into consectetur adipiscing elit,
                sed do eiusmod tempor incid.
              </p>
            </div>
          </div>
          <div class="p-models__how-work-item" data-san="animate__fadeInUp" data-san-delay="200">
            <img class="p-models__how-work-item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-how-work-item-2.svg" alt="Create a request" />
            <h5 class="p-models__how-work-item-title">Create a request</h5>
            <div class="p-models__how-work-item-text">
              <p>
                Lorem ipsum dolor sit amet into consectetur adipiscing elit,
                sed do eiusmod tempor incid.
              </p>
            </div>
          </div>
          <div class="p-models__how-work-item" data-san="animate__fadeInDown">
            <img class="p-models__how-work-item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-how-work-item-3.svg" alt="Select an artist" />
            <h5 class="p-models__how-work-item-title">Select an artist</h5>
            <div class="p-models__how-work-item-text">
              <p>
                Lorem ipsum dolor sit amet into consectetur adipiscing elit,
                sed do eiusmod tempor incid.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="p-models__app">
      <div class="container p-models__app-wrapper">
        <h2 class="title p-models__app-title" data-san="animate__fadeInUp">
          We Designed Perfect App for You
        </h2>
        <div class="p-models__app-text" data-san="animate__fadeIn" data-san-delay="300">
          <p>
            In consequat, quam id sodales hendrerit, eros mi molestie leo an
            lacinia risus neque tristique augue. Proin tempus urna vel congue
            elementum. Vestibulum euismod accumsan.
          </p>
          <ul>
            <li>
              Lorem ipsum dolor sit amet into consectetur adipiscing elit
            </li>
            <li>Lorem ipsum dolor sit amet into consectetur.</li>
            <li>Lorem ipsum dolor sit amet into consectetur adipiscing.</li>
          </ul>
        </div>
        <a 
          class="button button--pink p-models__app-link" 
          href="#" 
          data-san="animate__fadeInDown" 
          data-san-delay="300"
        >
          Learn More
        </a>
      </div>
    </div>

    <div class="p-models__popular">
      <div class="models" data-mode="row">
        <div class="container">
          <h2 class="title models__title" data-san="animate__fadeInUp">
            Popular models & creators
          </h2>
          <div class="models__nav">
            <button 
              class="button button--white models__nav-item models__nav-item--active" 
              type="button" 
              data-san="animate__fadeInDown" data-san-delay="200"
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
            <a class="models__item models__item--active" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-1.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">Ruby Sparks</span>
                <span class="models__item-desk">Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            <a class="models__item" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-2.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">John Gordon</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            <a class="models__item" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-3.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">Ryan Clarke</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            <a class="models__item" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-4.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">Ruby Sparks</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            <a class="models__item" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-5.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">Ann Sparks</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            
          </div>
          <div class="models__items">
            <a class="models__item models__item--active" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-6.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">Ruby Sparks</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            <a class="models__item" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-7.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">John Gordon</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            <a class="models__item" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-8.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">Ryan Clarke</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            <a class="models__item" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-9.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">Ruby Sparks</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            <a class="models__item" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-10.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">Ann Sparks</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            
          </div>
          <div class="models__items">
            <a class="models__item models__item--active" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-11.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">Ruby Sparks</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            <a class="models__item" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-12.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">John Gordon</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            <a class="models__item" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-13.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">Ryan Clarke</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            <a class="models__item" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-14.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">Ruby Sparks</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            <a class="models__item" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-15.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">Ann Sparks</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            
          </div>
          <div class="models__items">
            <a class="models__item models__item--active" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-13.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">Ruby Sparks</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            <a class="models__item" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-14.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">John Gordon</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            <a class="models__item" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-15.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">Ryan Clarke</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            <a class="models__item" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-16.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">Ruby Sparks</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            <a class="models__item" href="<?= home_url('/profile-view'); ?>">
              <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-17.jpg" alt="Alt" />
              <div class="models__item-info">
                <span class="models__item-name">Ann Sparks</span>
                <span class="models__item-desk"
            >Upload portfolios of models and creators</span>
                <div class="info-social models__item-social">
                  <span class="info-social__item info-social__item--location"
              >USA</span>
                  <span class="info-social__item info-social__item--insragram"
              >71K</span>
                  <span class="info-social__item info-social__item--youtube"
              >18K</span>
                  <span class="info-social__item info-social__item--tiktok">4K</span>
                </div>
              </div>
            </a>
            
          </div>
        </div>
      </div>
    </div>

    <div class="p-models__easier">
      <div class="container p-models__easier-wrapper">
        <h2 class="title p-models__easier-title" data-san="animate__fadeInUp">
          Easier than ever!
        </h2>
        <div class="p-models__easier-text" data-san="animate__fadeInDown" data-san-delay="300">
          <p>
            Cras accumsan pretium dignissim. Curabitur a orci lorem. Phasellus
            tempor dolor vel odio efficitur ac sollicitudin.
          </p>
        </div>
        <picture class="p-models__easier-picture">
          <img class="p-models__easier-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-easier.jpg" alt="Easier than ever!" />
        </picture>
        <div class="p-models__easier-items">
          <div class="p-models__easier-item">
            <h5 class="p-models__easier-item-title">
              <img src="<?= get_template_directory_uri(); ?>/assets/img/models-easier-item-1.svg" alt="Open information and ratings" />
              Open information and ratings
            </h5>
            <p class="p-models__easier-item-text">
              Duis vestibulum elit vel neque pharetra vulputate. Quisque Proin
              scelerisque nisi urna. Duis rutrum non risus in imperdiet.
            </p>
          </div>
          <div class="p-models__easier-item">
            <h5 class="p-models__easier-item-title">
              <img src="<?= get_template_directory_uri(); ?>/assets/img/models-easier-item-2.svg" alt="All influencers in one place" />
              All influencers in one place
            </h5>
            <p class="p-models__easier-item-text">
              Duis vestibulum elit vel neque pharetra vulputate. Quisque Proin
              scelerisque nisi urna. Duis rutrum non risus in imperdiet.
            </p>
          </div>
          <div class="p-models__easier-item">
            <h5 class="p-models__easier-item-title">
              <img src="<?= get_template_directory_uri(); ?>/assets/img/models-easier-item-3.svg" alt="Leave the task and wait for suggestions" />
              Leave the task and wait for suggestions
            </h5>
            <p class="p-models__easier-item-text">
              Duis vestibulum elit vel neque pharetra vulputate. Quisque Proin
              scelerisque nisi urna. Duis rutrum non risus in imperdiet.
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="p-models__partners">
      <div class="container">
        <h2 class="title p-models__partners-title" data-san="animate__fadeInUp">
          We are chosen by
        </h2>
      </div>
      <?php get_template_part('template-parts/partners'); ?>
    </div>

    <div class="p-models__stories">
      <?php get_template_part('template-parts/stories'); ?>
    </div>

    <div class="p-models__have-question">
      <div class="have-question">
        <div class="container have-question__wrapper">
          <picture class="have-question__picture" data-san="animate__zoomIn">
            <img class="have-question__image" src="<?= get_template_directory_uri(); ?>/assets/img/have-question.png" alt="Have question?">
          </picture>
          <h2 class="have-question__title" data-san="animate__fadeInDown">
            Have any Question?
          </h2>
          <p class="have-question__text" data-san="animate__fadeInUp" data-san-delay="300">
            Cras accumsan pretium dignissim. Curabitur a orci lorem. Phasellus tempor
            dolor vel odio efficitur ac sollicitudin.How can I install the App?
          </p>
          <div class="have-question__items">
            <div class="have-question__item" data-san="animate__fadeInLeft" data-san-delay="500">
              <h6 class="have-question__item-title">How can I install the App?</h6>
              <p class="have-question__item-text">
                Duis vestibulum elit vel neque pharetra vulputate. Quisque Proin
                scelerisque nisi urna. Duis rutrum non risus in imperdiet.
              </p>
            </div>
            <div class="have-question__item" data-san="animate__fadeInRight" data-san-delay="700">
              <h6 class="have-question__item-title">
                What is the Main Features of this App?
              </h6>
              <p class="have-question__item-text">
                Duis vestibulum elit vel neque pharetra vulputate. Quisque Proin
                scelerisque nisi urna. Duis rutrum non risus in imperdiet.
              </p>
            </div>
            <div class="have-question__item" data-san="animate__fadeInLeft" data-san-delay="900">
              <h6 class="have-question__item-title">Is there any Video Sessions?</h6>
              <p class="have-question__item-text">
                Duis vestibulum elit vel neque pharetra vulputate. Quisque Proin
                scelerisque nisi urna. Duis rutrum non risus in imperdiet.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <?php get_template_part('template-parts/join-us'); ?>
  </main>
<?php get_footer(); ?>