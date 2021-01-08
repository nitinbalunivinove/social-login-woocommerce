<?php
/* 
Plugin Name: Social Login WooCommerce
Description: Allow website user to login through multiple social networks. 
Version: 1.0.0
Author: ValueCoder
Author URI: https://www.valuecoders.com/
Text Domain: snlogin
Domain Path: languages
*/
if( !defined('ABSPATH') ) exit;

if( ! defined( 'SNL_PLUGIN_FILE' ) ){
	define( 'SNL_PLUGIN_FILE', __FILE__ );
}

if( !class_exists( 'snLoginPlugin' ) ){
	include_once dirname( __FILE__ ) . '/includes/classes/class-snlogin.php';
}

function snlPluginInitFun(){
	return snLoginPlugin::instance();
}
snlPluginInitFun();
?>