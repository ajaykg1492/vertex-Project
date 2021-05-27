<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	  <meta content="width=device-width, initial-scale=1.0" name="viewport">
	  <title>Vertex</title>
	  <meta content="" name="description">
	  <meta content="" name="keywords">
	  <!-- Google Fonts -->
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	  <!-- Vendor CSS Files -->
	  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/aos/aos.css" rel="stylesheet">
	  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	  <link href="<?php echo get_template_directory_uri(); ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	  <!-- Template Main CSS File -->
	  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open();

$page_ID = get_the_id();

// echo $page_ID;
// exit();
?>
	
<div class="wrap">

    <!-- ======= Banner Section ======= -->
    <section id="banner">
     	<div class="banner-section">
     		<div class="owl-carousel my-carousel">
				<?php
					$arg = array(
					          	'post_type' 	=> 'banner',
								'post_status' 	=> 'publish',
					          	'posts_per_page'=> -1,
					        );
					$wp_query = new WP_Query($arg);
					foreach ($wp_query->posts as $key => $value) { 
				 	$banner_images = get_post_meta($value->ID,'banner_slider_images',true);
				 	foreach ($banner_images as $bkey => $bvalue) {
					?>
					<div class="my-carousel-item">
						<img class="slid_img" src="<?php echo $bvalue; ?>" alt="">
					</div>
				<?php
					} 	
				}
				?>
			</div>
     	</div>
     	<div class="banner-text">
	        <h5> <?php echo get_post_meta($page_ID,'homepage_metabox_welcome_note',true); ?></h5>
        </div>
    </section>
    <!-- End Banner -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
      <div class="container d-flex align-items-center justify-content-between">
        <div class="logo">

          <a href="<?php echo get_home_url() ;?>"><img class="img-fluid" src="<?php echo get_post_meta($page_ID,'homepage_metabox_website_logo',true); ?>"></a>          
        </div>
        <nav id="navbar" class="navbar">
          <ul>
          	<?php
				wp_nav_menu (
					array(
						'theme_location'  => 'primary',
						'items_wrap'      => '%3$s',
						'container'       => false
					)
				);
			?>
            <!-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About</a></li>
            <li><a class="nav-link scrollto" href="#services">Services</a></li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

      </div>
    </header><!-- End Header -->
