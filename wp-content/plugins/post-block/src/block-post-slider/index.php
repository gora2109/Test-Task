<?php
/**
 * Post Slider.
 * Rest of the code wrapped with a condition is this block load or not.
 */
wp_register_style(
	'post-slider-editor',
	plugins_url( 'assets/swiper-bundle.min.css', __FILE__ ),
	array( 'wp-edit-blocks' ),
	POST_BLOCK_VERSION
);
wp_register_style(
	'post-slider-css',
	plugins_url( 'post-slider.css', __FILE__ ),
	array(),
	POST_BLOCK_VERSION
);
wp_register_script(
	'post-slider-script',
	plugins_url( 'assets/swiper-bundle.min.js', __FILE__ ),
	array(),
	POST_BLOCK_VERSION
);

/**
 * Register Block Type : Post Slider.
 */
$frhdpg_args = array(
	'api_version'     => 2,
	'style'           => 'post-slider-css',
	'editor_style'    => 'post-slider-editor',
	'script'          => 'post-slider-script',
	'editor_script'   => 'post-block-esnext',
	'attributes'      => array(
		'id'             => array(
			'type'    => 'string',
			'default' => '0',
		),
		'theCategories'  => array(
			'type'    => 'array',
			'default' => null,
		),
		'isCarouselMode' => array(
			'type'    => 'boolean',
			'default' => true,
		),
		'totalSlide'     => array(
			'type'    => 'string',
			'default' => '6',
		),
	),
	'render_callback' => 'frhd_render_block_slider',
);

register_block_type(
	'slider-post-view/post-slider',
	$frhdpg_args
);
