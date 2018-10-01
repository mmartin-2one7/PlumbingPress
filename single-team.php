<?php get_header(); ?>

<div class="row content-wrapper">

    <section class="two-column row no-max pad">

        <!-- Primary Column -->
            <div id="single" class="primary small-12 medium-6 medium-push-6 large-6 large-push-6 columns">

                <?php the_post_thumbnail('large'); ?>


            </div> <!-- .primary -->
      

        <!-- Secondary Column -->
            <div class="secondary small-12 medium-6 medium-pull-6 large-6 large-pull-6 columns">

                <div id="team-single">

                    <h2><?php the_title(); ?></h2>
                    <h5><?php the_field('position'); ?></h5>
                    <hr> 
                    <ul id="team-social" class="team-social inline-list">
                        <li><a href="<?php the_field('facebook_url'); ?>"><i class="fi fi-social-facebook"></i></a></li>
                        <li><a href="<?php the_field('twitter_url'); ?>"><i class="fi fi-social-twitter"></i></a></li>
                        <li><a href="mailto:<?php the_field('email'); ?>"><i class="fi fi-mail"></i></a></li>
                    </ul>
                    <hr>
                    <p><?php the_field('description'); ?></p>

                    <div class="team-connect">
                        <p><i class="fi fi-mail"></i> <?php the_field('email'); ?><br>
                        <i class="fi fi-telephone"></i> <?php the_field('phone_number'); ?></p>
                    </div> <!-- .team-connect -->

                    <hr>
                    
                    <!-- Post to Post Navigation -->
                        <p><?php previous_post_link(); ?> |
                            <a class="single-links" href="<?php echo esc_url( home_url() ); ?>/team"><?php _e( 'Back to the Team', 'PlumbingPress' ); ?></a> |
                            <?php next_post_link(); ?></p>

                </div> <!-- .team-single -->
      
            </div> <!-- .secondary -->

    </section> <!-- .two-column -->


    <!-- Prefooter Section   -->
      <div class="team-single-page small-12 columns">

        <?php get_template_part('content', 'prefooter'); ?>

      </div>
    

</div> <!-- .content-wrapper -->

<?php get_footer(); ?>