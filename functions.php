<?php

add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

add_action( 'wp_enqueue_scripts', 'pcthike_scripts' );

function posts_link_attributes() {
  return 'class="pagbar-link"';
}

// Scripts and stylesheets
function pcthike_scripts() {
  wp_enqueue_style( 'skeleton', get_template_directory_uri() . '/css/skeleton.css' );
  wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
  wp_enqueue_script( 'custom', get_template_directory_uri() . 'js/custom.js', array('jquery'), null, true );
}

// Switch core markup for comments
add_theme_support( 'html5', array(
				  'comment-form', 'comment-list') );


/* Register sidebars and widgetized areas */

if (function_exists('register_sidebar')) {
  register_sidebar(array(
			 'name' => 'Widgetized Area',
 'id' => 'widgetized-area',
 'description' => 'this is a widgetized area',
 'before_widget' => '<div id="%1$s" class="widget %2$s">',
 'after_widget' => '</div>',
			 'before_title' => '<h6>',
 'after_title' => '</h6>'
));
}