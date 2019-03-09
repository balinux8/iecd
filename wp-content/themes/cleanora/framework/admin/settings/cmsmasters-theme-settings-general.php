<?php 
/**
 * @package 	WordPress
 * @subpackage 	Cleanora
 * @version 	1.0.0
 * 
 * Admin Panel General Options
 * Created by CMSMasters
 * 
 */


function cleanora_options_general_tabs() {
	$cmsmasters_option = cleanora_get_global_options();
	
	$tabs = array();
	
	$tabs['general'] = esc_attr__('General', 'cleanora');
	
	if ($cmsmasters_option['cleanora' . '_theme_layout'] === 'boxed') {
		$tabs['bg'] = esc_attr__('Background', 'cleanora');
	}
	
	if (CMSMASTERS_THEME_STYLE_COMPATIBILITY) {
		$tabs['theme_style'] = esc_attr__('Theme Style', 'cleanora');
	}
	
	$tabs['header'] = esc_attr__('Header', 'cleanora');
	$tabs['content'] = esc_attr__('Content', 'cleanora');
	$tabs['footer'] = esc_attr__('Footer', 'cleanora');
	
	return apply_filters('cmsmasters_options_general_tabs_filter', $tabs);
}


function cleanora_options_general_sections() {
	$tab = cleanora_get_the_tab();
	
	switch ($tab) {
	case 'general':
		$sections = array();
		
		$sections['general_section'] = esc_attr__('General Options', 'cleanora');
		
		break;
	case 'bg':
		$sections = array();
		
		$sections['bg_section'] = esc_attr__('Background Options', 'cleanora');
		
		break;
	case 'theme_style':
		$sections = array();
		
		$sections['theme_style_section'] = esc_attr__('Theme Design Style', 'cleanora');
		
		break;
	case 'header':
		$sections = array();
		
		$sections['header_section'] = esc_attr__('Header Options', 'cleanora');
		
		break;
	case 'content':
		$sections = array();
		
		$sections['content_section'] = esc_attr__('Content Options', 'cleanora');
		
		break;
	case 'footer':
		$sections = array();
		
		$sections['footer_section'] = esc_attr__('Footer Options', 'cleanora');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_sections_filter', $sections, $tab);
} 


function cleanora_options_general_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cleanora_get_the_tab();
	}
	
	$options = array();
	
	
	$defaults = cleanora_settings_general_defaults();
	
	
	switch ($tab) {
	case 'general':
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'cleanora' . '_theme_layout', 
			'title' => esc_html__('Theme Layout', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_theme_layout'], 
			'choices' => array( 
				esc_html__('Liquid', 'cleanora') . '|liquid', 
				esc_html__('Boxed', 'cleanora') . '|boxed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'cleanora' . '_logo_type', 
			'title' => esc_html__('Logo Type', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_logo_type'], 
			'choices' => array( 
				esc_html__('Image', 'cleanora') . '|image', 
				esc_html__('Text', 'cleanora') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'cleanora' . '_logo_url', 
			'title' => esc_html__('Logo Image', 'cleanora'), 
			'desc' => esc_html__('Choose your website logo image.', 'cleanora'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['cleanora' . '_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'cleanora' . '_logo_url_retina', 
			'title' => esc_html__('Retina Logo Image', 'cleanora'), 
			'desc' => esc_html__('Choose logo image for retina displays. Logo for Retina displays should be twice the size of the default one.', 'cleanora'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['cleanora' . '_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'cleanora' . '_logo_title', 
			'title' => esc_html__('Logo Title', 'cleanora'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['cleanora' . '_logo_title'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'cleanora' . '_logo_subtitle', 
			'title' => esc_html__('Logo Subtitle', 'cleanora'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['cleanora' . '_logo_subtitle'], 
			'class' => 'nohtml' 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'cleanora' . '_logo_custom_color', 
			'title' => esc_html__('Custom Text Colors', 'cleanora'), 
			'desc' => esc_html__('enable', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_logo_custom_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'cleanora' . '_logo_title_color', 
			'title' => esc_html__('Logo Title Color', 'cleanora'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['cleanora' . '_logo_title_color'] 
		);
		
		$options[] = array( 
			'section' => 'general_section', 
			'id' => 'cleanora' . '_logo_subtitle_color', 
			'title' => esc_html__('Logo Subtitle Color', 'cleanora'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['cleanora' . '_logo_subtitle_color'] 
		);
		
		break;
	case 'bg':
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'cleanora' . '_bg_col', 
			'title' => esc_html__('Background Color', 'cleanora'), 
			'desc' => '', 
			'type' => 'color', 
			'std' => $defaults[$tab]['cleanora' . '_bg_col'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'cleanora' . '_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'cleanora' . '_bg_img', 
			'title' => esc_html__('Background Image', 'cleanora'), 
			'desc' => esc_html__('Choose your custom website background image url.', 'cleanora'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['cleanora' . '_bg_img'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'cleanora' . '_bg_rep', 
			'title' => esc_html__('Background Repeat', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'cleanora') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'cleanora') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'cleanora') . '|repeat-y', 
				esc_html__('Repeat', 'cleanora') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'cleanora' . '_bg_pos', 
			'title' => esc_html__('Background Position', 'cleanora'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['cleanora' . '_bg_pos'], 
			'choices' => array( 
				esc_html__('Top Left', 'cleanora') . '|top left', 
				esc_html__('Top Center', 'cleanora') . '|top center', 
				esc_html__('Top Right', 'cleanora') . '|top right', 
				esc_html__('Center Left', 'cleanora') . '|center left', 
				esc_html__('Center Center', 'cleanora') . '|center center', 
				esc_html__('Center Right', 'cleanora') . '|center right', 
				esc_html__('Bottom Left', 'cleanora') . '|bottom left', 
				esc_html__('Bottom Center', 'cleanora') . '|bottom center', 
				esc_html__('Bottom Right', 'cleanora') . '|bottom right' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'cleanora' . '_bg_att', 
			'title' => esc_html__('Background Attachment', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'cleanora') . '|scroll', 
				esc_html__('Fixed', 'cleanora') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'bg_section', 
			'id' => 'cleanora' . '_bg_size', 
			'title' => esc_html__('Background Size', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'cleanora') . '|auto', 
				esc_html__('Cover', 'cleanora') . '|cover', 
				esc_html__('Contain', 'cleanora') . '|contain' 
			) 
		);
		
		break;
	case 'theme_style':
		$options[] = array( 
			'section' => 'theme_style_section', 
			'id' => 'cleanora' . '_theme_style', 
			'title' => esc_html__('Choose Theme Style', 'cleanora'), 
			'desc' => '', 
			'type' => 'select_theme_style', 
			'std' => '', 
			'choices' => cleanora_all_theme_styles() 
		);
		
		break;
	case 'header':
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'cleanora' . '_fixed_header', 
			'title' => esc_html__('Fixed Header', 'cleanora'), 
			'desc' => esc_html__('enable', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_fixed_header'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'cleanora' . '_header_overlaps', 
			'title' => esc_html__('Header Overlaps Content by Default', 'cleanora'), 
			'desc' => esc_html__('enable', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_header_overlaps'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'cleanora' . '_header_top_line', 
			'title' => esc_html__('Top Line', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_header_top_line'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'cleanora' . '_header_top_height', 
			'title' => esc_html__('Top Height', 'cleanora'), 
			'desc' => esc_html__('pixels', 'cleanora'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['cleanora' . '_header_top_height'], 
			'min' => '10' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'cleanora' . '_header_top_line_short_info', 
			'title' => esc_html__('Top Short Info', 'cleanora'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'cleanora') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['cleanora' . '_header_top_line_short_info'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'cleanora' . '_header_top_line_add_cont', 
			'title' => esc_html__('Top Additional Content', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_header_top_line_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'cleanora') . '|none', 
				esc_html__('Top Line Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'cleanora') . '|social', 
				esc_html__('Top Line Navigation', 'cleanora') . '|nav' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'cleanora' . '_header_styles', 
			'title' => esc_html__('Header Styles', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_header_styles'], 
			'choices' => array( 
				esc_html__('Default Style', 'cleanora') . '|default', 
				esc_html__('Compact Style Left Navigation', 'cleanora') . '|l_nav', 
				esc_html__('Compact Style Right Navigation', 'cleanora') . '|r_nav', 
				esc_html__('Compact Style Center Navigation', 'cleanora') . '|c_nav'
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'cleanora' . '_header_mid_height', 
			'title' => esc_html__('Header Middle Height', 'cleanora'), 
			'desc' => esc_html__('pixels', 'cleanora'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['cleanora' . '_header_mid_height'], 
			'min' => '40' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'cleanora' . '_header_bot_height', 
			'title' => esc_html__('Header Bottom Height', 'cleanora'), 
			'desc' => esc_html__('pixels', 'cleanora'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['cleanora' . '_header_bot_height'], 
			'min' => '20' 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'cleanora' . '_header_search', 
			'title' => esc_html__('Header Search', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_header_search'] 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'cleanora' . '_header_add_cont', 
			'title' => esc_html__('Header Additional Content', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_header_add_cont'], 
			'choices' => array( 
				esc_html__('None', 'cleanora') . '|none', 
				esc_html__('Header Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'cleanora') . '|social', 
				esc_html__('Header Custom HTML', 'cleanora') . '|cust_html' 
			) 
		);
		
		$options[] = array( 
			'section' => 'header_section', 
			'id' => 'cleanora' . '_header_add_cont_cust_html', 
			'title' => esc_html__('Header Custom HTML', 'cleanora'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'cleanora') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['cleanora' . '_header_add_cont_cust_html'], 
			'class' => '' 
		);
		
		break;
	case 'content':
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'cleanora' . '_layout', 
			'title' => esc_html__('Layout Type by Default', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['cleanora' . '_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'cleanora') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'cleanora') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'cleanora') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'cleanora' . '_archives_layout', 
			'title' => esc_html__('Archives Layout Type', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['cleanora' . '_archives_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'cleanora') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'cleanora') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'cleanora') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'cleanora' . '_search_layout', 
			'title' => esc_html__('Search Layout Type', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['cleanora' . '_search_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'cleanora') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'cleanora') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'cleanora') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'cleanora' . '_other_layout', 
			'title' => esc_html__('Other Layout Type', 'cleanora'), 
			'desc' => 'Layout for pages of non-listed types', 
			'type' => 'radio_img', 
			'std' => $defaults[$tab]['cleanora' . '_other_layout'], 
			'choices' => array( 
				esc_html__('Right Sidebar', 'cleanora') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_r.jpg' . '|r_sidebar', 
				esc_html__('Left Sidebar', 'cleanora') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/sidebar_l.jpg' . '|l_sidebar', 
				esc_html__('Full Width', 'cleanora') . '|' . get_template_directory_uri() . '/framework/admin/inc/img/fullwidth.jpg' . '|fullwidth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'cleanora' . '_heading_alignment', 
			'title' => esc_html__('Heading Alignment by Default', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_heading_alignment'], 
			'choices' => array( 
				esc_html__('Left', 'cleanora') . '|left', 
				esc_html__('Right', 'cleanora') . '|right', 
				esc_html__('Center', 'cleanora') . '|center' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'cleanora' . '_heading_scheme', 
			'title' => esc_html__('Heading Custom Color Scheme by Default', 'cleanora'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['cleanora' . '_heading_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'cleanora' . '_heading_bg_image_enable', 
			'title' => esc_html__('Heading Background Image Visibility by Default', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_heading_bg_image_enable'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'cleanora' . '_heading_bg_image', 
			'title' => esc_html__('Heading Background Image by Default', 'cleanora'), 
			'desc' => esc_html__('Choose your custom heading background image by default.', 'cleanora'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['cleanora' . '_heading_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'cleanora' . '_heading_bg_repeat', 
			'title' => esc_html__('Heading Background Repeat by Default', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_heading_bg_repeat'], 
			'choices' => array( 
				esc_html__('No Repeat', 'cleanora') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'cleanora') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'cleanora') . '|repeat-y', 
				esc_html__('Repeat', 'cleanora') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'cleanora' . '_heading_bg_attachment', 
			'title' => esc_html__('Heading Background Attachment by Default', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_heading_bg_attachment'], 
			'choices' => array( 
				esc_html__('Scroll', 'cleanora') . '|scroll', 
				esc_html__('Fixed', 'cleanora') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'cleanora' . '_heading_bg_size', 
			'title' => esc_html__('Heading Background Size by Default', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_heading_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'cleanora') . '|auto', 
				esc_html__('Cover', 'cleanora') . '|cover', 
				esc_html__('Contain', 'cleanora') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'cleanora' . '_heading_bg_color', 
			'title' => esc_html__('Heading Background Color Overlay by Default', 'cleanora'), 
			'desc' => '',  
			'type' => 'rgba', 
			'std' => $defaults[$tab]['cleanora' . '_heading_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'cleanora' . '_heading_height', 
			'title' => esc_html__('Heading Height by Default', 'cleanora'), 
			'desc' => esc_html__('pixels', 'cleanora'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['cleanora' . '_heading_height'], 
			'min' => '0' 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'cleanora' . '_breadcrumbs', 
			'title' => esc_html__('Breadcrumbs Visibility by Default', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_breadcrumbs'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'cleanora' . '_bottom_scheme', 
			'title' => esc_html__('Bottom Custom Color Scheme', 'cleanora'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['cleanora' . '_bottom_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'cleanora' . '_bottom_sidebar', 
			'title' => esc_html__('Bottom Sidebar Visibility by Default', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_bottom_sidebar'] 
		);
		
		$options[] = array( 
			'section' => 'content_section', 
			'id' => 'cleanora' . '_bottom_sidebar_layout', 
			'title' => esc_html__('Bottom Sidebar Layout by Default', 'cleanora'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['cleanora' . '_bottom_sidebar_layout'], 
			'choices' => array( 
				'1/1|11', 
				'1/2 + 1/2|1212', 
				'1/3 + 2/3|1323', 
				'2/3 + 1/3|2313', 
				'1/4 + 3/4|1434', 
				'3/4 + 1/4|3414', 
				'1/3 + 1/3 + 1/3|131313', 
				'1/2 + 1/4 + 1/4|121414', 
				'1/4 + 1/2 + 1/4|141214', 
				'1/4 + 1/4 + 1/2|141412', 
				'1/4 + 1/4 + 1/4 + 1/4|14141414' 
			) 
		);
		
		break;
	case 'footer':
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'cleanora' . '_footer_scheme', 
			'title' => esc_html__('Footer Custom Color Scheme', 'cleanora'), 
			'desc' => '', 
			'type' => 'select_scheme', 
			'std' => $defaults[$tab]['cleanora' . '_footer_scheme'], 
			'choices' => cmsmasters_color_schemes_list() 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'cleanora' . '_footer_type', 
			'title' => esc_html__('Footer Type', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_footer_type'], 
			'choices' => array( 
				esc_html__('Default', 'cleanora') . '|default', 
				esc_html__('Small', 'cleanora') . '|small' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'cleanora' . '_footer_additional_content', 
			'title' => esc_html__('Footer Additional Content', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_footer_additional_content'], 
			'choices' => array( 
				esc_html__('None', 'cleanora') . '|none', 
				esc_html__('Footer Navigation', 'cleanora') . '|nav', 
				esc_html__('Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'cleanora') . '|social', 
				esc_html__('Custom HTML', 'cleanora') . '|text' 
			) 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'cleanora' . '_footer_logo', 
			'title' => esc_html__('Footer Logo', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_footer_logo'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'cleanora' . '_footer_logo_url', 
			'title' => esc_html__('Footer Logo', 'cleanora'), 
			'desc' => esc_html__('Choose your website footer logo image.', 'cleanora'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['cleanora' . '_footer_logo_url'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'cleanora' . '_footer_logo_url_retina', 
			'title' => esc_html__('Footer Logo for Retina', 'cleanora'), 
			'desc' => esc_html__('Choose your website footer logo image for retina.', 'cleanora'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['cleanora' . '_footer_logo_url_retina'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'cleanora' . '_footer_nav', 
			'title' => esc_html__('Footer Navigation', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_footer_nav'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'cleanora' . '_footer_social', 
			'title' => esc_html__('Footer Social Icons (will be shown if Cmsmasters Content Composer plugin is active)', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_footer_social'] 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'cleanora' . '_footer_html', 
			'title' => esc_html__('Footer Custom HTML', 'cleanora'), 
			'desc' => '<strong>' . esc_html__('HTML tags are allowed!', 'cleanora') . '</strong>', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['cleanora' . '_footer_html'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'footer_section', 
			'id' => 'cleanora' . '_footer_copyright', 
			'title' => esc_html__('Copyright Text', 'cleanora'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['cleanora' . '_footer_copyright'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_general_fields_filter', $options, $tab);	
}

