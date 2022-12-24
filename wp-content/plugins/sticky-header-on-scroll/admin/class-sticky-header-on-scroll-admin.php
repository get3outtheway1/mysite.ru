<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://www.youtube.com/watch?v=gv7lMeaLdOQ
 * @since      1.0.0
 *
 * @package    Sticky_Header_On_Scroll
 * @subpackage Sticky_Header_On_Scroll/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Sticky_Header_On_Scroll
 * @subpackage Sticky_Header_On_Scroll/admin
 * @author     Hardik Chavada <hardikb.chavada@gmail.com>
 */
class Sticky_Header_On_Scroll_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/sticky-header-on-scroll-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/sticky-header-on-scroll-admin.js', array( 'jquery' ), $this->version, false );

		// loaclize ajax file
		wp_localize_script($this->plugin_name, "stickyheaderajaxurl", array(
			"ajaxurl" =>admin_url("admin-ajax.php")
		));

	}

	//add menu page
	public function add_my_sticky_header_menu(){
		add_menu_page(
			"My Sticky Header", //Page title
			"My Sticky Header",// Menu title
			"manage_options", //Admin Level
			"my-sticky-header", //Menu Slug
			array($this,"sticky_header_on_scroll"), //Callback function
			"dashicons-align-wide", //icon link
			10);
	}

	function sticky_header_on_scroll(){
		include_once plugin_dir_path(__FILE__) ."partials/insert-sticky-id.php";
	}


	//insert the input data using ajax
	function input_sticky_header_ajax(){
		if($_REQUEST['parameter']=='add_sticky_header_id'){
			// print_r($_REQUEST);
			// insert links
			global $wpdb;
			$tablename = $wpdb->prefix . 'sticky_header_on_scroll';
			
			$my_header = sanitize_text_field( $_POST['my-sticky-header'] );

			$scroll = sanitize_text_field( $_POST['scroll-in-px'] );

			$bg_head_clr = sanitize_text_field( $_POST['bg-head-clr'] );

			$scroll_to_top = sanitize_text_field( $_POST['scroll-to-top'] );
		
			$wpdb->update(
				$tablename,
				array(
				'my_header'=> $my_header,
				'scroll' => $scroll,
				'bg_head_clr' => $bg_head_clr,
				'scroll_to_top' => $scroll_to_top
				),array(
				'id'=> 1
				));
				$success_msg = array('status'=> 1, 'my_header'=> $my_header, 'scroll'=> $scroll, 'bg_head_clr'=> $bg_head_clr, 'scroll_to_top' => $scroll_to_top);
				echo json_encode($success_msg);
				wp_die();
		}
	}


	//get data from database

	function get_id_class_from_db (){
		global $wpdb;
		$tablename = $wpdb->prefix . 'sticky_header_on_scroll';
		
		$my_header = esc_html($wpdb->get_var( "SELECT my_header FROM $tablename where id = 1 "));
 
		$scroll = esc_html($wpdb->get_var( "SELECT scroll FROM $tablename where id = 1 "));

		$bg_head_clr = esc_html($wpdb->get_var( "SELECT bg_head_clr FROM $tablename where id = 1 "));

		$scroll_to_top = esc_html($wpdb->get_var( "SELECT scroll_to_top FROM $tablename where id = 1 "));

		// Here we get the values from database
		// Now we convert the values from php to javascript
		// firstly we register a script with another handle name as we have already registered script.js
		// out handle is phptojs
		//next we enque
		//then localise it. Now the php values will be available in DOM. We can check it in page source(ctrl + u)
		//we can now directly access the values. ex. check script.js file

		wp_register_script(
			'phptojs',
			plugin_dir_url( __FILE__ )."js/sticky-header-on-scroll-admin.js",
			array(),
			1.0,
			true
		);

		wp_enqueue_script( 'phptojs' );
		wp_localize_script( 'phptojs',  'localize_my_header_script' , [
			'my_header' => $my_header,
			'scroll' => $scroll,
			'bg_head_clr' => $bg_head_clr,
			'scroll_to_top' => $scroll_to_top
		] );


	}

}
