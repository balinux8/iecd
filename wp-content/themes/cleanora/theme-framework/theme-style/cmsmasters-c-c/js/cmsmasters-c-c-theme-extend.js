/**
 * @package 	WordPress
 * @subpackage 	Cleanora
 * @version		1.0.0
 * 
 * Theme Content Composer Schortcodes Extend
 * Created by CMSMasters
 * 
 */



/**
 * Сlient Extend
 */

var cmsmasters_client_new_fields = {};


for (var id in cmsmastersMultipleShortcodes.cmsmasters_client.fields) {
	if (id === 'link') {
		cmsmasters_client_new_fields['logo_overlay'] = { 
			type : 			'upload', 
			title : 		cmsmasters_theme_shortcodes.client_field_logo_overlay_title, 
			descr : 		cmsmasters_theme_shortcodes.client_field_logo_overlay_descr, 
			def : 			'', 
			required : 		true, 
			width : 		'half', 
			frame : 		'post', 
			library : 		'image', 
			multiple : 		false, 
			description : 	false, 
			caption : 		false, 
			align : 		false, 
			link : 			false, 
			size : 			false 
		};
		
		
		cmsmasters_client_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_client.fields[id];
	} else {
		cmsmasters_client_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_client.fields[id];
	}
}


cmsmastersMultipleShortcodes.cmsmasters_client.fields = cmsmasters_client_new_fields;



/**
 * Stats Extend
 */

var cmsmasters_stats_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_stats.fields) {
	if (id === 'type') {
		delete cmsmastersShortcodes.cmsmasters_stats.fields[id];
	} else if (id === 'count') {
		cmsmastersShortcodes.cmsmasters_stats.fields[id]['depend'] = 'mode:circles';
		
		
		cmsmasters_stats_new_fields[id] = cmsmastersShortcodes.cmsmasters_stats.fields[id];
	} else {
		cmsmasters_stats_new_fields[id] = cmsmastersShortcodes.cmsmasters_stats.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_stats.fields = cmsmasters_stats_new_fields;



/**
 * Pricing Table Extend
 */

var cmsmasters_pricing_table_item_new_fields = {};


for (var id in cmsmastersMultipleShortcodes.cmsmasters_pricing_table_item.fields) {
	if (id === 'best_bg_color') {
		cmsmasters_pricing_table_item_new_fields['best_bd_color'] = {
			type : 		'rgba', 
			title : 	cmsmasters_theme_shortcodes.pricing_offer_field_best_offer_bd_title, 
			descr : 	cmsmasters_theme_shortcodes.pricing_offer_field_best_offer_bd_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.clear_color_note + "</span>", 
			def : 		'', 
			required : 	false, 
			width : 	'half', 
			depend : 	'best:true' 
		}; 
		
		
		cmsmasters_pricing_table_item_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_pricing_table_item.fields[id];
	} else {
		cmsmasters_pricing_table_item_new_fields[id] = cmsmastersMultipleShortcodes.cmsmasters_pricing_table_item.fields[id];
	}
}


cmsmastersMultipleShortcodes.cmsmasters_pricing_table_item.fields = cmsmasters_pricing_table_item_new_fields;



/**
 * Posts Slider Extend
 */

var cmsmasters_posts_slider_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_posts_slider.fields) {
	if (id === 'post_type') {
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises']['project'] = cmsmasters_theme_shortcodes.posts_slider_field_poststype_choice_service;
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'portfolio_categories') {
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['title'] = cmsmasters_theme_shortcodes.posts_slider_field_service_categ_title;
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['descr'] = cmsmasters_theme_shortcodes.posts_slider_field_service_categ_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_theme_shortcodes.posts_slider_field_service_categ_descr_note + "</span>";
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['descr'] = cmsmasters_theme_shortcodes.posts_slider_field_service_categ_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_theme_shortcodes.posts_slider_field_service_categ_descr_note + "</span>";
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'amount') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'columns') {
		delete cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['depend'];
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	} else if (id === 'portfolio_metadata') {
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises']['more'] = cmsmasters_theme_shortcodes.choice_more;
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['title'] = cmsmasters_theme_shortcodes.posts_slider_field_service_meta_title;
		cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['descr'] = cmsmasters_theme_shortcodes.posts_slider_field_service_meta_descr;
		
		
        cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['def'] = 'title';
        cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises']['author'] = cmsmasters_shortcodes.choice_author;
        cmsmastersShortcodes.cmsmasters_posts_slider.fields[id]['choises']['more'] = cmsmasters_shortcodes.choice_more;
		
		
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
    } else {
		cmsmasters_posts_slider_new_fields[id] = cmsmastersShortcodes.cmsmasters_posts_slider.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_posts_slider.fields = cmsmasters_posts_slider_new_fields;



/**
 * Blog Extend
 */

var cmsmasters_blog_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_blog.fields) {
	if (id === 'layout') {
		delete cmsmastersShortcodes.cmsmasters_blog.fields[id]['choises']['timeline'];
		
		
		cmsmasters_blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	} else if (id === 'metadata') {
		cmsmastersShortcodes.cmsmasters_blog.fields[id]['def'] = 'date,categories,author,comments,likes';
		
		
		cmsmasters_blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	} else if (id === 'filter_text') {
		delete cmsmastersShortcodes.cmsmasters_blog.fields[id];
	} else {
		cmsmasters_blog_new_fields[id] = cmsmastersShortcodes.cmsmasters_blog.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_blog.fields = cmsmasters_blog_new_fields;



/**
 * Services Extend
 */

var portfolio_new_fields = {};


for (var id in cmsmastersShortcodes.cmsmasters_portfolio.fields) {
	cmsmastersShortcodes.cmsmasters_portfolio['title'] = cmsmasters_theme_shortcodes.services_title;
	
	if (id === 'orderby') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['descr'] = cmsmasters_theme_shortcodes.services_field_orderby_descr;
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'count') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['title'] = cmsmasters_theme_shortcodes.services_field_number_title;
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['descr'] = cmsmasters_theme_shortcodes.services_field_number_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_theme_shortcodes.services_field_number_descr_note + "</span>";
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'categories') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['descr'] = cmsmasters_theme_shortcodes.services_field_categories_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_theme_shortcodes.services_field_categories_descr_note + "</span>";
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'layout') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['descr'] = cmsmasters_theme_shortcodes.services_field_layout_descr;
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises']['grid'] = cmsmasters_theme_shortcodes.services_field_layout_choice_grid;
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'layout_mode') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['descr'] = cmsmasters_theme_shortcodes.services_field_layout_mode_descr;
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'columns') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['descr'] = cmsmasters_theme_shortcodes.services_field_col_count_descr + "<br /><span>" + cmsmasters_shortcodes.note + ' ' + cmsmasters_shortcodes.portfolio_field_col_count_descr_note + "<br />" + cmsmasters_shortcodes.portfolio_field_col_count_descr_note_custom + "</span>";
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'metadata_grid') {
        cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises']['more'] = cmsmasters_shortcodes.choice_more;
        cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises']['author'] = cmsmasters_shortcodes.choice_author;
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['descr'] = cmsmasters_theme_shortcodes.services_field_metadata_descr;
		
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['def'] = 'title,excerpt,categories,comments,likes,more';
		
		delete cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises']['rollover'];
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'metadata_puzzle') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['descr'] = cmsmasters_theme_shortcodes.services_field_metadata_descr;
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['def'] = 'title,categories,comments,likes';
		
		delete cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['choises']['rollover'];
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'gap') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['descr'] = cmsmasters_theme_shortcodes.services_field_gap_descr;
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'filter') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['descr'] = cmsmasters_theme_shortcodes.services_field_filter_descr;
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'filter_text') { 
		delete cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else if (id === 'sorting') {
		cmsmastersShortcodes.cmsmasters_portfolio.fields[id]['descr'] = cmsmasters_theme_shortcodes.services_field_sorting_descr;
		
		
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	} else {
		portfolio_new_fields[id] = cmsmastersShortcodes.cmsmasters_portfolio.fields[id];
	}
}


cmsmastersShortcodes.cmsmasters_portfolio.fields = portfolio_new_fields;
