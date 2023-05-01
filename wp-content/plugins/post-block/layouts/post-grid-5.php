<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

/**
 * Provide Grid-5 public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @package Post Blcok
 */

$frhd_posts_row_gap                = isset( $frhd_attributes['rowGap'] ) ? $frhd_attributes['rowGap'] : '15';
$frhd_rounded_corner_size          = isset( $frhd_attributes['roundedCornerSize'] ) ? $frhd_attributes['roundedCornerSize'] : '5';
$frhd_post_taxonomy_color          = isset( $frhd_attributes['taxonomyColor'] ) ? $frhd_attributes['taxonomyColor'] : '#000000';
$frhd_post_pagination_bg_color     = isset( $frhd_attributes['paginationBGColor'] ) ? $frhd_attributes['paginationBGColor'] : '#03334e';
$frhd_post_excerpt_show            = isset( $frhd_attributes['hasPostExcerpt'] ) ? $frhd_attributes['hasPostExcerpt'] : true;
$frhd_reading_time_show            = isset( $frhd_attributes['hasReadTime'] ) ? $frhd_attributes['hasReadTime'] : true;
$frhd_post_reading_time_color      = isset( $frhd_attributes['readingTimeColor'] ) ? $frhd_attributes['readingTimeColor'] : '#ef5350';
$frhd_post_reading_time_icon_color = isset( $frhd_attributes['readingTimeIconColor'] ) ? $frhd_attributes['readingTimeIconColor'] : '#d32f2f';
$frhd_post_body_color              = isset( $frhd_attributes['postBodyColor'] ) ? $frhd_attributes['postBodyColor'] : '#03334e';
$frhd_post_read_more_custom_txt    = isset( $frhd_attributes['readMoreBtnText'] ) ? $frhd_attributes['readMoreBtnText'] : 'Read More!';
$frhd_post_btn_hover_color         = isset( $frhd_attributes['hoverBtnColor'] ) ? $frhd_attributes['hoverBtnColor'] : '#ef5350';
$frhd_post_btn_hover_txt_color     = isset( $frhd_attributes['hoverBtnTextColor'] ) ? $frhd_attributes['hoverBtnTextColor'] : '#ffffff';
$frhd_post_title_color             = isset( $frhd_attributes['postTitleColor'] ) ? $frhd_attributes['postTitleColor'] : '#ffffff';
$frhd_post_desc_color              = isset( $frhd_attributes['postDescColor'] ) ? $frhd_attributes['postDescColor'] : '#ffffff';
$frhd_post_btn_font_size           = isset( $frhd_attributes['buttonFontSize'] ) ? $frhd_attributes['buttonFontSize'] : '50px';
$frhd_post_btn_txt_color           = isset( $frhd_attributes['postBtnTextColor'] ) ? $frhd_attributes['postBtnTextColor'] : '#03334e';
$frhd_post_btn_color               = isset( $frhd_attributes['postBtnColor'] ) ? $frhd_attributes['postBtnColor'] : '#ffffff';
?>
<style>#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?>{max-width: <?php echo esc_attr( $frhd_block_max_width ); ?> !important;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-block-article,#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__article-anchor {border-radius:<?php echo esc_attr( $frhd_rounded_corner_size ); ?>px;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-grid-5.frhd__post-block-container{grid-template-columns: repeat(<?php echo esc_attr( $frhd_post_column ); ?>, 1fr);row-gap: <?php echo esc_attr( $frhd_posts_row_gap ); ?>px;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__article-body img {border-top-left-radius: <?php echo esc_attr( $frhd_rounded_corner_size ); ?>px;border-top-right-radius: <?php echo esc_attr( $frhd_rounded_corner_size ); ?>px;<?php echo esc_html( $frhd_post_thumb_equal_size_render ); ?>}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__article-overlay {background-color: <?php echo esc_attr( $frhd_post_body_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-title h2 {font-size: <?php echo esc_attr( $frhd_post_title_font_size ); ?>;font-weight: <?php echo esc_attr( $frhd_post_title_font_weight ); ?>;line-height: <?php echo esc_attr( $frhd_post_title_line_height ); ?>;letter-spacing: <?php echo esc_attr( $frhd_post_title_letter_spacing ); ?>;text-transform: <?php echo esc_attr( $frhd_post_title_text_transform ); ?>;color: <?php echo esc_attr( $frhd_post_title_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-excerpt p{font-size: <?php echo esc_attr( $frhd_post_desc_font_size ); ?>;color: <?php echo esc_attr( $frhd_post_desc_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__btn-wrap svg {width: <?php echo esc_attr( $frhd_post_btn_font_size ); ?>;height: <?php echo esc_attr( $frhd_post_btn_font_size ); ?>;fill: <?php echo esc_attr( $frhd_post_btn_txt_color ); ?>;background: <?php echo esc_attr( $frhd_post_btn_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__btn:hover svg {fill: <?php echo esc_attr( $frhd_post_btn_hover_txt_color ); ?>;background: <?php echo esc_attr( $frhd_post_btn_hover_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .page-numbers{font-size: <?php echo esc_attr( $frhd_post_pagi_font_size ); ?>;font-weight: <?php echo esc_attr( $frhd_post_pagi_font_weight ); ?>;color: <?php echo esc_attr( $frhd_post_pagination_num_color ); ?>;background: <?php echo esc_attr( $frhd_post_pagination_bg_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .page-numbers.current{color: <?php echo esc_attr( $frhd_post_pagi_active_num_color ); ?>;background: <?php echo esc_attr( $frhd_post_pagi_active_bg_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__paginate {text-align: <?php echo esc_attr( $frhd_post_pagination_align ); ?>;}</style>
<div id="frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?>" class="frhd__post-block-wrapper">
	<div class="frhd__post-block-container frhd__post-grid-5">
		<?php
		while ( $frhd_post_query->have_posts() ) {

			$frhd_post_query->the_post();

			?>
			<article class="frhd__post-block-article">
				<a href="<?php echo esc_url( get_the_permalink() ); ?>" class="frhd__article-anchor">
					<div class="frhd__article-body">
						<?php
						if ( $frhd_post_thumb_show ) {

							$frhd_thumb_id = get_post_thumbnail_id( get_the_ID() );

							if ( $frhd_thumb_id ) {

								$frhd_thumb_attach = wp_get_attachment_image_src( $frhd_thumb_id, $frhd_post_thumb_size );
								$frhd_thumb_alt    = get_post_meta( $frhd_thumb_id, '_wp_attachment_image_alt', true );
								if ( empty( $frhd_thumb_alt ) ) {

									$frhd_thumb_alt = get_the_title();
								}

								echo '<img width="' . esc_attr( $frhd_thumb_attach[1] ) . '" height="' . esc_attr( $frhd_thumb_attach[2] ) . '" src="' . esc_url( $frhd_thumb_attach[0] ) . '" alt="' . esc_attr( $frhd_thumb_alt ) . '" loading="lazy">';
							}
						}
						?>
					</div>
					<div class="frhd__article-overlay">
						<?php
						if ( $frhd_post_title_show ) {

							echo '<div class="frhd__post-title"><' . esc_html( $frhd_post_title_html_tag ) . '>' . esc_html( get_the_title() ) . '</' . esc_html( $frhd_post_title_html_tag ) . '></div>';
						}

						if ( $frhd_post_excerpt_show ) {

							$frhd_excerpt_trimed = wp_trim_words( get_the_excerpt(), $frhd_posts_excerpt_word_count, '...' );
							echo '<div class="frhd__post-excerpt">
										<p>' . esc_html( $frhd_excerpt_trimed ) . '</p>
									</div>';
						}

						if ( $frhd_post_btn_show ) :
							?>
						<div class="frhd__btn-wrap">
							<div class="frhd__btn">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path></svg>
							</div>
						</div>
						<?php endif; ?>
					</div>
				</a>
			</article>
			<?php

		}
		wp_reset_postdata();
		?>
	</div>
