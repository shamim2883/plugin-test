<?php
/*
	Plugin Name: Plugin Test
	Description: This is for updating your Wordpress plugin.
	Version: 1.0.0
	Author: Shamim
	Author URI: http://www.matthewray.com
*/

if( ! class_exists( 'Smashing_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater/updater.php' );
}

$updater = new Smashing_Updater( __FILE__ );
$updater->set_username( 'shamim2883' );
$updater->set_repository( 'plugin-test' );
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();
