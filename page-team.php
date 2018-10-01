<?php 
/* 
  Template Name: Team
*/
?>
<?php get_header(); ?>

<div class="row content-wrapper">

<!-- Page Title Bar -->
  <?php get_template_part('content', 'title-bar'); ?>
<!-- End Page Title Bar -->


    <div class="small-12 columns">
    
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               
        <?php the_content(); ?>
       
      <?php endwhile; endif; ?>

      <section class="team">
        <!-- Team Custom Posts -->
          <?php get_template_part('content', 'team'); ?>
       
      </section> <!-- .team -->
    
    </div> <!-- .leader -->


  <!-- Prefooter Section -->
    <div class="team-page small-12 columns">

      <?php get_template_part('content', 'prefooter'); ?>

    </div>


</div> <!-- .content-wrapper -->

<?php get_footer(); ?>