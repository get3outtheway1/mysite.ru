<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.youtube.com/watch?v=gv7lMeaLdOQ
 * @since      1.0.0
 *
 * @package    Sticky_Header_On_Scroll
 * @subpackage Sticky_Header_On_Scroll/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Sticky_Header_On_Scroll
 * @subpackage Sticky_Header_On_Scroll/includes
 * @author     Hardik Chavada <hardikb.chavada@gmail.com>
 */
class Sticky_Header_On_Scroll_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'sticky-header-on-scroll',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
