<?php get_header(); ?>

<div class="content-wrapper">

    <!-- Slider Carousel -->
        <?php if( get_theme_mod( 'slider_display' ) == '') { ?>

            <div class="show-for-medium-up">
                <?php get_template_part('content', 'slider'); ?>
            </div>

        <?php } // end if ?> 


    <!-- Emergency Section -->
        <?php if( get_theme_mod( 'emergency_display' ) == '') { ?>

            <div class="emergency show-for-small-only">

                <div class="emergency-text">
                    <h3><i class="fa fa-exclamation-triangle"></i> <?php _e('Have An Emergency?', 'PlumbingPress' ); ?></h3>
                    <h5><a href="<?php echo esc_url( home_url() ); ?>/emergency"><?php _e('Take These Steps Now!', 'PlumbingPress' ); ?></a></h5>
                </div>
               

            </div> <!-- .emergency -->

        <?php } // end if ?>
   

    <!-- Home Page Content -->
        <div class="home-content">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

            <?php endwhile; else : ?>

            <p><?php _e( 'Sorry, no pages found.', 'PlumbingPress' ); ?></p>
                
            <?php endif; ?>

        </div> <!-- .home-content -->
   

    <!-- Residential Section -->
        <?php if( get_theme_mod( 'residential_display' ) == '') { ?>

        <section class="residential row no-max">

            <div class="title-bar">

                <div class="title-bar-header small-8 large-10 columns">

                    <h2>
                        <?php $obj = get_post_type_object( 'residential' );
                        echo $obj->labels->singular_name; ?>
                    </h2>
                    <hr class="show-for-medium-up">
                    <blockquote class="show-for-medium-up">
                        <?php $obj = get_post_type_object( 'residential' ); echo $obj->description ?>
                    </blockquote>

                </div> 

                <div class="title-bar-icon-wrapper small-4 large-2 columns">
                    <i class="fa fa-home"></i>
                </div>

            </div> <!-- .title-bar -->

            <ul class="residential-ul small-block-grid-2 medium-block-grid-4 large-block-grid-6">
                <?php get_template_part('content', 'residential'); ?>
                <!-- <li><a href="<?php echo esc_url( home_url() ); ?>/residential-plumbing"><img src="<?php echo esc_url( home_url() ); ?>/wp-content/themes/PlumbingPress/images/icons/moreServicesIcon.png"></a></li>
                <li><a href="<?php echo esc_url( home_url() ); ?>/residential-plumbing"><h5><?php _e('More Services', 'PlumbingPress'); ?></h5></a></li> -->
            </ul>

        </section> <!-- .residential -->

        <?php } // end if ?>
   

    <!-- Testimonials Section -->
        <?php if( get_theme_mod( 'testimonial_display' ) == '') { ?>

        <section class="testimonials row no-max">

            <div class="title-bar">

                <div class="title-bar-header small-8 large-10 columns">
                    <h2>
                        <?php $obj = get_post_type_object( 'testimonials' );
                        echo $obj->labels->singular_name; ?>
                    </h2>
                    <hr class="show-for-medium-up">
                    <blockquote class="show-for-medium-up">
                        <?php $obj = get_post_type_object( 'testimonials' ); echo $obj->description ?>
                    </blockquote>

                </div> 

                <div class="title-bar-icon-wrapper small-4 large-2 columns">
                    <i class="fi-comments"></i>
                </div>

            </div> <!-- .title-bar -->

            <?php get_template_part('content', 'testimonials'); ?>

            <div>
                <a href="<?php echo esc_url( home_url() ); ?>/testimonials"><h5><?php _e('See What Others Have To Say...', 'PlumbingPress' ); ?></h5></a>
            </div>

        </section> <!-- .testimonials -->

        <?php } // end if ?> 


    <!-- Team/Meet Your Plumber Section -->
        <?php if( get_theme_mod( 'team_display' ) == '') { ?>

        <section class="team row no-max">

            <div class="title-bar">

                <div class="title-bar-header small-8 large-10 columns">
                    <h2>
                        <?php $obj = get_post_type_object( 'team' );
                        echo $obj->labels->singular_name; ?>
                    </h2>
                    <hr class="show-for-medium-up">
                    <blockquote class="show-for-medium-up">
                        <?php $obj = get_post_type_object( 'team' ); echo $obj->description ?>
                    </blockquote>
                </div> 

                <div class="title-bar-icon-wrapper small-4 large-2 columns"><i class="fi-torsos-all"></i></div>
            </div> <!-- .title-bar -->

            <?php get_template_part('content', 'team'); ?>

        </section> <!-- .team -->

        <?php } // end if ?> 
   

    <!-- Service Are Section -->
        <?php if( get_theme_mod( 'service_area_display' ) == '') { ?>

        <section class="service-area row no-max">

            <div  class="title-bar">

                <div class="title-bar-header small-8 large-10 columns">
                    <h2>
                        <?php $obj = get_post_type_object( 'servicearea' );
                        echo $obj->labels->singular_name; ?>
                    </h2>
                    <hr class="show-for-medium-up">
                    <blockquote class="show-for-medium-up">
                        <?php $obj = get_post_type_object( 'servicearea' ); echo $obj->description ?>
                    </blockquote>
                </div> 

                <div class="title-bar-icon-wrapper small-4 large-2 columns">
                    <i class="fi-map"></i>
                </div>

            </div> <!-- .title-bar -->

            <div>
                <?php get_template_part('content', 'servicearea'); ?>
            </div>

        </section> <!-- .service-area -->

        <?php } // end if ?> 
   

    <!-- Features Section -->
        <?php if( get_theme_mod( 'features_display' ) == '') { ?>

        <section class="features row no-max">

            <div class="title-bar">

                <div class="title-bar-header small-8 large-10 columns">
                    <h2>
                        <?php $obj = get_post_type_object( 'features' );
                        echo $obj->labels->singular_name; ?>
                    </h2>
                    <hr class="show-for-medium-up">
                    <blockquote class="show-for-medium-up">
                        <?php $obj = get_post_type_object( 'features' ); echo $obj->description ?>
                    </blockquote>
                </div> 

                <div class="title-bar-icon-wrapper small-4 large-2 columns">
                    <i class="fi-lightbulb"></i>
                </div>

            </div> <!-- .title-bar -->

            <div>
                <div class="medium-5 medium-push-1 columns">
                    <p>
                        <span id="about-us-text">
                        <?php echo get_theme_mod( 'PlumbingPress_about_description', 'No About Us text information has been saved yet.' ); ?>
                        </span>
                    </p>
                    <a href="<?php echo esc_url( home_url() ); ?>/about-us"> <?php _e('Read More', 'PlumbingPress' ); ?> </a> <i class="fi-arrow-right"></i>
                </div>

                <div class="small-10 small-offset-2-only medium-6 columns">
                    <?php get_template_part('content', 'features'); ?>
                </div>

            </div>

        </section> <!-- .features -->

        <?php } // end if ?> 
    

    <!-- Prefooter Section -->
        <?php if( get_theme_mod( 'prefooter_display' ) == '') { ?>

            <?php get_template_part('content', 'prefooter'); ?>

        <?php } // end if ?>
   

</div> <!-- .content-wrapper -->

<?php get_footer(); ?>