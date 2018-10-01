<?php
/*  
    Template Name: Contact Page
*/
?>
<?php get_header(); ?>

<div class="row content-wrapper contact">

<!-- Page Title Bar -->
  <?php get_template_part('content', 'title-bar'); ?>
<!-- End Page Title Bar -->

  
  <!-- Page Content -->
    <div class="medium-6 columns">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <p><?php the_content(); ?></p>
            
      <?php endwhile; else : ?>

        <p><?php _e( 'Sorry, no pages found.', 'PlumbingPress' ); ?></p>
      
      <?php endif; ?>

    </div> 


  <!-- Contact Info Section -->
    <div class="contact-info medium-6 columns">

      <div class="medium-6 columns">
        <h5><?php _e( 'Mailing Address', 'PlumbingPress' ); ?></h5>
        <p><span id="mailing-address"><?php echo get_theme_mod( 'PlumbingPress_address_text' ); ?></span><br>
        <span id="PlumbingPress_license"><?php echo get_theme_mod( 'PlumbingPress_license_text' ); ?></span>
        </p>
      </div>

      <div class="medium-6 columns">
        <h5><?php _e( 'Contact Info', 'PlumbingPress' ); ?></h5>
          <p><span class="phone" id="phone"><?php echo get_theme_mod( 'PlumbingPress_contact_number' ); ?></span><br>
          <span id="contact_email"><?php echo get_theme_mod( 'PlumbingPress_email_text' ); ?></span><br>
          <span id="twitter_handle"><?php echo get_theme_mod( 'PlumbingPress_twitter_text' ); ?></span>
          </p>
      </div>

    </div> <!-- .contact-info -->


  <!-- Service Area Map -->
    <div class="row pad">

      <div class="medium-6 columns">
        
        <?php get_template_part('content', 'map'); ?>

      </div>

    </div> <!-- .row -->


  <!-- Prefooter Section -->
    <div class="contact-page small-12 columns">

     <?php get_template_part('content', 'prefooter'); ?>

    </div>


</div> <!-- .content-wrapper -->

<?php get_footer(); ?>

