<?php 
/**
Template Name: Homepage One
*/
get_header();
	
	get_template_part('sections/scolax','slider');
	get_template_part('sections/scolax','call-action');
	get_template_part('sections/specia','service');	
	get_template_part('sections/specia','features');
	get_template_part('sections/specia','portfolio');		
	get_template_part('sections/specia','blog');
	
get_footer();
