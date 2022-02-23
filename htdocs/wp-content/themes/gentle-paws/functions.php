<?php
// Functions and definitions

// Register menus
function register_menus() {
	register_nav_menus(
		array(
			'primary-menu' => 'Primary',
			'footer-menu' => 'Footer',
		)
	);
}
add_action( 'after_setup_theme', 'register_menus' );

// Custom navigation
function wp_get_menu_array($current_menu='Primary') {
	$menu_array = wp_get_nav_menu_items($current_menu);
	
	$menu = array();
	
	if ( $menu_array ) {
		foreach ($menu_array as $m) {
			if (empty($m->menu_item_parent)) {
				
				$current_url = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

				if ( $current_url == $m->url ) {
					$current = true;
				} else {
					$current = false;
				}

				$menu[$m->ID] = array();
				$menu[$m->ID]['object_id'] = $m->object_id;
				$menu[$m->ID]['current'] = $current;
				$menu[$m->ID]['title'] = $m->title;
				$menu[$m->ID]['url'] = $m->url;
			}
		}
	}
	return $menu;
}

// Add theme supports
function add_theme_supports() {
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
}
add_action( 'after_setup_theme', 'add_theme_supports' );

// Disable the Gutenberg editor
add_filter( 'use_block_editor_for_post', '__return_false', 10 );

// Add excerpt to pages
add_post_type_support( 'page', 'excerpt' );

// Move Yoast SEO to bottom
function move_yoast() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'move_yoast');

// Add ACF options page
if ( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// Add ACF Google Maps API
function acf_google_maps_api() {	
	acf_update_setting('google_api_key', 'AIzaSyCUycu4TmnVFCI-fF6vjS-qi2K5x5_eRUI');
}
add_action('acf/init', 'acf_google_maps_api');

// Clean archive titles
add_filter( 'get_the_archive_title', function ($title) {    
	if ( is_category() ) {    
			$title = single_cat_title( '', false );    
		} elseif ( is_tag() ) {    
			$title = single_tag_title( '', false );    
		} elseif ( is_author() ) {    
			$title = get_the_author();    
		} elseif ( is_tax() ) {
			$title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
		} elseif ( is_post_type_archive() ) {
			$title = post_type_archive_title( '', false );
		}
	return $title;    
});

// Remove edit link
add_filter( 'edit_post_link', '__return_null' );

// Remove meta generator
remove_action( 'wp_head', 'wp_generator' );

// Remove REST API link
remove_action( 'wp_head', 'rest_output_link_wp_head' );

// Remove rsd link
remove_action( 'wp_head', 'rsd_link' );

// Remove manifest link
remove_action( 'wp_head', 'wlwmanifest_link' );

// Remove shortlink
remove_action( 'wp_head', 'wp_shortlink_wp_head' );

// Remove adjacent post links
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

// Remove feed links
add_filter('feed_links_show_comments_feed', '__return_false');

// Add custom CSS file
function add_custom_style() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/styles/dist/main.css', false, '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'add_custom_style' );

// // Remove jQuery
// function remove_jquery() {
// 	wp_deregister_script( 'jquery' );
// }
// add_action( 'wp_enqueue_scripts', 'remove_jquery' );

// // Add Alpine
// function add_alpine() {
// 	wp_enqueue_script( 'alpine', 'https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js', array(), null, true );
// }
// add_action( 'wp_enqueue_scripts', 'add_alpine' );

// Update to the latest jQuery.
function update_jquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'update_jquery');

// Add custom JavaScript file
function add_custom_script() {
	wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/scripts/dist/main.js', array ( 'jquery' ), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'add_custom_script' );

// Change search url
function change_search_url() {
  if ( is_search() && ! empty( $_GET['s'] ) ) {
    wp_redirect( home_url( '/search/' ) . urlencode( get_query_var( 's' ) ) . '/' );
    exit();
  }

	// Redirect to home
	$page_slug = str_replace('/', '', $_SERVER['REQUEST_URI']);
	if ( $page_slug === 'search' ) {
		wp_redirect( home_url() );
	}
}
add_action( 'template_redirect', 'change_search_url' );

// Remove emoji
function remove_emoji() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'remove_emoji', 9999 );

// Remove dns-prefetch
function remove_dns_prefetch( $hints, $relation_type ) {
	if ( 'dns-prefetch' === $relation_type ) {
		$matches = preg_grep('/emoji/', $hints);
		return array_diff( $hints, $matches );
	}
	return $hints;
}
add_filter( 'wp_resource_hints', 'remove_dns_prefetch', 10, 2 );

// Disable embeds
function disable_embeds() {

	// Remove the REST API endpoint
	remove_action( 'rest_api_init', 'wp_oembed_register_route' );
 
	// Turn off oEmbed auto discovery
	add_filter( 'embed_oembed_discover', '__return_false' );
 
	// Don't filter oEmbed results
	remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
 
	// Remove oEmbed discovery links
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
 
	// Remove oEmbed-specific JavaScript from the front-end and back-end
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );
	add_filter( 'tiny_mce_plugins', 'disable_embeds_tiny_mce_plugin' );
 
	// Remove all embeds rewrite rules
	add_filter( 'rewrite_rules_array', 'disable_embeds_rewrites' );
 
	// Remove filter of the oEmbed result before any HTTP requests are made
	remove_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result', 10 );
}
add_action( 'init', 'disable_embeds', 9999 );
 
function disable_embeds_tiny_mce_plugin($plugins) {
	return array_diff($plugins, array('wpembed'));
}
 
function disable_embeds_rewrites($rules) {
	foreach($rules as $rule => $rewrite) {
		if(false !== strpos($rewrite, 'embed=true')) {
			unset($rules[$rule]);
		}
	}
	return $rules;
}

// Remove block library
function remove_block_library() {
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-block-style' );
}
add_action( 'wp_enqueue_scripts', 'remove_block_library' );

// Remove welcome panel
remove_action( 'welcome_panel', 'wp_welcome_panel' );



// Custom Post Type for Services

function Services() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Services', 'text_domain' ),
		'name_admin_bar'        => __( 'Services', 'text_domain' ),
		'archives'              => __( 'Services', 'text_domain' ),
		'parent_item_colon'     => __( 'Service Item:', 'text_domain' ),
		'all_items'             => __( 'All Services', 'text_domain' ),
		'add_new_item'          => __( 'Add New Service', 'text_domain' ),
		'add_new'               => __( 'Add New Service', 'text_domain' ),
		'new_item'              => __( 'New Service', 'text_domain' ),
		'edit_item'             => __( 'Edit Service', 'text_domain' ),
		'update_item'           => __( 'Update Service', 'text_domain' ),
		'view_item'             => __( 'View Service', 'text_domain' ),
		'search_items'          => __( 'Search Services', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Service Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set Service image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove Service image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as Service image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Service', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'text_domain' ),
		'items_list'            => __( 'Services list', 'text_domain' ),
		'items_list_navigation' => __( 'Services navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Services list', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'services',
		'with_front'            => true,
		'pages'                 => false,
		'feeds'                 => false,
	);
	$args = array(
		'label'                 => __( 'Services', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'Services', $args );

}
add_action( 'init', 'Services', 0 );
