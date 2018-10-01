<?php get_header(); ?>

<div class="row content-wrapper">

  <section class="two-column row no-max pad">

        <!-- Primary Column -->
          <div id="single" class="primary small-10 small-centered medium-4 medium-uncentered large-4 large-uncentered columns">

              <?php the_field('image'); ?>  

              <!-- Single Page Sidebar -->
                <?php get_sidebar('single'); ?>
              <!-- End Single Page Sidebar -->  
  		
          </div> <!-- .primary -->
        

        <!-- Secondary Column -->
          <div class="secondary small-12 medium-8 large-8 columns">

              <h2><span class="single-thumbnail"><?php the_post_thumbnail('thumbnail'); ?></span> <?php the_title(); ?></h2>
              <hr>

            <!-- Post Content -->
              <div id="description">
                <p><?php the_field('description'); ?></p>  
              </div>

              <hr>
              <!-- Post to Post Navigation -->
                <p>
                  <?php previous_post_link(); ?> |
                  <a href="<?php echo esc_url( home_url() ); ?>/residential"><?php _e( 'Back to Residential Services', 'PlumbingPress' ); ?></a> |
                  <?php next_post_link(); ?>
                </p>

          </div> <!-- .secondary -->
       

  </section> <!-- .two-column -->


  <!-- Prefooter Section -->
    <div class="residential-page small-12 columns">

      <?php get_template_part('content', 'prefooter'); ?>

    </div>
  

  </section> <!-- .two-column -->
  

</div> <!-- .content-wrapper -->


<?php get_footer(); ?>