<?php 
/* 
  Template Name: Testimonials Page
*/
?>
<?php get_header(); ?>

<div class="row content-wrapper">

<!-- Page Title Bar -->
  <?php get_template_part('content', 'title-bar'); ?>
<!-- End Page Title Bar -->


  <!-- Testimonial Custom Posts -->
    <?php get_template_part('content', 'testimonials'); ?>
 
  </section> <!-- .testimonials -->


  <!-- Prefooter Section -->
    <div class="testimonials-page small-12 columns">

      <?php get_template_part('content', 'prefooter'); ?>

    </div>


</div> <!-- .content-wrapper -->

<?php get_footer(); ?>