<?php 

  $num_posts = ( is_front_page() ) ? 4 : -1;

  $args = array(
    'post_type' => 'team',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );

?>

<!-- Team Content -->
  <div class="row no-max pad"> 
    
    <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

    <div class="medium-6 large-3 columns grid-item">

      <div class="team-inner">

        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
        <a href="<?php the_permalink(); ?>"> <h4><?php the_title(); ?></h4></a>

        <p><strong><?php the_field('position'); ?></strong></p>

        <ul class="team-social inline-list alignright">
            <li><a href="<?php the_field('facebook_url'); ?>"><i class="fi fi-social-facebook"></i></a></li>
            <li><a href="<?php the_field('twitter_url'); ?>"><i class="fi fi-social-twitter"></i></a></li>
            <li><a href="mailto:<?php the_field('email'); ?>"><i class="fi fi-mail"></i></a></li>
        </ul>

        <p><?php the_field('description'); ?></p>

      </div> <!-- .team-inner -->

    </div>

    <?php endwhile; endif; wp_reset_postdata(); ?>

  </div> 
<!-- End Team Content -->

