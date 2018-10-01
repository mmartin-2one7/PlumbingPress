<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package PlumbingPress
 */
?>

<!-- Secondary Column -->
<aside class="small-12 medium-4 medium-pull-8 columns">
	<div class="secondary">
		

		<?php if( !dynamic_sidebar( 'blog' ) ): ?>

			<h2 class="module-heading"><?php _e( 'Sidebar Setup', 'PlumbingPress' ); ?></h2>
			<p><?php _e( 'Please add widgets via the admin area!', 'PlumbingPress' ); ?></p>

		<?php endif; ?>


	</div>
</aside>