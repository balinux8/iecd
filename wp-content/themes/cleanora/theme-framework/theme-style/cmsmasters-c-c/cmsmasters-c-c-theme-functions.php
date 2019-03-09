<?php
/**
 * @package 	WordPress
 * @subpackage 	Cleanora
 * @version 	1.0.0
 * 
 * Theme Content Composer Functions
 * Created by CMSMasters
 * 
 */


/* Register JS Scripts */
function cleanora_theme_register_c_c_scripts() {
	global $pagenow;
	
	
	if ( 
		$pagenow == 'post-new.php' || 
		($pagenow == 'post.php' && isset($_GET['post']) && get_post_type($_GET['post']) != 'attachment') 
	) {
		wp_enqueue_script('cleanora-composer-shortcodes-extend', get_template_directory_uri() . '/theme-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/cmsmasters-c-c/js/cmsmasters-c-c-theme-extend.js', array('cmsmasters_composer_shortcodes_js'), '1.0.0', true);
		
		wp_localize_script('cleanora-composer-shortcodes-extend', 'cmsmasters_theme_shortcodes', array( 
			/* Client */
			'client_field_logo_overlay_title' => 				esc_attr__('Logo Overlay', 'cleanora'), 
			'client_field_logo_overlay_descr' => 				esc_attr__('Choose this client logo overlay', 'cleanora'), 
			/* Pricing Table */
			'pricing_offer_field_best_offer_bd_title' => 		esc_attr__('Best Offer Border Color', 'cleanora'), 
			'pricing_offer_field_best_offer_bd_descr' => 		esc_attr__('Choose border color for this pricing table best offer', 'cleanora'),
			'choice_more' => 									esc_attr__('\'Read More\' button', 'cleanora'), 
			'posts_slider_field_poststype_choice_service' => 	esc_attr__('Services', 'cleanora'), 
			'posts_slider_field_service_categ_title' => 		esc_attr__('Services Categories', 'cleanora'), 
			'posts_slider_field_service_categ_descr' => 		esc_attr__('Show services associated with certain categories.', 'cleanora'), 
			'posts_slider_field_service_categ_descr_note' => 	esc_attr__('If you don\'t choose any class categories, all your services will be shown', 'cleanora'), 
			'posts_slider_field_service_meta_title' => 			esc_attr__('Services Metadata', 'cleanora'), 
			'posts_slider_field_service_meta_descr' => 			esc_attr__('Choose services metadata you want to be shown', 'cleanora'), 
			'services_title' => 								esc_attr__('Services', 'cleanora'), 
			'services_field_orderby_descr' => 					esc_attr__('Choose your services order by parameter', 'cleanora'), 
			'services_field_number_title' => 					esc_attr__('Services Number', 'cleanora'), 
			'services_field_number_descr' => 					esc_attr__('Enter the number of services for showing per page', 'cleanora'), 
			'services_field_number_descr_note' => 				esc_attr__('number, if empty - show all services', 'cleanora'), 
			'services_field_categories_descr' => 				esc_attr__('Show services associated with certain categories.', 'cleanora'), 
			'services_field_categories_descr_note' => 			esc_attr__('If you don\'t choose any service categories, all your services will be shown', 'cleanora'), 
			'services_field_layout_descr' => 					esc_attr__('Choose layout type for your services', 'cleanora'), 
			'services_field_layout_choice_grid' => 				esc_attr__('Services Grid', 'cleanora'), 
			'services_field_layout_mode_descr' => 				esc_attr__('Choose grid layout mode for your services', 'cleanora'), 
			'services_field_col_count_descr' => 				esc_attr__('Choose number of services per row', 'cleanora'), 
			'services_field_metadata_descr' => 					esc_attr__('Choose services metadata that you want to show', 'cleanora'), 
			'services_field_gap_descr' => 						esc_attr__('Choose the gap between services', 'cleanora'), 
			'services_field_filter_descr' => 					esc_attr__('If checked, enable services category filter', 'cleanora'), 
			'services_field_sorting_descr' => 					esc_attr__('If checked, enable services date & name sorting', 'cleanora'), 			
		));
	}
}

add_action('admin_enqueue_scripts', 'cleanora_theme_register_c_c_scripts');


// Counters Shortcode Attributes Filter
add_filter('cmsmasters_client_atts_filter', 'cmsmasters_client_atts');

function cmsmasters_client_atts() {
	return array( 
		'shortcode_id' => 	'', 
		'logo' => 			'', 
		'logo_overlay' => 	'', 
		'link' => 			'', 
		'target' => 		'blank', 
		'classes' => 		'' 
	);
}


// Posts Slider Shortcode Attributes Filter
add_filter('cmsmasters_posts_slider_atts_filter', 'cmsmasters_posts_slider_atts');

function cmsmasters_posts_slider_atts() {
	return array( 
		'shortcode_id' => 			'', 
		'orderby' => 				'', 
		'order' => 					'', 
		'post_type' => 				'', 
		'blog_categories' => 		'', 
		'portfolio_categories' => 	'', 
		'columns' => 				'', 
		'count' => 					'', 
		'pause' => 					'', 
		'speed' => 					'', 
		'blog_metadata' => 			'', 
		'portfolio_metadata' => 	'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
	);
}


// Pricing Table Offer
add_filter('cmsmasters_pricing_table_item_atts_filter', 'cmsmasters_pricing_table_item');

function cmsmasters_pricing_table_item() {
	return array( 
		'shortcode_id' => 			'', 
		'price' => 					'100', 
		'coins' => 					'', 
		'currency' => 				'$', 
		'period' => 				'', 
		'features' => 				'', 
		'best' => 					'', 
		'best_bg_color' => 			'', 
		'best_bd_color' => 			'', 
		'best_text_color' => 		'', 
		'button_show' => 			'', 
		'button_title' => 			'', 
		'button_link' => 			'#', 
		'button_target' => 			'', 
		'button_style' => 			'', 
		'button_font_family' => 	'', 
		'button_font_size' => 		'', 
		'button_line_height' => 	'', 
		'button_font_weight' => 	'', 
		'button_font_style' => 		'', 
		'button_padding_hor' => 	'', 
		'button_border_width' => 	'', 
		'button_border_style' => 	'', 
		'button_border_radius' => 	'', 
		'button_bg_color' => 		'', 
		'button_text_color' => 		'', 
		'button_border_color' => 	'', 
		'button_bg_color_h' => 		'', 
		'button_text_color_h' => 	'', 
		'button_border_color_h' => 	'', 
		'button_icon' => 			'', 
		'animation' => 				'', 
		'animation_delay' => 		'', 
		'classes' => 				'' 
	);
}
