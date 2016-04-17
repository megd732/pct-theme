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
}
