<?php 
	$scolax_hs_cta				= get_theme_mod('hide_show_call_actions','on');
	$scolax_cta_btn_lbl			= get_theme_mod('call_action_button_label');
	$scolax_cta_btn_link		= get_theme_mod('call_action_button_link');
	$scolax_cta_btn_target		= get_theme_mod('call_action_button_target');
	$scolax_cta_btn_middle_text	= get_theme_mod('call_action_btn_middle_text');
	$scolax_cta_button_label2	= get_theme_mod('call_action_button_label2');
	$scolax_cta_button_link2	= get_theme_mod('call_action_button_link2');
	$scolax_cta_button_title	= get_theme_mod('call_action_button_title','');
	$scolax_cta_button2_icon	= get_theme_mod('call_action_button2_icon','fa-phone');
	$scolax_cta_button_review_ttl		= get_theme_mod('call_action_review_ttl');
	
	$scolax_cta_button_label4			= get_theme_mod('scolax_cta_button_label4');
	$scolax_cta_button_link4			= get_theme_mod('scolax_cta_button_link4');
	$scolax_cta_button_icon4			= get_theme_mod('scolax_cta_button_icon4','fa-arrow-circle-right');
	if($scolax_hs_cta == 'on') :
?>
<section id="cta-unique" class="call-to-action-scolax wow fadeInDown">
	<div class="background-overlay">
        <div class="container">
            <div class="row padding-top-25 padding-bottom-25">                
                <div class="col-md-5 col-lg-6">
					<?php 
						$specia_aboutusquery1 = new wp_query('page_id='.get_theme_mod('call_action_page',true)); 
						if( $specia_aboutusquery1->have_posts() ) 
						{   while( $specia_aboutusquery1->have_posts() ) { $specia_aboutusquery1->the_post(); 
						?>
						<h2 class="demo1"> <?php the_title(); ?> <span class="rotate"> <?php the_content(); ?></span> </h2>
						
						<?php if(!empty($scolax_cta_button_review_ttl)): ?>
						<p class="ttl"><?php echo wp_kses_post($scolax_cta_button_review_ttl); ?></p>
					<?php endif; ?>
						<?php } } wp_reset_postdata(); ?>
				</div>				
				
                <div class="col-md-7 col-lg-6 text-right flexing flexing-lg-end">
					<?php if(!empty($scolax_cta_button_icon4) || !empty($scolax_cta_button_title) || !empty($scolax_cta_button_label4)): ?>
							<?php if(!empty($scolax_cta_button_label4)): ?>
							<div class="buton">
								<a href="<?php echo esc_url($scolax_cta_button_link4); ?>" class="global-btn bt-white"><?php echo esc_html($scolax_cta_button_label4); ?> <?php if(!empty($scolax_cta_button_icon4)): ?><i class="fa fa-arrow-circle-right"></i>
								<?php endif; ?>
								</a>
							</div>
							<?php endif; ?>
					<?php endif; ?>	
					
					<?php if(!empty($scolax_cta_btn_middle_text)): ?>
					<span class="cta-or"><?php echo wp_kses_post($scolax_cta_btn_middle_text); ?></span>
					<?php endif; ?>
					
					<?php if($scolax_cta_btn_lbl) :?>
					<a href="<?php echo esc_url($scolax_cta_btn_link); ?>" <?php if(($scolax_cta_btn_target)== 1){ echo "target='_blank'"; } ?> class="global-btn"><?php echo esc_html($scolax_cta_btn_lbl); ?><i class="fa fa-arrow-circle-right"></i></a>
					<?php endif; ?>
					
				</div>
				
			</div>
		</div>
	</div>
</section>
<div class="clearfix"></div>
<?php endif; ?>
