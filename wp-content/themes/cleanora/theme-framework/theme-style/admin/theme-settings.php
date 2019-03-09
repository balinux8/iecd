<?php 
/**
 * @package 	WordPress
 * @subpackage 	Cleanora
 * @version		1.0.0
 * 
 * Theme Admin Settings
 * Created by CMSMasters
 * 
 */


/* General Settings */
function cleanora_theme_options_general_fields($options, $tab) {
	if ($tab == 'header') {
		$new_options = array();
		
		$defaults = cleanora_settings_general_defaults();
		
		
		foreach ($options as $option) {
			if ($option['id'] == 'cleanora' . '_header_search') {
				$new_options[] = array( 
					'section' => 'header_section', 
					'id' => 'cleanora' . '_header_bot_button', 
					'title' => esc_html__('Header Bottom Button', 'cleanora'), 
					'desc' => esc_html__('show', 'cleanora'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['cleanora' . '_header_bot_button'] 
				);
				
				$new_options[] = array( 
					'section' => 'header_section', 
					'id' => 'cleanora' . '_header_bot_button_text', 
					'title' => esc_html__('Header Bottom Button Text', 'cleanora'), 
					'desc' => '', 
					'type' => 'text', 
					'std' => $defaults[$tab]['cleanora' . '_header_bot_button_text'], 
					'class' => ''
				);
				
				$new_options[] = array( 
					'section' => 'header_section', 
					'id' => 'cleanora' . '_header_bot_button_link', 
					'title' => esc_html__('Header Bottom Button Link', 'cleanora'), 
					'desc' => '', 
					'type' => 'text', 
					'std' => $defaults[$tab]['cleanora' . '_header_bot_button_link'], 
					'class' => ''
				);
				
				$new_options[] = $option;
			} else if ($option['id'] == 'cleanora' . '_header_add_cont_cust_html') {
				$new_options[] = array( 
					'section' => 'header_section', 
					'id' => 'cleanora' . '_header_cust_html_hide', 
					'title' => esc_html__('Custom HTML on Small Screens', 'cleanora'), 
					'desc' => esc_html__('show', 'cleanora'), 
					'type' => 'checkbox', 
					'std' => $defaults[$tab]['cleanora' . '_header_cust_html_hide'], 
				);
				
				$new_options[] = $option;
			} else {
				$new_options[] = $option;
			}
		}
		
		$options = $new_options;
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_general_fields_filter', 'cleanora_theme_options_general_fields', 10, 2);



/* Color Settings */
function cleanora_theme_options_color_fields($options, $tab) {
	$defaults = cleanora_color_schemes_defaults();
	
	
	if ($tab != 'header' && $tab != 'navigation' && $tab != 'header_top') {
		$options[] = array( 
			'section' => $tab . '_section', 
			'id' => 'cleanora' . '_' . $tab . '_secondary', 
			'title' => esc_html__('Secondary Color', 'cleanora'), 
			'desc' => esc_html__('Secondary color for some elements', 'cleanora'), 
			'type' => 'rgba', 
			'std' => (isset($defaults[$tab])) ? $defaults[$tab]['secondary'] : $defaults['default']['secondary'] 
		);
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_color_fields_filter', 'cleanora_theme_options_color_fields', 10, 2);



/* Single Posts Settings */
function cleanora_theme_options_single_tabs_fields($tabs) {
	$tabs['project'] = esc_attr__('Service', 'cleanora');
	
	
	return $tabs;
}

add_filter('cmsmasters_options_single_tabs_filter', 'cleanora_theme_options_single_tabs_fields', 10, 2);



function cleanora_theme_options_single_sections_fields($sections, $tab) {
	if ($tab == 'project') {
		$sections['project_section'] = esc_attr__('Service Options', 'cleanora');
	}
	
	
	return $sections;
}

add_filter('cmsmasters_options_single_sections_filter', 'cleanora_theme_options_single_sections_fields', 10, 2);



function cleanora_theme_options_single_fields($options, $tab) {
	if ($tab == 'project') {
		$new_options = array();
		
		foreach ($options as $option) {
			if ($option['id'] == 'cleanora' . '_portfolio_project_title') {
				$option['title'] = esc_html__('Service Title', 'cleanora'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'cleanora' . '_portfolio_project_details_title') {
				$option['title'] = esc_html__('Service Details Title', 'cleanora'); 
				$option['desc'] = esc_html__('Enter a service details block title', 'cleanora'); 
				$option['std'] = esc_html__('Service Details', 'cleanora'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'cleanora' . '_portfolio_project_date') {
				$option['title'] = esc_html__('Service Date', 'cleanora'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'cleanora' . '_portfolio_project_cat') {
				$option['title'] = esc_html__('Service Categories', 'cleanora'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'cleanora' . '_portfolio_project_author') {
				$option['title'] = esc_html__('Service Author', 'cleanora'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'cleanora' . '_portfolio_project_comment') {
				$option['title'] = esc_html__('Service Comments', 'cleanora'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'cleanora' . '_portfolio_project_tag') {
				$option['title'] = esc_html__('Service Tags', 'cleanora'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'cleanora' . '_portfolio_project_like') {
				$option['title'] = esc_html__('Service Likes', 'cleanora'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'cleanora' . '_portfolio_project_link') {
				$option['title'] = esc_html__('Service Link', 'cleanora'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'cleanora' . '_portfolio_project_nav_box') {
				$option['title'] = esc_html__('Services Navigation Box', 'cleanora'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'cleanora' . '_portfolio_project_nav_order_cat') {
				$option['title'] = esc_html__('Services Navigation Order by Category', 'cleanora'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'cleanora' . '_portfolio_more_projects_box') {
				$option['title'] = esc_html__('More Services Box', 'cleanora'); 
				$option['choices'] = array( 
					esc_html__('Show Related Services', 'cleanora') . '|related', 
					esc_html__('Show Popular Services', 'cleanora') . '|popular', 
					esc_html__('Show Recent Services', 'cleanora') . '|recent', 
					esc_html__('Hide More Services Box', 'cleanora') . '|hide' 
				);
				
				$new_options[] = $option;
			} else if ($option['id'] == 'cleanora' . '_portfolio_more_projects_count') {
				$option['title'] = esc_html__('More Services Box Items Number', 'cleanora'); 
				$option['desc'] = esc_html__('services', 'cleanora'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'cleanora' . '_portfolio_more_projects_pause') {
				$option['title'] = esc_html__('More Services Slider Pause Time', 'cleanora'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'cleanora' . '_portfolio_project_slug') {
				$option['title'] = esc_html__('Service Slug', 'cleanora'); 
				$option['desc'] = esc_html__('Enter a page slug that should be used for your services single item', 'cleanora'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'cleanora' . '_portfolio_pj_categs_slug') {
				$option['title'] = esc_html__('Service Categories Slug', 'cleanora'); 
				$option['desc'] = esc_html__('Enter page slug that should be used on services categories archive page', 'cleanora'); 
				
				$new_options[] = $option;
			} else if ($option['id'] == 'cleanora' . '_portfolio_pj_tags_slug') {
				$option['title'] = esc_html__('Service Tags Slug', 'cleanora'); 
				$option['desc'] = esc_html__('Enter page slug that should be used on services tags archive page', 'cleanora'); 
				
				$new_options[] = $option;
			} else {
				$new_options[] = $option;
			}
		}
		
		$options = $new_options;
	}
	
	
	return $options;
}

add_filter('cmsmasters_options_single_fields_filter', 'cleanora_theme_options_single_fields', 10, 2);

