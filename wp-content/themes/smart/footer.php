<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package smart
 */

$footer_title = get_field('footer_title');
$footer_subtitle = get_field('footer_subtitle');
$copyright = get_field('copyright');


?>

<footer class="footer">
	<div class="container">
		<div class="footer__title">
			<?php echo $footer_title; ?>
		</div>
		<div class="footer__subtitle">
			<?php echo $footer_subtitle; ?>
		</div>
		<div class="footer__input">
			<div class="input__block">
				<label class="label" for="email">Type your Email Address</label>
				<input class="input" type="email" id="email">
			</div>
			<button class="input__btn">Send Now</button>
		</div>
		<div class="footer__menu">
			<div class="footer__logo">
				<?php the_custom_logo(); ?>
			</div>
			<?php
			wp_nav_menu([
				'menu'            => 'Header menu',
				'container'       => false,
				'menu_class'      => 'footer__nav',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'items_wrap'      => '<ul  class="%2$s">%3$s</ul>',
				'depth'           => 1,
				'walker'          => '',
			]);
			?>
		</div>
		<div class="footer__copyright">
			<?php echo $copyright['title']; ?>
		</div>
	</div>

</footer>
</div>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<?php wp_footer(); ?>
</body>

</html>