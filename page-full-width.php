<?php
/*  
    Template Name: Full Width
*/
?>
<?php get_header(); ?>

<div class="content-wrapper row no-max">

<!-- Page Title Bar -->
  <?php get_template_part('content', 'title-bar'); ?>
<!-- End Page Title Bar -->

 
  <!-- Primary/Page Content Section -->
    <div class="primary small-12 columns">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            
            <div class="no-sidebar">

                <!-- Featured Post/Page Image --> 
                    <figure class="featuredImage">

                        <?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                            the_post_thumbnail(); } ?>

                    </figure> 

                  <?php the_content(); ?>

            </div> 
          
            <?php endwhile; else : ?>

  			     <p><?php _e( 'Sorry, no pages found.', 'PlumbingPress' ); ?></p>
  		
  		    <?php endif; ?>
          
    </div> <!-- .primary -->
 

  <!-- Prefooter Section -->
    <div class="small-12 columns"> 

      <?php get_template_part('content', 'prefooter'); ?>

    </div> 


  </div> <!-- .content-wrapper -->

<?php get_footer(); ?>

