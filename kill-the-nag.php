<?PHP
/*
 * Plugin Name: Kill the Nag
 * Plugin URI: http://www.paulswarthout.com/abusive_ip_blocker
 * Description: Kills the WordPress Nag message. Most admins know that their website is out of date. Here's a way to kill the message.
 * Version: 0.5
 * Author: Paul A. Swarthout
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// This is killed through javascript. This file exists solely for loading the javascript file, and
// for the plugin header.

add_action( 'admin_enqueue_scripts',	'dashboard_scripts');

function dashboard_scripts() {
	$plugin_url = plugin_dir_url  ( __FILE__ );
	wp_enqueue_script('kill-the-nag', $plugin_url . '/js/kill-the-nag.js', false);
}
