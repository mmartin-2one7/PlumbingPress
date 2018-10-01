<?php 
/* 
  Template Name: Residential Page
*/
?>
<?php get_header(); ?>

<div class="row content-wrapper">

<!-- Page Title Bar -->
  <?php get_template_part('content', 'title-bar'); ?>
<!-- End Page Title Bar -->


  <section class="residential" id="residential-page"> 

    <!-- Residential Custom Posts -->
      <ul class="small-block-grid-2 medium-block-grid-4 large-block-grid-6"> 

        <?php get_template_part('content', 'residential'); ?>

      </ul> 
        
  </section> <!-- .residential -->


  <!-- Residential Page Content -->
    <div id="residential-content"> 

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <p><?php the_content(); ?></p>        
            
      <?php endwhile; else : ?>

          <p><?php _e( 'Sorry, no pages found.', 'PlumbingPress' ); ?></p>
        
      <?php endif; ?>

    </div> <!-- .residential-content -->


  
  <!-- Prefooter Section -->
    <div class="residential-page small-12 columns"> 

      <?php get_template_part('content', 'prefooter'); ?>

    </div> 
    

</div> <!-- .content-wrapper -->


<?php get_footer(); ?>


  