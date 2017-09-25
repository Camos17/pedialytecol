<?php

//-- Load Theme Stylesheets
function theme_styles() 
{
    wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome_css', get_template_directory_uri() . '/css/font-awesome.min.css');
    wp_enqueue_style('ionicons_css', get_template_directory_uri() . '/css/ionicons.min.css');
    wp_enqueue_style('style_css', get_template_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');

//-- Load Theme JavaScripts
function theme_scripts() 
{
    global $wp_scripts;

    wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
    $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );
    
    wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery-1.12.1.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'smoothScroll_js', get_template_directory_uri() . '/js/smooth-scroll.js', array('jquery'), '', true );
}
add_action('wp_enqueue_scripts', 'theme_scripts');

?>
