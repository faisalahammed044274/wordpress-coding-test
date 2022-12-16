<footer class="site-footer">
  <div class="site-footer__inner container container--narrow">
    <div class="group">
      <div class="site-footer__col-one">
        <h1 class="school-logo-text school-logo-text--alt-color">
          <a href="<?php echo site_url(); ?>"><strong>Fictional</strong> University</a>
        </h1>
        <p><a class="site-footer__link" href="#">555.555.5555</a></p>
      </div>

      <div class="site-footer__col-two-three-group">
        <div class="site-footer__col-two">
          <h3 class="headline headline--small">Explore</h3>
          <nav class="nav-list">
            <ul>
              <li><a href="<?php echo site_url('/about-us'); ?>">About Us</a></li>
              <li><a href="#">Programs</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Campuses</a></li>
            </ul>
          </nav>
        </div>

        <div class="site-footer__col-three">
          <h3 class="headline headline--small">Learn</h3>
          <nav class="nav-list">
            <ul>
              <li><a href="#">Legal</a></li>
              <li><a href="<?php echo site_url('/privacy-policy'); ?>">Privacy</a></li>
              <li><a href="#">Careers</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <div class="site-footer__col-four">
        <h3 class="headline headline--small">Connect With Us</h3>
        <nav>
          <ul class="min-list social-icons-list group">
            <li>
              <a href="#" class="social-color-facebook"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li>
              <a href="#" class="social-color-twitter"><i class="fa-brands fa-twitter"></i></a>
            </li>
            <li>
              <a href="#" class="social-color-youtube"><i class="fa-brands fa-youtube"></i></a>
            </li>
            <li>
              <a href="#" class="social-color-linkedin"><i class="fa-brands fa-linkedin"></i></a>
            </li>
            <li>
              <a href="#" class="social-color-instagram"><i class="fa-brands fa-instagram"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</footer>


<?php wp_footer(); ?>

</body>

</html>