<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

/**
 * Provide Trisec 1 public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @package Post Blcok
 */
$frhd_slider_block_id      = random_int( 100, 999 );
$frhd_slider_post_cats     = isset( $frhd_attributes['theCategories'] ) ? $frhd_attributes['theCategories'] : 'random';
$frhd_slider_carousel_mode = isset( $frhd_attributes['isCarouselMode'] ) ? $frhd_attributes['isCarouselMode'] : true;
$frhd_total_slide_count    = isset( $frhd_attributes['totalSlide'] ) ? $frhd_attributes['totalSlide'] : 6;

$frhd_slider_shape_class = '';
if ( true === $frhd_slider_carousel_mode ) {

	$frhd_slider_shape_class = 'frhd__carousel-mode';
} else {

	$frhd_slider_shape_class = 'frhd__slider-mode';
}

// Enqueue.
wp_enqueue_style( 'pb-slider-style', plugin_dir_url( __DIR__ ) . 'src/block-post-slider/assets/swiper-bundle.min.css', array(), POST_BLOCK_VERSION, 'all' );
wp_enqueue_script( 'pb-slider-script', plugin_dir_url( __DIR__ ) . 'src/block-post-slider/assets/swiper-bundle.min.js', array( 'post-block-js' ), POST_BLOCK_VERSION, true );
?>
<div id="frhd__block-id-<?php echo esc_attr( $frhd_slider_block_id ); ?>" class="frhd__post-slider-wrapper <?php echo esc_attr( $frhd_slider_shape_class ); ?>" data-carouselMode="<?php echo esc_attr( $frhd_slider_carousel_mode ); ?>">
	<div class="swiper frhd__post-slider frhd__slider-layout-1">
		<div class="swiper-wrapper">
		<?php
		$frhd_query_slider_args = array(
			'post_type'      => 'post',
			'posts_per_page' => $frhd_total_slide_count,
			'cat'            => $frhd_slider_post_cats,
			'order'          => 'DESC',
		);

		$frhd_post_query_slider = new WP_Query( $frhd_query_slider_args );

		if ( $frhd_post_query_slider->have_posts() ) {

			while ( $frhd_post_query_slider->have_posts() ) {

				echo '<article class="swiper-slide">';

				$frhd_post_query_slider->the_post();
				?>
					<div class="frhd__slider-inner-wrap">
						<div class="frhd__post-slider-image">
						<?php
						$frhd_thumb_id = get_post_thumbnail_id( get_the_ID() );
						if ( $frhd_thumb_id ) {

							$frhd_thumb_attach = wp_get_attachment_image_src( $frhd_thumb_id, 'full' );
							$frhd_thumb_alt    = get_post_meta( $frhd_thumb_id, '_wp_attachment_image_alt', true );
							if ( empty( $frhd_thumb_alt ) ) {

								$frhd_thumb_alt = get_the_title();
							}
							echo '<img width="' . esc_attr( $frhd_thumb_attach[1] ) . '" height="' . esc_attr( $frhd_thumb_attach[2] ) . '" src="' . esc_url( $frhd_thumb_attach[0] ) . '" alt="' . esc_attr( $frhd_thumb_alt ) . '" loading="lazy">';
						}
						?>
						</div>
						<div class="frhd__slider-content">
							<?php
							$frhd_post_slider_cat_name = get_the_category( get_the_ID() );
							if ( $frhd_post_slider_cat_name ) {

								echo '<div class="frhd__cat-wrap">';
								foreach ( $frhd_post_slider_cat_name as $frhd_category ) {

									echo '<span class="frhd__slider-cat-name">
											<a href="' . esc_url( get_category_link( $frhd_category->cat_ID ) ) . '">' . esc_html( $frhd_category->cat_name ) . '</a>
										</span>';
								}
								echo '</div>';
							}
							?>
							<h2><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></h2>

							<?php $frhd_excerpt_trimed = wp_trim_words( get_the_excerpt(), 30, '...' ); ?>
							<div class="frhd__post-slider-excerpt">
								<p><?php echo esc_html( $frhd_excerpt_trimed ); ?></p>
							</div>

							<a class="frhd__post-slider-rmbtn" href="<?php echo esc_url( get_the_permalink() ); ?>">Read More</a>

						</div>
					</div>
				</article>
				<?php
			}
				wp_reset_postdata();

		} else {

			return '<p>No posts found!</p>';
		}
		?>
		</div>

	</div>

	<!-- Add Pagination -->
	<div class="swiper-pagination"></div>

	<!-- Add Navigation -->
	<div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div>
</div>
