<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package PlumbingPress
 */

get_header(); ?>

<div class="row content-wrapper">

	<!-- Page Title Bar -->
		<div class="title-bar">

			<div class="title-bar-header archive small-10 large-11 columns">
				<h2><?php the_archive_title()?></h2>
				 
				 <blockquote class="show-for-large-up">
				   <?php the_archive_description()?>
				  </blockquote>
			</div> 

			<div class="title-bar-icon-wrapper archive small-2 large-1 columns">
				
			</div>

		</div> <!-- .title-bar -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>


			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

</div> <!-- .content-wrapper -->

<?php get_footer(); ?>
