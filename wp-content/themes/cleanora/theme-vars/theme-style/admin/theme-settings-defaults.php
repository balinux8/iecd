<?php 
/**
 * @package 	WordPress
 * @subpackage 	Cleanora
 * @version		1.0.0
 * 
 * Theme Settings Defaults
 * Created by CMSMasters
 * 
 */


/* Theme Settings General Default Values */
if (!function_exists('cleanora_settings_general_defaults')) {

function cleanora_settings_general_defaults($id = false) {
	$settings = array( 
		'general' => array( 
			'cleanora' . '_theme_layout' => 		'boxed', 
			'cleanora' . '_logo_type' => 			'image', 
			'cleanora' . '_logo_url' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo.png', 
			'cleanora' . '_logo_url_retina' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_retina.png', 
			'cleanora' . '_logo_title' => 			get_bloginfo('name') ? get_bloginfo('name') : 'Cleanora', 
			'cleanora' . '_logo_subtitle' => 		'', 
			'cleanora' . '_logo_custom_color' => 	0, 
			'cleanora' . '_logo_title_color' => 	'', 
			'cleanora' . '_logo_subtitle_color' => 	'' 
		), 
		'bg' => array( 
			'cleanora' . '_bg_col' => 			'#d5e1f3', 
			'cleanora' . '_bg_img_enable' => 	1, 
			'cleanora' . '_bg_img' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/bg.png', 
			'cleanora' . '_bg_rep' => 			'no-repeat', 
			'cleanora' . '_bg_pos' => 			'top center', 
			'cleanora' . '_bg_att' => 			'scroll', 
			'cleanora' . '_bg_size' => 			'cover' 
		), 
		'header' => array( 
			'cleanora' . '_fixed_header' => 				1, 
			'cleanora' . '_header_overlaps' => 				1, 
			'cleanora' . '_header_top_line' => 				0, 
			'cleanora' . '_header_top_height' => 			'40', 
			'cleanora' . '_header_top_line_short_info' => 	'', 
			'cleanora' . '_header_top_line_add_cont' => 	'nav', 
			'cleanora' . '_header_styles' => 				'l_nav', 
			'cleanora' . '_header_mid_height' => 			'120', 
			'cleanora' . '_header_bot_height' => 			'51', 
			'cleanora' . '_header_bot_button' => 			0, 
			'cleanora' . '_header_bot_button_text' => 		'', 
			'cleanora' . '_header_bot_button_link' => 		'', 
			'cleanora' . '_header_search' => 				0, 
			'cleanora' . '_header_add_cont' => 				'cust_html', 
			'cleanora' . '_header_add_cont_cust_html' => 	'', 
			'cleanora' . '_header_cust_html_hide' => 		0 
		), 
		'content' => array( 
			'cleanora' . '_layout' => 					'fullwidth', 
			'cleanora' . '_archives_layout' => 			'fullwidth', 
			'cleanora' . '_search_layout' => 			'fullwidth', 
			'cleanora' . '_other_layout' => 			'fullwidth', 
			'cleanora' . '_heading_alignment' => 		'center', 
			'cleanora' . '_heading_scheme' => 			'default', 
			'cleanora' . '_heading_bg_image_enable' =>	 1, 
			'cleanora' . '_heading_bg_image' => 		'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/headline_bg.jpg', 
			'cleanora' . '_heading_bg_repeat' => 		'no-repeat', 
			'cleanora' . '_heading_bg_attachment' => 	'scroll', 
			'cleanora' . '_heading_bg_size' => 			'cover', 
			'cleanora' . '_heading_bg_color' => 		'', 
			'cleanora' . '_heading_height' => 			'230', 
			'cleanora' . '_breadcrumbs' => 				1, 
			'cleanora' . '_bottom_scheme' => 			'footer', 
			'cleanora' . '_bottom_sidebar' => 			0, 
			'cleanora' . '_bottom_sidebar_layout' => 	'14141414' 
		), 
		'footer' => array( 
			'cleanora' . '_footer_scheme' => 			'footer', 
			'cleanora' . '_footer_type' => 				'small', 
			'cleanora' . '_footer_additional_content' => 'social', 
			'cleanora' . '_footer_logo' => 				1, 
			'cleanora' . '_footer_logo_url' => 			'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer.png', 
			'cleanora' . '_footer_logo_url_retina' => 	'|' . get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/img/logo_footer_retina.png', 
			'cleanora' . '_footer_nav' => 				1, 
			'cleanora' . '_footer_social' => 			1, 
			'cleanora' . '_footer_html' => 				'', 
			'cleanora' . '_footer_copyright' => 		'Cleanora' . ' &copy; ' . date('Y') . ' / ' . esc_html__('All Rights Reserved', 'cleanora') 
		) 
	);
	
	
	$settings = apply_filters('cleanora_settings_general_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}


/* Add Google Font */
if (!function_exists('cleanora_add_google_font')) {

function cleanora_add_google_font($fonts) {
	$fonts['Droid+Sans:400,700'] = 'Droid Sans';
	$fonts['Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i'] = 'Fira Sans';
	$fonts['Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i'] = 'Open Sans';
	
	
	return $fonts;
}

}

add_filter('cleanora_google_fonts_list_filter', 'cleanora_add_google_font');




/* Theme Settings Fonts Default Values */
if (!function_exists('cleanora_settings_font_defaults')) {

function cleanora_settings_font_defaults($id = false) {
	$settings = array( 
		'content' => array( 
			'cleanora' . '_content_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Droid+Sans:400,700', 
				'font_size' => 			'16', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			) 
		), 
		'link' => array( 
			'cleanora' . '_link_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 
				'font_size' => 			'16', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'cleanora' . '_link_hover_decoration' => 	'none' 
		), 
		'nav' => array( 
			'cleanora' . '_nav_title_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'cleanora' . '_nav_dropdown_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 
				'font_size' => 			'13', 
				'line_height' => 		'20', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			) 
		), 
		'heading' => array( 
			'cleanora' . '_h1_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 
				'font_size' => 			'36', 
				'line_height' => 		'44', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'cleanora' . '_h2_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 
				'font_size' => 			'28', 
				'line_height' => 		'38', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'cleanora' . '_h3_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 
				'font_size' => 			'20', 
				'line_height' => 		'26', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'cleanora' . '_h4_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 
				'font_size' => 			'18', 
				'line_height' => 		'24', 
				'font_weight' => 		'bold', 
				'font_style' => 		'italic', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'cleanora' . '_h5_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 
				'font_size' => 			'16', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'italic', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			), 
			'cleanora' . '_h6_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 
				'font_size' => 			'14', 
				'line_height' => 		'20', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none', 
				'text_decoration' => 	'none' 
			) 
		), 
		'other' => array( 
			'cleanora' . '_button_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Droid+Sans:400,700', 
				'font_size' => 			'14', 
				'line_height' => 		'40', 
				'font_weight' => 		'bold', 
				'font_style' => 		'normal', 
				'text_transform' => 	'uppercase' 
			), 
			'cleanora' . '_small_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Droid+Sans:400,700', 
				'font_size' => 			'11', 
				'line_height' => 		'20', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal', 
				'text_transform' => 	'none' 
			), 
			'cleanora' . '_input_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i', 
				'font_size' => 			'14', 
				'line_height' => 		'24', 
				'font_weight' => 		'normal', 
				'font_style' => 		'normal' 
			), 
			'cleanora' . '_quote_font' => array( 
				'system_font' => 		"Arial, Helvetica, 'Nimbus Sans L', sans-serif", 
				'google_font' => 		'Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', 
				'font_size' => 			'28', 
				'line_height' => 		'40', 
				'font_weight' => 		'normal', 
				'font_style' => 		'italic' 
			) 
		) 
	);
	
	
	$settings = apply_filters('cleanora_settings_font_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// WP Color Picker Palettes
if (!function_exists('cmsmasters_color_picker_palettes')) {

function cmsmasters_color_picker_palettes() {
	$palettes = array( 
		'#575d65', 
		'#1d65b9', 
		'#656b72', 
		'#092341', 
		'#ffffff', 
		'#f7f9fc', 
		'#d7ddeb', 
		'#16bae1' 
	);
	
	
	return apply_filters('cmsmasters_color_picker_palettes_filter', $palettes);
}

}



// Theme Settings Color Schemes Default Colors
if (!function_exists('cleanora_color_schemes_defaults')) {

function cleanora_color_schemes_defaults($id = false) {
	$settings = array( 
		'default' => array( // content default color scheme
			'color' => 		'#575d65', 
			'link' => 		'#1d65b9', 
			'hover' => 		'#656b72', 
			'heading' => 	'#092341', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#f7f9fc', 
			'border' => 	'#d7ddeb', 
			'secondary' => 	'#16bae1' 
		), 
		'header' => array( // Header color scheme
			'mid_color' => 		'#ffffff', 
			'mid_link' => 		'#ffffff', 
			'mid_hover' => 		'rgba(255,255,255,0.7)', 
			'mid_bg' => 		'rgba(6,45,91,0.85)', 
			'mid_bg_scroll' => 	'#1d65b9', 
			'mid_border' => 	'rgba(255,255,255,0)', 
			'bot_color' => 		'#0b1828', 
			'bot_link' => 		'rgba(6,45,91,0.85)', 
			'bot_hover' => 		'#16bae1', 
			'bot_bg' => 		'#ffffff', 
			'bot_bg_scroll' => 	'#ffffff', 
			'bot_border' => 	'#d7ddeb' 
		), 
		'navigation' => array( // Navigation color scheme
			'title_link' => 			'#0b1828', 
			'title_link_hover' => 		'#1d65b9', 
			'title_link_current' => 	'#ffef23', 
			'title_link_subtitle' => 	'#313131', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_bg_current' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_text' => 			'#575d65', 
			'dropdown_bg' => 			'#ffffff', 
			'dropdown_border' => 		'#d7ddeb', 
			'dropdown_link' => 			'#0b1828', 
			'dropdown_link_hover' => 	'#1d65b9', 
			'dropdown_link_subtitle' => '#575d65', 
			'dropdown_link_highlight' => 'rgba(255,255,255,0)', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'header_top' => array( // Header Top color scheme
			'color' => 					'#0b1828', 
			'link' => 					'#1d65b9', 
			'hover' => 					'#d7ddeb', 
			'bg' => 					'#ffffff', 
			'border' => 				'rgba(255,255,255,0.1)', 
			'title_link' => 			'#1d65b9', 
			'title_link_hover' => 		'#16bae1', 
			'title_link_bg' => 			'rgba(255,255,255,0)', 
			'title_link_bg_hover' => 	'rgba(255,255,255,0)', 
			'title_link_border' => 		'rgba(255,255,255,0)', 
			'dropdown_bg' => 			'#ffffff', 
			'dropdown_border' => 		'#d7ddeb', 
			'dropdown_link' => 			'#0b1828', 
			'dropdown_link_hover' => 	'#1d65b9', 
			'dropdown_link_highlight' => '#16bae1', 
			'dropdown_link_border' => 	'rgba(255,255,255,0)' 
		), 
		'footer' => array( // Footer color scheme
			'color' => 		'#71869f', 
			'link' => 		'#88a1be', 
			'hover' => 		'#ffee22', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#0c2645', 
			'alternate' => 	'#0c2645', 
			'border' => 	'rgba(255,255,255,0.1)', 
			'secondary' => 	'#aec4df' 
		), 
		'first' => array( // custom color scheme 1
			'color' => 		'#ffffff', 
			'link' => 		'#71869f', 
			'hover' => 		'rgba(136,161,190,0.75)', 
			'heading' => 	'#1d65b9', 
			'bg' => 		'#0c2645', 
			'alternate' => 	'#ffffff', 
			'border' => 	'rgba(255,255,255,0.2)', 
			'secondary' => 	'#ffe823' 
		), 
		'second' => array( // custom color scheme 2
			'color' => 		'#ffffff', 
			'link' => 		'#ffe823', 
			'hover' => 		'#656b72', 
			'heading' => 	'#ffe823', 
			'bg' => 		'#3f5e83', 
			'alternate' => 	'#f7f9fc', 
			'border' => 	'#3f5e83', 
			'secondary' => 	'#ffe823' 
		), 
		'third' => array( // custom color scheme 3
			'color' => 		'#eff3fa', 
			'link' => 		'#1d65b9', 
			'hover' => 		'rgba(255,255,255,0.5)', 
			'heading' => 	'#ffffff', 
			'bg' => 		'#ffffff', 
			'alternate' => 	'#f7f9fc', 
			'border' => 	'#d7ddeb', 
			'secondary' => 	'#16bae1' 
		) 
	);
	
	
	$settings = apply_filters('cleanora_color_schemes_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Elements Default Values
if (!function_exists('cleanora_settings_element_defaults')) {

function cleanora_settings_element_defaults($id = false) {
	$settings = array( 
		'sidebar' => array( 
			'cleanora' . '_sidebar' => 	'' 
		), 
		'icon' => array( 
			'cleanora' . '_social_icons' => array( 
				'cmsmasters-icon-facebook-1|#|' . esc_html__('Facebook', 'cleanora') . '|true||', 
				'cmsmasters-icon-gplus-1|#|' . esc_html__('Google+', 'cleanora') . '|true||', 
				'cmsmasters-icon-instagram|#|' . esc_html__('Instagram', 'cleanora') . '|true||', 
				'cmsmasters-icon-twitter|#|' . esc_html__('Twitter', 'cleanora') . '|true||', 
				'cmsmasters-icon-youtube-play|#|' . esc_html__('YouTube', 'cleanora') . '|true||' 
			) 
		), 
		'lightbox' => array( 
			'cleanora' . '_ilightbox_skin' => 				'dark', 
			'cleanora' . '_ilightbox_path' => 				'vertical', 
			'cleanora' . '_ilightbox_infinite' => 			0, 
			'cleanora' . '_ilightbox_aspect_ratio' => 		1, 
			'cleanora' . '_ilightbox_mobile_optimizer' => 	1, 
			'cleanora' . '_ilightbox_max_scale' => 			1, 
			'cleanora' . '_ilightbox_min_scale' => 			0.2, 
			'cleanora' . '_ilightbox_inner_toolbar' => 		0, 
			'cleanora' . '_ilightbox_smart_recognition' => 	0, 
			'cleanora' . '_ilightbox_fullscreen_one_slide' => 0, 
			'cleanora' . '_ilightbox_fullscreen_viewport' => 	'center', 
			'cleanora' . '_ilightbox_controls_toolbar' => 	1, 
			'cleanora' . '_ilightbox_controls_arrows' => 		0, 
			'cleanora' . '_ilightbox_controls_fullscreen' => 	1, 
			'cleanora' . '_ilightbox_controls_thumbnail' => 	1, 
			'cleanora' . '_ilightbox_controls_keyboard' => 	1, 
			'cleanora' . '_ilightbox_controls_mousewheel' => 	1, 
			'cleanora' . '_ilightbox_controls_swipe' => 		1, 
			'cleanora' . '_ilightbox_controls_slideshow' => 	0 
		), 
		'sitemap' => array( 
			'cleanora' . '_sitemap_nav' => 			1, 
			'cleanora' . '_sitemap_categs' => 		1, 
			'cleanora' . '_sitemap_tags' => 			1, 
			'cleanora' . '_sitemap_month' => 			1, 
			'cleanora' . '_sitemap_pj_categs' => 		1, 
			'cleanora' . '_sitemap_pj_tags' => 		1 
		), 
		'error' => array( 
			'cleanora' . '_error_color' => 				'#313131', 
			'cleanora' . '_error_bg_color' => 			'#ffffff', 
			'cleanora' . '_error_bg_img_enable' => 		0, 
			'cleanora' . '_error_bg_image' => 			'', 
			'cleanora' . '_error_bg_rep' => 				'no-repeat', 
			'cleanora' . '_error_bg_pos' => 				'top center', 
			'cleanora' . '_error_bg_att' => 				'scroll', 
			'cleanora' . '_error_bg_size' => 				'cover', 
			'cleanora' . '_error_search' => 				1, 
			'cleanora' . '_error_sitemap_button' =>		1, 
			'cleanora' . '_error_sitemap_link' => 		'' 
		), 
		'code' => array( 
			'cleanora' . '_custom_css' => 			'', 
			'cleanora' . '_custom_js' => 				'', 
			'cleanora' . '_gmap_api_key' => 			'', 
			'cleanora' . '_api_key' => 				'', 
			'cleanora' . '_api_secret' => 			'', 
			'cleanora' . '_access_token' => 			'', 
			'cleanora' . '_access_token_secret' => 	'' 
		), 
		'recaptcha' => array( 
			'cleanora' . '_recaptcha_public_key' => 	'', 
			'cleanora' . '_recaptcha_private_key' => 	'' 
		) 
	);
	
	
	$settings = apply_filters('cleanora_settings_element_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



// Theme Settings Single Posts Default Values
if (!function_exists('cleanora_settings_single_defaults')) {

function cleanora_settings_single_defaults($id = false) {
	$settings = array( 
		'post' => array( 
			'cleanora' . '_blog_post_layout' => 		'fullwidth', 
			'cleanora' . '_blog_post_title' => 		1, 
			'cleanora' . '_blog_post_date' => 		1, 
			'cleanora' . '_blog_post_cat' => 			1, 
			'cleanora' . '_blog_post_author' => 		1, 
			'cleanora' . '_blog_post_comment' => 		1, 
			'cleanora' . '_blog_post_tag' => 			1, 
			'cleanora' . '_blog_post_like' => 		1, 
			'cleanora' . '_blog_post_nav_box' => 		1, 
			'cleanora' . '_blog_post_nav_order_cat' => 0, 
			'cleanora' . '_blog_post_share_box' => 	1, 
			'cleanora' . '_blog_post_author_box' => 	1, 
			'cleanora' . '_blog_more_posts_box' => 	'popular', 
			'cleanora' . '_blog_more_posts_count' => 	'3', 
			'cleanora' . '_blog_more_posts_pause' => 	'5' 
		), 
		'project' => array( 
			'cleanora' . '_portfolio_project_title' => 			1, 
			'cleanora' . '_portfolio_project_details_title' => 	esc_html__('Service details', 'cleanora'), 
			'cleanora' . '_portfolio_project_date' => 			1, 
			'cleanora' . '_portfolio_project_cat' => 				1, 
			'cleanora' . '_portfolio_project_author' => 			1, 
			'cleanora' . '_portfolio_project_comment' => 			0, 
			'cleanora' . '_portfolio_project_tag' => 				0, 
			'cleanora' . '_portfolio_project_like' => 			1, 
			'cleanora' . '_portfolio_project_link' => 			0, 
			'cleanora' . '_portfolio_project_share_box' => 		1, 
			'cleanora' . '_portfolio_project_nav_box' => 			1, 
			'cleanora' . '_portfolio_project_nav_order_cat' => 	0, 
			'cleanora' . '_portfolio_project_author_box' => 		1, 
			'cleanora' . '_portfolio_more_projects_box' => 		'popular', 
			'cleanora' . '_portfolio_more_projects_count' => 		'4', 
			'cleanora' . '_portfolio_more_projects_pause' => 		'5', 
			'cleanora' . '_portfolio_project_slug' => 			'service', 
			'cleanora' . '_portfolio_pj_categs_slug' => 			'pj-categs', 
			'cleanora' . '_portfolio_pj_tags_slug' => 			'pj-tags' 
		), 
		'profile' => array( 
			'cleanora' . '_profile_post_title' => 			1, 
			'cleanora' . '_profile_post_details_title' => 	esc_html__('Profile details', 'cleanora'), 
			'cleanora' . '_profile_post_cat' => 				1, 
			'cleanora' . '_profile_post_comment' => 			1, 
			'cleanora' . '_profile_post_like' => 				1, 
			'cleanora' . '_profile_post_nav_box' => 			1, 
			'cleanora' . '_profile_post_nav_order_cat' => 	0, 
			'cleanora' . '_profile_post_share_box' => 		1, 
			'cleanora' . '_profile_post_slug' => 				'profile', 
			'cleanora' . '_profile_pl_categs_slug' => 		'pl-categs' 
		) 
	);
	
	
	$settings = apply_filters('cleanora_settings_single_defaults_filter', $settings);
	
	
	if ($id) {
		return $settings[$id];
	} else {
		return $settings;
	}
}

}



/* Project Puzzle Proportion */
if (!function_exists('cleanora_project_puzzle_proportion')) {

function cleanora_project_puzzle_proportion() {
	return 0.7069;
}

}



/* Theme Image Thumbnails Size */
if (!function_exists('cleanora_get_image_thumbnail_list')) {

function cleanora_get_image_thumbnail_list() {
	$list = array( 
		'cmsmasters-small-thumb' => array( 
			'width' => 		75, 
			'height' => 	75, 
			'crop' => 		true 
		), 
		'cmsmasters-square-thumb' => array( 
			'width' => 		300, 
			'height' => 	300, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Square', 'cleanora') 
		), 
		'cmsmasters-blog-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	366, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Masonry Blog', 'cleanora') 
		), 
		'cmsmasters-project-thumb' => array( 
			'width' => 		580, 
			'height' => 	410, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Service', 'cleanora') 
		), 
		'cmsmasters-project-masonry-thumb' => array( 
			'width' => 		580, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Service', 'cleanora') 
		), 
		'post-thumbnail' => array( 
			'width' => 		860, 
			'height' => 	575, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Featured', 'cleanora') 
		), 
		'cmsmasters-masonry-thumb' => array( 
			'width' => 		860, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry', 'cleanora') 
		), 
		'cmsmasters-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	770, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Full', 'cleanora') 
		), 
		'cmsmasters-project-full-thumb' => array( 
			'width' => 		1160, 
			'height' => 	820, 
			'crop' => 		true, 
			'title' => 		esc_attr__('Service Full', 'cleanora') 
		), 
		'cmsmasters-full-masonry-thumb' => array( 
			'width' => 		1160, 
			'height' => 	9999, 
			'title' => 		esc_attr__('Masonry Full', 'cleanora') 
		) 
	);
	
	
	return $list;
}

}



/* Project Post Type Registration Rename */
if (!function_exists('cleanora_project_labels')) {

function cleanora_project_labels() {
	return array( 
		'name' => 					esc_html__('Services', 'cleanora'), 
		'singular_name' => 			esc_html__('Service', 'cleanora'), 
		'menu_name' => 				esc_html__('Services', 'cleanora'), 
		'all_items' => 				esc_html__('All Services', 'cleanora'), 
		'add_new' => 				esc_html__('Add New', 'cleanora'), 
		'add_new_item' => 			esc_html__('Add New Service', 'cleanora'), 
		'edit_item' => 				esc_html__('Edit Service', 'cleanora'), 
		'new_item' => 				esc_html__('New Service', 'cleanora'), 
		'view_item' => 				esc_html__('View Service', 'cleanora'), 
		'search_items' => 			esc_html__('Search Services', 'cleanora'), 
		'not_found' => 				esc_html__('No services found', 'cleanora'), 
		'not_found_in_trash' => 	esc_html__('No services found in Trash', 'cleanora') 
	);
}

}

add_filter('cmsmasters_project_labels_filter', 'cleanora_project_labels');


if (!function_exists('cleanora_pj_categs_labels')) {

function cleanora_pj_categs_labels() {
	return array( 
		'name' => 					esc_html__('Service Categories', 'cleanora'), 
		'singular_name' => 			esc_html__('Service Category', 'cleanora') 
	);
}

}

add_filter('cmsmasters_pj_categs_labels_filter', 'cleanora_pj_categs_labels');


if (!function_exists('cleanora_pj_tags_labels')) {

function cleanora_pj_tags_labels() {
	return array( 
		'name' => 					esc_html__('Service Tags', 'cleanora'), 
		'singular_name' => 			esc_html__('Service Tag', 'cleanora') 
	);
}

}

add_filter('cmsmasters_pj_tags_labels_filter', 'cleanora_pj_tags_labels');



/* Profile Post Type Registration Rename */
if (!function_exists('cleanora_profile_labels')) {

function cleanora_profile_labels() {
	return array( 
		'name' => 					esc_html__('Profiles', 'cleanora'), 
		'singular_name' => 			esc_html__('Profiles', 'cleanora'), 
		'menu_name' => 				esc_html__('Profiles', 'cleanora'), 
		'all_items' => 				esc_html__('All Profiles', 'cleanora'), 
		'add_new' => 				esc_html__('Add New', 'cleanora'), 
		'add_new_item' => 			esc_html__('Add New Profile', 'cleanora'), 
		'edit_item' => 				esc_html__('Edit Profile', 'cleanora'), 
		'new_item' => 				esc_html__('New Profile', 'cleanora'), 
		'view_item' => 				esc_html__('View Profile', 'cleanora'), 
		'search_items' => 			esc_html__('Search Profiles', 'cleanora'), 
		'not_found' => 				esc_html__('No Profiles found', 'cleanora'), 
		'not_found_in_trash' => 	esc_html__('No Profiles found in Trash', 'cleanora') 
	);
}

}

// add_filter('cmsmasters_profile_labels_filter', 'cleanora_profile_labels');


if (!function_exists('cleanora_pl_categs_labels')) {

function cleanora_pl_categs_labels() {
	return array( 
		'name' => 					esc_html__('Profile Categories', 'cleanora'), 
		'singular_name' => 			esc_html__('Profile Category', 'cleanora') 
	);
}

}

// add_filter('cmsmasters_pl_categs_labels_filter', 'cleanora_pl_categs_labels');

