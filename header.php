<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package maddieblack
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Archivo+Black|Cardo:400,400i|Tenor+Sans|Archivo" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page" class="site">

		<header id="masthead" class="site-header">

			<div class="nav">
				<a href="<?php echo get_option("siteurl"); ?>">
				<img src="<?php echo get_template_directory_uri() . '/images/logo.svg'; ?>" class="logo">
				</a>

					<div class="name absolute">
						<nav class="side-menu dib absolute ttu b">
							<?php
							wp_nav_menu( array(
							'theme_location' => 'side-menu'
							) );
							?>
						</nav>
					</div>

				<nav id="site-navigation" class="main-navigation dib absolute ttu b">
				<?php
				wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
				) );
				?>
			</nav>

			</div>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
