<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

/**
 * Provide Grid-6 public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @package Post Block
 */
$frhd_post_column                  = isset( $frhd_attributes['postCol'] ) ? $frhd_attributes['postCol'] : '2';
$frhd_posts_row_gap                = isset( $frhd_attributes['rowGap'] ) ? $frhd_attributes['rowGap'] : '15';
$frhd_rounded_corner_size          = isset( $frhd_attributes['roundedCornerSize'] ) ? $frhd_attributes['roundedCornerSize'] : '5';
$frhd_post_taxonomy_color          = isset( $frhd_attributes['taxonomyColor'] ) ? $frhd_attributes['taxonomyColor'] : '#000000';
$frhd_post_pagination_bg_color     = isset( $frhd_attributes['paginationBGColor'] ) ? $frhd_attributes['paginationBGColor'] : '#371f0e';
$frhd_post_excerpt_show            = isset( $frhd_attributes['hasPostExcerpt'] ) ? $frhd_attributes['hasPostExcerpt'] : true;
$frhd_reading_time_show            = isset( $frhd_attributes['hasReadTime'] ) ? $frhd_attributes['hasReadTime'] : true;
$frhd_post_reading_time_color      = isset( $frhd_attributes['readingTimeColor'] ) ? $frhd_attributes['readingTimeColor'] : '#ef5350';
$frhd_post_reading_time_icon_color = isset( $frhd_attributes['readingTimeIconColor'] ) ? $frhd_attributes['readingTimeIconColor'] : '#d32f2f';
$frhd_post_body_color              = isset( $frhd_attributes['postBodyColor'] ) ? $frhd_attributes['postBodyColor'] : '#f5f5f5';
$frhd_post_read_more_custom_txt    = isset( $frhd_attributes['readMoreBtnText'] ) ? $frhd_attributes['readMoreBtnText'] : 'Read More!';
$frhd_post_btn_hover_txt_color     = isset( $frhd_attributes['hoverBtnTextColor'] ) ? $frhd_attributes['hoverBtnTextColor'] : '#ffffff';
$frhd_posts_excerpt_word_count     = isset( $frhd_attributes['excerptWordCount'] ) ? $frhd_attributes['excerptWordCount'] : '12';
$frhd_post_meta_line_height        = isset( $frhd_attributes['metaLineHeight'] ) ? $frhd_attributes['metaLineHeight'] : '20px';
?>
<style>#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?>{max-width: <?php echo esc_attr( $frhd_block_max_width ); ?> !important;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-block-article {border-radius:<?php echo esc_attr( $frhd_rounded_corner_size ); ?>px;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__featured-image img {border-top-left-radius: <?php echo esc_attr( $frhd_rounded_corner_size ); ?>px;border-top-right-radius: <?php echo esc_attr( $frhd_rounded_corner_size ); ?>px;<?php echo esc_html( $frhd_post_thumb_equal_size_render ); ?>}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-grid-6.frhd__post-block-container{grid-template-columns: repeat(<?php echo esc_attr( $frhd_post_column ); ?>, 1fr);row-gap: <?php echo esc_attr( $frhd_posts_row_gap ); ?>px;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-title a{font-size: <?php echo esc_attr( $frhd_post_title_font_size ); ?>;font-weight: <?php echo esc_attr( $frhd_post_title_font_weight ); ?>;line-height: <?php echo esc_attr( $frhd_post_title_line_height ); ?>;letter-spacing: <?php echo esc_attr( $frhd_post_title_letter_spacing ); ?>;text-transform: <?php echo esc_attr( $frhd_post_title_text_transform ); ?>;color: <?php echo esc_attr( $frhd_post_title_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-block-article{background-color: <?php echo esc_attr( $frhd_post_body_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__cat-name a{color: <?php echo esc_attr( $frhd_post_taxonomy_color ); ?>;background-color: <?php echo esc_attr( $frhd_post_taxonomy_bg_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-meta, #frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-meta a{font-size: <?php echo esc_attr( $frhd_post_meta_font_size ); ?>;font-weight: <?php echo esc_attr( $frhd_post_meta_font_weight ); ?>;line-height: <?php echo esc_attr( $frhd_post_meta_line_height ); ?>;letter-spacing: <?php echo esc_attr( $frhd_post_meta_letter_spacing ); ?>;text-transform: <?php echo esc_attr( $frhd_post_meta_text_transform ); ?>;color: <?php echo esc_attr( $frhd_posts_meta_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-meta svg{height: <?php echo esc_attr( $frhd_post_meta_icon_size ); ?>;width: <?php echo esc_attr( $frhd_post_meta_icon_size ); ?>;fill: <?php echo esc_attr( $frhd_posts_meta_icon_color ); ?>}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-excerpt p{font-size: <?php echo esc_attr( $frhd_post_desc_font_size ); ?>;color: <?php echo esc_attr( $frhd_post_desc_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-btn a{font-size: <?php echo esc_attr( $frhd_post_btn_font_size ); ?> !important;font-weight: <?php echo esc_attr( $frhd_post_btn_font_weight ); ?>;text-transform: <?php echo esc_attr( $frhd_post_btn_text_transform ); ?>;color: <?php echo esc_attr( $frhd_post_btn_txt_color ); ?>;background: <?php echo esc_attr( $frhd_post_btn_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-grid-6 .frhd__post-btn:hover a{color: <?php echo esc_attr( $frhd_post_btn_hover_txt_color ); ?>;background-color: <?php echo esc_attr( $frhd_post_btn_hover_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__reading-time{font-size: <?php echo esc_attr( $frhd_post_meta_font_size ); ?>;color: <?php echo esc_attr( $frhd_post_reading_time_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__reading-time svg{height: <?php echo esc_attr( $frhd_post_meta_icon_size ); ?>;width: <?php echo esc_attr( $frhd_post_meta_icon_size ); ?>;fill: <?php echo esc_attr( $frhd_post_reading_time_icon_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .page-numbers{font-size: <?php echo esc_attr( $frhd_post_pagi_font_size ); ?>;font-weight: <?php echo esc_attr( $frhd_post_pagi_font_weight ); ?>;color: <?php echo esc_attr( $frhd_post_pagination_num_color ); ?>;background: <?php echo esc_attr( $frhd_post_pagination_bg_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .page-numbers.current{color: <?php echo esc_attr( $frhd_post_pagi_active_num_color ); ?>;background: <?php echo esc_attr( $frhd_post_pagi_active_bg_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__paginate {text-align: <?php echo esc_attr( $frhd_post_pagination_align ); ?>;}</style>
<div id="frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?>" class="frhd__post-block-wrapper">
	<div class="frhd__post-block-container frhd__post-grid-6">
		<?php
		while ( $frhd_post_query->have_posts() ) {

			$frhd_post_query->the_post();

			?>
			<article class="frhd__post-block-article">
				<div class="frhd__featured-image">
					<?php
					if ( $frhd_post_thumb_show ) {

						$frhd_thumb_id = get_post_thumbnail_id( get_the_ID() );

						if ( $frhd_thumb_id ) {

							$frhd_thumb_attach = wp_get_attachment_image_src( $frhd_thumb_id, $frhd_post_thumb_size );
							$frhd_thumb_alt    = get_post_meta( $frhd_thumb_id, '_wp_attachment_image_alt', true );
							if ( empty( $frhd_thumb_alt ) ) {

								$frhd_thumb_alt = get_the_title();
							}

							echo '<a href="' . esc_url( get_the_permalink() ) . '"><img width="' . esc_attr( $frhd_thumb_attach[1] ) . '" height="' . esc_attr( $frhd_thumb_attach[2] ) . '" src="' . esc_url( $frhd_thumb_attach[0] ) . '" alt="' . esc_attr( $frhd_thumb_alt ) . '" loading="lazy"></a>';
						}
					}
					?>
				</div>

				<div class="frhd__article-body">
					<div class="frhd__article-body-content">
					<?php
					if ( $frhd_post_title_show ) {

						echo '<div class="frhd__post-title">
							<' . esc_html( $frhd_post_title_html_tag ) . '><a href="' . esc_url( get_the_permalink() ) . '">' . esc_html( get_the_title() ) . '</a></' . esc_html( $frhd_post_title_html_tag ) . '>
						</div>';
					}

					if ( $frhd_post_excerpt_show ) {

						$frhd_excerpt_trimed = wp_trim_words( get_the_excerpt(), $frhd_posts_excerpt_word_count, '...' );
						echo '<div class="frhd__post-excerpt">
									<p>' . esc_html( $frhd_excerpt_trimed ) . '</p>
								</div>';
					}
					?>
					</div>
					<div class="frhd__article-body-meta">
						<div class="frhd__post-meta">
							<?php
							if ( $frhd_post_date_show ) {

								echo 'Posted on <time datetime="' . esc_attr( get_the_date( 'c' ) ) . '">' . esc_html( get_the_date() ) . '</time>';
							}
							if ( $frhd_post_author_show ) {

								echo ' by ';
								echo esc_url( the_author_posts_link() );
							}
							if ( $frhd_post_taxonomy_show ) {

								$frhd_category_name = get_the_category( get_the_ID() );
								$frhd_get_cat_list  = get_the_category_list( ',&nbsp;' );
								if ( $frhd_category_name ) {

									echo '<div class="frhd__cat-wrap">&nbsp;in&nbsp;' . wp_kses_post( $frhd_get_cat_list ) . '</div>';
								}
							}
							?>
						</div>
					</div>
				</div>
			</article>
			<?php

		}
		wp_reset_postdata();
		?>
	</div>
