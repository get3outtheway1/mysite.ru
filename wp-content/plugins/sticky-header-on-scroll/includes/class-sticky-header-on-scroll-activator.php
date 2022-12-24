<?php

/**
 * Fired during plugin activation
 *
 * @link       https://www.youtube.com/watch?v=gv7lMeaLdOQ
 * @since      1.0.0
 *
 * @package    Sticky_Header_On_Scroll
 * @subpackage Sticky_Header_On_Scroll/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Sticky_Header_On_Scroll
 * @subpackage Sticky_Header_On_Scroll/includes
 * @author     Hardik Chavada <hardikb.chavada@gmail.com>
 */
class Sticky_Header_On_Scroll_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		//Dynamic Table Generation
		global $wpdb;
		$tablename = $wpdb->prefix . 'sticky_header_on_scroll';
        $charset_collate = $wpdb->get_charset_collate();

		//Create Table 
		if($wpdb->get_var( "show tables like '$tablename'" ) != $tablename) {
			$sql = " CREATE TABLE $tablename (
				`id` int(11) NOT NULL AUTO_INCREMENT,
				`my_header` text NOT NULL,
				`scroll` text NOT NULL,
				`bg_head_clr` text NOT NULL,
				`scroll_to_top` text NOT NULL,
				PRIMARY KEY (`id`)
			   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; ";
	
			   require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
			   dbDelta( $sql );

			   //insert blank values into table

				$insert_query="insert into $tablename (scroll) values (100)";
				$wpdb->query($insert_query);
		}

	}

}
