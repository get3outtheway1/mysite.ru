<?php
function scolax_header_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
		
	// Icon
	$wp_customize->add_setting(
    	'hdr_nav_contact_icon2',
    	array(
	        'default'			=> 'fa-hourglass-end',
			'sanitize_callback' => 'specia_sanitize_html',
			'capability' => 'edit_theme_options',
			'priority'      => 13,

		)
	);	
	
	$wp_customize->add_control(
		'hdr_nav_contact_icon2',
		array(
		    'label'   		=> __('Icon','scolax'),
			'type' => 'text',
		    'section' 		=> 'hdr_nav_contact_info2',
		)  
	);
	
	// Title
	$wp_customize->add_setting(
    	'hdr_nav_contact_ttl2',
    	array(
			'sanitize_callback' => 'specia_sanitize_html',
			'capability' => 'edit_theme_options',
			'transport'         => $selective_refresh,
			'priority'      => 14,
		)
	);	

	$wp_customize->add_control( 
		'hdr_nav_contact_ttl2',
		array(
		    'label'   => __('Title','scolax'),
		    'section' => 'hdr_nav_contact_info2',
			'type' => 'text',
		)  
	);
	
	
	// Subtitle
	$wp_customize->add_setting(
    	'hdr_nav_contact_subttl2',
    	array(
			'sanitize_callback' => 'specia_sanitize_html',
			'capability' => 'edit_theme_options',
			'transport'         => $selective_refresh,
			'priority'      => 15,
		)
	);	

	$wp_customize->add_control( 
		'hdr_nav_contact_subttl2',
		array(
		    'label'   => __('Subtitle','scolax'),
		    'section' => 'hdr_nav_contact_info2',
			'type' => 'text',
		)  
	);
	
	// Link
	$wp_customize->add_setting(
    	'hdr_nav_contact_link2',
    	array(
			'sanitize_callback' => 'specia_sanitize_url',
			'capability' => 'edit_theme_options',
			'priority'      => 16,
		)
	);	

	$wp_customize->add_control( 
		'hdr_nav_contact_link2',
		array(
		    'label'   => __('Link','scolax'),
		    'section' => 'hdr_nav_contact_info2',
			'type' => 'text',
		)  
	);
	
	// Mobile Logo // 
    $wp_customize->add_setting( 
    	'mobile_logo' , 
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_url',	
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'mobile_logo' ,
		array(
			'label'        => 'Mobile Logo',
			'section'        => 'title_tagline',
			'settings'   	 => 'mobile_logo',
		) 
	));
	
	
}

add_action( 'customize_register', 'scolax_header_setting' );

// Header section selective refresh
function scolax_header_section_partials( $wp_customize ){
	
	//hdr_nav_contact_ttl2
	$wp_customize->selective_refresh->add_partial( 'hdr_nav_contact_ttl2', array(
		'selector'            => '.navigator-wrapper .menu-right .contact-area .text',
		'settings'            => 'hdr_nav_contact_ttl2',
		'render_callback'  => 'scolax_hdr_nav_contact_ttl2_render_callback',	
	) );
	
	//hdr_nav_contact_subttl2
	$wp_customize->selective_refresh->add_partial( 'hdr_nav_contact_subttl2', array(
		'selector'            => '.navigator-wrapper .menu-right .contact-area .title',
		'settings'            => 'hdr_nav_contact_subttl2',
		'render_callback'  => 'scolax_hdr_nav_contact_subttl2_render_callback',	
	) );
	}

add_action( 'customize_register', 'scolax_header_section_partials' );

// hdr_nav_contact_ttl2
function scolax_hdr_nav_contact_ttl2_render_callback() {
	return get_theme_mod( 'hdr_nav_contact_ttl2' );
}

// hdr_nav_contact_subttl2
function scolax_hdr_nav_contact_subttl2_render_callback() {
	return get_theme_mod( 'hdr_nav_contact_subttl2' );
}