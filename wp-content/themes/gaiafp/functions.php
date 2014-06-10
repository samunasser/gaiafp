<?php
// enable shortcodes in sidebar
add_filter('widget_text', 'do_shortcode');

// Custom excerpt length
if(!function_exists('new_excerpt_length')) {
	function new_excerpt_length($length) { return 100; }
	add_filter('excerpt_length', 'new_excerpt_length');
}

// This theme uses wp_nav_menu() in one location.
register_nav_menu('primary', 'Menu');

if(function_exists('register_sidebar')) {
	register_sidebar( array(
		'name'            => 'Main Sidebar',
		'id'              => 'sidebar-1',
		'description'     => 'Appears on posts and pages except the optional Front Page template, which has its own widgets',
		'before_widget'   => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'    => '</aside>',
		'before_title'    => '<h3 class="widget-title">',
		'after_title'     => '</h3>')
	);
}
add_theme_support('post-thumbnails');

function searchFilter($query) {
	if ($query->is_search) $query->set('post_type', 'post');
	return $query;
}
add_filter('pre_get_posts','searchFilter');
