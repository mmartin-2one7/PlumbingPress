<?php
/*  
    Template Name: About Us
*/
?>
<?php get_header(); ?>

<div class="row content-wrapper">

<!-- Page Title Bar -->
  <?php get_template_part('content', 'title-bar'); ?>
<!-- End Page Title Bar -->

  <!-- Primary/Page Content Section-->
    <div class="primary small-12 columns pad"> 

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <p><?php the_content(); ?></p>

        <?php endwhile; else : ?>

    		  <p><?php _e( 'Sorry, no pages found.', 'PlumbingPress' ); ?></p>
    		
    		<?php endif; ?>

    </div> <!-- .primary -->

  <hr>

  <!-- Team/Meet Your Plumber Section -->
    <?php if( get_theme_mod( 'team_about_display' ) == '') { ?>
    
      <section class="team">
        <div class="title-bar">

          <div class="title-bar-header small-8 large-10 columns">
            <h2><?php $obj = get_post_type_object( 'team' );
                echo $obj->labels->singular_name; ?>
              </h2>
            <hr>
            <blockquote class="show-for-medium-up"><q><?php $obj = get_post_type_object( 'team' ); echo $obj->description ?></q></blockquote>
          </div> 

          <div class="title-bar-icon-wrapper small-4 large-2 columns">
            <i class="fi-torsos-all"></i>
          </div>

        </div> <!-- .title-bar -->

        <?php get_template_part('content', 'team'); ?>
     
        <?php } // end if ?> 

      </section> <!-- .team -->


  <!-- Features Section -->
    <?php if( get_theme_mod( 'features_about_display' ) == '') { ?>

    <section class="features">

      <div class="title-bar">

        <div class="title-bar-header small-8 large-10 columns">
            <h2><?php $obj = get_post_type_object( 'features' );
                echo $obj->labels->singular_name; ?></h2>
            <hr>
            <blockquote class="show-for-medium-up">
              <q><?php $obj = get_post_type_object( 'features' ); echo $obj->description ?></q>
            </blockquote>
        </div> 

        <div class="title-bar-icon-wrapper small-4 large-2 columns">
          <i class="fi-lightbulb"></i>
        </div>

      </div> <!-- .title-bar -->

      <div class="row">
        
        <div class="medium-5 medium-push-1 columns">
          <p>
            <span id="about-us-text">

              <?php echo get_theme_mod( 'PlumbingPress_about_description' ); ?>

            </span>
          </p>
        </div>

        <div class="small-10 small-offset-2-only medium-6 columns">

          <?php get_template_part('content', 'features'); ?>

        </div> 

      </div> <!-- .row -->

    </section> <!-- .features -->

    <?php } // end if ?> 


  <!-- Testimonials Section -->
    <?php if( get_theme_mod( 'testimonial_about_display' ) == '') { ?>

    <section class="testimonials">

      <div class="title-bar">

        <div class="title-bar-header small-8 large-10 columns">
          <h2>
            <?php $obj = get_post_type_object( 'testimonials' );
              echo $obj->labels->singular_name; ?>
          </h2>
          <hr>
          <blockquote class="show-for-medium-up"><q><?php $obj = get_post_type_object( 'testimonials' ); echo $obj->description ?></q></blockquote>
        </div> 

        <div class="title-bar-icon-wrapper small-4 large-2 columns">
          <i class="fi-comments"></i>
        </div>

      </div> <!-- .title-bar -->

      <?php get_template_part('content', 'testimonials'); ?>

      <div>
        <a href="<?php echo esc_url( home_url() ); ?>/testimonials"><h5><?php _e( 'See What Others Have To Say...', 'PlumbingPress' ); ?></h5></a>
      </div>

    </section> <!-- .testimonials -->

    <?php } // end if ?> 


  <!-- Prefooter Section -->
    <div class="small-12 columns">

      <?php if( get_theme_mod( 'prefooter_display' ) == '') { ?>

          <?php get_template_part('content', 'prefooter'); ?>

      <?php } // end if ?>
          
    </div>


</div> <!-- .content-wrapper -->

<?php get_footer(); ?>

