<?php
/**
 * The template for displaying all single posts.
 *
 * @package PlumbingPress
 */
?>

<?php get_header(); ?>

<div class="row content-wrapper">

<!-- Two Column Section -->
  <section class="two-column row no-max pad">

    <!-- Primary Column -->
      <div class="primary small-12 medium-8  medium-push-4 columns">
        
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article <?php post_class('post'); ?>>

              <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                  
                  <ul class="post-meta no-bullet">
                    <li class="author">
                        <span class="wpt-avatar small">
                          <?php echo get_avatar( get_the_author_meta( 'ID' ), 24 ); ?>
                        </span>
                        by <?php the_author_posts_link(); ?>                    
                    </li>
                    <li class="cat">in <?php the_category( ', ' ); ?></li>
                    <li class="date">on <?php the_time('F j, Y'); ?></li>
                  </ul>    

                <?php if( get_the_post_thumbnail() ) : ?>

                  <div class="img-container">
                    <?php the_post_thumbnail('large'); ?>
                  </div>  

                  <?php endif; ?> 

                  <?php the_content(); ?>
                  <?php comments_template(); ?>
       
              </article>
       
              <div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
              <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>

              <?php endwhile; else : ?>
              
                <p><?php _e( 'Sorry, no pages found.', 'PlumbingPress' ); ?></p>
              
              <?php endif; ?>
      
      </div> <!-- .primary -->
    
      
  <!-- Secondary Column -->
    <?php get_sidebar(); ?>
  <!-- End Secondary Column -->


  </section> <!-- two-column -->
  

  <!-- Prefooter Section -->
    <div class="small-12 columns">

      <?php get_template_part('content', 'prefooter'); ?>

    </div>


</div> <!-- .content-wrapper -->

<?php get_footer(); ?>