<?php get_header(); ?>

<div class="content-wrapper">

    <!-- Two Column Section -->
        <section class="two-column row no-max pad">

            <!-- Primary Column -->
                <div id="single" class="primary small-12 medium-7 medium-offset-1 medium-push-4 columns">

                <?php the_field('images'); ?>  

              <!-- Single Page Sidebar -->
                <?php get_sidebar('single'); ?>
              <!-- End Single Page Sidebar -->    
        		
                </div>

            <!-- Secondary Column -->
                <div class="secondary small-12 medium-4 medium-pull-8 columns">

                    <h2><?php the_title(); ?></h2>
                    <p><?php the_field('description'); ?></p>  
                    <hr>

                    <!-- Post to Post Navigation -->
                        <p><?php previous_post_link(); ?> |
                            <a href="<?php echo esc_url( home_url() ); ?>/testimonials"><?php _e( 'Back to Testimonials', 'PlumbingPress' ); ?></a> |
                            <?php next_post_link(); ?></p>

                </div> <!-- .secondary -->
           
        
        </section> <!-- .two-column -->
   
<!-- Prefooter Section -->
    <div class="testimonials-page small-12 columns">

      <?php get_template_part('content', 'prefooter'); ?>

    </div>
    

</div> <!-- .content-wrapper -->


<?php get_footer(); ?>