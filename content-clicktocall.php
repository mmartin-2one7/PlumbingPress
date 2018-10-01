<?php 

  $args = array(
    'post_type' => 'clicktocall',
  );
  $query = new WP_Query( $args );

?>
  
  <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

    <div class="notificationBar"> 
    	
    	<a href="tel:+<?php the_field('number'); ?>" class="button expand" style="color:<?php the_field('color'); ?>"><i class="fi fi-telephone"></i> <span class="click-to-call"><?php the_field('text'); ?></span></a>
 
    </div> 

  <?php endwhile; endif; wp_reset_postdata(); ?>

