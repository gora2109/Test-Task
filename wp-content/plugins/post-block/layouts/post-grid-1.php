<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

/**
 * Provide Grid-1 public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @package Post Blcok
 */

$frhd_posts_row_gap                = isset( $frhd_attributes['rowGap'] ) ? $frhd_attributes['rowGap'] : '15';
$frhd_rounded_corner_size          = isset( $frhd_attributes['roundedCornerSize'] ) ? $frhd_attributes['roundedCornerSize'] : '5';
$frhd_post_taxonomy_color          = isset( $frhd_attributes['taxonomyColor'] ) ? $frhd_attributes['taxonomyColor'] : '#000000';
$frhd_post_pagination_bg_color     = isset( $frhd_attributes['paginationBGColor'] ) ? $frhd_attributes['paginationBGColor'] : '#d32f2f';
$frhd_post_excerpt_show            = isset( $frhd_attributes['hasPostExcerpt'] ) ? $frhd_attributes['hasPostExcerpt'] : true;
$frhd_reading_time_show            = isset( $frhd_attributes['hasReadTime'] ) ? $frhd_attributes['hasReadTime'] : true;
$frhd_post_reading_time_color      = isset( $frhd_attributes['readingTimeColor'] ) ? $frhd_attributes['readingTimeColor'] : '#ef5350';
$frhd_post_reading_time_icon_color = isset( $frhd_attributes['readingTimeIconColor'] ) ? $frhd_attributes['readingTimeIconColor'] : '#d32f2f';
$frhd_post_body_color              = isset( $frhd_attributes['postBodyColor'] ) ? $frhd_attributes['postBodyColor'] : '#f5f5f5';
$frhd_post_read_more_custom_txt    = isset( $frhd_attributes['readMoreBtnText'] ) ? $frhd_attributes['readMoreBtnText'] : 'Read More!';
$frhd_post_btn_hover_txt_color     = isset( $frhd_attributes['hoverBtnTextColor'] ) ? $frhd_attributes['hoverBtnTextColor'] : '#ffffff';
$frhd_post_cat_font_size           = isset( $frhd_attributes['catFontSize'] ) ? $frhd_attributes['catFontSize'] : '20px';
?>
<style>#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?>{max-width: <?php echo esc_attr( $frhd_block_max_width ); ?> !important;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-block-article {border-radius:<?php echo esc_attr( $frhd_rounded_corner_size ); ?>px;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__featured-image img {border-top-left-radius: <?php echo esc_attr( $frhd_rounded_corner_size ); ?>px;border-top-right-radius: <?php echo esc_attr( $frhd_rounded_corner_size ); ?>px;<?php echo esc_html( $frhd_post_thumb_equal_size_render ); ?>}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-grid-1.frhd__post-block-container{grid-template-columns: repeat(<?php echo esc_attr( $frhd_post_column ); ?>, 1fr);column-gap: <?php echo esc_attr( $frhd_posts_col_gap ); ?>px;row-gap: <?php echo esc_attr( $frhd_posts_row_gap ); ?>px;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-title a{font-size: <?php echo esc_attr( $frhd_post_title_font_size ); ?>;font-weight: <?php echo esc_attr( $frhd_post_title_font_weight ); ?>;line-height: <?php echo esc_attr( $frhd_post_title_line_height ); ?>;letter-spacing: <?php echo esc_attr( $frhd_post_title_letter_spacing ); ?>;text-transform: <?php echo esc_attr( $frhd_post_title_text_transform ); ?>;color: <?php echo esc_attr( $frhd_post_title_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-block-article{background-color: <?php echo esc_attr( $frhd_post_body_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__cat-name a{font-size:<?php echo esc_attr( $frhd_post_cat_font_size ); ?>;color: <?php echo esc_attr( $frhd_post_taxonomy_color ); ?>;background-color: <?php echo esc_attr( $frhd_post_taxonomy_bg_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-meta, #frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-meta a{font-size: <?php echo esc_attr( $frhd_post_meta_font_size ); ?>;font-weight: <?php echo esc_attr( $frhd_post_meta_font_weight ); ?>;line-height: <?php echo esc_attr( $frhd_post_meta_line_height ); ?>;letter-spacing: <?php echo esc_attr( $frhd_post_meta_letter_spacing ); ?>;text-transform: <?php echo esc_attr( $frhd_post_meta_text_transform ); ?>;color: <?php echo esc_attr( $frhd_posts_meta_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-meta svg{height: <?php echo esc_attr( $frhd_post_meta_icon_size ); ?>;width: <?php echo esc_attr( $frhd_post_meta_icon_size ); ?>;fill: <?php echo esc_attr( $frhd_posts_meta_icon_color ); ?>}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-excerpt p{font-size: <?php echo esc_attr( $frhd_post_desc_font_size ); ?>;color: <?php echo esc_attr( $frhd_post_desc_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-btn a{font-size: <?php echo esc_attr( $frhd_post_btn_font_size ); ?> !important;font-weight: <?php echo esc_attr( $frhd_post_btn_font_weight ); ?>;text-transform: <?php echo esc_attr( $frhd_post_btn_text_transform ); ?>;color: <?php echo esc_attr( $frhd_post_btn_txt_color ); ?>;background: <?php echo esc_attr( $frhd_post_btn_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-grid-1 .frhd__post-btn:hover a{color: <?php echo esc_attr( $frhd_post_btn_hover_txt_color ); ?>;background-color: <?php echo esc_attr( $frhd_post_btn_hover_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__reading-time{font-size: <?php echo esc_attr( $frhd_post_meta_font_size ); ?>;color: <?php echo esc_attr( $frhd_post_reading_time_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__reading-time svg{height: <?php echo esc_attr( $frhd_post_meta_icon_size ); ?>;width: <?php echo esc_attr( $frhd_post_meta_icon_size ); ?>;fill: <?php echo esc_attr( $frhd_post_reading_time_icon_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .page-numbers{font-size: <?php echo esc_attr( $frhd_post_pagi_font_size ); ?>;font-weight: <?php echo esc_attr( $frhd_post_pagi_font_weight ); ?>;color: <?php echo esc_attr( $frhd_post_pagination_num_color ); ?>;background: <?php echo esc_attr( $frhd_post_pagination_bg_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .page-numbers.current{color: <?php echo esc_attr( $frhd_post_pagi_active_num_color ); ?>;background: <?php echo esc_attr( $frhd_post_pagi_active_bg_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__paginate {text-align: <?php echo esc_attr( $frhd_post_pagination_align ); ?>;}</style>
<div id="frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?>" class="frhd__post-block-wrapper" <?php echo esc_attr( $frhd_heart_react_attr ); ?>>
	<div class="frhd__post-block-container frhd__post-grid-1">
		<?php
		while ( $frhd_post_query->have_posts() ) {

			$frhd_post_query->the_post();

			?>
			<article class="frhd__post-block-article">
				<div class="frhd__article-head">
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

								echo '<img width="' . esc_attr( $frhd_thumb_attach[1] ) . '" height="' . esc_attr( $frhd_thumb_attach[2] ) . '" src="' . esc_url( $frhd_thumb_attach[0] ) . '" alt="' . esc_attr( $frhd_thumb_alt ) . '" loading="lazy">';
							}
						}

						if ( $frhd_post_taxonomy_show ) {

							$frhd_category_name = get_the_category( get_the_ID() );
							if ( $frhd_category_name ) {

								echo '<div class="frhd__cat-wrap">';
								foreach ( $frhd_category_name as $frhd_category ) {

									echo '<span class="frhd__cat-name">
											<a href="' . esc_url( get_category_link( $frhd_category->cat_ID ) ) . '">' . esc_html( $frhd_category->cat_name ) . '</a>
										</span>';
								}
								echo '</div>';
							}
						}
						?>
					</div>
				</div>

				<div class="frhd__article-body">
					<div class="frhd__post-meta">
						<?php
						if ( $frhd_post_author_show ) {

							echo '<span class="frhd__post-author"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 96c48.6 0 88 39.4 88 88s-39.4 88-88 88-88-39.4-88-88 39.4-88 88-88zm0 344c-58.7 0-111.3-26.6-146.5-68.2 18.8-35.4 55.6-59.8 98.5-59.8 2.4 0 4.8.4 7.1 1.1 13 4.2 26.6 6.9 40.9 6.9 14.3 0 28-2.7 40.9-6.9 2.3-.7 4.7-1.1 7.1-1.1 42.9 0 79.7 24.4 98.5 59.8C359.3 421.4 306.7 448 248 448z"></path></svg>';
							echo esc_url( the_author_posts_link() );
							echo '</span>';
						}

						if ( $frhd_post_date_show ) {

							echo '<time class="frhd__post-date" datetime="' . esc_attr( get_the_date( 'c' ) ) . '"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path></svg>' . esc_html( get_the_date() ) . '</time>';
						}

						if ( $frhd_post_comment_show ) {

							echo '<span class="frhd__post-comment"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256 32C114.6 32 0 125.1 0 240c0 49.6 21.4 95 57 130.7C44.5 421.1 2.7 466 2.2 466.5c-2.2 2.3-2.8 5.7-1.5 8.7S4.8 480 8 480c66.3 0 116-31.8 140.6-51.4 32.7 12.3 69 19.4 107.4 19.4 141.4 0 256-93.1 256-208S397.4 32 256 32zM128 272c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm128 0c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32z"></path></svg>' . esc_html( get_comments_number() ) . '</span>';
						}

						if ( $frhd_post_view_count ) {

							$get_post_view_count        = get_post_meta( get_the_ID(), 'post_views_count', true );
							$frhd_post_view_total_count = empty( $get_post_view_count ) ? 0 : $get_post_view_count;
							echo '<span class="frhd__post-view"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"></path></svg>' . esc_html( $frhd_post_view_total_count ) . '</span>';
						}
						?>
					</div>
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
					<div class="frhd__post-btn">
					<?php
					if ( $frhd_post_btn_show ) {

						echo '<a href="' . esc_url( get_the_permalink() ) . '">' . esc_html( $frhd_post_read_more_custom_txt ) . '</a>';
					}
					if ( $frhd_reading_time_show ) {

						// Reading Time.
						$frhd_post_data     = get_post( get_the_ID() );
						$frhd_content_count = str_word_count( wp_strip_all_tags( $frhd_post_data->post_content ) );
						$frhd_reading_time  = ceil( $frhd_content_count / 200 );
						echo '<span class="frhd__reading-time">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"></path>
								</svg>' . esc_html( $frhd_reading_time ) . ' Min Read</span>';
					}
					?>
					</div>
				</div>
			</article>
			<?php

		}
		wp_reset_postdata();
		?>

		<!-- <div id="frhd__page-loader">
			<div class="frhd__page-loader-inner">
				<h3>Loading page...</h3>
				<img src="http://css-tricks.com/examples/PageLoadLightBox/loader.gif" alt="loader">
				<p><small>...nothing is actually loading, this is just an example.  Click Run in JSFiddle to get back.<br>
				For a real case, replace the href link with a real link.</small></p>
			</div>
		</div> -->
	</div>
