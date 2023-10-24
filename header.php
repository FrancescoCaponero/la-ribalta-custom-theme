<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ribalta-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ribalta-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			?>
			<div class="svg-wrapper">
				<div class="svg-ham">
					<svg class="svg-1" width="40" height="20" viewBox="0 0 63 29" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect y="24.4443" width="62.069" height="4" fill="black"/>
						<rect width="62.069" height="4.44444" fill="black"/>
						<rect y="12" width="62.069" height="4" fill="black"/>
					</svg>
					<svg class="svg-2" width="40" height="28" viewBox="0 0 46 44" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect y="40.4353" width="57.0731" height="3.67804" transform="rotate(-45 0 40.4353)" fill="#494033"/>
						<rect x="5.02734" width="57.0731" height="4.08671" transform="rotate(45 5.02734 0)" fill="#494033"/>
					</svg>
				</div>
			</div>
		</div><!-- .site-branding -->

	</header><!-- #masthead -->
	<nav id="site-navigation" class="main-navigation">
		<div class="nav-content-wrapper">
			<div class="menu-left">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'menu-1',
						
					)
				);
				?>
			</div>
			<div class="menu-right">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'menu-2',
						
					)
				);
				?>
			</div>
		</div>
	</nav><!-- #site-navigation -->
<div class="spacer"></div>
