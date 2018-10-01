<?php 

?>

<aside class="prefooter row no-max">

    <!-- Main Logo -->
        <div class="medium-5 medium-push-1 columns">
            <?php if( get_theme_mod( 'PlumbingPress_logo') != "" ): ?>
            <a href="<?php echo esc_url( home_url() ); ?>"><img id="logo" src="<?php echo get_theme_mod( 'PlumbingPress_logo' ); ?>">
            <?php endif; ?></a>
            <h6><?php echo  get_bloginfo ( 'description' );  ?></h6>
        </div>

    <!-- Contact Number/Site Tagline -->
        <div class="medium-6 columns">
            <h3 class="show-for-medium-up">Call Us 24/7</h3>
            <h2 class="phone"><?php echo get_theme_mod( 'PlumbingPress_contact_number' ); ?></h2>
        </div>

</aside>

