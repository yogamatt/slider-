<?php

/**
 * Plugin Name: Slider+
 * Plugin URI:  http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: Banner slider that also controls a different div on the page.
 * Version:     1.5
 * Author:      Matthew Ediger
 * Author URI:  http://purplelabcreations.com/
 * License:     GPL2
**/


defined( 'ABSPATH' ) or die( 'Naw, son.' );

function splus_menu_page() {
	add_menu_page(
		__( 'PLC Slider+', 'textdomain' ),
		'Slider+',
		'manage_options',
		'slider-plus/slider-plus-admin.php',
		'',
		plugins_url( 'slider-plus/images/icon.png' ),
		6
	);
}
add_action( 'admin_menu', 'splus_menu_page' );

  /* Add the media uploader script */
function my_media_lib_uploader_enqueue() {
  wp_enqueue_media();
  wp_register_script( 'main-js', plugins_url( '/javascript/main.js' , __FILE__ ), array('jquery') );
  wp_enqueue_script( 'main-js' );
}
add_action('admin_enqueue_scripts', 'my_media_lib_uploader_enqueue');

function get_css_file() {
	wp_register_style( 'main-css', plugins_url( '/css/main.css' , __FILE__ ));
	wp_enqueue_style( 'main-css' );
}
add_action('admin_enqueue_scripts', 'get_css_file');

function get_font_awesome() {
	wp_register_style( 'font-awesome', plugins_url( '/css/font-awesome/css/font-awesome.min.css' , __FILE__ ));
	wp_enqueue_style( 'font-awesome' );
}
add_action('admin_enqueue_scripts', 'get_font_awesome');

function get_jquery_file() {
	wp_register_script( 'jquery-js', plugins_url( '/javascript/jquery-3.1.0.min.js' , __FILE__ ));
	wp_enqueue_script( 'jquery-js' );
}
add_action('admin_enqueue_scripts', 'get_jquery_file');

function get_edit_js_file() {
	wp_register_script( 'edit-js', plugins_url( '/javascript/edit.js' , __FILE__ ));
	wp_enqueue_script( 'edit-js' );
}
add_action('admin_enqueue_scripts', 'get_edit_js_file');

function show_slider_plus() {
	wp_register_script( 'index-css', plugins_url( '/slider-plus/javascript/slider.js' , dirname(__FILE__)));
	wp_enqueue_script( 'index-css' );
	$_slider_plus_height = '450px';
	$_slider_plus_max_width = '1000px';
	$_slider_plus = '<style>ul,li {margin: 0 !important;} .slider-plus {position: relative; overflow: hidden;} .slider-plus li { margin: 0 !important; padding: 0 !important; text-indent: 0 !important; position: absolute; top: 0; left: 0; z-index: 0; opacity: 0; -moz-transition: all 1.5s ease-in-out; -o-transition: all 1.5s ease-in-out; -webkit-transition: all 1.5s ease-in-out; transition: all 1.5s ease-in-out;} .slider-plus li.active {position: relative; z-index: 1;} .sas-description {margin: 0; padding: .5em; position: absolute; right: 0; bottom: 0; left: 0; background-color: rgba(0,0,0,.35); text-align: right; -moz-transition: background-color .25s ease-in-out; -ms-transition: background-color .25s ease-in-out; -o-transition: background-color .25s ease-in-out; -webkit-transition: background-color .25s ease-in-out; transition: background-color .25s ease-in-out;} .slider-plus li.active:hover .sas-description {background-color: rgba(0,0,0,.65);} .sas-description p {margin: 0; color: #fff} .sas-values {position: absolute; top: 0; right: 0; visibility: hidden;} .translate {-moz-transform: translateX(-999px); -ms-transform: translateX(-999px); -o-transform: translateX(-999px); -webkit-transform: translateX(-999px); transform: translateX(-999px);}</style><ul class="slider-plus"><li style="max-width: ' . $_slider_plus_max_width . ';"><img style="max-width: ' . $_slider_plus_max_width . '; height: ' . $_slider_plus_height . ';" src="' . get_option( 'slider_plus_image_one' ) . '"><div class="sas-description"><p>' . get_option( 'slider_plus_description_one' ) . '</p></div><div class="sas-values">' . get_option( 'slider_plus_values_one' ) .'</div></li><li style="max-width: ' . $_slider_plus_max_width . ';"><img style="max-width: ' . $_slider_plus_max_width . '; height: ' . $_slider_plus_height . ';" src="' . get_option( 'slider_plus_image_two' ) . '"><div class="sas-description"><p>' . get_option( 'slider_plus_description_two' ) . '</p></div><div class="sas-values">' . get_option( 'slider_plus_values_two' ) .'</div></li><li style="max-width: ' . $_slider_plus_max_width . ';"><img style="max-width: ' . $_slider_plus_max_width . '; height: ' . $_slider_plus_height . ';" src="' . get_option( 'slider_plus_image_three' ) . '"><div class="sas-description"><p>' . get_option( 'slider_plus_description_three' ) . '</p></div><div class="sas-values">' . get_option( 'slider_plus_values_three' ) .'</div></li></ul>';
	return $_slider_plus;
}
add_shortcode( 'slip-slider', 'show_slider_plus' );


?>