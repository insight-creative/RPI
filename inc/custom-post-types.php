<?php 

function cptui_register_my_cpts_careers() {

	/**
	 * Post Type: Careers.
	 */

	$labels = [
		"name" => __( "Careers", "insightcustom" ),
		"singular_name" => __( "Career", "insightcustom" ),
		"menu_name" => __( "Careers", "insightcustom" ),
		"all_items" => __( "All Careers", "insightcustom" ),
		"add_new" => __( "Add New Career", "insightcustom" ),
		"add_new_item" => __( "Add New Career", "insightcustom" ),
		"edit_item" => __( "Edit Career", "insightcustom" ),
		"new_item" => __( "New Career", "insightcustom" ),
		"view_item" => __( "View Career", "insightcustom" ),
		"view_items" => __( "View Career", "insightcustom" ),
		"search_items" => __( "Search Career", "insightcustom" ),
		"not_found" => __( "No Career Found", "insightcustom" ),
		"not_found_in_trash" => __( "No Career Found in Trash", "insightcustom" ),
	];

	$args = [
		"label" => __( "Careers", "insightcustom" ),
		"labels" => $labels,
		"description" => "Current RPI Career Opportunities",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "careers", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "careers", $args );
}

add_action( 'init', 'cptui_register_my_cpts_careers' );

?>