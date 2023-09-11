<?php
	
	$it_company_first_theme_color = get_theme_mod('it_company_first_theme_color');

	$it_services_custom_css = '';

	if($it_company_first_theme_color != false){
		$it_services_custom_css .=' .bar-box, .post-info, .blogbtn a, #sidebar .search-form input[type="submit"], .pagination .current, #sidebar .tagcloud a:hover, .woocommerce-product-search button, .inner, #footer .search-form input[type="submit"], .footerinner .tagcloud a:hover, .navigation .nav-previous a, .navigation .nav-next a, #comments a.comment-reply-link, #comments input[type="submit"].submit, .bradcrumbs a:hover, .nav-menu ul ul a, h1.page-title, h1.search-title, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .page-template-custom-front-page .top-header, .more-btn a:hover, .we-do-box:hover, .tags a:hover, .back-to-top, input[type="submit"], a.button, .top-header, .post-categories li a{';
			$it_services_custom_css .='background-color: '.esc_attr($it_company_first_theme_color).';';
		$it_services_custom_css .='}';
	}
	if($it_company_first_theme_color != false){
		$it_services_custom_css .='  .blog-sec h2 a, #sidebar h3, #sidebar ul li a:hover, .footerinner ul li a:hover, #header .nav ul li::after, #we-do h2, .tags a i, .woocommerce-message::before, #wrapper .related-posts h2.related-posts-main-title, #wrapper .related-posts h3 a{';
			$it_services_custom_css .='color: '.esc_attr($it_company_first_theme_color).';';
		$it_services_custom_css .='}';
	}
	if($it_company_first_theme_color != false){
		$it_services_custom_css .=' .nav-menu ul ul a:hover, .tags a:hover, .woocommerce-message{';
			$it_services_custom_css .='border-color: '.esc_attr($it_company_first_theme_color).';';
		$it_services_custom_css .='}';
	}
	if($it_company_first_theme_color != false){
		$it_services_custom_css .=' .back-to-top::before{';
			$it_services_custom_css .='border-bottom-color: '.esc_attr($it_company_first_theme_color).';';
		$it_services_custom_css .='}';
	}

	/*----- Blog Post display type css ------*/
	
	$it_company_blog_post_display_type = get_theme_mod('it_company_blog_post_display_type', 'blocks');
	if($it_company_blog_post_display_type == 'blocks' ){
		$it_services_custom_css .='.blog .blog-sec{';
			$it_services_custom_css .=' box-shadow: 2px 2px '.esc_attr($it_company_first_theme_color).'; border: 1px solid #e4e4e4;';
		$it_services_custom_css .='}';
	}elseif($it_company_blog_post_display_type == 'without blocks' ){
		$it_services_custom_css .='.blog .blog-sec{';
			$it_services_custom_css .=' box-shadow: none !important; border: 0 !important;';
		$it_services_custom_css .='}';
	}


	