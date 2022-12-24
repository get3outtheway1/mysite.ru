<?php
function scolax_call_action_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Call Action Section Panel
	=========================================*/
	
	// Review Head
	$wp_customize->add_setting(
		'cta_review_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_text',
		)
	);

	$wp_customize->add_control(
	'cta_review_head',
		array(
			'type' => 'hidden',
			'label' => __('Review','scolax'),
			'section' => 'call_action_content',
			'priority'  => 5
		)
	);
	
	// Review Title // 
	$wp_customize->add_setting(
    	'call_action_review_ttl',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
			'transport'         => $selective_refresh,
		)
	);	
	
	$wp_customize->add_control( 
		'call_action_review_ttl',
		array(
		    'label'   => __('Title','scolax'),
		    'section' => 'call_action_content',
			'type'           => 'text',
			'priority'  => 5
		)  
	);
	
	
	// Call Title // 
	$wp_customize->add_setting(
    	'call_action_button_title',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
			'transport'         => $selective_refresh,
		)
	);	
	
	$wp_customize->add_control( 
		'call_action_button_title',
		array(
		    'label'   => __('Email','scolax'),
		    'section' => 'call_action_content',
			'type'           => 'text',
			'priority'  => 11
		)  
	);

	// Call button 4 // 
	$wp_customize->add_setting(
    	'scolax_cta_button_label4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
			'transport'         => $selective_refresh,
		)
	);	
	
	$wp_customize->add_control( 
		'scolax_cta_button_label4',
		array(
		    'label'   => __('Button Label 4','scolax'),
		    'section' => 'call_action_content',
			'type'           => 'text',
			'priority'  => 11
		)  
	);
	
	// Call button 4 link // 
	$wp_customize->add_setting(
    	'scolax_cta_button_link4',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
			'transport'         => $selective_refresh,
		)
	);	
	
	$wp_customize->add_control( 
		'scolax_cta_button_link4',
		array(
		    'label'   => __('Button Link 4','scolax'),
		    'section' => 'call_action_content',
			'type'           => 'text',
			'priority'  => 11
		)  
	);
	
	// Button Icon // 
	$wp_customize->add_setting(
    	'call_action_button2_icon',
    	array(
	        'default'			=> 'fa-bell',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'specia_sanitize_html',
		)
	);	
	
	$wp_customize->add_control( 
		'call_action_button2_icon',
		array(
		    'label'   => __('Icon','scolax'),
		    'section' => 'call_action_content',
			'type'           => 'text',
			'priority'  => 9
		)  
	);	
}
add_action( 'customize_register', 'scolax_call_action_setting' );



// Call to action selective refresh
function scolax_home_cta_section_partials( $wp_customize ){
	
	//call_action_review_ttl
	$wp_customize->selective_refresh->add_partial( 'call_action_review_ttl', array(
		'selector'            => '.call-to-action-one .ttl',
		'settings'            => 'call_action_review_ttl',
		'render_callback'  => 'scolax_call_action_review_ttl_render_callback',
	) );
	
	//call_action_button_title
	$wp_customize->selective_refresh->add_partial( 'call_action_button_title', array(
		'selector'            => '.call-to-action-one .call-title',
		'settings'            => 'call_action_button_title',
		'render_callback'  => 'scolax_call_action_button_title_render_callback',
	) );
	
	//call_action_button_title4
	$wp_customize->selective_refresh->add_partial( 'scolax_cta_button_label4', array(
		'selector'            => '.call-to-action-scolax .buton4',
		'settings'            => 'scolax_cta_button_label4',
		'render_callback'  => 'scolax_cta_button_label4_render_callback',
	) );
	
	
	//call_action_button_link4
	$wp_customize->selective_refresh->add_partial( 'scolax_cta_button_link4', array(
		'selector'            => '.call-to-action-scolax .buton4',
		'settings'            => 'scolax_cta_button_link4',
		'render_callback'  => 'scolax_cta_button_label4_render_callback',
	) );
	
	//call_action_button2_icon
	$wp_customize->selective_refresh->add_partial( 'call_action_button2_icon', array(
		'selector'            => '.navigator-wrapper .call-icon-box',
		'settings'            => 'call_action_button2_icon',
		'render_callback'  => 'scolax_cta_button_label2_render_callback',
	) );
	}

add_action( 'customize_register', 'scolax_home_cta_section_partials' );

// call_action_review_ttl
function scolax_call_action_review_ttl_render_callback() {
	return get_theme_mod( 'call_action_review_ttl' );
}

// call_action_button_title
function scolax_call_action_button_title_render_callback() {
	return get_theme_mod( 'call_action_button_title' );
}

// call_action_button_label4
function scolax_cta_button_label4_render_callback() {
	return get_theme_mod( 'scolax_cta_button_label4' );
}

// call_action_button_link4
function scolax_cta_button_link4_render_callback() {
	return get_theme_mod( 'scolax_cta_button_link4' );
}

// call_action_button2_icon
function call_action_button2_icon_render_callback() {
	return get_theme_mod( 'call_action_button2_icon' );
}