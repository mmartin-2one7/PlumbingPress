<?php 
/* 
  Template Name: Shortcodes Page
*/
?>
<?php get_header(); ?>

<div class="row content-wrapper">

<!-- Page Title Bar -->
  <?php get_template_part('content', 'title-bar'); ?>
<!-- End Page Title Bar -->


<!-- Shortcodes/Page Content Section -->
  <section class="shortcodes">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                         
      <p><?php the_content(); ?></p>
          
    <?php endwhile; else : ?>

      <p><?php _e( 'Sorry, no pages found.', 'PlumbingPress' ); ?></p>
      
    <?php endif; ?>

  </section> <!-- .shortcodes -->


<!-- Prefooter Section  -->
  <div class="shortcodes-page small-12 columns">

    <?php get_template_part('content', 'prefooter'); ?>

  </div>


</div> <!-- .content-wrapper -->

<?php get_footer(); ?>
