<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

/**
 * Provide Grid-4 public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @package Post Blcok
 */

$frhd_posts_row_gap                = isset( $frhd_attributes['rowGap'] ) ? $frhd_attributes['rowGap'] : '15';
$frhd_rounded_corner_size          = isset( $frhd_attributes['roundedCornerSize'] ) ? $frhd_attributes['roundedCornerSize'] : '20';
$frhd_post_taxonomy_color          = isset( $frhd_attributes['taxonomyColor'] ) ? $frhd_attributes['taxonomyColor'] : '#f7a000';
$frhd_post_pagination_bg_color     = isset( $frhd_attributes['paginationBGColor'] ) ? $frhd_attributes['paginationBGColor'] : '#3f51b5';
$frhd_post_excerpt_show            = isset( $frhd_attributes['hasPostExcerpt'] ) ? $frhd_attributes['hasPostExcerpt'] : false;
$frhd_reading_time_show            = isset( $frhd_attributes['hasReadTime'] ) ? $frhd_attributes['hasReadTime'] : false;
$frhd_post_reading_time_color      = isset( $frhd_attributes['readingTimeColor'] ) ? $frhd_attributes['readingTimeColor'] : '#ffffff';
$frhd_post_reading_time_icon_color = isset( $frhd_attributes['readingTimeIconColor'] ) ? $frhd_attributes['readingTimeIconColor'] : '#ffffff';
$frhd_post_body_color              = isset( $frhd_attributes['postBodyColor'] ) ? $frhd_attributes['postBodyColor'] : '#3f51b5';
$frhd_post_body_content_color      = isset( $frhd_attributes['bodyContentColor'] ) ? $frhd_attributes['bodyContentColor'] : '#ffffff';
list($r, $g, $b)              = sscanf( $frhd_post_body_color, '#%02x%02x%02x' ); // Converted HEX color to RGB.
$frhd_post_body_color_rgba         = 'rgba(' . $r . ',' . $g . ',' . $b . ', 0.5)';
?>
<style>#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?>{max-width: <?php echo esc_attr( $frhd_block_max_width ); ?> !important;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-block-article {}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-block-article,#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__image-background,#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-article-overlay{border-radius: <?php echo esc_attr( $frhd_rounded_corner_size ); ?>px;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-grid-4.frhd__post-block-container{grid-template-columns: repeat(<?php echo esc_attr( $frhd_post_column ); ?>, 1fr);row-gap: <?php echo esc_attr( $frhd_posts_row_gap ); ?>px;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-title a{font-size: <?php echo esc_attr( $frhd_post_title_font_size ); ?>;font-weight: <?php echo esc_attr( $frhd_post_title_font_weight ); ?>;line-height: <?php echo esc_attr( $frhd_post_title_line_height ); ?>;letter-spacing: <?php echo esc_attr( $frhd_post_title_letter_spacing ); ?>;text-transform: <?php echo esc_attr( $frhd_post_title_text_transform ); ?>;color: <?php echo esc_attr( $frhd_post_title_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-article-overlay{background-color: <?php echo esc_attr( $frhd_post_body_color_rgba ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-block-article:hover .frhd__post-article-overlay{background: <?php echo 'linear-gradient( 0deg , ' . esc_attr( $frhd_post_body_color_rgba ) . ' 0%, ' . esc_attr( $frhd_post_body_color ) . ' 100%) !important;'; ?>}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-block-article:hover .frhd__cat-wrap a{color: <?php echo esc_attr( $frhd_post_taxonomy_color ); ?> !important;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-meta, #frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-meta a{font-size: <?php echo esc_attr( $frhd_post_meta_font_size ); ?>;font-weight: <?php echo esc_attr( $frhd_post_meta_font_weight ); ?>;line-height: <?php echo esc_attr( $frhd_post_meta_line_height ); ?>;letter-spacing: <?php echo esc_attr( $frhd_post_meta_letter_spacing ); ?>;text-transform: <?php echo esc_attr( $frhd_post_meta_text_transform ); ?>;color: <?php echo esc_attr( $frhd_posts_meta_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-meta svg{height: <?php echo esc_attr( $frhd_post_meta_icon_size ); ?>;width: <?php echo esc_attr( $frhd_post_meta_icon_size ); ?>;fill: <?php echo esc_attr( $frhd_posts_meta_icon_color ); ?>}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__post-excerpt p{font-size: <?php echo esc_attr( $frhd_post_desc_font_size ); ?>;color: <?php echo esc_attr( $frhd_post_desc_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__reading-time{font-size: <?php echo esc_attr( $frhd_post_meta_font_size ); ?>;color: <?php echo esc_attr( $frhd_post_reading_time_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__reading-time svg{height: <?php echo esc_attr( $frhd_post_meta_icon_size ); ?>;width: <?php echo esc_attr( $frhd_post_meta_icon_size ); ?>;fill: <?php echo esc_attr( $frhd_post_reading_time_icon_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .page-numbers{font-size: <?php echo esc_attr( $frhd_post_pagi_font_size ); ?>;font-weight: <?php echo esc_attr( $frhd_post_pagi_font_weight ); ?>;color: <?php echo esc_attr( $frhd_post_pagination_num_color ); ?>;background: <?php echo esc_attr( $frhd_post_pagination_bg_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .page-numbers.current{color: <?php echo esc_attr( $frhd_post_pagi_active_num_color ); ?>;background: <?php echo esc_attr( $frhd_post_pagi_active_bg_color ); ?>;}#frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?> .frhd__paginate {text-align: <?php echo esc_attr( $frhd_post_pagination_align ); ?>;}</style>
<div id="frhd__block-id-<?php echo esc_attr( $frhd_block_id ); ?>" class="frhd__post-block-wrapper">
	<div class="frhd__post-block-container frhd__post-grid-4">
		<?php
		while ( $frhd_post_query->have_posts() ) {

			$frhd_post_query->the_post();

			?>
			<article class="frhd__post-block-article">
				<span class="frhd__post-article-overlay"></span>
				<?php
				if ( $frhd_post_thumb_show ) {

					$frhd_thumb_id = get_post_thumbnail_id( get_the_ID() );

					if ( $frhd_thumb_id ) {

						$frhd_thumb_attach = wp_get_attachment_image_src( $frhd_thumb_id, $frhd_post_thumb_size );
						$frhd_thumb_alt    = get_post_meta( $frhd_thumb_id, '_wp_attachment_image_alt', true );
						if ( empty( $frhd_thumb_alt ) ) {

							$frhd_thumb_alt = get_the_title();
						}

						echo '<img width="' . esc_attr( $frhd_thumb_attach[1] ) . '" height="' . esc_attr( $frhd_thumb_attach[2] ) . '" src="' . esc_url( $frhd_thumb_attach[0] ) . '" alt="' . esc_attr( $frhd_thumb_alt ) . '" class="frhd__image-background" loading="lazy">';
					}
				}
				?>
				<div class="frhd__article-body">
					<div class="frhd__post-meta">
						<?php
						if ( $frhd_post_taxonomy_show ) {

							$frhd_category_name = get_the_category( get_the_ID() );
							$frhd_get_cat_list  = get_the_category_list( ',&nbsp;' );
							if ( $frhd_category_name ) {

								echo '<div class="frhd__cat-wrap">' . wp_kses_post( $frhd_get_cat_list ) . '</div>';
							}
						}
						?>
					</div>
					<?php
					if ( $frhd_post_title_show ) {

						echo '<div class="frhd__post-title">
							<' . esc_html( $frhd_post_title_html_tag ) . '><a href="' . esc_url( get_the_permalink() ) . '">' . esc_html( get_the_title() ) . '</a></' . esc_html( $frhd_post_title_html_tag ) . '>
						</div>';
					}
					if ( $frhd_post_date_show ) {

						echo '<time class="frhd__post-date"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M0 464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V192H0v272zm320-196c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM192 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12h-40c-6.6 0-12-5.4-12-12v-40zM64 268c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zm0 128c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM400 64h-48V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H160V16c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v48H48C21.5 64 0 85.5 0 112v48h448v-48c0-26.5-21.5-48-48-48z"></path></svg>&nbsp;' . esc_html( get_the_date() ) . '</time>';
					}
					if ( $frhd_reading_time_show ) {

						// Reading Time.
						$frhd_post_data     = get_post( get_the_ID() );
						$frhd_content_count = str_word_count( wp_strip_all_tags( $frhd_post_data->post_content ) );
						$frhd_reading_time  = ceil( $frhd_content_count / 200 );
						echo '<span class="frhd__reading-time">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"></path>
								</svg>&nbsp;' . esc_html( $frhd_reading_time ) . ' Min Read</span>';
					}
					if ( $frhd_post_excerpt_show ) {

						$frhd_excerpt_trimed = wp_trim_words( get_the_excerpt(), $frhd_posts_excerpt_word_count, '...' );
						echo '<div class="frhd__post-excerpt">
									<p>' . esc_html( $frhd_excerpt_trimed ) . '</p>
								</div>';
					}
					?>
					<div class="frhd__post-bottom">
					<?php
					if ( $frhd_post_author_show ) {

						echo '<div class="frhd__post-author"><img src="' . esc_url( get_avatar_url( get_the_author_meta( 'ID' ) ) ) . '" width="20" height="20">&nbsp;';
						echo '<div><strong>';
						echo esc_url( the_author_posts_link() );
						echo '</strong></div>';
					}
					?>
					</div>
				</div>
			</article>
			<?php

		}
		wp_reset_postdata();
		?>
	</div>
