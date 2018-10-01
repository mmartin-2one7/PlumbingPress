<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package PlumbingPress
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" 
      type="image/ico" 
      href="<?php echo esc_url( home_url() ); ?>/wp-content/themes/PlumbingPress/favicon.ico">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'PlumbingPress' ); ?></a>

	<header id="masthead" class="site-header no-max main" style="background-image: url(<?php header_image(); ?>);">

		<div class="row">

			<div class="logoWrapper medium-6 columns">

				<?php if( get_theme_mod( 'PlumbingPress_logo') != "" ): ?>

            	<a href="<?php echo esc_url( home_url() ); ?>"><img id="logo" src="<?php echo get_theme_mod( 'PlumbingPress_logo' ); ?>">
            
            	<?php endif; ?></a>
			 
			</div> <!-- .logoWrapper -->

			<div class="tagline medium-6 columns show-for-medium-up">

			<!-- Header Widget Section -->
				<?php if( !dynamic_sidebar( 'header-1' ) ): ?>
					<h2 class="module-heading"><?php _e( 'Sidebar Setup', 'PlumbingPress' ); ?></h2>
					<p><?php _e( 'Please add widgets via the admin area!', 'PlumbingPress' ); ?></p>
				<?php endif; ?>
			
			<!-- Site Description Section -->
				<?php if( get_theme_mod( 'site_description_display' ) == '') { ?> 

				<p class="site-description"><?php bloginfo( 'description' ); ?></p>

				<?php } // end if ?>

			<!-- Contact Number Section -->
				<?php if( get_theme_mod( 'contact_number_display' ) == '') { ?> 

				<p><h2 class="phone"><i class="fa fa-phone-square"></i>
					<span><?php echo get_theme_mod( 'PlumbingPress_contact_number' ); ?></span>
					<?php } // end if ?></h2></p>
			</div>

			<div>
			  <a href="" class="nav-toggle"><span></span>Menu</a>
			</div>

		</div> <!-- .row -->

		
		<div class="no-max topbar">

		<!-- Large Menu -->
			<div class="menu-large large-12 show-for-large columns">

				<?php 

					$defaults = array(
					'container' => false,
					'theme_location' => 'large',
					'menu' => 'large',
					'menu_class' => 'no-bullet'
					 );

					 wp_nav_menu( $defaults );

				?>

			</div> <!-- .menu-large -->

		<!-- Emergency Link -->
			<div class="urgent show-for-large-only">

			    <i class="fa fa-exclamation-triangle"></i><a href="#" data-reveal-id="myModal"> Have An Emergency?</a>

			    <div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
			      <h2 id="modalTitle"><?php _e('Turn Off Your Water!', 'PlumbingPress' ); ?></h2>
			      <p class="lead"><?php _e( 'And Call Us Right Away! We Can Help You Prevent Unneccessary Damage!', 'PlumbingPress' ); ?></p>
			      <p><a href="<?php echo esc_url( home_url() ); ?>/emergency/"><?php _e( 'Additional steps you can take now...', 'PlumbingPress' ); ?></a></p>
			      <a class="close-reveal-modal" aria-label="Close">&#215;</a>
			    </div>

			</div> <!-- .urgent -->

		</div>	<!-- .topbar	 -->

<!-- Primary Menu -->
  <nav>
    <h1 class="open">
    	<?php if( get_theme_mod( 'PlumbingPress_logo') != "" ): ?>
            <a href="<?php echo esc_url( home_url() ); ?>"><img id="logo" src="<?php echo get_theme_mod( 'PlumbingPress_logo' ); ?>">
        <?php endif; ?></a>
    </h1>
    
    <?php 

      $defaults = array(
        'container' => false,
        'theme_location' => 'primary',
        'menu' => 'main',
        'menu_class' => 'no-bullet'
        );

        wp_nav_menu( $defaults );

    ?>
  </nav>

</header>
	
<!-- Click To Call - Shown on Smaller Screens Only	 -->
	<?php if( get_theme_mod( 'click_to_call_display' ) == '') { ?>	


		<div class="notificationBar show-for-medium-down">
			<?php get_template_part('content', 'clicktocall'); ?>
		</div>

		
	<?php } // end if ?>

<!-- Begin Page Content -->
	<div id="content" class="site-content">
		<div id="bt"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
