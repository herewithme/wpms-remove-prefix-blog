<?php
/*
Plugin Name: WPMS - Remove prefix /blog/
Version: 1.0
Plugin URI: http://www.beapi.fr
Description: Remove prefix /blog/ for main website of WordPress Network Installation.
Author: BeAPI
Author URI: http://www.beapi.fr

This plugin is based on http://buddydev.com/plugins/remove-blog-slug-plugin/v1-1/
But this plugin not use PCRE Functions for better performance

Copyright 2012 - BeAPI Team (technique@beapi.fr)
*/

// Check permalink update,category base update and tag base update
add_filter('pre_update_option_' . 'category_base', 'wpms_remove_prefix_blog');
add_filter('pre_update_option_' . 'tag_base', 'wpms_remove_prefix_blog');
add_filter('pre_update_option_' . 'permalink_structure', 'wpms_remove_prefix_blog');

/**
 * Just check if the current structure begins with /blog/ remove that and return the stripped structure
 */
function wpms_remove_prefix_blog($structure_permalink) {
	if ( substr($structure_permalink, 0, 6) != '/blog/' )
		return $structure_permalink;
	
	return substr($structure_permalink, 6, strlen($structure_permalink));
}
?>