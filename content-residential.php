<?php 

  $args = array(
    'post_type' => 'residential',
  );
  $query = new WP_Query( $args );

?>

  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

        <li><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></li>
        <li><a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a></li>
 

  <?php endwhile; endif; wp_reset_postdata(); ?>
