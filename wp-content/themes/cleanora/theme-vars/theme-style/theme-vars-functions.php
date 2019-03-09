<?php
/**
 * @package 	WordPress
 * @subpackage 	Cleanora
 * @version 	1.0.0
 * 
 * Theme Vars Functions
 * Created by CMSMasters
 * 
 */


/* Register CSS Styles */
function cleanora_vars_register_css_styles() {
	wp_enqueue_style('cleanora-theme-vars-style', get_template_directory_uri() . '/theme-vars/theme-style' . CMSMASTERS_THEME_STYLE . '/css/vars-style.css', array('cleanora-retina'), '1.0.0', 'screen, print');
}

add_action('wp_enqueue_scripts', 'cleanora_vars_register_css_styles');

