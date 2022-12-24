<div class="navigator-wrapper">
	<!-- Mobile Toggle -->
	<div class="theme-mobile-nav d-lg-none d-block <?php echo esc_attr(specia_sticky_menu()); ?>">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="theme-mobile-menu">
						<div class="headtop-mobi">
							<div class="headtop-shift">
								<a href="javascript:void(0);" class="header-sidebar-toggle open-toggle"><span></span></a>
								<a href="javascript:void(0);" class="header-sidebar-toggle close-button"><span></span></a>
								<div id="mob-h-top" class="mobi-head-top animated"></div>
							</div>
						</div>
						<?php 
						$mobile_logo= get_theme_mod('mobile_logo'); 	
						?>
						<div class="mobile-logo">
							<a href="<?php echo esc_url(home_url( '/' )); ?>" class="navbar-brand">
								<?php if($mobile_logo) { ?>
									<img src="<?php echo esc_url($mobile_logo); ?>"/>
									<?php
										}
									else { 
										echo esc_html(get_bloginfo('name'));
									}
								?>
							</a>
							<?php
								$scolax_description = get_bloginfo( 'description');
							if ($scolax_description) : ?>
							<p class="site-description"><?php echo esc_html($scolax_description); ?></p>
							<?php endif; ?>
							
						</div>
						<div class="menu-toggle-wrap">
							<div class="hamburger-menu">
								<a href="javascript:void(0);" class="menu-toggle">
									<div class="top-bun"></div>
									<div class="meat"></div>
									<div class="bottom-bun"></div>
								</a>
							</div>
						</div>
						<div id="mobile-m" class="mobile-menu">
							<div class="mobile-menu-shift">
								<a href="javascript:void(0);" class="close-style close-menu"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- / -->
	
	<!-- Top Menu -->
	<div class="xl-nav-area d-none d-lg-block">
		<div class="navigation <?php echo esc_attr(specia_sticky_menu()); ?>">
			<div class="container">
				<div class="row">
					<div class="col-md-12 my-auto"><div class="header-wrapper">
						<div class="brand-logo">
		                    <div class="logo">
	                            <?php
									if(has_custom_logo()) {   
										the_custom_logo();
									}
									else { ?>
		                        	<a href="<?php echo esc_url(home_url( '/' )); ?>" class="navbar-brand">
		                        		<?php echo esc_html(get_bloginfo('name')); ?>
									</a>
									<?php }
									$scolax_description = get_bloginfo( 'description');
								if ($scolax_description) : ?>
								<p class="site-description"><?php echo esc_html($scolax_description); ?></p>
		                        <?php endif; ?>
							</div>
						</div>
	                	
						<div class="theme-menu">					
							
							<nav class="menubar">
								<?php
									wp_nav_menu( 
									array(  
									'theme_location' => 'primary_menu',
									'container'  => '',
									'menu_class' => 'menu-wrap',
									'fallback_cb' => 'specia_fallback_page_menu::fallback',
									'walker' => new specia_nav_walker()
									) 
									);
								?> 
								<?php 
									$scolax_hs_nav_contact_info2 		= get_theme_mod('hs_nav_contact_info2','1');
									$scolax_hdr_nav_contact_icon2 		= get_theme_mod('hdr_nav_contact_icon2','fa-hourglass-end');
									$scolax_hdr_nav_contact_ttl2 		= get_theme_mod('hdr_nav_contact_ttl2');
									$scolax_hdr_nav_contact_subttl2 	= get_theme_mod('hdr_nav_contact_subttl2');
									$scolax_hdr_nav_contact_link2 		= get_theme_mod('hdr_nav_contact_link2');
								?>
								
							</nav>
							
							<?php 
									$call_action_button_label			= get_theme_mod('call_action_button_label');
									$call_action_button_link			= get_theme_mod('call_action_button_link','#');
									$call_action_button_target			= get_theme_mod('call_action_button_target');
									$call_action_button2_icon			= get_theme_mod('call_action_button2_icon','fa-phone');
									$call_action_button_label2			= get_theme_mod('call_action_button_label2');
									$call_action_button_link2			= get_theme_mod('call_action_button_link2','#');
									$call_action_button_title			= get_theme_mod('call_action_button_title','email@companyname.com');
									
									
									
								if($call_action_button_label) :?>
								<div class="col-md-4 col-lg-6 text-right flexing flexing-lg-end">
									<?php if(!empty($call_action_button_label2) || !empty($call_action_button2_icon)): ?>
									<div class="call-wrapper">									
										
										<?php if(!empty($call_action_button2_icon)): ?>
										<div class="call-icon-box">
											<i class="fa <?php echo esc_attr($call_action_button2_icon); ?>"></i>
										</div>
										<?php endif; ?>
										
										<?php if(!empty($call_action_button_label2)): ?>				
										<div class="cta-info">
										
										<?php if(!empty($call_action_button_title)): ?>
											<div class="call-title"><a href="mailto:<?php echo wp_kses_post($call_action_button_title); ?>"><?php echo wp_kses_post($call_action_button_title); ?></a></div>
											<?php endif; ?>
											
											<?php if(!empty($call_action_button_label2)): ?>
											<div class="call-phone"><a href="<?php echo esc_url($call_action_button_link2); ?>"><?php echo esc_html($call_action_button_label2); ?></a></div>
											<?php endif; ?>	
										</div>
										
										<?php endif; ?>
										
									</div>
									<?php endif; ?>
									
									
									
								</div>
								
								<?php endif;?>
							
						</div>
						<?php 
							$scolax_hs_nav_contact_info2 		= get_theme_mod('hs_nav_contact_info2','1');
							$scolax_hdr_nav_contact_icon2 		= get_theme_mod('hdr_nav_contact_icon2','fa-hourglass-end');
							$scolax_hdr_nav_contact_ttl2 		= get_theme_mod('hdr_nav_contact_ttl2');
							$scolax_hdr_nav_contact_subttl2 		= get_theme_mod('hdr_nav_contact_subttl2');
							$scolax_hdr_nav_contact_link2 		= get_theme_mod('hdr_nav_contact_link2');
						?>
						<div class="menu-right">
									<ul class="wrap-right">
										
										
										<li class="search-button">
											<a href="#" id="view-search-btn" class="header-search-toggle"><i class="fa fa-search"></i></a>
											<!-- Quik search -->
											<div class="view-search-btn header-search-popup">
												<form  method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Site Search', 'scolax' ); ?>">
													<span class="screen-reader-text"><?php esc_html_e( 'Search for:', 'scolax' ); ?></span>
													<input type="search" class="search-field header-search-field" placeholder="<?php esc_attr_e( 'Type To Search', 'scolax' ); ?>" name="s" id="popfocus" value="" autofocus>
													<a href="#" class="close-style header-search-close"></a>
												</form>
											</div>
											<!-- / -->
										</li>	
										
										<?php 
											$scolax_header_cart= get_theme_mod('header_cart','1');
											if($scolax_header_cart == '1'){ ?>
											<li class="cart-wrapper">
												<div class="cart-icon-wrap">
													<a href="javascript:void(0)" id="cart"><i class="fa fa-shopping-bag"></i>
														<?php 
															if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
																$count = WC()->cart->cart_contents_count;
																$cart_url = wc_get_cart_url();
																
																if ( $count > 0 ) {
																?>
																<span><?php echo esc_html( $count ); ?></span>
																<?php 
																}
																else {
																?>
																<span><?php echo esc_html_e( '0','scolax' ); ?></span>
																<?php 
																}
															}
														?>
													</a>
												</div>
												
												<!-- Shopping Cart -->
												<?php if ( class_exists( 'WooCommerce' ) ) { ?>
													<div id="header-cart" class="shopping-cart">
														<div class="cart-body">                                            
															<?php get_template_part('woocommerce/cart/mini','cart');     ?>
														</div>
													</div>
												<?php } ?>
												<!--end shopping-cart -->
											</li>
										<?php } ?>
										
									</ul>
								</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</header>
<?php 
	if ( !is_page_template( 'templates/template-homepage-one.php' )) {
		specia_breadcrumbs_style(); 
	}
	?>						