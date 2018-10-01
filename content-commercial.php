<?php 

  $args = array(
    'post_type' => 'commercial',
  );
  $query = new WP_Query( $args );

?>
  
  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
   

    <a href="<?php the_permalink(); ?>" class="button small info radius"><?php the_title(); ?></a>
  

  <?php endwhile; endif; wp_reset_postdata(); ?>
