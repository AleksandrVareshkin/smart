<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package smart
 */
//<?php var_dump($copyright); 

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@700&family=Manrope:wght@400;500;600;700;800&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body>
	<div class="wrapper">
		<header class="header">

			<div class="container">
				<nav class="header__inner">
					<div class="header__logo">
						<?php the_custom_logo(); ?>
					</div>
					<?php
					wp_nav_menu([
						'menu'            => 'Header menu',
						'container'       => false,
						'menu_class'      => 'header__nav',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul  class="%2$s">%3$s</ul>',
						'depth'           => 1,
						'walker'          => '',
					]);
					?>
					<button class="header__menu-btn">
						<span></span>
						<span></span>
						<span></span>
					</button>
				</nav>

				<div class="menu">
					<?php
					wp_nav_menu([
						'menu'            => 'Main',
						'container'       => false,
						'menu_class'      => 'menu__list',
						'echo'            => true,
						'fallback_cb'     => 'wp_page_menu',
						'items_wrap'      => '<ul  class="%2$s">%3$s</ul>',
						'depth'           => 1,
						'walker'          => '',
					]);
					?>
				</div>

			</div>

		</header>