<?php 
/**
 * @package 	WordPress
 * @subpackage 	Cleanora
 * @version		1.0.0
 * 
 * Theme Admin Options
 * Created by CMSMasters
 * 
 */

function cleanora_theme_meta_fields($custom_all_meta_fields) {
    $cmsmasters_option = cleanora_get_global_options();
    
    $custom_all_meta_fields_new = array();
    
    
	foreach ($custom_all_meta_fields as $custom_all_meta_field) {
		if (
			(isset($_GET['post_type']) && $_GET['post_type'] == 'project') || 
			(isset($_POST['post_type']) && $_POST['post_type'] == 'project') || 
			(isset($_GET['post']) && get_post_type($_GET['post']) == 'project') 
		) {
			if ($custom_all_meta_field['id'] == 'cmsmasters_project_images') {	
				$custom_all_meta_field['label'] = esc_html__('Service Images', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_image_show') {	
				$custom_all_meta_field['label'] = esc_html__('Don\'t Show Featured Image in Open Service', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_title') {	
				$custom_all_meta_field['label'] = esc_html__('Service Title', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_size') {	
				$custom_all_meta_field['label'] = esc_html__('Service Puzzle Image Size', 'cleanora');
				$custom_all_meta_field['desc'] = esc_html__('Recommended Service Puzzle Image dimensions, or other size, with the same ratio', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_puzzle_image') {	
				$custom_all_meta_field['label'] = esc_html__('Service Puzzle Image', 'cleanora');
				$custom_all_meta_field['desc'] = esc_html__('Choose image for Masonry Puzzle services shortcode', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_details_title') {	
				$custom_all_meta_field['label'] = esc_html__('Service Details Title', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_features') {	
				$custom_all_meta_field['label'] = esc_html__('Service Info', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_link_text') {	
				$custom_all_meta_field['label'] = esc_html__('Service Link Text', 'cleanora');
				$custom_all_meta_field['std'] = esc_html__('Read More', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_link_url') {	
				$custom_all_meta_field['label'] = esc_html__('Service Link URL', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_link_redirect') {	
				$custom_all_meta_field['desc'] = esc_html__('Redirect to service link URL instead of opening service page', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_link_target') {	
				$custom_all_meta_field['label'] = esc_html__('Service Link Target', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_features_one_title') {	
				$custom_all_meta_field['label'] = esc_html__('Service Features 1 Title', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_features_one') {	
				$custom_all_meta_field['label'] = esc_html__('Service Features 1', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_features_two_title') {	
				$custom_all_meta_field['label'] = esc_html__('Service Features 2 Title', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_features_two') {	
				$custom_all_meta_field['label'] = esc_html__('Service Features 2', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_features_three_title') {	
				$custom_all_meta_field['label'] = esc_html__('Service Features 3 Title', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_features_three') {	
				$custom_all_meta_field['label'] = esc_html__('Service Features 3', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_tabs') {
				$custom_all_meta_field['options']['cmsmasters_project']['label'] = esc_html__('Service', 'cleanora');
				
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			} else if ($custom_all_meta_field['id'] == 'cmsmasters_project_more_posts') {
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
				
				
				$custom_all_meta_fields_new[] = array( 
					'label'    => esc_html__("'Read More' Buttons Text", 'cleanora'), 
					'desc'    => esc_html__("Enter the 'Read More' button text that should be used in you services shortcode", 'cleanora'), 
					'id'    => 'cmsmasters_project_read_more', 
					'type'    => 'text', 
					'hide'    => '', 
					'std'    => esc_html__('Read More', 'cleanora') 
				);
			} else {
				$custom_all_meta_fields_new[] = $custom_all_meta_field;
			}
		} else {
			$custom_all_meta_fields_new = $custom_all_meta_fields;
		}
	}
    
    
    return $custom_all_meta_fields_new;
}

add_filter('get_custom_all_meta_fields_filter', 'cleanora_theme_meta_fields');