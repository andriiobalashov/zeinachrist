<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Zeinachrist theme
 */

?>

	<footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-2 center">
            <img src="<?php echo get_template_directory_uri()?>/media/logo/logo.png" class="footer-logo" alt="">
          </div>
          <div class="col-lg-5">
            <div>
              <h2 class="footer-h">Zeina Christ & co</h2>
              <div class="footer-nav">
                <a href="#first-section" class="footer-nav-link">À propos</a> <br>
                <a href="#case-stadies" class="footer-nav-link">Case studies</a> <br>
                <a href="#second-section" class="footer-nav-link">Service</a>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div>
              <h2 class="footer-h">Follow zeina</h2>
              <div class="footer-social">
                <a href="https://wa.me/+33780993746" target="_blanc" class="footer-social-link">
                  <img src="<?php echo get_template_directory_uri()?>/media/textures/whatsapp.svg" alt="">
                  <p class="footer-social-p">WhatsApp</p>
                </a>
                <a href="mailto:zeinachrist@gmail.com" class="footer-social-link">
                  <img src="<?php echo get_template_directory_uri()?>/media/textures/mail.svg" alt="">
                  <p class="footer-social-p">Mail</p>
                </a>
                <a href="https://www.instagram.com/zeinachrist/" target="_blanc" class="footer-social-link">
                  <img src="<?php echo get_template_directory_uri()?>/media/textures/intagram.svg" alt="">
                  <p class="footer-social-p">Instagram</p>
                </a>
                <a href="https://www.joinclubhouse.com/@zeinachrist" target="_blanc" class="footer-social-link">
                  <img src="<?php echo get_template_directory_uri()?>/media/textures/cloubhouse.svg" alt="">
                  <p class="footer-social-p">Clubhouse</p>
                </a>
                <a href="https://www.linkedin.com/in/zeinab-memene/" target="_blanc" class="footer-social-link">
                  <img src="<?php echo get_template_directory_uri()?>/media/textures/linkedin.svg" alt="">
                  <p class="footer-social-p">LinkedIn</p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        <a href="" class="footer-bottom-link">Conditions générales de vente</a>
        <a href="" class="footer-bottom-link">Mentions légales</a>
      </div>
    </footer>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        loop: true,
        autoplay: {
        delay: 60000,
      },
      });
    </script>
    <script src="<?php echo get_template_directory_uri()?>/script.js"></script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
