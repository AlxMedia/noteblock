<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) { wp_body_open(); } ?>

<a class="skip-link screen-reader-text" href="#page"><?php _e( 'Skip to content', 'noteblock' ); ?></a>

<div id="wrapper">
	
	<?php if ( get_header_image() ) : ?>
		<div class="site-header">
			<a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
				<img class="site-image" src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
			</a>
		</div>
	<?php endif; ?>
	
	<div id="wrapper-inner">
	
		<header id="header">
			<div id="header-inner">
				<?php echo noteblock_site_title(); ?>
				<?php if ( display_header_text() == true ): ?>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				<?php endif; ?>

				<?php if ( get_theme_mod( 'header-social', 'on' ) == 'on' ): ?>
					<?php noteblock_social_links() ; ?>
				<?php endif; ?>
				
				<?php if ( get_theme_mod( 'header-search', 'on' ) == 'on' ): ?>
					<div class="header-search">
						<?php get_search_form(); ?>
					</div>
				<?php endif; ?>
				
				<div id="move-sidebar-header" class="dark"><?php get_sidebar(); ?></div>
				
			</div>
		</header><!--/#header-->

		<div class="main" id="page">
			
			<?php if ( has_nav_menu('header') ): ?>
				<div id="wrap-nav-header" class="wrap-nav">
					<?php \Noteblock\Nav::nav_menu(array('theme_location'=>'header','menu_id' => 'nav-header','fallback_cb'=> false)); ?>
				</div>
			<?php endif; ?>
			
			<?php if ( has_nav_menu('mobile') ): ?>
				<div id="wrap-nav-mobile" class="wrap-nav">
					<?php \Noteblock\Nav::nav_menu(array('theme_location'=>'mobile','menu_id' => 'nav-mobile','fallback_cb'=> false)); ?>
				</div>
			<?php endif; ?>

			<div class="main-inner group">
				
				<?php if ( get_theme_mod('profile-image') || get_theme_mod('profile-name') || get_theme_mod('profile-description') ): ?>
					<div id="profile" class="group">
						<div id="profile-inner">
							<?php if ( get_theme_mod('profile-image') ): ?>
								<div id="profile-image"><img src="<?php echo esc_html( get_theme_mod('profile-image') ); ?>" alt="" /></div>
							<?php endif; ?>
							<?php if ( get_theme_mod('profile-name') ): ?>
								<div id="profile-name"><?php echo esc_html( get_theme_mod('profile-name') ); ?></div>
							<?php endif; ?>
							<?php if ( get_theme_mod('profile-description') ): ?>
								<div id="profile-description"><?php echo wp_kses_post( get_theme_mod('profile-description') ); ?></div>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
				