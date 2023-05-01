<?php if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

/**
 * Register a custom menu page in admin.
 */
function frhdfp_register_custom_menu_page() {

	$frhdfp_custom_menu_icon = 'data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA2My42MyA5MCI+PGRlZnM+PHN0eWxlPi5jbHMtMXtmaWxsOiNmZmY7fTwvc3R5bGU+PC9kZWZzPjxwYXRoIGNsYXNzPSJjbHMtMSIgZD0iTTMyNS41OSw0MDIuNTNIMzA2LjF2MjIuNzNoMTkuNDlabTIwLjg4LDBIMzI3djIyLjczaDE5LjUxWm0xLjM2LDB2MjEuNThsMTguNy0yMS41OFptLTIyLjI0LDI0LjA5SDMwNi4xdjIyLjczaDE5LjQ5Wm0xLjM3LDB2MjEuNTlsMTguNjktMjEuNTlabS0yMC44NiwyNC4xVjQ3Mi4zbDE4LjY4LTIxLjU4Wm0xLDIyLjI4LDYyLjYtMzYuMTVMMzQ4Ljg3LDQyNC44Wm0tMSwxOS41M0wzMjcsNDYzLDMwNi4xLDQ3NVoiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC0zMDYuMSAtNDAyLjUzKSIvPjwvc3ZnPg==';

	add_menu_page(
		__( 'FancyPost', 'post-block' ),
		__( 'FancyPost', 'post-block' ),
		'manage_options',
		'fancypost-init',
		'fancypost_getting_started',
		$frhdfp_custom_menu_icon,
		5
	);

	add_submenu_page(
		'fancypost-init',
		esc_html__( 'Getting Started', 'post-block' ),
		esc_html__( 'Getting Started', 'post-block' ),
		'manage_options',
		'fancypost-init',
		'fancypost_getting_started'
	);

	add_submenu_page(
		'fancypost-init',
		esc_html__( 'Settings', 'post-block' ),
		esc_html__( 'Settings', 'post-block' ),
		'manage_options',
		'fancypost_settings',
		'fancypost_settings_display'
	);

	$fancypost_redirect_link = 'https://pluginic.com/plugins/gutenberg-post-blocks/?ref=100';
	add_submenu_page(
		'fancypost-init',
		'',
		'<span style="display: flex;align-items: center;gap: 5px;color: #8bc34a;"><i class="dashicons dashicons-superhero-alt"></i> ' . esc_html__( 'Go Pro', 'post-block' ) . '</span>',
		'manage_options',
		$fancypost_redirect_link
	);

}
add_action( 'admin_menu', 'frhdfp_register_custom_menu_page' );

function fancypost_getting_started() {

	wp_enqueue_style( 'fpgpb-getting-started', esc_url( FPPB_URL . 'src/getting-started.css' ), array(), POST_BLOCK_VERSION );
	?>
	<div class="fpgpb-option-body">
		<div class="fpgpb-setting-header">
			<div class="fpgpb-setting-header-info">
				<img src="<?php echo esc_url( FPPB_URL . 'src/img/icon-128x128.png' ); ?>" alt="FancyPost">
				<div class="fpgpb-plugin-about">
					<h1>FancyPost<sup id="fpgpb-plugin-version"><?php echo esc_html( POST_BLOCK_VERSION ); ?></sup></h1>
					<p>Thank you for installing.</p>
					<p>Most Advanced Gutenberg Post Blocks!</p>
				</div>
			</div>
		</div>

		<div class="fpgpb-container-wrap">
			<div class="fpgpb-container-overview">
				<div class="fpgpb-container-hero">
					<div class="fpgpb-hero-video">
						<iframe width="100%" height="400" src="https://www.youtube.com/embed/3-XGJ3QSQaM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<div class="fpgpb-hero-buttons">
							<a href="https://demo.pluginic.com/post-block/?ref=100" target="_blank">Live Demo</a>
							<a href="https://pluginic.com/plugins/gutenberg-post-blocks/?ref=100" target="_blank">Plugin Details</a>
							<a href="https://pluginic.com/docs/gutenberg-post-blocks-overview/?ref=100" target="_blank">Documentation</a>
						</div>
					</div>
					<div class="fpgpb-container-ad">
						<a href="https://pluginic.com/plugins/gutenberg-post-blocks/?ref=100" target="_blank">
							<picture>
								<source media="(max-width:960px)" srcset="<?php echo esc_url( FPPB_URL . 'src/img/banner-960x340.jpg' ); ?>">
								<img src="<?php echo esc_url( FPPB_URL . 'src/img/banner-340x520.jpg' ); ?>">
							</picture>
						</a>
					</div>
				</div>
			</div>
			<div class="fpgpb-spacer" style="height: 20px;"></div>
			<div class="fpgpb-hero-upgrade">
				<h2><span class="dashicons dashicons-superhero-alt"></span>Pro Feature List :</h2>
				<div class="fpgpb-upgrade-feature-list">
					<ul>
						<li>Unique and high customizable premade tempaltes.</li>
						<li>User engagement with love reactions.</li>
						<li>Advanced post query.</li>
						<li>Several global controls like set the Column, Post Count, Column Gap, and Row Gap.</li>
						<li>Specify the Rounded Corner Size.</li>
						<li>Excerpt Word Count and Maximum Width Of The Block.</li>
						<li>Multiple post query options such as Ascending Or Descending Post Order.</li>
						<li>Equal size of posts.</li>
						<li>Featured image size controls.</li>
						<li>Read more button customization.</li>
						<li>10+ post content visibility control options, including Excerpt, Post Button, Reading Time, etc.</li>
					</ul>
					<ul>
						<li>Advanced color options within a color palette to match your theme.</li>
						<li>Pagination controls with on page loading.</li>
						<li>Category-wise group block with multiple settings.</li>
						<li>Highly customizable Post Trisect Block.</li>
						<li>Column gaps and spacing controls.</li>
						<li>Rounded corner options.</li>
						<li>Posts content control options.</li>
						<li>Multiple category display designs.</li>
						<li>Typography options.</li>
						<li>Post Grid System.</li>
						<li>Post Group (Group your posts category-wise).</li>
						<li>Post Trisect (1×2 or 1×4 block with responsive height control).</li>
					</ul>
				</div>
				<a class="fpgpb-hero-btn-pro" href="https://pluginic.com/plugins/gutenberg-post-blocks/?ref=100" target="_blank">Upgrade to Pro <span>→</span></a>
			</div>
			<div class="fpgpb-spacer" style="height: 20px;"></div>
			<div class="fpgpb-testimonial">
				<div class="fpgpb-testimonial-columns">
					<div class="fpgpb-testimonial-column">
						<span class="fpgpb-testimonial-stars"></span>
						<p style="font-size:18px;line-height:1.3;margin-bottom:15px">“Really, this is awesome addon for gutenberg post block, I want more layout.</p>
						<div class="fpgpb-testimonial-client">
							<img width="50" height="50" src="<?php echo esc_url( FPPB_URL . 'src/img/client-1.jpg' ); ?>" alt="" class="wp-image-3273">
							<div class="fpgpb-testimonial-client-ghost">
								<h4>Brandimarcene</h4>
								<p>Software Engineer</p>
							</div>
						</div>
					</div>
					<div class="fpgpb-testimonial-column">
						<span class="fpgpb-testimonial-stars"></span>
						<p style="font-size:18px;line-height:1.3;margin-bottom:15px">“Not overwhelming, but useful. Need to add more design. It will be useful if have 20-30 layout and designs..</p>
						<div class="fpgpb-testimonial-client">
							<img width="50" height="50" src="<?php echo esc_url( FPPB_URL . 'src/img/client-2.jpg' ); ?>" alt="" class="wp-image-3273">
							<div class="fpgpb-testimonial-client-ghost">
								<h4>Hellowtoddchan</h4>
								<p>Full-Stack Developer</p>
							</div>
						</div>
					</div>
					<div class="fpgpb-testimonial-column">
						<span class="fpgpb-testimonial-stars"></span>
						<p style="font-size:18px;line-height:1.3;margin-bottom:15px">“I dropped it in the Kadence theme and got an instant news site, very nice plugin.</p>
						<div class="fpgpb-testimonial-client">
							<img width="50" height="50" src="<?php echo esc_url( FPPB_URL . 'src/img/client-3.jpg' ); ?>" alt="" class="wp-image-3273">
							<div class="fpgpb-testimonial-client-ghost">
								<h4>The Newb</h4>
								<p>Developer</p>
							</div>
						</div>
					</div>
					<div class="fpgpb-testimonial-column">
						<span class="fpgpb-testimonial-stars"></span>
						<p style="font-size:18px;line-height:1.3;margin-bottom:15px">"Thank you for your wonderful software. The WordPress community really appreciates it.</p>
						<div class="fpgpb-testimonial-client">
							<img width="50" height="50" src="<?php echo esc_url( FPPB_URL . 'src/img/client-4.jpg' ); ?>" alt="" class="wp-image-3273">
							<div class="fpgpb-testimonial-client-ghost">
								<h4>Eric Colon</h4>
								<p>Programmer</p>
							</div>
						</div>
					</div>
					<a href="https://wordpress.org/support/plugin/post-block/reviews/?filter=5" target="_blank" style="margin: 0 auto;">See reviews from free users →</a>
				</div>
			</div>
		</div>
	</div>
	<?php
}

/**
 * FancyPost Settings Page Display.
 *
 * @return void
 */
function fancypost_settings_display() {
	?>
	<div id="frhd-pb-settings-form-wrap">
		<h2><?php esc_html_e( 'Fancy Post - Global Settings', 'post-block' ); ?></h2>
		<form action="options.php" method="POST">
		<?php settings_fields( 'frhd-pb-settings-group' ); ?>
		<?php do_settings_sections( 'frhd-pb-plugin' ); ?>
		<?php submit_button(); ?>
		</form>
	</div>

	<!-- Recommended Plugins From Pluginic -->
	<h2>Recommended Plugins From Pluginic</h2>
	<div class="frhd-pb-recommended-plugs">
		<div class="frhd-pb-plug">
			<img src="<?php echo esc_url( FPPB_URL . 'src/img/editorial-rating-128.png' ); ?>" alt="Plugin Name">
			<div class="frhd-pb-plug-details">
				<h4><a href="https://pluginic.com/plugins/editorial-rating/?ref=100" target="_blank">Editorial Rating</a></h4>
				<div class="wporg-ratings" aria-label="5 out of 5 stars" data-title-template="%s out of 5 stars" data-rating="5" style="color:#ffb900"><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span></div>
				<p>This plugin allows you to show review scores, pros and cons on individual single page’s after content, and sidebar with sticky mode. Best for product review blog sites.</p>
			</div>
		</div>
		<div class="frhd-pb-plug">
			<img src="<?php echo esc_url( FPPB_URL . 'src/img/wp-youtube-128.png' ); ?>" alt="Plugin Name">
			<div class="frhd-pb-plug-details">
				<h4><a href="https://pluginic.com/plugins/video-gallery-playlist/?ref=100" target="_blank">YouTube Video Gallery & Slider</a></h4>
				<div class="wporg-ratings" aria-label="5 out of 5 stars" data-title-template="%s out of 5 stars" data-rating="5" style="color:#ffb900"><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span></div>
				<p>Build a dynamic YouTube video gallery with this best responsive and latest API-based Gallery plugin for WordPress with a lot of customization options.</p>
			</div>
		</div>
		<div class="frhd-pb-plug">
			<img src="<?php echo esc_url( FPPB_URL . 'src/img/faq-schema-128.png' ); ?>" alt="Plugin Name">
			<div class="frhd-pb-plug-details">
				<h4><a href="https://pluginic.com/plugins/faq-schema-ultimate/?ref=100" target="_blank">FAQ Schema</a></h4>
				<div class="wporg-ratings" aria-label="5 out of 5 stars" data-title-template="%s out of 5 stars" data-rating="5" style="color:#ffb900"><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span><span class="dashicons dashicons-star-filled"></span></div>
				<p>Get the best FAQ Schema WordPress plugin to add quick Q&A to your blog posts and enhance your WordPress site presentation in Google search results.</p>
			</div>
		</div>
	</div>
	<?php
}

/**
 * Triggered before any other hook when a user accesses the admin area.
 */
function frhd_pb_admin_init() {

	/**
	 * Register a setting and its data.
	 */
	register_setting( 'frhd-pb-settings-group', 'frhd-pb-plugin-settings' );

	/*
	* Add a new section to a settings page.
	*/
	add_settings_section( 'frhd-pb-section', '', 'frhd_pb_section_callback', 'frhd-pb-plugin' );

	/*
	* Add a new field to a section of a settings page.
	*/
	add_settings_field( 'frhd-pb-global-settings', 'Disable Global Settings?', 'frhd_pb_global_settings_callback', 'frhd-pb-plugin', 'frhd-pb-section' );
	add_settings_field( 'frhd-pb-heart-react', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 114.86 90"><defs></defs><path fill="#5E30CC" d="M276.55,330.38a38.43,38.43,0,0,1-6-8.64,21.93,21.93,0,0,1-2.3-7.44A16.19,16.19,0,0,1,280,296.6H209.92a9.67,9.67,0,0,0-9.64,9.64V377a9.67,9.67,0,0,0,9.64,9.64h70.72a9.67,9.67,0,0,0,9.64-9.64v-34.6A78.6,78.6,0,0,1,276.55,330.38Zm-51.72-25.61a7.06,7.06,0,0,1,7.11,7,7.12,7.12,0,0,1-14.24.18A7.07,7.07,0,0,1,224.83,304.77Zm8.54,73.67H218.1v-4h15.27Zm18.48-9.65H218.1v-2.41h33.75Zm20.9-4.82H218.1v-2.41h54.65Zm0-4.82H218.1v-2.41h54.65Zm0-6.43H218.1v-4h54.65Zm-54.52-11.25c6-6.27,11.75-12.29,17.7-18.53l5.81,6.49c4.11-5.8,7.86-11.12,11.78-16.65,6.47,9.61,12.84,19.05,19.34,28.69Zm96.4-32.53a10.36,10.36,0,0,0-14.52-6.16,14.29,14.29,0,0,0-3.22,2.4,12.76,12.76,0,0,0-2.43,2.61,9.67,9.67,0,0,0-.92-1.11,41.55,41.55,0,0,0-3.11-2.83,9.89,9.89,0,0,0-8.58-1.91,10.5,10.5,0,0,0-8,11.71,16.82,16.82,0,0,0,1.75,5.58,33.28,33.28,0,0,0,5.17,7.39,74.32,74.32,0,0,0,13.44,11.6.4.4,0,0,0,.53,0,79.58,79.58,0,0,0,9.24-7.34,50.81,50.81,0,0,0,7.05-7.82,23.9,23.9,0,0,0,3.46-6.62A12.31,12.31,0,0,0,314.63,308.94Z" transform="translate(-200.28 -296.6)"/></svg>', 'frhd_pb_heart_react_callback', 'frhd-pb-plugin', 'frhd-pb-section' );
	add_settings_field( 'frhd-pb-post-block', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 91.15 90"><defs></defs><path fill="#5E30CC" d="M301.19,296.6H267.34a4.63,4.63,0,0,0-4.61,4.62v33.84a4.63,4.63,0,0,0,4.61,4.62h33.85a4.63,4.63,0,0,0,4.62-4.62V301.22A4.63,4.63,0,0,0,301.19,296.6Zm-26.71,3.91a3.39,3.39,0,0,1,3.41,3.35,3.41,3.41,0,0,1-6.82.09A3.38,3.38,0,0,1,274.48,300.51Zm4.09,35.26h-7.31v-1.92h7.31Zm8.85-4.61H271.26V330h16.16Zm10-2.31H271.26v-1.16h26.16Zm0-2.31H271.26v-1.15h26.16Zm0-3.08H271.26v-1.92h26.16Zm-26.1-5.38c2.87-3,5.62-5.89,8.48-8.87l2.77,3.11,5.64-8,9.26,13.73ZM253.11,296.6H219.27a4.63,4.63,0,0,0-4.62,4.62v33.84a4.63,4.63,0,0,0,4.62,4.62h33.84a4.63,4.63,0,0,0,4.62-4.62V301.22A4.63,4.63,0,0,0,253.11,296.6Zm-26.71,3.91a3.39,3.39,0,0,1,3.41,3.35A3.41,3.41,0,0,1,223,304,3.39,3.39,0,0,1,226.4,300.51Zm4.09,35.26h-7.31v-1.92h7.31Zm8.85-4.61H223.18V330h16.16Zm10-2.31H223.18v-1.16h26.16Zm0-2.31H223.18v-1.15h26.16Zm0-3.08H223.18v-1.92h26.16Zm-26.1-5.38,8.48-8.87,2.78,3.11,5.63-8,9.26,13.73Zm29.87,25.44H219.27a4.63,4.63,0,0,0-4.62,4.62V382a4.63,4.63,0,0,0,4.62,4.61h33.84a4.63,4.63,0,0,0,4.62-4.61V348.14A4.63,4.63,0,0,0,253.11,343.52Zm-26.71,3.91a3.39,3.39,0,0,1,3.41,3.36,3.41,3.41,0,0,1-6.82.08A3.4,3.4,0,0,1,226.4,347.43Zm4.09,35.26h-7.31v-1.92h7.31Zm8.85-4.61H223.18v-1.15h16.16Zm10-2.31H223.18v-1.15h26.16Zm0-2.31H223.18v-1.15h26.16Zm0-3.07H223.18v-1.93h26.16ZM223.24,365l8.48-8.87,2.78,3.11,5.63-8L249.39,365Zm77.95-21.48H267.34a4.63,4.63,0,0,0-4.61,4.62V382a4.63,4.63,0,0,0,4.61,4.61h33.85a4.63,4.63,0,0,0,4.62-4.61V348.14A4.63,4.63,0,0,0,301.19,343.52Zm-26.71,3.91a3.39,3.39,0,0,1,3.41,3.36,3.41,3.41,0,0,1-6.82.08A3.39,3.39,0,0,1,274.48,347.43Zm4.09,35.26h-7.31v-1.92h7.31Zm8.85-4.61H271.26v-1.15h16.16Zm10-2.31H271.26v-1.15h26.16Zm0-2.31H271.26v-1.15h26.16Zm0-3.07H271.26v-1.93h26.16ZM271.32,365l8.48-8.87,2.77,3.11,5.64-8L297.47,365Z" transform="translate(-214.65 -296.6)"/></svg>', 'frhd_pb_post_block_callback', 'frhd-pb-plugin', 'frhd-pb-section' );
	add_settings_field( 'frhd-pb-post-slider', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 125.45 90"><defs></defs><path fill="#5E30CC" d="M217.83,343.6c.09-.46.13-.93.19-1.39v-1.42c0-.07,0-.13,0-.2a11.16,11.16,0,0,0-1.38-4.76,11.86,11.86,0,0,0-10.15-6.39,11.19,11.19,0,0,0-6.66,1.69,11.84,11.84,0,0,0-5.9,9.86,11.16,11.16,0,0,0,1.4,6.17,11.86,11.86,0,0,0,8.55,6.22c.46.09.93.13,1.4.19h1.41l.19,0a11.09,11.09,0,0,0,4.23-1.1A11.93,11.93,0,0,0,217.83,343.6Zm-7.89,4.18-1.2,1.2-.61-.62L202,342.22a.85.85,0,0,1-.34-.83,1.44,1.44,0,0,1,.35-.61c2.19-2.21,4.4-4.41,6.6-6.61a1.29,1.29,0,0,1,.17-.16l1.24,1.23-6.31,6.31Zm81.5-3.49c-.11-.61-.16-1.23-.24-1.85v-1.88c0-.1,0-.19.05-.28a14.67,14.67,0,0,1,1.83-6.31,15.91,15.91,0,0,1,7.57-7.11V306.14A9.67,9.67,0,0,0,291,296.5H220.29a9.66,9.66,0,0,0-9.64,9.64v19.62a15.63,15.63,0,0,1,9.5,7.81,14.72,14.72,0,0,1,1.83,6.32,2.61,2.61,0,0,0,.06.27V342c-.08.61-.14,1.24-.25,1.85a15.84,15.84,0,0,1-9,11.73,13.53,13.53,0,0,1-2.15.85v20.38a9.67,9.67,0,0,0,9.64,9.65H291a9.68,9.68,0,0,0,9.65-9.65V356.11l-.21-.09A15.87,15.87,0,0,1,291.44,344.29Zm-56.25-39.64a7.08,7.08,0,0,1,7.12,7,7.12,7.12,0,0,1-14.24.17A7.07,7.07,0,0,1,235.19,304.65Zm8.55,73.68H228.47v-4h15.27Zm18.48-9.64H228.47v-2.41h33.75Zm20.89-4.82H228.47v-2.41h54.64Zm0-4.82H228.47v-2.41h54.64Zm0-6.43H228.47v-4h54.64ZM228.6,341.37l17.7-18.53,5.8,6.49c4.12-5.81,7.87-11.12,11.78-16.65,6.48,9.6,12.84,19.05,19.34,28.69Zm90.7-.38a11.83,11.83,0,0,0-5.91-9.86,11.18,11.18,0,0,0-6.66-1.69,11.86,11.86,0,0,0-10.14,6.39,11,11,0,0,0-1.38,4.76c0,.07,0,.13,0,.2v1.42c.06.46.1.93.19,1.39a11.93,11.93,0,0,0,6.76,8.83,11.09,11.09,0,0,0,4.23,1.1l.18,0H308c.47-.06.94-.1,1.4-.19a11.86,11.86,0,0,0,8.55-6.22A11.25,11.25,0,0,0,319.3,341Zm-8.11,1.23q-3.07,3.06-6.14,6.14l-.6.62-1.2-1.2,6.23-6.23-6.31-6.31,1.24-1.23.17.16,6.6,6.61a1.44,1.44,0,0,1,.35.61A.85.85,0,0,1,311.19,342.22Z" transform="translate(-193.87 -296.5)"/></svg>', 'frhd_pb_post_slider_callback', 'frhd-pb-plugin', 'frhd-pb-section' );
	add_settings_field( 'frhd-pb-post-trisect', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 137.92 90"><defs></defs><path fill="#5E30CC" d="M319.68,296.5H286.05a4.59,4.59,0,0,0-4.58,4.58v33.63a4.59,4.59,0,0,0,4.58,4.59h33.63a4.6,4.6,0,0,0,4.59-4.59V301.08A4.59,4.59,0,0,0,319.68,296.5Zm-26.54,3.88a3.37,3.37,0,0,1,3.39,3.33,3.39,3.39,0,0,1-6.78.09A3.37,3.37,0,0,1,293.14,300.38Zm4.07,35H290v-1.91h7.26Zm8.79-4.59H290v-1.14H306Zm9.93-2.29H290v-1.15h26Zm0-2.29H290V325.1h26Zm0-3.06H290v-1.91h26ZM290,317.84c2.84-3,5.58-5.85,8.42-8.81l2.75,3.08,5.61-7.91,9.2,13.64Zm29.67,25.79H286.05a4.6,4.6,0,0,0-4.58,4.59v33.63a4.59,4.59,0,0,0,4.58,4.58h33.63a4.59,4.59,0,0,0,4.59-4.58V348.22A4.6,4.6,0,0,0,319.68,343.63Zm-26.54,3.88a3.37,3.37,0,0,1,3.39,3.34,3.39,3.39,0,0,1-6.78.08A3.37,3.37,0,0,1,293.14,347.51Zm4.07,35H290v-1.91h7.26ZM306,378H290v-1.15H306Zm9.93-2.3H290v-1.14h26Zm0-2.29H290v-1.15h26Zm0-3.06H290v-1.91h26ZM290,365l8.42-8.81,2.75,3.09,5.61-7.92c3.08,4.57,6.1,9.06,9.2,13.64Zm-23.3-68.47H196a9.67,9.67,0,0,0-9.64,9.64v70.71A9.67,9.67,0,0,0,196,386.5h70.72a9.67,9.67,0,0,0,9.64-9.65V306.14A9.67,9.67,0,0,0,266.71,296.5Zm-55.81,8.16a7.08,7.08,0,0,1,7.12,7,7.13,7.13,0,0,1-14.25.17A7.08,7.08,0,0,1,210.9,304.66Zm8.55,73.68H204.18v-4h15.27Zm18.48-9.65H204.18v-2.41h33.75Zm20.89-4.82H204.18v-2.41h54.64Zm0-4.82H204.18v-2.41h54.64Zm0-6.43H204.18v-4h54.64ZM204.3,341.37,222,322.84l5.8,6.49,11.78-16.65,19.34,28.69Z" transform="translate(-186.35 -296.5)"/></svg>', 'frhd_pb_post_trisect_callback', 'frhd-pb-plugin', 'frhd-pb-section' );
	add_settings_field( 'frhd-pb-post-group', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90"><defs></defs><path fill="#5E30CC" d="M306.4,307.3H235.69a9.67,9.67,0,0,0-9.64,9.64v70.72a9.67,9.67,0,0,0,9.64,9.64H306.4a9.67,9.67,0,0,0,9.65-9.64V316.94A9.67,9.67,0,0,0,306.4,307.3Zm-55.8,8.16a7.07,7.07,0,0,1,7.11,7,7.12,7.12,0,0,1-14.24.17A7.08,7.08,0,0,1,250.6,315.46Zm-3.66,72.14a3.22,3.22,0,1,1,3.21-3.22A3.22,3.22,0,0,1,246.94,387.6Zm0-10.45a3.22,3.22,0,1,1,3.21-3.21A3.21,3.21,0,0,1,246.94,377.15Zm0-10.45a3.22,3.22,0,1,1,3.21-3.21A3.21,3.21,0,0,1,246.94,366.7Zm51.43,19.69h-43.8v-4h43.8Zm0-10.45h-43.8v-4h43.8Zm0-10.44h-43.8v-4h43.8ZM244,352.18l17.7-18.54,5.81,6.5,11.78-16.65,19.34,28.69Z" transform="translate(-226.05 -307.3)"/></svg>', 'frhd_pb_post_group_callback', 'frhd-pb-plugin', 'frhd-pb-section' );
	add_settings_field( 'frhd-pb-post-cat', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90"><defs></defs><path fill="#5E30CC" d="M295.6,296.5H224.89a9.67,9.67,0,0,0-9.65,9.64v70.71a9.68,9.68,0,0,0,9.65,9.65H295.6a9.67,9.67,0,0,0,9.64-9.65V306.14A9.67,9.67,0,0,0,295.6,296.5Zm-53.79,72.19a1.38,1.38,0,0,1-1.38,1.38H230.29a1.39,1.39,0,0,1-1.39-1.38V358.55a1.39,1.39,0,0,1,1.39-1.38h10.14a1.38,1.38,0,0,1,1.38,1.38Zm0-22.12a1.38,1.38,0,0,1-1.38,1.38H230.29a1.39,1.39,0,0,1-1.39-1.38V336.43a1.39,1.39,0,0,1,1.39-1.38h10.14a1.38,1.38,0,0,1,1.38,1.38Zm0-22.12a1.38,1.38,0,0,1-1.38,1.38H230.29a1.39,1.39,0,0,1-1.39-1.38V314.31a1.4,1.4,0,0,1,1.39-1.39h10.14a1.39,1.39,0,0,1,1.38,1.39Zm24.89,44.24a1.39,1.39,0,0,1-1.39,1.38H255.17a1.38,1.38,0,0,1-1.38-1.38V358.55a1.38,1.38,0,0,1,1.38-1.38h10.14a1.39,1.39,0,0,1,1.39,1.38Zm0-22.12a1.39,1.39,0,0,1-1.39,1.38H255.17a1.38,1.38,0,0,1-1.38-1.38V336.43a1.38,1.38,0,0,1,1.38-1.38h10.14a1.39,1.39,0,0,1,1.39,1.38Zm0-22.12a1.39,1.39,0,0,1-1.39,1.38H255.17a1.38,1.38,0,0,1-1.38-1.38V314.31a1.39,1.39,0,0,1,1.38-1.39h10.14a1.4,1.4,0,0,1,1.39,1.39Zm24.88,44.24a1.38,1.38,0,0,1-1.38,1.38H280.06a1.38,1.38,0,0,1-1.38-1.38V358.55a1.38,1.38,0,0,1,1.38-1.38H290.2a1.38,1.38,0,0,1,1.38,1.38Zm0-22.12A1.38,1.38,0,0,1,290.2,348H280.06a1.38,1.38,0,0,1-1.38-1.38V336.43a1.38,1.38,0,0,1,1.38-1.38H290.2a1.38,1.38,0,0,1,1.38,1.38Zm0-22.12a1.38,1.38,0,0,1-1.38,1.38H280.06a1.38,1.38,0,0,1-1.38-1.38V314.31a1.39,1.39,0,0,1,1.38-1.39H290.2a1.39,1.39,0,0,1,1.38,1.39Z" transform="translate(-215.24 -296.5)"/></svg>', 'frhd_pb_post_cat_callback', 'frhd-pb-plugin', 'frhd-pb-section' );
}
add_action( 'admin_init', 'frhd_pb_admin_init' );

/**
 * THE SECTIONS
 * Hint: You can omit using add_settings_field() and instead
 * directly put the input fields into the sections.
 */
function frhd_pb_section_callback() {

	echo '<p>Global options may conflict with other Gutenberg blocks. You can simply disable Global Settings to debug issues.</p>';
	wp_enqueue_style( 'fpgpb-settings', esc_url( FPPB_URL . 'src/fancypost_settings.css' ), array(), POST_BLOCK_VERSION );
}

/**
 * THE FIELD
 * Disable Global Settings.
 */
function frhd_pb_global_settings_callback() {

	$frhd_pb_settings = (array) get_option( 'frhd-pb-plugin-settings' );
	$frhd_pb_field    = 'frhd_pb_global_settings';
	$frhd_pb_value    = ( ! empty( $frhd_pb_settings[ $frhd_pb_field ] ) ) ? esc_attr( $frhd_pb_settings[ $frhd_pb_field ] ) : '';

	echo '<input type="checkbox" name="frhd-pb-plugin-settings[' . esc_attr( $frhd_pb_field ) . ']" value="1" ' . checked( 1, $frhd_pb_value, false ) . ' />';

}

/**
 * THE FIELD
 * For Heart React.
 */
function frhd_pb_heart_react_callback() {

	$frhd_pb_settings = (array) get_option( 'frhd-pb-plugin-settings' );
	$frhd_pb_field    = 'frhd_pb_heart_react';
	$frhd_pb_value    = ( ! empty( $frhd_pb_settings[ $frhd_pb_field ] ) ) ? esc_attr( $frhd_pb_settings[ $frhd_pb_field ] ) : '';

	echo '<label class="frhd-pb-switch">';
	echo '<input type="checkbox" name="frhd-pb-plugin-settings[' . esc_attr( $frhd_pb_field ) . ']" value="1" ' . checked( 1, $frhd_pb_value, false ) . ' />';
	echo '<span class="frhd-pb-slider"></span>
	</label>';
	echo '<strong>Heart React</strong>';
	echo '<p>Disable/Enable Heart React core from here. Recommended to disable unused block or functionalities to improve your site performance.</p>';

}

/**
 * THE FIELD
 * For Post Block.
 */
function frhd_pb_post_block_callback() {

	$frhd_pb_settings = (array) get_option( 'frhd-pb-plugin-settings' );
	$frhd_pb_field    = 'frhd_pb_post_block';
	$frhd_pb_value    = ( ! empty( $frhd_pb_settings[ $frhd_pb_field ] ) ) ? esc_attr( $frhd_pb_settings[ $frhd_pb_field ] ) : '';

	echo '<label class="frhd-pb-switch">';
	echo '<input type="checkbox" name="frhd-pb-plugin-settings[' . esc_attr( $frhd_pb_field ) . ']" value="1" ' . checked( 1, $frhd_pb_value, false ) . ' />';
	echo '<span class="frhd-pb-slider"></span>
	</label>';
	echo '<strong>Post Block</strong>';
	echo '<p>Disable/Enable Post Block core from here. Recommended to disable unused block or functionalities to improve your site performance.</p>';

}

/**
 * THE FIELD
 * For Post Slider.
 */
function frhd_pb_post_slider_callback() {

	$frhd_pb_settings = (array) get_option( 'frhd-pb-plugin-settings' );
	$frhd_pb_field    = 'frhd_pb_post_slider';
	$frhd_pb_value    = ( ! empty( $frhd_pb_settings[ $frhd_pb_field ] ) ) ? esc_attr( $frhd_pb_settings[ $frhd_pb_field ] ) : '';

	echo '<label class="frhd-pb-switch">';
	echo '<input type="checkbox" name="frhd-pb-plugin-settings[' . esc_attr( $frhd_pb_field ) . ']" value="1" ' . checked( 1, $frhd_pb_value, false ) . ' />';
	echo '<span class="frhd-pb-slider"></span>
	</label>';
	echo '<strong>Post Slider</strong>';
	echo '<p>Disable/Enable Post Slider core from here. Recommended to disable unused block or functionalities to improve your site performance.</p>';

}

/**
 * THE FIELD
 * For Post Trisect.
 */
function frhd_pb_post_trisect_callback() {

	$frhd_pb_settings = (array) get_option( 'frhd-pb-plugin-settings' );
	$frhd_pb_field    = 'frhd_pb_post_trisect';
	$frhd_pb_value    = ( ! empty( $frhd_pb_settings[ $frhd_pb_field ] ) ) ? esc_attr( $frhd_pb_settings[ $frhd_pb_field ] ) : '';

	echo '<label class="frhd-pb-switch">';
	echo '<input type="checkbox" name="frhd-pb-plugin-settings[' . esc_attr( $frhd_pb_field ) . ']" value="1" ' . checked( 1, $frhd_pb_value, false ) . ' />';
	echo '<span class="frhd-pb-slider"></span>
	</label>';
	echo '<strong>Post Trisect</strong>';
	echo '<p>Disable/Enable Post Trisect core from here. Recommended to disable unused block or functionalities to improve your site performance.</p>';

}

/**
 * THE FIELD
 * For Post Group.
 */
function frhd_pb_post_group_callback() {

	$frhd_pb_settings = (array) get_option( 'frhd-pb-plugin-settings' );
	$frhd_pb_field    = 'frhd_pb_post_group';
	$frhd_pb_value    = ( ! empty( $frhd_pb_settings[ $frhd_pb_field ] ) ) ? esc_attr( $frhd_pb_settings[ $frhd_pb_field ] ) : '';

	echo '<label class="frhd-pb-switch">';
	echo '<input type="checkbox" name="frhd-pb-plugin-settings[' . esc_attr( $frhd_pb_field ) . ']" value="1" ' . checked( 1, $frhd_pb_value, false ) . ' />';
	echo '<span class="frhd-pb-slider"></span>
	</label>';
	echo '<strong>Post Group</strong>';
	echo '<p>Disable/Enable Post Group core from here. Recommended to disable unused block or functionalities to improve your site performance.</p>';

}

/**
 * THE FIELD
 * For Post Category.
 */
function frhd_pb_post_cat_callback() {

	$frhd_pb_settings = (array) get_option( 'frhd-pb-plugin-settings' );
	$frhd_pb_field    = 'frhd_pb_post_cat';
	$frhd_pb_value    = ( ! empty( $frhd_pb_settings[ $frhd_pb_field ] ) ) ? esc_attr( $frhd_pb_settings[ $frhd_pb_field ] ) : '';

	echo '<label class="frhd-pb-switch">';
	echo '<input type="checkbox" name="frhd-pb-plugin-settings[' . esc_attr( $frhd_pb_field ) . ']" value="1" ' . checked( 1, $frhd_pb_value, false ) . ' />';
	echo '<span class="frhd-pb-slider"></span>
	</label>';
	echo '<strong>Post Category</strong>';
	echo '<p>Disable/Enable Post Category core from here. Recommended to disable unused block or functionalities to improve your site performance.</p>';

}
