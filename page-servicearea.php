<?php 
/* 
  Template Name: ServiceArea Page
*/
?>
<?php get_header(); ?>

<div class="row content-wrapper">

<!-- Page Title Bar -->
  <?php get_template_part('content', 'title-bar'); ?>
<!-- End Page Title Bar -->
    

  <div class="service-area">

    <!-- Service Area Custom Posts-->
  	   <?php get_template_part('content', 'servicearea'); ?>


  </div> <!-- .service-area -->

 
  <!--  Prefooter Section -->
    <div class="servicearea-page small-12 columns">

      <?php get_template_part('content', 'prefooter'); ?>

    </div>


</div> <!-- .content-wrapper -->


<?php get_footer(); ?>