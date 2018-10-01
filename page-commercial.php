<?php
/*  
    Template Name: Commercial Page
*/
?>
<?php get_header(); ?>

<div class="content-wrapper row">

<!-- Page Title Bar -->
  <?php get_template_part('content', 'title-bar'); ?>
<!-- End Page Title Bar -->


  <!-- Two Column Section -->
    <section class="two-column">  

      <!-- Primary Column -->
        <div id="commercial" class="primary small-12 medium-8 medium-push-4 columns"> 
          
          <!-- Commercial Custom Posts   --> 
            <?php get_template_part('content', 'commercial'); ?>
            <hr>
          
          <!-- Page Content -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                 <!-- Featured Post/Page Image --> 
                <figure class="featuredImage">

                    <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                      the_post_thumbnail('medium'); } ?>

                </figure> 

              <?php the_content(); ?>     
            
            <?php endwhile; else : ?>

    			     <p><?php _e( 'Sorry, no pages found.', 'PlumbingPress' ); ?></p>
    		
    		    <?php endif; ?>
            
        </div> <!-- .primary -->
     

      <!-- Secondary Column -->
        <?php get_sidebar('commercial'); ?> 

          
    </section> <!-- .two-column -->
    

  <!-- Prefooter Section -->
    <div class="commercial-page small-12 columns"> 

      <?php get_template_part('content', 'prefooter'); ?>

    </div> 


</div> <!-- .content-wrapper -->

<?php get_footer(); ?>