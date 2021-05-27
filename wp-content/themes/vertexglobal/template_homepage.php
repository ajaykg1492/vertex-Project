<?php 

/* Template Name: Home Page */

get_header(); 
$page_ID = get_the_id();
?>
	<main id="main">
      <!-- ======= About Section ======= -->
      <section id="about" class="about">
        <div class="container">
          <?php
          $aboutarg = array(
                      'post_type'     => 'about_us',
                      'post_status'   => 'publish',
                      'posts_per_page'=> 1,
                  );
          $about_wp_query = new WP_Query($aboutarg);
          $about_us_ID = $about_wp_query->posts[0]->ID;
          ?>
          <div class="row">
            <div style="background-image: url(<?php echo get_post_meta($about_us_ID,'about_us_images',true); ?>)" data-aos="fade-right" class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start"></div>
            <div class="col-xl-7 pt-4 pt-lg-0 d-flex align-items-stretch">
              <div class="content d-flex flex-column justify-content-center" data-aos="fade-left">
                <h3><?php echo get_the_title($about_us_ID); ?></h3>
                <p><?php echo get_post_field('post_content', $about_us_ID); ?></p>
                <div class="row mt-20">
                 <h3><?php echo get_post_meta($about_us_ID,'about_us_strength_title',true); ?></h3>
                </div>
                <div class="row">
                  <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <i class="bx bx-receipt"></i>
                    <h4><?php echo get_post_meta($about_us_ID,'about_us_data_a',true); ?></h4>
                    <p><?php echo get_post_meta($about_us_ID,'about_us_data_a_head',true); ?></p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <i class="bx bx-cube-alt"></i>
                    <h4><?php echo get_post_meta($about_us_ID,'about_us_data_b',true); ?></h4>
                    <p><?php echo get_post_meta($about_us_ID,'about_us_data_b_head',true); ?></p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <i class="bx bx-images"></i>
                    <h4><?php echo get_post_meta($about_us_ID,'about_us_data_c',true); ?></h4>
                    <p><?php echo get_post_meta($about_us_ID,'about_us_data_c_head',true); ?></p>
                  </div>
                  <div class="col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="400">
                    <i class="bx bx-shield"></i>
                    <h4><?php echo get_post_meta($about_us_ID,'about_us_data_d',true); ?></h4>
                    <p><?php echo get_post_meta($about_us_ID,'about_us_data_d_head',true); ?></p>
                    
                  </div>
                </div>
              </div><!-- End .content-->
            </div>
          </div>

        </div>
      </section><!-- End About Section -->

      
      <!-- ======= Services Section ======= -->
      <section id="services" class="services">
        <div class="container">
          <?php
          $services = array(
                      'post_type'     => 'services',
                      'post_status'   => 'publish',
                      'posts_per_page'=> 1,
                  );
          $services_query = new WP_Query($services);
          $services_ID = $services_query->posts[0]->ID;
          ?>
          <div class="section-title" data-aos="fade-down">
            <span><?php echo get_the_title($services_ID); ?></span>
            <h2><?php echo get_the_title($services_ID); ?></h2>
            <!-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> -->
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="bi bi-briefcase" style="color: #0ea5e0;"></i>
                <h4><a href="#"><?php echo get_post_meta($services_ID,'services_services_1',true); ?> -</a></h4>
                <p><?php echo get_post_meta($services_ID,'services_services_1_head',true); ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-card-checklist" style="color: #07cc70;"></i>
                <h4><a href="#"><?php echo get_post_meta($services_ID,'services_services_2',true); ?> -</a></h4>
                <p><?php echo get_post_meta($services_ID,'services_services_2_head',true); ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-bar-chart" style="color: #e40373;"></i>
                <h4><a href="#"><?php echo get_post_meta($services_ID,'services_services_3',true); ?> -</a></h4>
                <p><?php echo get_post_meta($services_ID,'services_services_3_head',true); ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-binoculars" style="color: #f0b103;"></i>
                <h4><a href="#"><?php echo get_post_meta($services_ID,'services_services_4',true); ?> -</a></h4>
                <p><?php echo get_post_meta($services_ID,'services_services_4_head',true); ?></p>
              </div>
            </div>
             <div class="col-md-12">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="500">
                <i class="bi bi-brightness-high" style="color: #3145fa;"></i>
                <h4><a href="#"><?php echo get_post_meta($services_ID,'services_services_5',true); ?> -</a></h4>
                <p><?php echo get_post_meta($services_ID,'services_services_5_head',true); ?></p>
              </div>
            </div>
          </div>

        </div>
      </section>
      <!-- End Services Section -->






      <!-- ======= client Section ======= -->
      <section id="clients" class="services">
        <div class="container">
          <?php
          $clients = array(
                      'post_type'     => 'clients',
                      'post_status'   => 'publish',
                      'posts_per_page'=> 1,
                  );
          $clients_query = new WP_Query($clients);
          $clients_ID = $clients_query->posts[0]->ID;
          ?>
          <div class="section-title" data-aos="fade-down">
            <span><?php echo get_the_title($clients_ID); ?></span>
            <h2><?php echo get_the_title($clients_ID); ?></h2>
            <!-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> -->
          </div>

          <div class="row">
            <?php 
              $clients_data =  get_post_meta($clients_ID,'clients_clients_details',true); 
              foreach ($clients_data as $key => $value) {
            ?>
            <div class="col-md-6">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="<?php echo $value['clients_icon']; ?>" style="<?php echo $value['clients_color']; ?>"></i>
                <h4><a href="#"></a><?php echo $value['clients_name']; ?></h4>
                <p><?php echo $value['clients_para']; ?></p>
              </div>
            </div>
            <?php
             }
            ?>

          </div>

        </div>
      </section>
      <!-- End Services Section -->



      <!-- ======= Contact Us Section ======= -->
      <section id="contact" class="contact">
        <div class="container">
          <?php dynamic_sidebar( 'contact' ); ?>
        </div>
      </section><!-- End Contact Us Section -->

    </main><!-- End #main -->

	
<?php get_footer(); ?>
