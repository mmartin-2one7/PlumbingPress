<?php 

  $num_posts = ( is_front_page() ) ? 2 : -1;

  $args = array(
    'post_type' => 'servicearea',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );

?>

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

      <?php 

          $location = get_field('googlemap');

          if( !empty($location) ):
          ?>
          <div class="acf-map">

            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
          </div>
          
          <?php endif; ?>

  <?php endwhile; endif; wp_reset_postdata(); ?>
