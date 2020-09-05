<?php
/**
* Plugin Name: Facebook Footer Link
* Description: Adds a facebook profile link to the end of blog posts
* Version: 1.0.0
* Author: Seán Hermansa
*
**/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
	exit;
}

// Global Options Variable
$ffl_options = get_option('ffl_settings');

// Load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/FacebookFooterLinkScripts.php');

// Load Content
require_once(plugin_dir_path(__FILE__).'/includes/FacebookFooterLinkContent.php');

if(is_admin()){
	// Load Settings
	require_once(plugin_dir_path(__FILE__).'/includes/FacebookFooterLinkSettings.php');
}