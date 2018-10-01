<?php 

  $num_posts = ( is_front_page() ) ? 2 : -1;

  $args = array(
    'post_type' => 'servicearea',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );

?>

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

        <!-- Service Area Section -->
          <div class="medium-6 columns"> 

            <?php the_field("description"); ?> 

          <!-- Service Area Towns -->
            <ul class="towns-1 small-6 columns">
              <li><i class="fa fa-map-marker"></i> <?php the_field("town-1"); ?></li>
              <li><i class="fa fa-map-marker"></i> <?php the_field("town-2"); ?></li>
              <li><i class="fa fa-map-marker"></i> <?php the_field("town-3"); ?></li>
              <li><i class="fa fa-map-marker"></i> <?php the_field("town-4"); ?></li>
              <li><i class="fa fa-map-marker"></i> <?php the_field("town-5"); ?></li>
            </ul>
            <ul class="towns-2 small-6 columns">
              <li><i class="fa fa-map-marker"></i> <?php the_field("town-6"); ?></li>
              <li><i class="fa fa-map-marker"></i> <?php the_field("town-7"); ?></li>
              <li><i class="fa fa-map-marker"></i> <?php the_field("town-8"); ?></li>
              <li><i class="fa fa-map-marker"></i> <?php the_field("town-9"); ?></li>
              <li><i class="fa fa-map-marker"></i> <?php the_field("town-10"); ?></li>
            </ul>
         

          </div> 
   
        <!-- Service Area Map -->
          <div class="medium-6 columns"> 

           <?php get_template_part('content', 'map'); ?>

          </div> 

  <?php endwhile; endif; wp_reset_postdata(); ?>
