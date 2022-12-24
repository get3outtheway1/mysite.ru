<?php
	function scolax_css() {
		$parent_style = 'specia-parent-style';
		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'scolax-main', get_stylesheet_uri(), array( $parent_style ));
		
		wp_enqueue_style('scolax-default',get_stylesheet_directory_uri() .'/css/colors/default.css');
		wp_dequeue_style('specia-default');
				
		wp_enqueue_script('scolax-custom',get_stylesheet_directory_uri() . '/js/custom.js');
		
		wp_enqueue_script('scolax-slider-thumb',get_stylesheet_directory_uri() . '/js/owl.carousel2.thumbs.js');
	}
	add_action( 'wp_enqueue_scripts', 'scolax_css',999);
	
	
	
	require_once( get_stylesheet_directory() . '/inc/customize/scolax-header-section.php');
	require( get_stylesheet_directory() . '/inc/customize/scolax-call-action.php');
	require_once( get_stylesheet_directory() . '/inc/customize/scolax-premium.php');
	
	function scolax_remove_parent_setting( $wp_customize ) {
	    $wp_customize->remove_control('call_action_background_setting');
	    $wp_customize->remove_control('cta_bg_head');		
	}
	add_action( 'customize_register', 'scolax_remove_parent_setting',99 );
	
	/**
		* Import Options From Specia Theme
		*
	*/
	function scolax_parent_theme_options() {
		$specia_mods = get_option( 'theme_mods_specia' );
		if ( ! empty( $specia_mods ) ) {
			foreach ( $specia_mods as $specia_mod_k => $specia_mod_v ) {
				set_theme_mod( $specia_mod_k, $specia_mod_v );
			}
		}
	}
	add_action( 'after_switch_theme', 'scolax_parent_theme_options' );
	

