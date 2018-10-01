<?php 

  $num_posts = ( is_front_page() ) ? 2 : -1;

  $args = array(
    'post_type' => 'testimonials',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );

?>

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
        
        <div class="quote small-12 medium-6 columns grid-item"> 

          <blockquote><?php the_field("testimonial"); ?></blockquote>
          <p class="alignright"><?php the_title(); ?> - <?php the_field("location"); ?><p>
            
        </div>
            
  <?php endwhile; endif; wp_reset_postdata(); ?>



   

