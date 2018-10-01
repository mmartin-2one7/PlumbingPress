<?php 

  $num_posts = ( is_front_page() ) ? 5 : -1;

  $args = array(
    'post_type' => 'features',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );

?>

<aside class="feature-bullets">
  
  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
  
    <?php the_field('feature'); ?>
  
  <?php endwhile; endif; wp_reset_postdata(); ?>

</aside>
