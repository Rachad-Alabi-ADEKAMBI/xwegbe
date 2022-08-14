<?php

function montheme_supports(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menu('header', 'En tete du menu');
  register_nav_menu('footer', 'Pied de pafe');
}

function montheme_title($title){
  return 'Salut';
}

add_theme_support( 'menus' );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
) );



add_action('after_setup_theme', 'mon-theme-supports');
add_filter('wp-title', 'montheme_title');
add_filter('nav_menu_css_class', 'montheme_menu_class');


