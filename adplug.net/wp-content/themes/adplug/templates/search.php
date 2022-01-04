<?php 
/**
 * Template name: Search
 */
get_header('profile');
?>
<main class="container p-search__main">
  <div class="models p-search__models">
    <h1 class="title models__title p-search__title">Models & creators</h1>
    <div class="p-search__models-header">
      <form class="form form-search p-search__models-search" action="/" method="POST">
        <div class="form-search__wrapper">
          <input class="form-search__input" type="search" name="search" placeholder="User name">
          <button class="form-search__submit" type="submit" aria-label="Search"></button>
        </div>
      </form>
      <div class="models__nav p-search__models-nav">
        <button 
          class="button button--white models__nav-item models__nav-item--active" 
          type="button"
        >
          Advertiser
        </button>
        <button class="button button--white models__nav-item" type="button">
          Fitting Model
        </button>
        <button class="button button--white models__nav-item" type="button">
          Photo Model
        </button>
        <button class="button button--white models__nav-item" type="button">
          Creator
        </button>
        <span class="models__nav-gap"></span>
      </div>
    </div>
    <div class="models__items p-search__models-items">
      <a class="models__item p-search__models-item models__item--active" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-1.jpg" alt="Alt" />
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
      <a class="models__item p-search__models-item" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-2.jpg" alt="Alt" />
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
      <a class="models__item p-search__models-item" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-3.jpg" alt="Alt" />
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
      <a class="models__item p-search__models-item" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-4.jpg" alt="Alt" />
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
      <a class="models__item p-search__models-item" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-5.jpg" alt="Alt" />
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
    <div class="models__items p-search__models-items">
      <a class="models__item p-search__models-item models__item--active" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-6.jpg" alt="Alt" />
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
      <a class="models__item p-search__models-item" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-7.jpg" alt="Alt" />
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
      <a class="models__item p-search__models-item" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-8.jpg" alt="Alt" />
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
      <a class="models__item p-search__models-item" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-9.jpg" alt="Alt" />
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
      <a class="models__item p-search__models-item" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-10.jpg" alt="Alt" />
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
    <div class="models__items p-search__models-items">
      <a class="models__item p-search__models-item models__item--active" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-11.jpg" alt="Alt" />
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
      <a class="models__item p-search__models-item" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-12.jpg" alt="Alt" />
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
      <a class="models__item p-search__models-item" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-13.jpg" alt="Alt" />
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
      <a class="models__item p-search__models-item" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-14.jpg" alt="Alt" />
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
      <a class="models__item p-search__models-item" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-15.jpg" alt="Alt" />
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
    <div class="models__items p-search__models-items">
      <a class="models__item p-search__models-item models__item--active" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-13.jpg" alt="Alt" />
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
      <a class="models__item p-search__models-item" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-14.jpg" alt="Alt" />
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
      <a class="models__item p-search__models-item" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-15.jpg" alt="Alt" />
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
      <a class="models__item p-search__models-item" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-16.jpg" alt="Alt" />
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
      <a class="models__item p-search__models-item" href="<?= home_url('/profile-view'); ?>">
        <img class="models__item-image" src="<?= get_template_directory_uri(); ?>/assets/img/models-item-17.jpg" alt="Alt" />
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
  </div>
</main>
<?php get_footer(); ?>