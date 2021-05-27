<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

	<!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <?php dynamic_sidebar( 'footer' ); ?>
          </div>
        </div>
        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      </div>
    </footer><!-- End Footer -->
  <!-- Vendor JS Files -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>

	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function(){
      jQuery('.my-carousel').owlCarousel({
        items: 1,
        loop: false,
      rewind: true,
        autoplayHoverPause:true,
        autoplay: true,
        dots: true,
        merge:true,
        nav: true,
        navText: ["<span class='nav-main-slider-btn fa fa-chevron-left'></span>","<span class='nav-main-slider-btn fa fa-chevron-right'></span>"],
        responsive:{
          0:{
              items: 2
          },
          600:{
              items: 1
          }
        }
      });
  })
</script>

<?php wp_footer(); ?>

</body>
</html>

