/**
 * @package 	WordPress
 * @subpackage 	Cleanora
 * @version		1.0.0
 * 
 * Theme Admin Settings Toggles Scripts
 * Created by CMSMasters
 * 
 */


(function ($) { 
	"use strict";
	
	/* General 'Header' Tab Fields Load */
	if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'default') {
		$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
		$('#' + cmsmasters_theme_settings.shortname + '_header_cust_html_hide').parents('tr').show();
		$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button').parents('tr').hide();
		$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_text').parents('tr').hide();
		$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_link').parents('tr').hide();
	}
	
	
	if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'c_nav') {
		$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').hide();
		$('#' + cmsmasters_theme_settings.shortname + '_header_cust_html_hide').parents('tr').hide();
		$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button').parents('tr').hide();
		$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_text').parents('tr').hide();
		$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_link').parents('tr').hide();
	}
	
	
	if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_add_cont"]:checked').val() !== 'cust_html') {
		$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').hide();
		$('#' + cmsmasters_theme_settings.shortname + '_header_cust_html_hide').parents('tr').hide();
	}
	
	if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'default') {
		$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
		$('#' + cmsmasters_theme_settings.shortname + '_header_cust_html_hide').parents('tr').show();
	}
	
	
	if ($('#' + cmsmasters_theme_settings.shortname + '_header_bot_button').is(':not(:checked)')) {
		$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_text').parents('tr').hide();
		$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_link').parents('tr').hide();
	}
	
	
	/* General 'Header' Tab Fields Change */
	$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]').on('change', function () {
		if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'default') {
			$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
			$('#' + cmsmasters_theme_settings.shortname + '_header_cust_html_hide').parents('tr').show();
		}
	} );
	
	$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]').on('change', function () { 
		if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'default') {
			$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
			$('#' + cmsmasters_theme_settings.shortname + '_header_cust_html_hide').parents('tr').show();
			$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_text').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_link').parents('tr').hide();
		} else if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_styles"]:checked').val() === 'c_nav') {
			$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_header_cust_html_hide').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_text').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_link').parents('tr').hide();
		} else {
			$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button').parents('tr').show();
			
			if ($('#' + cmsmasters_theme_settings.shortname + '_header_bot_button').is(':checked')) {
				$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_text').parents('tr').show();
				$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_link').parents('tr').show();
			} else {
				$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_text').parents('tr').hide();
				$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_link').parents('tr').hide();
			}
			
			if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_add_cont"]:checked').val() === 'cust_html') {
				$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
				$('#' + cmsmasters_theme_settings.shortname + '_header_cust_html_hide').parents('tr').show();
			} else {
				$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').hide();
				$('#' + cmsmasters_theme_settings.shortname + '_header_cust_html_hide').parents('tr').hide();
			}
		}
	} );
	
	
	$('input[name*="' + cmsmasters_theme_settings.shortname + '_header_add_cont"]').on('change', function () { 
		if ($('input[name*="' + cmsmasters_theme_settings.shortname + '_header_add_cont"]:checked').val() === 'cust_html') {
			$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').show();
			$('#' + cmsmasters_theme_settings.shortname + '_header_cust_html_hide').parents('tr').show();
		} else {
			$('#' + cmsmasters_theme_settings.shortname + '_header_add_cont_cust_html').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_header_cust_html_hide').parents('tr').hide();
		}
	} );
	
	
	$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button').on('change', function () { 
		if ($('#' + cmsmasters_theme_settings.shortname + '_header_bot_button').is(':checked')) {
			$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_text').parents('tr').show();
			$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_link').parents('tr').show();
		} else {
			$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_text').parents('tr').hide();
			$('#' + cmsmasters_theme_settings.shortname + '_header_bot_button_link').parents('tr').hide();
		}
	} );
} )(jQuery);

