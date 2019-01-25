<?php
/**
 * @package  AbdatPlugin
 */
/*
Plugin Name: Abdat Plugin
Plugin URI: https://github.com/faysalduet/abdat-plugin
Description: This is my first attempt on writing a custom Plugin .
Version: 1.0.0
Author: Faysal 
Author URI:https://github.com/faysalduet/
License: Not define
Text Domain: abdat-plugin
*/

defined( 'ABSPATH' ) or die( 'Hey, what are you doing here? You silly human!' );

// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}


function activate_abdat_plugin() {
	Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_abdat_plugin' );



function deactivation_abdat_plugin(){
	Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivate_abdat_plugin');


if ( class_exists( 'Inc\\Init' ) ) {	
	Inc\Init::registerServices();
}