<?php
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<div class="sidepanel">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

// add page slug to body_class
function pagename_class($classes = '') {
         if (is_page()) {
             $page = get_page(get_the_ID());
             $classes[] = $page->post_name;
         }
	return $classes;
}

add_filter('body_class','pagename_class');

// use thumbnail
if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}
set_post_thumbnail_size(100,100,true);

// add image size for single page
add_image_size('mainImg',960,438,true);

// customize excerpt
function new_excerpt_length($length){
	return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');
function new_excerpt_more($more){
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more')
?>