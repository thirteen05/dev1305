<?php

//
//Enables Featured Image
//

add_theme_support( 'post-thumbnails' );

function register_my_menu() {
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'Fontana' ),
));

}

//Allows Admin to Register Menus

add_action( 'init', 'register_my_menu' );

//
//Creates Left Sidebar
//

function left_sidebar_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Left Sidebar'),
        'id' => 'sidebar-left',
        'before_widget' => '<div class="left-sidebar-widget"',
        'after_widget' => '</div>',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
    ) );
}

add_action( 'widgets_init', 'left_sidebar_widgets_init' );

//
// Replaces the excerpt "more" text by a link
//

function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '">...More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

require_once('wp_bootstrap_navwalker.php');

//
//Changes Excerpt Length from 55 to 40
//

function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


?>