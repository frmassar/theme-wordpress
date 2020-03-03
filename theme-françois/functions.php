<?php

function load_stylesheets()
{

  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css',
    array(), false, 'all');
  wp_enqueue_style('bootstrap');

  wp_register_style('style', get_template_directory_uri() . '/style.css',
    array(), false, 'all');
  wp_enqueue_style('style');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function include_jquery()
{
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', '',1, true);
  add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery' );

function create_posttype() {
 
  register_post_type( 'projects',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'Projects' ),
              'singular_name' => __( 'Project' )
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'project'),
          'show_in_rest' => true,
          'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )

      )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

function loadjs()
{
  wp_register_script('customjs', get_template_directory_uri() . '/js/script.js',
  '', 1, true);

  wp_enqueue_script('customjs');
}

add_action('wp_enqueue_scripts', 'loadjs' );

add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

register_nav_menus(
  array(
    'top-menu'=> __('Top Menu', 'theme'),
    'footer-menu'=> __('Footer Menu', 'theme')
  )
  );
