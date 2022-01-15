<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package geekpack
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="header-section full">
	<div class="wrap">
				<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'geekpack' ); ?></a>

				<header id="masthead" class="site-header inner">
					<div class="site-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$geekpack_description = get_bloginfo( 'description', 'display' );
						if ( $geekpack_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $geekpack_description; /* WPCS: xss ok. */ ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" href="/fun-images">&#9776; MENU</button>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
						?>
					</nav><!-- #site-navigation -->
				</header><!-- #masthead -->
				<?php
				if (is_front_page() ) : ?>
					<div class="hero">
						<h1 class="hero-heading">Donuts & Pugs</h1>
						<p class="hero-paragraph">Fun website showcasing my work</p>
						<a class="button" href="/fun-images">Some cute images</a>
						<div></div>
					</div>
				<?php else : ?>
				<?php endif ?>
			</div>
		</div>	
		
	<div class="main-content-section full">
		<div class="wrap">		
			<div id="content" class="site-content inner">
