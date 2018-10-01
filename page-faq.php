<?php
/*  
    Template Name: FAQ
*/
?>
<?php get_header(); ?>

<div class="row content-wrapper">

<!-- Page Title Bar -->
  <?php get_template_part('content', 'title-bar'); ?>
<!-- End Page Title Bar -->


  <!-- Two Column Section -->
    <section class="two-column"> 
     
        <!-- Primary Column -->
          <div class="primary small-12 medium-8 medium-push-4 columns">
      
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              
                <p><?php the_content(); ?></p>        
              
              <?php endwhile; else : ?>

                <p><?php _e( 'Sorry, no pages found.', 'PlumbingPress' ); ?></p>
          
              <?php endif; ?>
              
          </div> <!-- .primary -->
       

    <!-- Secondary Column -->
      <?php get_sidebar(); ?>

    </section> <!-- .two-column -->


  <!-- Prefooter Section -->
    <div class="about-page small-12 columns">

      <?php get_template_part('content', 'prefooter'); ?>

    </div>


</div> <!-- .content-wrapper -->

<?php get_footer(); ?>