<?php

/**
 * Register Custom Navigation Walker
 */
function bootblog_register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'bootblog_register_navwalker' );

// Theme Support
function bootblog_theme_setup(){

  add_theme_support('post-thumbnails');
  
  // Nav Menus
  register_nav_menus(array(
    'primary' => __('Primary Menu')
  ));

  // Post Formats
  add_theme_support('post-formats', array('aside', 'gallery'));

}
add_action('after_setup_theme','bootblog_theme_setup');

//Excerpt Length Control

function bootblog_set_excerpt_length(){
  return 45;
}

add_filter('excerpt_length','bootblog_set_excerpt_length');

// Widget Locations

//<aside class="col-md-4 blog-sidebar">
//  <div class="p-4 mb-3 bg-light rounded">

function bootblog_init_widgets($id){

  register_sidebar(array(
    'name'  => 'Sidebar',
    'id'    => 'sidebar',
    'before_widget' => '<div class="p-4 mb-3 bg-light rounded">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4 class="font-italic">',
    'after_title'   => '</h4>'
  ));

  register_sidebar(array(
    'name'  => 'Box1',
    'id'    => 'box1',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'  => 'Box2',
    'id'    => 'box2',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));

  register_sidebar(array(
    'name'  => 'Box3',
    'id'    => 'box3',
    'before_widget' => '<div class="box">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ));
}

add_action('widgets_init', 'bootblog_init_widgets');

// Customizer File
require get_template_directory(). '/inc/customizer.php';
