<?php 
/**
 * @package 	WordPress
 * @subpackage 	Cleanora
 * @version		1.0.0
 * 
 * Header Bottom Template
 * Created by CMSMasters
 * 
 */


$cmsmasters_option = cleanora_get_global_options();


if ($cmsmasters_option['cleanora' . '_header_styles'] != 'default') {
	echo '<div class="header_bot" data-height="' . esc_attr($cmsmasters_option['cleanora' . '_header_bot_height']) . '">' . 
		'<div class="header_bot_outer">' . 
			'<div class="header_bot_inner">';
				echo '<span class="header_bot_border_top"></span>';
				
				
				do_action('cmsmasters_before_header_bot', $cmsmasters_option);
				
				
				echo '<div class="resp_bot_nav_wrap">' . 
					'<div class="resp_bot_nav_outer">' . 
						'<a class="responsive_nav resp_bot_nav" href="' . esc_js("javascript:void(0)") . '">' . 
							'<span></span>' . 
						'</a>' . 
					'</div>' . 
				'</div>';
				
				
				if (
					CMSMASTERS_WOOCOMMERCE && 
					$cmsmasters_option['cleanora' . '_header_styles'] == 'c_nav' 
				) {
					cleanora_woocommerce_header_cart_link(); 
				}
				
				
				echo '<!--  Start Navigation  -->' . 
				'<div class="bot_nav_wrap">' . 
					'<nav>';
						
						$nav_args = array( 
							'theme_location' => 	'primary', 
							'menu_id' => 			'navigation', 
							'menu_class' => 		'bot_nav navigation', 
							'link_before' => 		'<span class="nav_item_wrap">', 
							'link_after' => 		'</span>', 
							'fallback_cb' => 		false
						);
						
						
						if (class_exists('Walker_Cmsmasters_Nav_Mega_Menu')) {
							$nav_args['walker'] = new Walker_Cmsmasters_Nav_Mega_Menu();
						}
						
						
						wp_nav_menu($nav_args);
						
					echo '</nav>' . 
				'</div>' . 
				'<!--  Finish Navigation  -->';
				
				
				if (
					$cmsmasters_option['cleanora' . '_header_styles'] != 'default' && 
					$cmsmasters_option['cleanora' . '_header_styles'] != 'c_nav'
				) {
					$cmsmasters_header_bot_button_enable = $cmsmasters_option['cleanora' . '_header_bot_button'] ? 'true' : 'false';
					
					if ($cmsmasters_header_bot_button_enable === 'true' && 
						$cmsmasters_option['cleanora' . '_header_bot_button_text'] !== '' && 
						$cmsmasters_option['cleanora' . '_header_bot_button_link'] !== ''
					) {
						echo '<div class="header_bot_but_wrap">' . 
							'<a href="' . esc_url($cmsmasters_option['cleanora' . '_header_bot_button_link']) . '" class="header_bot_button button">' . esc_html($cmsmasters_option['cleanora' . '_header_bot_button_text']) . '</a>' . 
						'</div>';
					}
				}
				
				
				do_action('cmsmasters_after_header_bot', $cmsmasters_option);
			echo '</div>' . 
		'</div>' . 
	'</div>';
}

