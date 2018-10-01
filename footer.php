<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package PlumbingPress
 */
?>

</div><!-- #content -->

	<div class="footer-clear"></div>

	<footer id="footer" class="site-footer"> 
		
		<div class="row"> 

			<div class="footer-1 medium-3 columns"> 

				<?php if( !dynamic_sidebar( 'footer-1' ) ): ?>
					<h2 class="module-heading"><?php _e('Sidebar Setup', 'PlumbingPress' ); ?></h2>
					<p><?php _e( 'Please add widgets via the admin area!', 'PlumbingPress' ); ?></p>
				<?php endif; ?>

			</div> <!-- .footer-1 -->

			<div class="footer-2 medium-3 columns">

				<?php if( !dynamic_sidebar( 'footer-2' ) ): ?>
					<h2 class="module-heading"><?php _e( 'Sidebar Setup', 'PlumbingPress' ); ?></h2>
					<p><?php _e('Please add widgets via the admin area!', 'PlumbingPress' ); ?></p>
				<?php endif; ?>

			</div> <!-- .footer-2 -->

			<div class="footer-3 medium-3 columns">

				<?php if( !dynamic_sidebar( 'footer-3' ) ): ?>
					<h2 class="module-heading"><?php _e('Sidebar Setup', 'PlumbingPress' ); ?></h2>
					<p><?php _e( 'Please add widgets via the admin area!', 'PlumbingPress' ); ?></p>
				<?php endif; ?>

			</div> <!-- .footer-3 -->

			<div class="footer-4 medium-3 columns"> 

				<?php if( !dynamic_sidebar( 'footer-4' ) ): ?>
					<h2 class="module-heading"><?php _e( 'Sidebar Setup', 'PlumbingPress' ); ?></h2>
					<p><?php _e( 'Please add widgets via the admin area!', 'PlumbingPress' ); ?></p>
				<?php endif; ?>

			</div> <!-- .footer-4 -->

		</div> <!-- .row -->

		<div class="site-info"> 

			&COPY; Copyright <?php echo date('Y'); ?> <span id='copyrighttext'> <?php echo get_theme_mod( 'PlumbingPress_copyright_text' ); ?>
			</span>

		</div> <!-- .site-info -->
		
		<div class="bottom-footer no-max"> 

			<?php if( get_theme_mod( 'PlumbingPress_footer_text') != "" ): ?>
	            <p id="footertext">
	                <?php echo get_theme_mod( 'PlumbingPress_footer_text'); ?>
	            </p>
	        <?php endif; ?> 

    	</div> <!-- .bottom-footer -->

	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
