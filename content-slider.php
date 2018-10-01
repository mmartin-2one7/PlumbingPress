<?php 

  $args = array(
    'post_type' => 'slider',
  );
  $query = new WP_Query( $args );

?>

<!-- Carousel Wrapper -->
  <figure class="row no-max"> 

    <!-- Owl Carousel --> 
      <div id="owl-home" class="owl-carousel owl-theme"> 

        <!-- Begin Slider One -->

          <?php if( get_theme_mod( 'slider_one_display' ) == '') { ?>

            <div id="slider-1" class="item">

              <?php if( get_theme_mod( 'slider_image_one') != "" ): ?>

              <img id="slider-image-one" src="<?php echo get_theme_mod( 'slider_image_one' ); ?>">

              <?php endif; ?>    

                <div class="slider-caption">
                  <h4 id="slider-one-title"><?php echo get_theme_mod( 'slider_one_title' ); ?></h4>
                  <hr>
                  <h6 id="slider-one-subtitle"><?php echo get_theme_mod( 'slider_one_subtitle' ); ?></h6>
                  <p id="slider-one-description"><?php echo get_theme_mod( 'slider_one_description' ); ?></p>
                  <a href="<?php echo get_theme_mod( 'slider_one_url' ); ?>" class="button"><?php echo get_theme_mod( 'slider_one_link' ); ?></a>
                </div>

            </div>

          <?php } // end if ?>


        <!-- Begin Slider Two -->

          <?php if( get_theme_mod( 'slider_two_display' ) == '') { ?>

            <div id="slider-2" class="item">

              <?php if( get_theme_mod( 'slider_image_two') != "" ): ?>

                <img id="slider-image-two" src="<?php echo get_theme_mod( 'slider_image_two' ); ?>">

              <?php endif; ?>    

                <div class="slider-caption">
                  <h4 id="slider-two-title"><?php echo get_theme_mod( 'slider_two_title' ); ?></h4>
                  <hr>
                  <h6 id="slider-two-subtitle"><?php echo get_theme_mod( 'slider_two_subtitle' ); ?></h6>
                  <p id="slider-two-description"><?php echo get_theme_mod( 'slider_two_description' ); ?></p>
                    <a href="<?php echo get_theme_mod( 'slider_two_url' ); ?>" class="button"><?php echo get_theme_mod( 'slider_two_link' ); ?></a>
                </div>

            </div>

          <?php } // end if ?>


        <!-- Begin Slider Three -->
                        
          <?php if( get_theme_mod( 'slider_three_display' ) == '') { ?>

            <div id="slider-3" class="item">

                <?php if( get_theme_mod( 'slider_image_three') != "" ): ?>

                  <img id="slider-image-three" src="<?php echo get_theme_mod( 'slider_image_three' ); ?>">

                <?php endif; ?> 

              <div class="slider-caption">
                <h4 id="slider-three-title"><?php echo get_theme_mod( 'slider_three_title' ); ?></h4>
                <hr>
                <h6 id="slider-three-subtitle"><?php echo get_theme_mod( 'slider_three_subtitle' ); ?></h6>
                <p id="slider-three-description"><?php echo get_theme_mod( 'slider_three_description' ); ?></p>
                <a href="<?php echo get_theme_mod( 'slider_three_url' ); ?>" class="button"><?php echo get_theme_mod( 'slider_three_link' ); ?></a>
              </div>

            </div>

          <?php } // end if ?>


      </div> 
    <!-- Owl Carousel -->

  </figure> 
<!-- End Carousel Wrapper -->



