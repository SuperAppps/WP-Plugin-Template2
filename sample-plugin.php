<?php
/**
* Plugin Name: <Sample Plugin>
* Description: <A form to subscribe to a newsletter>
* Version: <1.0>
* Author: <SuperAppps>
*
**/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__) . '/includes/sample-plugin-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__) . '/includes/sample-plugin-class.php');

// Register Widget
function register_sample_plugin(){
	register_widget('Sample_Plugin_Widget');
}

add_action('widgets_init', 'register_sample_plugin');