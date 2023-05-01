<?php
/**
 * Plugin Name: FancyPost - Gutenberg Post Blocks
 * Plugin URI: https://pluginic.com/plugins/gutenberg-post-blocks/
 * Description: A beautiful post layouts block to showcase your posts in grid and list layout with multiple templates availability.
 * Author: Pluginic
 * Author URI: https://pluginic.com/
 * Version: 5.3.1
 * License: GPL2+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 *
 * Text Domain: post-block
 */

/**
 * Renders the post block on server.
 *
 * @param Array $frhd_attributes Get attribute from index.js.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'POST_BLOCK_VERSION', '5.3.1' );
define( 'FPPB_URL', plugin_dir_url( __FILE__ ) );
define( 'POST_BLOCK_DIR', plugin_dir_path( __FILE__ ) );

/**
 * Get Block Posts Attributes.
 *
 * @param Mixed $frhd_attributes Get attributes from block settings.
 * @return HTML
 */
function frhd_render_block_core( $frhd_attributes ) {

	// Get attributes value from editor page.
	$frhd_block_id                   = isset( $frhd_attributes['id'] ) ? $frhd_attributes['id'] : '0';
	$frhd_post_layout                = isset( $frhd_attributes['postLayout'] ) ? $frhd_attributes['postLayout'] : 'grid1';
	$frhd_block_max_width            = isset( $frhd_attributes['maxWidth'] ) ? $frhd_attributes['maxWidth'] : '1140px';
	$frhd_post_column                = isset( $frhd_attributes['postCol'] ) ? $frhd_attributes['postCol'] : '3';
	$frhd_post_title_color           = isset( $frhd_attributes['postTitleColor'] ) ? $frhd_attributes['postTitleColor'] : '#371f0e';
	$frhd_posts_meta_color           = isset( $frhd_attributes['postMetaColor'] ) ? $frhd_attributes['postMetaColor'] : '#424242';
	$frhd_posts_meta_icon_color      = isset( $frhd_attributes['postMetaIconColor'] ) ? $frhd_attributes['postMetaIconColor'] : '#424242';
	$frhd_post_taxonomy_bg_color     = isset( $frhd_attributes['taxonomyBGcolor'] ) ? $frhd_attributes['taxonomyBGcolor'] : '#ffc107';
	$frhd_post_desc_color            = isset( $frhd_attributes['postDescColor'] ) ? $frhd_attributes['postDescColor'] : '#4b4f58';
	$frhd_post_btn_txt_color         = isset( $frhd_attributes['postBtnTextColor'] ) ? $frhd_attributes['postBtnTextColor'] : '#ffffff';
	$frhd_post_btn_color             = isset( $frhd_attributes['postBtnColor'] ) ? $frhd_attributes['postBtnColor'] : '#d32f2f';
	$frhd_post_btn_hover_color       = isset( $frhd_attributes['hoverBtnColor'] ) ? $frhd_attributes['hoverBtnColor'] : '#ef5350';
	$frhd_post_pagination_num_color  = isset( $frhd_attributes['paginationNumColor'] ) ? $frhd_attributes['paginationNumColor'] : '#ffffff';
	$frhd_post_pagi_active_num_color = isset( $frhd_attributes['pagiActiveNumColor'] ) ? $frhd_attributes['pagiActiveNumColor'] : '#ffffff';
	$frhd_post_pagi_active_bg_color  = isset( $frhd_attributes['pagiActiveBGColor'] ) ? $frhd_attributes['pagiActiveBGColor'] : '#c1c1c1';
	$frhd_post_pagi_font_size        = isset( $frhd_attributes['paginationFontSize'] ) ? $frhd_attributes['paginationFontSize'] : '17px';
	$frhd_post_pagi_font_weight      = isset( $frhd_attributes['paginationFontWeight'] ) ? $frhd_attributes['paginationFontWeight'] : 'normal';
	$frhd_posts_per_page             = isset( $frhd_attributes['postsPerPage'] ) ? $frhd_attributes['postsPerPage'] : '6';
	$frhd_post_categories            = isset( $frhd_attributes['theCategories'] ) ? $frhd_attributes['theCategories'] : 'random';
	$frhd_post_order                 = isset( $frhd_attributes['postOrder'] ) ? $frhd_attributes['postOrder'] : 'DESC';
	$frhd_post_order_by              = isset( $frhd_attributes['postOrderBy'] ) ? $frhd_attributes['postOrderBy'] : 'date';
	$frhd_post_thumb_size            = isset( $frhd_attributes['postThumbSize'] ) ? $frhd_attributes['postThumbSize'] : 'medium_large';
	$frhd_posts_col_gap              = isset( $frhd_attributes['colGap'] ) ? $frhd_attributes['colGap'] : '15';
	$frhd_posts_excerpt_word_count   = isset( $frhd_attributes['excerptWordCount'] ) ? $frhd_attributes['excerptWordCount'] : '19';
	$frhd_post_title_html_tag        = isset( $frhd_attributes['postTitleTag'] ) ? $frhd_attributes['postTitleTag'] : 'h2';
	$frhd_post_pagination_align      = isset( $frhd_attributes['paginationAlign'] ) ? $frhd_attributes['paginationAlign'] : 'left';
	$frhd_post_thumb_show            = isset( $frhd_attributes['hasPostThumb'] ) ? $frhd_attributes['hasPostThumb'] : true;
	$frhd_post_title_show            = isset( $frhd_attributes['hasPostTitle'] ) ? $frhd_attributes['hasPostTitle'] : true;
	$frhd_post_author_show           = isset( $frhd_attributes['hasPostAuthor'] ) ? $frhd_attributes['hasPostAuthor'] : true;
	$frhd_post_date_show             = isset( $frhd_attributes['hasPostDate'] ) ? $frhd_attributes['hasPostDate'] : true;
	$frhd_post_comment_show          = isset( $frhd_attributes['hasPostComment'] ) ? $frhd_attributes['hasPostComment'] : false;
	$frhd_post_taxonomy_show         = isset( $frhd_attributes['hasPostTaxonomy'] ) ? $frhd_attributes['hasPostTaxonomy'] : true;
	$frhd_post_btn_show              = isset( $frhd_attributes['hasPostbtn'] ) ? $frhd_attributes['hasPostbtn'] : true;
	$frhd_post_pagination            = isset( $frhd_attributes['hasPostPagin'] ) ? $frhd_attributes['hasPostPagin'] : true;
	$frhd_post_query_offset          = isset( $frhd_attributes['queryOffset'] ) ? $frhd_attributes['queryOffset'] : 0;
	$frhd_post_pagination_limit      = isset( $frhd_attributes['paginationLimit'] ) ? $frhd_attributes['paginationLimit'] : '';
	$frhd_has_prev_next_btn          = isset( $frhd_attributes['hasPagPrevNextBtn'] ) ? $frhd_attributes['hasPagPrevNextBtn'] : true;
	$frhd_prev_btn_text              = isset( $frhd_attributes['pagPrevBtnText'] ) ? $frhd_attributes['pagPrevBtnText'] : '«';
	$frhd_next_btn_text              = isset( $frhd_attributes['pagNextBtnText'] ) ? $frhd_attributes['pagNextBtnText'] : '»';
	$frhd_post_view_count            = isset( $frhd_attributes['hasViewCount'] ) ? $frhd_attributes['hasViewCount'] : true;
	$frhd_post_title_font_size       = isset( $frhd_attributes['titleFontSize'] ) ? $frhd_attributes['titleFontSize'] : '22px';
	$frhd_post_title_font_weight     = isset( $frhd_attributes['titleFontWeight'] ) ? $frhd_attributes['titleFontWeight'] : 'bold';
	$frhd_post_title_line_height     = isset( $frhd_attributes['titleLineHeight'] ) ? $frhd_attributes['titleLineHeight'] : '28px';
	$frhd_post_title_letter_spacing  = isset( $frhd_attributes['titleLetterSpacing'] ) ? $frhd_attributes['titleLetterSpacing'] : '0px';
	$frhd_post_title_text_transform  = isset( $frhd_attributes['titleTextTransform'] ) ? $frhd_attributes['titleTextTransform'] : 'inherit';
	$frhd_post_meta_font_size        = isset( $frhd_attributes['metaFontSize'] ) ? $frhd_attributes['metaFontSize'] : '16px';
	$frhd_post_meta_font_weight      = isset( $frhd_attributes['metaFontWeight'] ) ? $frhd_attributes['metaFontWeight'] : 'normal';
	$frhd_post_meta_line_height      = isset( $frhd_attributes['metaLineHeight'] ) ? $frhd_attributes['metaLineHeight'] : '16px';
	$frhd_post_meta_letter_spacing   = isset( $frhd_attributes['metaLetterSpacing'] ) ? $frhd_attributes['metaLetterSpacing'] : '0px';
	$frhd_post_meta_text_transform   = isset( $frhd_attributes['metaTextTransform'] ) ? $frhd_attributes['metaTextTransform'] : 'inherit';
	$frhd_post_meta_icon_size        = isset( $frhd_attributes['metaIconSize'] ) ? $frhd_attributes['metaIconSize'] : '15px';
	$frhd_post_desc_font_size        = isset( $frhd_attributes['descFontSize'] ) ? $frhd_attributes['descFontSize'] : '19px';
	$frhd_post_btn_font_size         = isset( $frhd_attributes['buttonFontSize'] ) ? $frhd_attributes['buttonFontSize'] : '16px';
	$frhd_post_btn_font_weight       = isset( $frhd_attributes['buttonFontWeight'] ) ? $frhd_attributes['buttonFontWeight'] : 'normal';
	$frhd_post_btn_text_transform    = isset( $frhd_attributes['buttonTextTransform'] ) ? $frhd_attributes['buttonTextTransform'] : 'inherit';
	$frhd_post_thumb_equal_show      = isset( $frhd_attributes['hasEqualHeight'] ) ? $frhd_attributes['hasEqualHeight'] : false;
	$frhd_post_thumb_equal_size      = isset( $frhd_attributes['equalHeightSize'] ) ? $frhd_attributes['equalHeightSize'] : '200px';

	/**
	 * Plugin Settings Global.
	 */
	$frhdpb_plugin_settings             = ( ! empty( get_option( 'frhd-pb-plugin-settings' ) ) ) ? (array) get_option( 'frhd-pb-plugin-settings' ) : '';
	$frhdpb_plugin_settings_heart_react = isset( $frhdpb_plugin_settings['frhd_pb_heart_react'] ) ? $frhdpb_plugin_settings['frhd_pb_heart_react'] : '';

	/**
	 * Heart React Attribute.
	 */
	$frhd_heart_react_attr = '';
	if ( '1' == $frhdpb_plugin_settings_heart_react ) {

		$frhd_heart_react_attr = 'data-hr="true"';
	}

	$frhd_post_thumb_equal_size_render = '';
	if ( $frhd_post_thumb_equal_show ) {

		$frhd_post_thumb_equal_size_render = 'max-height:' . $frhd_post_thumb_equal_size . ';';
	}

	// Protect against arbitrary paged values.
	if ( is_front_page() ) {

		$frhd_paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
	} else {

		$frhd_paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	}

	// Pagination working with offset.
	$frhd_post_query_offset_rend = ( $frhd_paged - 1 ) * $frhd_posts_per_page + $frhd_post_query_offset;

	$frhd_query_args = array(
		'posts_per_page' => $frhd_posts_per_page,
		'post_status'    => 'publish',
		'post_type'      => 'post',
		'cat'            => $frhd_post_categories,
		'order'          => $frhd_post_order,
		'orderby'        => $frhd_post_order_by,
		'paged'          => $frhd_paged,
		'offset'         => $frhd_post_query_offset_rend,
	);

	$frhd_post_query = new WP_Query( $frhd_query_args );

	if ( $frhd_post_query->have_posts() ) {

		ob_start(); // Turn on output buffering.

		switch ( $frhd_post_layout ) {

			case 'grid1':
				require POST_BLOCK_DIR . 'layouts/post-grid-1.php';
				wp_enqueue_style( 'post-grid-1' );
				break;

			case 'grid2':
				require POST_BLOCK_DIR . 'layouts/post-grid-2.php';
				wp_enqueue_style( 'post-grid-2' );
				break;

			case 'grid3':
				require POST_BLOCK_DIR . 'layouts/post-grid-3.php';
				wp_enqueue_style( 'post-grid-3' );
				break;

			case 'grid4':
				require POST_BLOCK_DIR . 'layouts/post-grid-4.php';
				wp_enqueue_style( 'post-grid-4' );
				break;

			case 'grid5':
				require POST_BLOCK_DIR . 'layouts/post-grid-5.php';
				wp_enqueue_style( 'post-grid-5' );
				break;

			case 'grid6':
				require POST_BLOCK_DIR . 'layouts/post-grid-6.php';
				wp_enqueue_style( 'post-grid-6' );
				break;
		}

		// Pagination.
		if ( $frhd_post_pagination ) {

			$frhd_big = 999999999; // Need an unlikely integer.

			if ( $frhd_post_pagination_limit ) {

				$frhd_page_limit = min( $frhd_post_pagination_limit, $frhd_post_query->max_num_pages );
			} else {

				$frhd_page_limit = max( 1, $frhd_post_query->max_num_pages );
			}
			$frhd_page_limit = isset( $frhd_page_limit ) ? $frhd_page_limit : $frhd_posts_per_page;

			echo '<div class="frhd__paginate">';
			$frhd_arg = array(
				'base'      => str_replace( $frhd_big, '%#%', esc_url( get_pagenum_link( $frhd_big ) ) ),
				'format'    => '?paged=%#%',
				'current'   => $frhd_paged,
				'total'     => $frhd_page_limit,
				'prev_next' => $frhd_has_prev_next_btn,
				'prev_text' => $frhd_prev_btn_text,
				'next_text' => $frhd_next_btn_text,
			);
			echo wp_kses_post( paginate_links( $frhd_arg ) );
			echo '</div>'; // frhd__paginate.
		}
		echo '</div>'; // frhd__post-block-wrapper.

		return ob_get_clean(); // Turn off ouput buffer and print output.

	} else {

		return '<p>' . __( 'No posts found!', 'post-block' ) . '</p>';
	}

}

/**
 * Register Block and initial setupment.
 *
 * @return void
 */
function frhd_register_block() {

	// Automatically load dependencies and version.
	$frhd_asset_file = include POST_BLOCK_DIR . 'build/index.asset.php';

	wp_register_script(
		'post-block-esnext',
		plugins_url( 'build/index.js', __FILE__ ),
		$frhd_asset_file['dependencies'],
		filemtime( POST_BLOCK_DIR . 'build/index.js' ),
		true
	);

	wp_register_style(
		'post-block-editor',
		plugins_url( 'src/editor.css', __FILE__ ),
		array( 'wp-edit-blocks' ),
		filemtime( POST_BLOCK_DIR . 'src/editor.css' )
	);

	wp_register_style(
		'post-block-css',
		plugins_url( 'src/style.css', __FILE__ ),
		array(),
		filemtime( POST_BLOCK_DIR . 'src/style.css' )
	);

	wp_register_script(
		'post-block-js',
		plugins_url( 'src/script.js', __FILE__ ),
		array( 'jquery' ),
		filemtime( POST_BLOCK_DIR . 'src/script.js' ),
		true
	);

	$frhdpb_args = array(
		'api_version'     => 2,
		'style'           => 'post-block-css',
		'script'          => 'post-block-js',
		'editor_style'    => 'post-block-editor',
		'editor_script'   => 'post-block-esnext',
		'render_callback' => 'frhd_render_block_core',
	);

	register_block_type(
		'gutenberg-post-view/post-block',
		$frhdpb_args
	);

	/**
	 * Initialize Post Group.
	 */
	include_once POST_BLOCK_DIR . 'src/block-post-cat/index.php';

	/**
	 * Initialize Post Trisec.
	 */
	include_once POST_BLOCK_DIR . 'src/block-post-trisec/index.php';

	/**
	 * Initialize Post Slider.
	 */
	include_once POST_BLOCK_DIR . 'src/block-post-slider/index.php';

}
add_action( 'init', 'frhd_register_block' );

/**
 * Get Block Post Group Attributes.
 *
 * @param Mixed $frhd_attributes Get attributes from block settings.
 * @return HTML
 */
function frhd_render_block_catpost( $frhd_attributes ) {

	ob_start(); // Turn on output buffering.

	require POST_BLOCK_DIR . 'layouts/post-group-1.php';

	return ob_get_clean(); // Turn off ouput buffer and print output.

}

/**
 * Get Block Post Trisec Attributes.
 *
 * @param Mixed $frhd_attributes Get attributes from block settings.
 * @return HTML
 */
function frhd_render_block_trisec( $frhd_attributes ) {

	ob_start(); // Turn on output buffering.

	require POST_BLOCK_DIR . 'layouts/post-trisec-1.php';

	return ob_get_clean(); // Turn off ouput buffer and print output.

}

/**
 * Get Block Post Slider Attributes.
 *
 * @param Mixed $frhd_attributes Get attributes from block settings.
 * @return HTML
 */
function frhd_render_block_slider( $frhd_attributes ) {

	ob_start(); // Turn on output buffering.

	require POST_BLOCK_DIR . 'layouts/post-slider-1.php';

	return ob_get_clean(); // Turn off ouput buffer and print output.

}

/**
 * Set post views count using post meta.
 *
 * @param Number $frhd_the_post_id The post ID.
 * @return void
 */
function frhd_set_post_views( $frhd_the_post_id ) {

	$frhd_key_count = 'post_views_count';
	$frhd_count     = get_post_meta( $frhd_the_post_id, $frhd_key_count, true );
	if ( '' === $frhd_count ) {

		$frhd_count = 0;
		delete_post_meta( $frhd_the_post_id, $frhd_key_count );
		add_post_meta( $frhd_the_post_id, $frhd_key_count, '0' );
	} else {

		$frhd_count++;
		update_post_meta( $frhd_the_post_id, $frhd_key_count, $frhd_count );
	}
}

/**
 * Execute post views count using post meta.
 *
 * @param Mix $content The content.
 * @return void
 */
function frhd_set_mod_views( $content ) {

	if ( is_single() ) {

		if ( ! isset( $_SESSION['hasVisited'] ) ) {

			frhd_set_post_views( get_the_ID() );

			$_SESSION['hasVisited'] = 'Visited!';
		}
	}
}
add_filter( 'wp_head', 'frhd_set_mod_views' );

/**
 * Calling The Admin Options.
 */
require_once POST_BLOCK_DIR . 'post-block-admin-options.php';

/**
 * Enqueue styles for layout.
 */
function frhd_enqueue_layout_scripts() {

	wp_register_style( 'post-grid-1', plugin_dir_url( __FILE__ ) . 'layouts/assets/post-grid-1.css', array( 'post-block-css' ), POST_BLOCK_VERSION );

	wp_register_style( 'post-grid-2', plugin_dir_url( __FILE__ ) . 'layouts/assets/post-grid-2.css', array( 'post-block-css' ), POST_BLOCK_VERSION );

	wp_register_style( 'post-grid-3', plugin_dir_url( __FILE__ ) . 'layouts/assets/post-grid-3.css', array( 'post-block-css' ), POST_BLOCK_VERSION );

	wp_register_style( 'post-grid-4', plugin_dir_url( __FILE__ ) . 'layouts/assets/post-grid-4.css', array( 'post-block-css' ), POST_BLOCK_VERSION );

	wp_register_style( 'post-grid-5', plugin_dir_url( __FILE__ ) . 'layouts/assets/post-grid-5.css', array( 'post-block-css' ), POST_BLOCK_VERSION );

	wp_register_style( 'post-grid-6', plugin_dir_url( __FILE__ ) . 'layouts/assets/post-grid-6.css', array( 'post-block-css' ), POST_BLOCK_VERSION );
}
add_action( 'wp_enqueue_scripts', 'frhd_enqueue_layout_scripts' );

/**
 * Custom Category For FancyPost
 */
function frhd_register_layout_category( $categories ) {

	$categories[] = array(
		'slug'  => 'fancypost',
		'title' => 'FancyPost | Gutenberg Post Blocks',
		'icon'  => 'fancypost-icon',
	);

	return $categories;
}
if ( version_compare( get_bloginfo( 'version' ), '5.8', '>=' ) ) {
	add_filter( 'block_categories_all', 'frhd_register_layout_category' );
} else {
	add_filter( 'block_categories', 'frhd_register_layout_category' );
}

/**
 * On Plugin Activation.
 */
function frhdpb_activation_redirect( $plugin ) {

	if ( $plugin == plugin_basename( __FILE__ ) ) {

		// Set default value to global settings.
		$frhdpb_global_settings_default = array(
			'frhd_pb_post_block'   => '1',
			'frhd_pb_post_slider'  => '1',
			'frhd_pb_post_trisect' => '1',
			'frhd_pb_post_group'   => '1',
		);
		update_option( 'frhd-pb-plugin-settings', $frhdpb_global_settings_default );

		// Redirect to getting started page after plugin activation.
		exit( esc_url( wp_safe_redirect( admin_url( 'admin.php?page=fancypost-init' ) ) ) );
	}
}
add_action( 'activated_plugin', 'frhdpb_activation_redirect' );

/**
 * Remove Block from Global Settings.
 *
 * @param Array $allowed_blocks Allowed blocks.
 * @return Array
 */
function frhd_global_unset_blocks( $allowed_blocks ) {

	// Get all the registered blocks.
	$blocks = WP_Block_Type_Registry::get_instance()->get_all_registered();

	/**
	 * Plugin Settings Global.
	 */
	$frhdpb_plugin_settings              = ( ! empty( get_option( 'frhd-pb-plugin-settings' ) ) ) ? (array) get_option( 'frhd-pb-plugin-settings' ) : '';
	$frhdpb_plugin_settings_post_block   = isset( $frhdpb_plugin_settings['frhd_pb_post_block'] ) ? $frhdpb_plugin_settings['frhd_pb_post_block'] : '';
	$frhdpb_plugin_settings_post_slider  = isset( $frhdpb_plugin_settings['frhd_pb_post_slider'] ) ? $frhdpb_plugin_settings['frhd_pb_post_slider'] : '';
	$frhdpb_plugin_settings_post_trisect = isset( $frhdpb_plugin_settings['frhd_pb_post_trisect'] ) ? $frhdpb_plugin_settings['frhd_pb_post_trisect'] : '';
	$frhdpb_plugin_settings_post_group   = isset( $frhdpb_plugin_settings['frhd_pb_post_group'] ) ? $frhdpb_plugin_settings['frhd_pb_post_group'] : '';
	$frhdpb_plugin_settings_post_cat     = isset( $frhdpb_plugin_settings['frhd_pb_post_cat'] ) ? $frhdpb_plugin_settings['frhd_pb_post_cat'] : '';

	// Set/Unset blocks through global settings.
	if ( ! $frhdpb_plugin_settings_post_block ) {
		unset( $blocks['gutenberg-post-view/post-block'] ); }
	if ( ! $frhdpb_plugin_settings_post_slider ) {
		unset( $blocks['slider-post-view/post-slider'] ); }
	if ( ! $frhdpb_plugin_settings_post_trisect ) {
		unset( $blocks['trisec-post-view/post-trisec'] ); }
	if ( ! $frhdpb_plugin_settings_post_group ) {
		unset( $blocks['category-post-view/post-group'] ); }

	// Return the new list of allowed blocks.
	return array_keys( $blocks );

}
$frhdpb_plugin_settings              = ( ! empty( get_option( 'frhd-pb-plugin-settings' ) ) ) ? (array) get_option( 'frhd-pb-plugin-settings' ) : '';
$frhdpb_plugin_settings_global      = isset( $frhdpb_plugin_settings['frhd_pb_global_settings'] ) ? $frhdpb_plugin_settings['frhd_pb_global_settings'] : '';
if ( '1' == $frhdpb_plugin_settings_global ) {

	add_filter( 'allowed_block_types_all', 'frhd_global_unset_blocks' );
}
