<?php get_header(); ?>

<div class="row content-wrapper"> 

  <!-- Two Column Section-->
    <section class="two-column row no-max pad"> 

        <!-- Primary Column -->
          <div id="single" class="primary small-12 medium-4 large-4 columns"> 

            <!-- Featured Image -->
              <?php the_post_thumbnail('large'); ?> 

              <!-- Single Page Sidebar -->
                <?php get_sidebar('single'); ?>
              <!-- End Single Page Sidebar -->  
           
          </div> <!-- .primary -->
       

        <!-- Secondary Column -->
          <div class="secondary small-12 medium-8 large-8 columns">

              <h2><?php the_title(); ?></h2>
              <hr>
              
              <!-- Post Content -->
                <div id="description">
                  <p><?php the_field('description'); ?></p>  
                </div>

              <hr>

              <!-- Post to Post Navigation -->
                <p><?php previous_post_link(); ?> |
                <a href="<?php echo esc_url( home_url() ); ?>/commercial"><?php _e( 'Back to Commercial Services', 'PlumbingPress' ); ?></a> |
                <?php next_post_link(); ?></p>
          

          </div>  <!-- .secondary -->
       

    </section> <!-- .two-column -->


  <!-- Prefooter Section -->
    <div class="commercial-page small-12 columns"> 

      <?php get_template_part('content', 'prefooter'); ?>

    </div>


</div> <!-- .content-wrapper -->


<?php get_footer(); ?>