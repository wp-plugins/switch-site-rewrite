<?php
/*
Plugin Name: Switch Site Rewrite
Plugin URI: http://wordpress.org/extend/plugins/switch-site-rewrite/
Description: Makes permalinks work properly when uing switch_to_blog
Author: John James Jacoby
Version: 1.0
Author URI: http://johnjamesjacoby.com
*/

/**
 * switch_site_rewrite ()
 *
 * Deal with permalinks and cat and tag base structures
 *
 * @global object $wp_rewrite
 */
function switch_site_rewrite () {
	global $wp_rewrite;
	
	if ( is_object( $wp_rewrite ) ) {

		$permalink_structure = get_option( 'permalink_structure' );

		if ( !empty( $permalink_structure ) )
			$wp_rewrite->set_permalink_structure( $permalink_structure );

		$category_base = get_option( 'category_base' );

		if ( !empty( $category_base ) )
			$wp_rewrite->set_category_base( $category_base );

		$tag_base = get_option('tag_base');

		if ( !empty( $tag_base ) )
			$wp_rewrite->set_tag_base( $tag_base );
	}
}
add_action( 'switch_blog', 'switch_site_rewrite' );

?>
