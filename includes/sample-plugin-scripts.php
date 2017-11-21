<?php

// Add Scripts
function sp_add_scripts(){
	wp_enqueue_style('sp-main-style', plugins_url().'/sample-plugin/css/style.css');
	wp_enqueue_script('sp-main-script', plugins_url().'/sample-plugin/js/main.js', array('jquery'));
}

add_action('wp_enqueue_scripts', 'sp_add_scripts');