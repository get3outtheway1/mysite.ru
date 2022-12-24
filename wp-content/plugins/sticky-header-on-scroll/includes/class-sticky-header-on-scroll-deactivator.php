<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://www.youtube.com/watch?v=gv7lMeaLdOQ
 * @since      1.0.0
 *
 * @package    Sticky_Header_On_Scroll
 * @subpackage Sticky_Header_On_Scroll/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Sticky_Header_On_Scroll
 * @subpackage Sticky_Header_On_Scroll/includes
 * @author     Hardik Chavada <hardikb.chavada@gmail.com>
 */
class Sticky_Header_On_Scroll_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {

		//Delete Table on deactivation of the plugin
		global $wpdb;
		$tablename = $wpdb->prefix . 'sticky_header_on_scroll';
		
		$wpdb->query("DROP table IF Exists ". $tablename);

	}

}
