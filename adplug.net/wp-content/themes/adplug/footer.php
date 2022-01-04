  <footer class="footer">
    <div class="container footer__wrapper">
      <div class="footer__logo">
        <a class="logo" href="<?= home_url(); ?>">
          <img class="logo__image footer__logo-image" src="<?= get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Ad Plug" data-san="animate__fadeInLeft" />
        </a>
        <p class="footer__logo-text" data-san="animate__fadeInUp" data-san-delay="300">
          Platform that connects creators and small businesses around the world
        </p>
      </div>
      <div class="footer__nav">
        <div class="footer__nav-item" data-san="animate__fadeIn" data-san-delay="500">
          <span class="footer__nav-title">Platform</span>
          <a class="footer__nav-link" href="<?= home_url('/models'); ?>">Models & Creators</a>
          <a class="footer__nav-link" href="<?= home_url('/brands'); ?>">Brands & Agencies</a>
        </div>
        <div class="footer__nav-item" data-san="animate__fadeIn" data-san-delay="700">
          <span class="footer__nav-title">Company</span>
          <a class="footer__nav-link" href="<?= home_url('/about-us'); ?>">About us</a>
          <a class="footer__nav-link" href="<?= home_url('/team'); ?>">Team</a>
        </div>
        <div class="footer__nav-item" data-san="animate__fadeIn" data-san-delay="900">
          <span class="footer__nav-title">Resources</span>
          <a class="footer__nav-link" href="<?= home_url('/help'); ?>">Help</a>
          <a class="footer__nav-link" href="<?= home_url('/privacy-policy'); ?>">Support</a>
          <a class="footer__nav-link" href="<?= home_url('/privacy-policy'); ?>">Terms of Use</a>
          <a class="footer__nav-link" href="<?= home_url('/privacy-policy'); ?>">Privacy</a>
          <a class="footer__nav-link" href="<?= home_url('/privacy-policy'); ?>">Licenses</a>
        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer();?>
</body>
</html>