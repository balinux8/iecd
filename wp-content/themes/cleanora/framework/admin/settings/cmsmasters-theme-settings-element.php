<?php 
/**
 * @package 	WordPress
 * @subpackage 	Cleanora
 * @version 	1.0.0
 * 
 * Admin Panel Element Options
 * Created by CMSMasters
 * 
 */


function cleanora_options_element_tabs() {
	$tabs = array();
	
	$tabs['sidebar'] = esc_attr__('Sidebars', 'cleanora');
	
	if (class_exists('Cmsmasters_Content_Composer')) {
		$tabs['icon'] = esc_attr__('Social Icons', 'cleanora');
	}
	
	$tabs['lightbox'] = esc_attr__('Lightbox', 'cleanora');
	$tabs['sitemap'] = esc_attr__('Sitemap', 'cleanora');
	$tabs['error'] = esc_attr__('404', 'cleanora');
	$tabs['code'] = esc_attr__('Custom Codes', 'cleanora');
	
	if (class_exists('Cmsmasters_Form_Builder')) {
		$tabs['recaptcha'] = esc_attr__('reCAPTCHA', 'cleanora');
	}
	
	return apply_filters('cmsmasters_options_element_tabs_filter', $tabs);
}


function cleanora_options_element_sections() {
	$tab = cleanora_get_the_tab();
	
	switch ($tab) {
	case 'sidebar':
		$sections = array();
		
		$sections['sidebar_section'] = esc_attr__('Custom Sidebars', 'cleanora');
		
		break;
	case 'icon':
		$sections = array();
		
		$sections['icon_section'] = esc_attr__('Social Icons', 'cleanora');
		
		break;
	case 'lightbox':
		$sections = array();
		
		$sections['lightbox_section'] = esc_attr__('Theme Lightbox Options', 'cleanora');
		
		break;
	case 'sitemap':
		$sections = array();
		
		$sections['sitemap_section'] = esc_attr__('Sitemap Page Options', 'cleanora');
		
		break;
	case 'error':
		$sections = array();
		
		$sections['error_section'] = esc_attr__('404 Error Page Options', 'cleanora');
		
		break;
	case 'code':
		$sections = array();
		
		$sections['code_section'] = esc_attr__('Custom Codes', 'cleanora');
		
		break;
	case 'recaptcha':
		$sections = array();
		
		$sections['recaptcha_section'] = esc_attr__('Form Builder Plugin reCAPTCHA Keys', 'cleanora');
		
		break;
	default:
		$sections = array();
		
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_sections_filter', $sections, $tab);	
} 


function cleanora_options_element_fields($set_tab = false) {
	if ($set_tab) {
		$tab = $set_tab;
	} else {
		$tab = cleanora_get_the_tab();
	}
	
	
	$options = array();
	
	
	$defaults = cleanora_settings_element_defaults();
	
	
	switch ($tab) {
	case 'sidebar':
		$options[] = array( 
			'section' => 'sidebar_section', 
			'id' => 'cleanora' . '_sidebar', 
			'title' => esc_html__('Custom Sidebars', 'cleanora'), 
			'desc' => '', 
			'type' => 'sidebar', 
			'std' => $defaults[$tab]['cleanora' . '_sidebar'] 
		);
		
		break;
	case 'icon':
		$options[] = array( 
			'section' => 'icon_section', 
			'id' => 'cleanora' . '_social_icons', 
			'title' => esc_html__('Social Icons', 'cleanora'), 
			'desc' => '', 
			'type' => 'social', 
			'std' => $defaults[$tab]['cleanora' . '_social_icons'] 
		);
		
		break;
	case 'lightbox':
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_skin', 
			'title' => esc_html__('Skin', 'cleanora'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_skin'], 
			'choices' => array( 
				esc_html__('Dark', 'cleanora') . '|dark', 
				esc_html__('Light', 'cleanora') . '|light', 
				esc_html__('Mac', 'cleanora') . '|mac', 
				esc_html__('Metro Black', 'cleanora') . '|metro-black', 
				esc_html__('Metro White', 'cleanora') . '|metro-white', 
				esc_html__('Parade', 'cleanora') . '|parade', 
				esc_html__('Smooth', 'cleanora') . '|smooth' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_path', 
			'title' => esc_html__('Path', 'cleanora'), 
			'desc' => esc_html__('Sets path for switching windows', 'cleanora'), 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_path'], 
			'choices' => array( 
				esc_html__('Vertical', 'cleanora') . '|vertical', 
				esc_html__('Horizontal', 'cleanora') . '|horizontal' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_infinite', 
			'title' => esc_html__('Infinite', 'cleanora'), 
			'desc' => esc_html__('Sets the ability to infinite the group', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_infinite'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_aspect_ratio', 
			'title' => esc_html__('Keep Aspect Ratio', 'cleanora'), 
			'desc' => esc_html__('Sets the resizing method used to keep aspect ratio within the viewport', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_aspect_ratio'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_mobile_optimizer', 
			'title' => esc_html__('Mobile Optimizer', 'cleanora'), 
			'desc' => esc_html__('Make lightboxes optimized for giving better experience with mobile devices', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_mobile_optimizer'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_max_scale', 
			'title' => esc_html__('Max Scale', 'cleanora'), 
			'desc' => esc_html__('Sets the maximum viewport scale of the content', 'cleanora'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_max_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_min_scale', 
			'title' => esc_html__('Min Scale', 'cleanora'), 
			'desc' => esc_html__('Sets the minimum viewport scale of the content', 'cleanora'), 
			'type' => 'number', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_min_scale'], 
			'min' => 0.1, 
			'max' => 2, 
			'step' => 0.05 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_inner_toolbar', 
			'title' => esc_html__('Inner Toolbar', 'cleanora'), 
			'desc' => esc_html__('Bring buttons into windows, or let them be over the overlay', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_inner_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_smart_recognition', 
			'title' => esc_html__('Smart Recognition', 'cleanora'), 
			'desc' => esc_html__('Sets content auto recognize from web pages', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_smart_recognition'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_fullscreen_one_slide', 
			'title' => esc_html__('Fullscreen One Slide', 'cleanora'), 
			'desc' => esc_html__('Decide to fullscreen only one slide or hole gallery the fullscreen mode', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_fullscreen_one_slide'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_fullscreen_viewport', 
			'title' => esc_html__('Fullscreen Viewport', 'cleanora'), 
			'desc' => esc_html__('Sets the resizing method used to fit content within the fullscreen mode', 'cleanora'), 
			'type' => 'select', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_fullscreen_viewport'], 
			'choices' => array( 
				esc_html__('Center', 'cleanora') . '|center', 
				esc_html__('Fit', 'cleanora') . '|fit', 
				esc_html__('Fill', 'cleanora') . '|fill', 
				esc_html__('Stretch', 'cleanora') . '|stretch' 
			) 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_controls_toolbar', 
			'title' => esc_html__('Toolbar Controls', 'cleanora'), 
			'desc' => esc_html__('Sets buttons be available or not', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_controls_toolbar'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_controls_arrows', 
			'title' => esc_html__('Arrow Controls', 'cleanora'), 
			'desc' => esc_html__('Enable the arrow buttons', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_controls_arrows'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_controls_fullscreen', 
			'title' => esc_html__('Fullscreen Controls', 'cleanora'), 
			'desc' => esc_html__('Sets the fullscreen button', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_controls_fullscreen'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_controls_thumbnail', 
			'title' => esc_html__('Thumbnails Controls', 'cleanora'), 
			'desc' => esc_html__('Sets the thumbnail navigation', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_controls_thumbnail'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_controls_keyboard', 
			'title' => esc_html__('Keyboard Controls', 'cleanora'), 
			'desc' => esc_html__('Sets the keyboard navigation', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_controls_keyboard'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_controls_mousewheel', 
			'title' => esc_html__('Mouse Wheel Controls', 'cleanora'), 
			'desc' => esc_html__('Sets the mousewheel navigation', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_controls_mousewheel'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_controls_swipe', 
			'title' => esc_html__('Swipe Controls', 'cleanora'), 
			'desc' => esc_html__('Sets the swipe navigation', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_controls_swipe'] 
		);
		
		$options[] = array( 
			'section' => 'lightbox_section', 
			'id' => 'cleanora' . '_ilightbox_controls_slideshow', 
			'title' => esc_html__('Slideshow Controls', 'cleanora'), 
			'desc' => esc_html__('Enable the slideshow feature and button', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_ilightbox_controls_slideshow'] 
		);
		
		break;
	case 'sitemap':
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'cleanora' . '_sitemap_nav', 
			'title' => esc_html__('Website Pages', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_sitemap_nav'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'cleanora' . '_sitemap_categs', 
			'title' => esc_html__('Blog Archives by Categories', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_sitemap_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'cleanora' . '_sitemap_tags', 
			'title' => esc_html__('Blog Archives by Tags', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_sitemap_tags'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'cleanora' . '_sitemap_month', 
			'title' => esc_html__('Blog Archives by Month', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_sitemap_month'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'cleanora' . '_sitemap_pj_categs', 
			'title' => esc_html__('Portfolio Archives by Categories', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_sitemap_pj_categs'] 
		);
		
		$options[] = array( 
			'section' => 'sitemap_section', 
			'id' => 'cleanora' . '_sitemap_pj_tags', 
			'title' => esc_html__('Portfolio Archives by Tags', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_sitemap_pj_tags'] 
		);
		
		break;
	case 'error':
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'cleanora' . '_error_color', 
			'title' => esc_html__('Text Color', 'cleanora'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['cleanora' . '_error_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'cleanora' . '_error_bg_color', 
			'title' => esc_html__('Background Color', 'cleanora'), 
			'desc' => '', 
			'type' => 'rgba', 
			'std' => $defaults[$tab]['cleanora' . '_error_bg_color'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'cleanora' . '_error_bg_img_enable', 
			'title' => esc_html__('Background Image Visibility', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_error_bg_img_enable'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'cleanora' . '_error_bg_image', 
			'title' => esc_html__('Background Image', 'cleanora'), 
			'desc' => esc_html__('Choose your custom error page background image.', 'cleanora'), 
			'type' => 'upload', 
			'std' => $defaults[$tab]['cleanora' . '_error_bg_image'], 
			'frame' => 'select', 
			'multiple' => false 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'cleanora' . '_error_bg_rep', 
			'title' => esc_html__('Background Repeat', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_error_bg_rep'], 
			'choices' => array( 
				esc_html__('No Repeat', 'cleanora') . '|no-repeat', 
				esc_html__('Repeat Horizontally', 'cleanora') . '|repeat-x', 
				esc_html__('Repeat Vertically', 'cleanora') . '|repeat-y', 
				esc_html__('Repeat', 'cleanora') . '|repeat' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'cleanora' . '_error_bg_pos', 
			'title' => esc_html__('Background Position', 'cleanora'), 
			'desc' => '', 
			'type' => 'select', 
			'std' => $defaults[$tab]['cleanora' . '_error_bg_pos'], 
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
			'section' => 'error_section', 
			'id' => 'cleanora' . '_error_bg_att', 
			'title' => esc_html__('Background Attachment', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_error_bg_att'], 
			'choices' => array( 
				esc_html__('Scroll', 'cleanora') . '|scroll', 
				esc_html__('Fixed', 'cleanora') . '|fixed' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'cleanora' . '_error_bg_size', 
			'title' => esc_html__('Background Size', 'cleanora'), 
			'desc' => '', 
			'type' => 'radio', 
			'std' => $defaults[$tab]['cleanora' . '_error_bg_size'], 
			'choices' => array( 
				esc_html__('Auto', 'cleanora') . '|auto', 
				esc_html__('Cover', 'cleanora') . '|cover', 
				esc_html__('Contain', 'cleanora') . '|contain' 
			) 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'cleanora' . '_error_search', 
			'title' => esc_html__('Search Line', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_error_search'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'cleanora' . '_error_sitemap_button', 
			'title' => esc_html__('Sitemap Button', 'cleanora'), 
			'desc' => esc_html__('show', 'cleanora'), 
			'type' => 'checkbox', 
			'std' => $defaults[$tab]['cleanora' . '_error_sitemap_button'] 
		);
		
		$options[] = array( 
			'section' => 'error_section', 
			'id' => 'cleanora' . '_error_sitemap_link', 
			'title' => esc_html__('Sitemap Page URL', 'cleanora'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['cleanora' . '_error_sitemap_link'], 
			'class' => '' 
		);
		
		break;
	case 'code':
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'cleanora' . '_custom_css', 
			'title' => esc_html__('Custom CSS', 'cleanora'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['cleanora' . '_custom_css'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'cleanora' . '_custom_js', 
			'title' => esc_html__('Custom JavaScript', 'cleanora'), 
			'desc' => '', 
			'type' => 'textarea', 
			'std' => $defaults[$tab]['cleanora' . '_custom_js'], 
			'class' => 'allowlinebreaks' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'cleanora' . '_gmap_api_key', 
			'title' => esc_html__('Google Maps API key', 'cleanora'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['cleanora' . '_gmap_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'cleanora' . '_api_key', 
			'title' => esc_html__('Twitter API key', 'cleanora'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['cleanora' . '_api_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'cleanora' . '_api_secret', 
			'title' => esc_html__('Twitter API secret', 'cleanora'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['cleanora' . '_api_secret'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'cleanora' . '_access_token', 
			'title' => esc_html__('Twitter Access token', 'cleanora'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['cleanora' . '_access_token'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'code_section', 
			'id' => 'cleanora' . '_access_token_secret', 
			'title' => esc_html__('Twitter Access token secret', 'cleanora'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['cleanora' . '_access_token_secret'], 
			'class' => '' 
		);
		
		break;
	case 'recaptcha':
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'cleanora' . '_recaptcha_public_key', 
			'title' => esc_html__('reCAPTCHA Public Key', 'cleanora'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['cleanora' . '_recaptcha_public_key'], 
			'class' => '' 
		);
		
		$options[] = array( 
			'section' => 'recaptcha_section', 
			'id' => 'cleanora' . '_recaptcha_private_key', 
			'title' => esc_html__('reCAPTCHA Private Key', 'cleanora'), 
			'desc' => '', 
			'type' => 'text', 
			'std' => $defaults[$tab]['cleanora' . '_recaptcha_private_key'], 
			'class' => '' 
		);
		
		break;
	}
	
	return apply_filters('cmsmasters_options_element_fields_filter', $options, $tab);	
}

