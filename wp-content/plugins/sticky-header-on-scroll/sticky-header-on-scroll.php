<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.youtube.com/watch?v=gv7lMeaLdOQ
 * @since             1.0.0
 * @package           Sticky_Header_On_Scroll
 *
 * @wordpress-plugin
 * Plugin Name:       sticky header on scroll
 * Plugin URI:        https://www.youtube.com/channel/UCG76Sy9Zxb5N1Fga-aHhaMQ
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0
 * Author:            Hardik Chavada
 * Author URI:        https://www.youtube.com/watch?v=gv7lMeaLdOQ
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sticky-header-on-scroll
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'STICKY_HEADER_ON_SCROLL_VERSION', '1.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-sticky-header-on-scroll-activator.php
 */
function activate_sticky_header_on_scroll() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sticky-header-on-scroll-activator.php';
	Sticky_Header_On_Scroll_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-sticky-header-on-scroll-deactivator.php
 */
function deactivate_sticky_header_on_scroll() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-sticky-header-on-scroll-deactivator.php';
	Sticky_Header_On_Scroll_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_sticky_header_on_scroll' );
register_deactivation_hook( __FILE__, 'deactivate_sticky_header_on_scroll' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-sticky-header-on-scroll.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_sticky_header_on_scroll() {

	$plugin = new Sticky_Header_On_Scroll();
	$plugin->run();

}
run_sticky_header_on_scroll();
