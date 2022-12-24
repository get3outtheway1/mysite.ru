<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.youtube.com/watch?v=gv7lMeaLdOQ
 * @since      1.0.0
 *
 * @package    Sticky_Header_On_Scroll
 * @subpackage Sticky_Header_On_Scroll/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Sticky_Header_On_Scroll
 * @subpackage Sticky_Header_On_Scroll/public
 * @author     Hardik Chavada <hardikb.chavada@gmail.com>
 */
class Sticky_Header_On_Scroll_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Sticky_Header_On_Scroll_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Sticky_Header_On_Scroll_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/sticky-header-on-scroll-public.css', array(), $this->version, 'all' );

		// custom enqueue script for adding font-awesome
		wp_enqueue_style("font-awesome.css","https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), $this->version, 'all');

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Sticky_Header_On_Scroll_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Sticky_Header_On_Scroll_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/sticky-header-on-scroll-public.js', array( 'jquery' ), $this->version, false );

	}

	function add_scroll_to_top() {		
		include_once plugin_dir_path(__FILE__) ."partials/scroll-to-top.php";
	}

}
