<?php
/*
Template Name: Home
*/
$item_1 = get_field('item_1');
$item_2 = get_field('item_2');
$item_3 = get_field('item_3');
$item_4 = get_field('item_4');
$item_5 = get_field('item_5');

$partner_header = get_field('partner_header');
$partner_1 		= get_field('partner_1');
$partner_2 		= get_field('partner_2');
$partner_3		= get_field('partner_3');
$partner_4		= get_field('partner_4');
$partner_5 		= get_field('partner_5');
$partner_6 		= get_field('partner_6');


$header 	= get_field('header');
$subheader 	= get_field('subheader');
$info_text 	= get_field('info_text');



$featured_img_1 = get_field('featured_img_1');
$featured_img_2 = get_field('featured_img_2');
$featured_header = get_field('featured_header');
$featured_info = get_field('featured_info');

$featured_property_name_1 = get_field('featured_property_name_1');
$featured_property_name_2 = get_field('featured_property_name_2');
$featured_property_name_3 = get_field('featured_property_name_3');
$featured_property_name_4 = get_field('featured_property_name_4');
$featured_property_name_5 = get_field('featured_property_name_5');
$featured_property_name_6 = get_field('featured_property_name_6');

$featured_property_value_1 = get_field('featured_property_value_1');
$featured_property_value_2 = get_field('featured_property_value_2');
$featured_property_value_3 = get_field('featured_property_value_3');
$featured_property_value_4 = get_field('featured_property_value_4');
$featured_property_value_5 = get_field('featured_property_value_5');
$featured_property_value_6 = get_field('featured_property_value_6');

$featured_btn = get_field('featured_btn');

get_header();
?>

<main class="main">
	<section class="section section-intro">
		<div class="section-intro__right-bg"></div>

		<div class="container">
			<div class="intro">
				<div class="intro__info">
					<?php if ($header) : ?>
						<div class="intro__header"><?php echo $header; ?></div>
					<?php endif; ?>
					<?php if ($subheader) : ?>
						<div class="intro__subheader"><?php echo $subheader; ?></div>
					<?php endif; ?>
					<?php if ($info_text) : ?>
						<div class="intro__text"><?php echo $info_text; ?></div>
					<?php endif; ?>
					<div class="intro__input-block">
						<input placeholder="Enter Zipcode to search properties" class="intro__input" type="text">
						<button class="intro__btn" type="submit">Search Now!</button>
					</div>
				</div>
				<div class="intro__swiper-block">
					<div class="swiper">
						<div class="swiper-wrapper">
							<?php if ($item_1) : ?>
								<div class="swiper-slide" style="background-image: url(<?php echo $item_1['url']; ?>"></div>
							<?php endif; ?>
							<?php if ($item_2) : ?>
								<div class="swiper-slide" style="background-image: url(<?php echo $item_2['url']; ?>"></div>
							<?php endif; ?>
							<?php if ($item_3) : ?>
								<div class="swiper-slide" style="background-image: url(<?php echo $item_3['url']; ?>"></div>
							<?php endif; ?>
							<?php if ($item_4) : ?>
								<div class="swiper-slide" style="background-image: url(<?php echo $item_4['url']; ?>"></div>
							<?php endif; ?>
							<?php if ($item_5) : ?>
								<div class="swiper-slide" style="background-image: url(<?php echo $item_5['url']; ?>"></div>
							<?php endif; ?>
						</div>
					</div>
				</div>

				<div class="swiper__buttons">
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>
			<div class="intro__partners">
				<div class="partners__header">
					<?php echo $partner_header; ?>
				</div>
				<div class="partners__block">
					<?php if ($partner_1) : ?>
						<img class="partners__item" src="<?php echo $partner_1['url']; ?>">
					<?php endif; ?>
					<?php if ($partner_2) : ?>
						<img class="partners__item" src="<?php echo $partner_2['url']; ?>">
					<?php endif; ?>
					<?php if ($partner_3) : ?>
						<img class="partners__item" src="<?php echo $partner_3['url']; ?>">
					<?php endif; ?>
					<?php if ($partner_4) : ?>
						<img class="partners__item" src="<?php echo $partner_4['url']; ?>">
					<?php endif; ?>
					<?php if ($partner_5) : ?>
						<img class="partners__item" src="<?php echo $partner_5['url']; ?>">
					<?php endif; ?>
					<?php if ($partner_6) : ?>
						<img class="partners__item" src="<?php echo $partner_6['url']; ?>">
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-procedure">
		<div class="section__title">
			<h2>How it works?</h2>
		</div>
		<div class="container">
			<div class="operating-procedure">
				<?php
				$args = array(
					'post_type' => 'operating-procedure',
					'post_status' => 'publish',
					'posts_per_page' => -1
				);
				$posts = new WP_Query($args);
				if ($posts->have_posts()) : ?>
					<?php while ($posts->have_posts()) : $posts->the_post();
						$id = $post->ID;
						$image = get_field("img", $id);
						$info = get_field("info", $id);
					?>
						<div class="operating-procedure__item">
							<div class="operating-procedure__img" style="background-image: url(<?php echo $image['url']; ?>)"></div>
							<div class="operating-procedure__name">
								<?php the_title(); ?>
							</div>
							<div class="operating-procedure__info">
								<?php echo $info; ?>
							</div>
						</div>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<section class="section section-property">
		<div class="container">
			<div class="property">
				<div class="property__intro">
					<div class="property__info">
						<div class="property__header">Best Real Estate Deals</div>
						<div class="property__text">Colonel gravity get thought fat smiling add but. Wonder twenty hunted and put income set desire expect.</div>
					</div>
					<button class="property__btn">View All Property</button>
				</div>
				<?php
				wp_nav_menu([
					'menu'            => 'Property menu',
					'container'       => false,
					'menu_class'      => 'property__nav',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'items_wrap'      => '<ul  class="%2$s">%3$s</ul>',
					'depth'           => 1,
					'walker'          => '',
				]);
				?>
				<div class="property__cards">
					<?php
					$args = array(
						'post_type' => 'property-cards',
						'post_status' => 'publish',
						'posts_per_page' => -1
					);
					$posts = new WP_Query($args);
					if ($posts->have_posts()) : ?>
						<?php while ($posts->have_posts()) : $posts->the_post();
							$id = $post->ID;
							$image = get_field("image", $id);
						?>
							<div class="property__item" style="background-image: url(<?php echo $image['url']; ?>)">
								<div class="item__property">
									<?php
									foreach (get_the_terms(get_the_ID(), 'property') as $tax) {
										echo '<div>' . __($tax->name) . '</div>';
									}
									?>
								</div>
							</div>

						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<section class="section section-featured">
		<div class="section__title">
			<h2>Featured Listing of the Week</h2>
		</div>
		<div class="container">
			<div class="featured">
				<div class="featured__img-block">
					<div class="first__img" style="background-image: url(<?php echo $featured_img_1['url']; ?>"></div>
					<div class="second__img" style="background-image: url(<?php echo $featured_img_2['url']; ?>"></div>
				</div>
				<div class="featured__info-block">
					<div class="featured__header"><?php echo $featured_header; ?></div>
					<div class="featured__info"><?php echo $featured_info; ?></div>
					<div class="featured__propertys">
						<div class="featured__property">
							<div class="property__name"><?php echo $featured_property_name_1; ?></div>
							<div class="property__value"><?php echo $featured_property_value_1; ?></div>
						</div>
						<div class="featured__property">
							<div class="property__name"><?php echo $featured_property_name_2; ?></div>
							<div class="property__value"><?php echo $featured_property_value_2; ?><span>2</span></div>
						</div>
						<div class="featured__property">
							<div class="property__name"><?php echo $featured_property_name_3; ?></div>
							<div class="property__value"><?php echo $featured_property_value_3; ?></div>
						</div>
						<div class="featured__property">
							<div class="property__name"><?php echo $featured_property_name_4; ?></div>
							<div class="property__value"><?php echo $featured_property_value_4; ?></div>
						</div>
						<div class="featured__property">
							<div class="property__name"><?php echo $featured_property_name_5; ?></div>
							<div class="property__value"><?php echo $featured_property_value_5; ?></div>
						</div>
						<div class="featured__property">
							<div class="property__name"><?php echo $featured_property_name_6; ?></div>
							<div class="property__value"><?php echo $featured_property_value_6; ?></div>
						</div>
					</div>
					<button class="featured__btn"><?php echo $featured_btn; ?></button>
				</div>
			</div>
		</div>
		</div>
	</section>
	<section class="section section-reviews"></section>
	<div class="container">
		<div class="reviews">
			<div class="reviews__header">
				Loved by businesses, and individuals across the globe.
			</div>
			<div class="reviews__block">
				<?php
				$args = array(
					'post_type' => 'reviews',
					'post_status' => 'publish',
					'posts_per_page' => -1
				);
				$posts = new WP_Query($args);
				if ($posts->have_posts()) : ?>
					<?php while ($posts->have_posts()) : $posts->the_post();
						$id = $post->ID;
						$reviews_value 		= get_field("reviews_value", $id);
						$reviews_text 		= get_field("reviews_text", $id);
						$reviews_icon 		= get_field("reviews_icon", $id);
						$reviews_name 		= get_field("reviews_name", $id);
						$reviews_location 	= get_field("reviews_location", $id);
					?>
						<div class="reviews__item">
							<div class="reviews__value">
								<?php echo $reviews_value; ?>
							</div>
							<div class="reviews__text">
								<?php echo $reviews_text; ?>
							</div>
							<div class="reviews__person">
								<div class="reviews__icon" style="background-image: url(<?php echo $reviews_icon['url']; ?>)"></div>
								<div class="reviews__person-data">
									<div class="reviews__name">
										<?php echo $reviews_name; ?>
									</div>
									<div class="reviews__location">
										<?php echo $reviews_location; ?>
									</div>
								</div>
							</div>
						</div>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</main>
<?php
get_footer();
