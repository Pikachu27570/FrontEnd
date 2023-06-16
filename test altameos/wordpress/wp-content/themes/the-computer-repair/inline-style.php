<?php

	$the_computer_repair_first_color = get_theme_mod('the_computer_repair_first_color');

	$the_computer_repair_custom_css = '';

	/*------------------- Global First Color ----------------*/

	if($the_computer_repair_first_color != false){
		$the_computer_repair_custom_css .='.cart-value,.top-btn a,.more-btn a,input[type="submit"],#sidebar h3,.pagination .current,.pagination a:hover,#sidebar .custom-social-icons i, #footer .custom-social-icons i,#sidebar .tagcloud a:hover,#footer .tagcloud a:hover,#footer-2,#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,.box-content:hover a,#comments input[type="submit"],nav.woocommerce-MyAccount-navigation ul li,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .scrollup i, #comments a.comment-reply-link, .toggle-nav i, #sidebar .widget_price_filter .ui-slider .ui-slider-range, #sidebar .widget_price_filter .ui-slider .ui-slider-handle, #sidebar .woocommerce-product-search button, #footer .widget_price_filter .ui-slider .ui-slider-range, #footer .widget_price_filter .ui-slider .ui-slider-handle, #footer .woocommerce-product-search button, #footer a.custom_read_more, #sidebar a.custom_read_more, .nav-previous a:hover, .nav-next a:hover, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .wp-block-button__link, #preloader, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__label, .top-bar .custom-social-icons i:hover,.woocommerce span.onsale{';
			$the_computer_repair_custom_css .='background-color: '.esc_attr($the_computer_repair_first_color).';';
		$the_computer_repair_custom_css .='}';
	}
	if($the_computer_repair_first_color != false){
		$the_computer_repair_custom_css .='#slider .carousel-control-prev-icon:hover, #slider .carousel-control-next-icon:hover,.box-content:hover, .top-bar .custom-social-icons i:hover{';
			$the_computer_repair_custom_css .='border-color: '.esc_attr($the_computer_repair_first_color).';';
		$the_computer_repair_custom_css .='}';
	}
	if($the_computer_repair_first_color != false){
		$the_computer_repair_custom_css .='a ,.lower-bar i,.post-main-box:hover h2,#sidebar ul li a:hover,#footer .custom-social-icons i:hover, #footer li a:hover, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title,.post-main-box:hover h2 a, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, #footer a.custom_read_more:hover, .post-main-box:hover .entry-date a, .post-main-box:hover .entry-author a, .single-post .post-info:hover .entry-date a, .single-post .post-info:hover .entry-author a, .lower-bar p a:hover, .logo .site-title a:hover, #slider .inner_carousel h1 a:hover, .main-navigation li a:hover, .main-navigation li a:focus, .main-navigation ul ul a:focus, .main-navigation ul ul a:hover, .sf-arrows ul li > .sf-with-ul:focus:after,.sf-arrows ul li:hover > .sf-with-ul:after,.sf-arrows .sfHover > .sf-with-ul:after{';
			$the_computer_repair_custom_css .='color: '.esc_attr($the_computer_repair_first_color).';';
		$the_computer_repair_custom_css .='}';
	}	 
	if($the_computer_repair_first_color != false){
		$the_computer_repair_custom_css .='.main-navigation ul ul{';
			$the_computer_repair_custom_css .='border-top-color: '.esc_attr($the_computer_repair_first_color).';';
		$the_computer_repair_custom_css .='}';
	}
	if($the_computer_repair_first_color != false){
		$the_computer_repair_custom_css .='.lower-bar,#footer h3:after,.heading-box hr, .header-fixed, .main-navigation ul ul, #footer .wp-block-search .wp-block-search__label:after{';
			$the_computer_repair_custom_css .='border-bottom-color: '.esc_attr($the_computer_repair_first_color).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_custom_css .='@media screen and (max-width:1000px) {';
		if($the_computer_repair_first_color != false){
			$the_computer_repair_custom_css .='.search-box i{
			background-color:'.esc_attr($the_computer_repair_first_color).';
			}';
		}
	$the_computer_repair_custom_css .='}';

	/*------------- Header Color Option  -------------------*/

	$the_computer_repair_header_background_second_color = get_theme_mod('the_computer_repair_header_background_second_color');

	$the_computer_repair_header_background_first_color = get_theme_mod('the_computer_repair_header_background_first_color');
	if($the_computer_repair_header_background_first_color != false){
		$the_computer_repair_custom_css .='.middle-header{';
			$the_computer_repair_custom_css .='background-color: '.esc_attr($the_computer_repair_header_background_first_color).';';
		$the_computer_repair_custom_css .='}';
	}

	if($the_computer_repair_header_background_first_color != false || $the_computer_repair_header_background_second_color != false){
		$the_computer_repair_custom_css .='.middle-header{
		background: linear-gradient(to right, '.esc_attr($the_computer_repair_header_background_first_color).', '.esc_attr($the_computer_repair_header_background_second_color).');
		}';
	}

	/*------------- Menus Color Option  -------------------*/

	$the_computer_repair_header_menus_color = get_theme_mod('the_computer_repair_header_menus_color');
	if($the_computer_repair_header_menus_color != false){
		$the_computer_repair_custom_css .='.main-navigation a{';
			$the_computer_repair_custom_css .='color: '.esc_attr($the_computer_repair_header_menus_color).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_header_menus_hover_color = get_theme_mod('the_computer_repair_header_menus_hover_color');
	if($the_computer_repair_header_menus_hover_color != false){
		$the_computer_repair_custom_css .='.main-navigation a:hover{';
			$the_computer_repair_custom_css .='color: '.esc_attr($the_computer_repair_header_menus_hover_color).'!important;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_header_submenus_color = get_theme_mod('the_computer_repair_header_submenus_color');
	if($the_computer_repair_header_submenus_color != false){
		$the_computer_repair_custom_css .='.main-navigation ul ul a{';
			$the_computer_repair_custom_css .='color: '.esc_attr($the_computer_repair_header_submenus_color).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_header_submenus_hover_color = get_theme_mod('the_computer_repair_header_submenus_hover_color');
	if($the_computer_repair_header_submenus_hover_color != false){
		$the_computer_repair_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$the_computer_repair_custom_css .='color: '.esc_attr($the_computer_repair_header_submenus_hover_color).'!important;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_menus_item = get_theme_mod( 'the_computer_repair_menus_item_style','None');
    if($the_computer_repair_menus_item == 'None'){
		$the_computer_repair_custom_css .='.main-navigation a{';
			$the_computer_repair_custom_css .='';
		$the_computer_repair_custom_css .='}';
	}else if($the_computer_repair_menus_item == 'Zoom In'){
		$the_computer_repair_custom_css .='.main-navigation a:hover{';
			$the_computer_repair_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #ffcc05;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_navigation_menu_font_size = get_theme_mod('the_computer_repair_navigation_menu_font_size');
	if($the_computer_repair_navigation_menu_font_size != false){
		$the_computer_repair_custom_css .='.main-navigation a{';
			$the_computer_repair_custom_css .='font-size: '.esc_attr($the_computer_repair_navigation_menu_font_size).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_navigation_menu_font_weight = get_theme_mod('the_computer_repair_navigation_menu_font_weight','500');
	if($the_computer_repair_navigation_menu_font_weight != false){
		$the_computer_repair_custom_css .='.main-navigation a{';
			$the_computer_repair_custom_css .='font-weight: '.esc_attr($the_computer_repair_navigation_menu_font_weight).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_theme_lay = get_theme_mod( 'the_computer_repair_menu_text_transform','Uppercase');
	if($the_computer_repair_theme_lay == 'Capitalize'){
		$the_computer_repair_custom_css .='.main-navigation a{';
			$the_computer_repair_custom_css .='text-transform:Capitalize;';
		$the_computer_repair_custom_css .='}';
	}
	if($the_computer_repair_theme_lay == 'Lowercase'){
		$the_computer_repair_custom_css .='.main-navigation a{';
			$the_computer_repair_custom_css .='text-transform:Lowercase;';
		$the_computer_repair_custom_css .='}';
	}
	if($the_computer_repair_theme_lay == 'Uppercase'){
		$the_computer_repair_custom_css .='.main-navigation a{';
			$the_computer_repair_custom_css .='text-transform:Uppercase;';
		$the_computer_repair_custom_css .='}';
	}
	/*------------- Search Background Color Option  -------------------*/

	$the_computer_repair_header_search_bg_color = get_theme_mod('the_computer_repair_header_search_bg_color');
	if($the_computer_repair_header_search_bg_color != false){
		$the_computer_repair_custom_css .='.search-box i{';
			$the_computer_repair_custom_css .='background: '.esc_attr($the_computer_repair_header_search_bg_color).';';
		$the_computer_repair_custom_css .='}';
	}

	/*------------- Footer Color Option  -------------------*/

	$the_computer_repair_footer_background_second_color = get_theme_mod('the_computer_repair_footer_background_second_color');

	$the_computer_repair_footer_background_first_color = get_theme_mod('the_computer_repair_footer_background_first_color');
	if($the_computer_repair_footer_background_first_color != false){
		$the_computer_repair_custom_css .='#footer{';
			$the_computer_repair_custom_css .='background-color: '.esc_attr($the_computer_repair_footer_background_first_color).';';
		$the_computer_repair_custom_css .='}';
	}

	if($the_computer_repair_footer_background_first_color != false || $the_computer_repair_footer_background_second_color != false){
		$the_computer_repair_custom_css .='#footer{
		background: linear-gradient(to right, '.esc_attr($the_computer_repair_footer_background_first_color).', '.esc_attr($the_computer_repair_footer_background_second_color).');
		}';
	}

	$the_computer_repair_footer_widgets_heading = get_theme_mod( 'the_computer_repair_footer_widgets_heading','Left');
    if($the_computer_repair_footer_widgets_heading == 'Left'){
		$the_computer_repair_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$the_computer_repair_custom_css .='text-align: left;';
		$the_computer_repair_custom_css .='}';
	}else if($the_computer_repair_footer_widgets_heading == 'Center'){
		$the_computer_repair_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$the_computer_repair_custom_css .='text-align: center; position:relative;';
		$the_computer_repair_custom_css .='}';
		$the_computer_repair_custom_css .='#footer h3:after, #footer .wp-block-search .wp-block-search__label:after{';
			$the_computer_repair_custom_css .='margin:0 auto;';
		$the_computer_repair_custom_css .='}';
	}else if($the_computer_repair_footer_widgets_heading == 'Right'){
		$the_computer_repair_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$the_computer_repair_custom_css .='text-align: right; position:relative;';
		$the_computer_repair_custom_css .='}';
		$the_computer_repair_custom_css .='#footer h3:after, #footer .wp-block-search .wp-block-search__label:after{';
			$the_computer_repair_custom_css .='margin-left:auto;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_footer_widgets_content = get_theme_mod( 'the_computer_repair_footer_widgets_content','Left');
    if($the_computer_repair_footer_widgets_content == 'Left'){
		$the_computer_repair_custom_css .='#footer .widget{';
		$the_computer_repair_custom_css .='text-align: left;';
		$the_computer_repair_custom_css .='}';
	}else if($the_computer_repair_footer_widgets_content == 'Center'){
		$the_computer_repair_custom_css .='#footer .widget{';
			$the_computer_repair_custom_css .='text-align: center;';
		$the_computer_repair_custom_css .='}';
	}else if($the_computer_repair_footer_widgets_content == 'Right'){
		$the_computer_repair_custom_css .='#footer .widget{';
			$the_computer_repair_custom_css .='text-align: right;';
		$the_computer_repair_custom_css .='}';
	}

	/*-------------Width Layout -------------------*/

	$the_computer_repair_theme_lay = get_theme_mod( 'the_computer_repair_width_option','Full Width');
    if($the_computer_repair_theme_lay == 'Boxed'){
		$the_computer_repair_custom_css .='body{';
			$the_computer_repair_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$the_computer_repair_custom_css .='}';
		$the_computer_repair_custom_css .='.scrollup i{';
			$the_computer_repair_custom_css .='right: 100px;';
		$the_computer_repair_custom_css .='}';
		$the_computer_repair_custom_css .='.scrollup.left i{';
			$the_computer_repair_custom_css .='left: 100px;';
		$the_computer_repair_custom_css .='}';
	}else if($the_computer_repair_theme_lay == 'Wide Width'){
		$the_computer_repair_custom_css .='body{';
			$the_computer_repair_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$the_computer_repair_custom_css .='}';
		$the_computer_repair_custom_css .='.scrollup i{';
			$the_computer_repair_custom_css .='right: 30px;';
		$the_computer_repair_custom_css .='}';
		$the_computer_repair_custom_css .='.scrollup.left i{';
			$the_computer_repair_custom_css .='left: 30px;';
		$the_computer_repair_custom_css .='}';
	}else if($the_computer_repair_theme_lay == 'Full Width'){
		$the_computer_repair_custom_css .='body{';
			$the_computer_repair_custom_css .='max-width: 100%;';
		$the_computer_repair_custom_css .='}';
	}

	/*--------------------- Slider Opacity -------------------*/

	$the_computer_repair_theme_lay = get_theme_mod( 'the_computer_repair_slider_opacity_color','0.5');
	if($the_computer_repair_theme_lay == '0'){
		$the_computer_repair_custom_css .='#slider img{';
			$the_computer_repair_custom_css .='opacity:0';
		$the_computer_repair_custom_css .='}';
		}else if($the_computer_repair_theme_lay == '0.1'){
		$the_computer_repair_custom_css .='#slider img{';
			$the_computer_repair_custom_css .='opacity:0.1';
		$the_computer_repair_custom_css .='}';
		}else if($the_computer_repair_theme_lay == '0.2'){
		$the_computer_repair_custom_css .='#slider img{';
			$the_computer_repair_custom_css .='opacity:0.2';
		$the_computer_repair_custom_css .='}';
		}else if($the_computer_repair_theme_lay == '0.3'){
		$the_computer_repair_custom_css .='#slider img{';
			$the_computer_repair_custom_css .='opacity:0.3';
		$the_computer_repair_custom_css .='}';
		}else if($the_computer_repair_theme_lay == '0.4'){
		$the_computer_repair_custom_css .='#slider img{';
			$the_computer_repair_custom_css .='opacity:0.4';
		$the_computer_repair_custom_css .='}';
		}else if($the_computer_repair_theme_lay == '0.5'){
		$the_computer_repair_custom_css .='#slider img{';
			$the_computer_repair_custom_css .='opacity:0.5';
		$the_computer_repair_custom_css .='}';
		}else if($the_computer_repair_theme_lay == '0.6'){
		$the_computer_repair_custom_css .='#slider img{';
			$the_computer_repair_custom_css .='opacity:0.6';
		$the_computer_repair_custom_css .='}';
		}else if($the_computer_repair_theme_lay == '0.7'){
		$the_computer_repair_custom_css .='#slider img{';
			$the_computer_repair_custom_css .='opacity:0.7';
		$the_computer_repair_custom_css .='}';
		}else if($the_computer_repair_theme_lay == '0.8'){
		$the_computer_repair_custom_css .='#slider img{';
			$the_computer_repair_custom_css .='opacity:0.8';
		$the_computer_repair_custom_css .='}';
		}else if($the_computer_repair_theme_lay == '0.9'){
		$the_computer_repair_custom_css .='#slider img{';
			$the_computer_repair_custom_css .='opacity:0.9';
		$the_computer_repair_custom_css .='}';
		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$the_computer_repair_slider_image_overlay = get_theme_mod('the_computer_repair_slider_image_overlay', true);
	if($the_computer_repair_slider_image_overlay == false){
		$the_computer_repair_custom_css .='#slider img{';
			$the_computer_repair_custom_css .='opacity:1;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_slider_image_overlay_color = get_theme_mod('the_computer_repair_slider_image_overlay_color', true);
	if($the_computer_repair_slider_image_overlay_color != false){
		$the_computer_repair_custom_css .='#slider{';
			$the_computer_repair_custom_css .='background-color: '.esc_attr($the_computer_repair_slider_image_overlay_color).';';
		$the_computer_repair_custom_css .='}';
	}

	/*-------------------Slider Content Layout -------------------*/

	$the_computer_repair_theme_lay = get_theme_mod( 'the_computer_repair_slider_content_option','Left');
    if($the_computer_repair_theme_lay == 'Left'){
		$the_computer_repair_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$the_computer_repair_custom_css .='text-align:left; left:10%; right:55%;';
		$the_computer_repair_custom_css .='}';
	}else if($the_computer_repair_theme_lay == 'Center'){
		$the_computer_repair_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$the_computer_repair_custom_css .='text-align:center; left:20%; right:20%;';
		$the_computer_repair_custom_css .='}';
	}else if($the_computer_repair_theme_lay == 'Right'){
		$the_computer_repair_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$the_computer_repair_custom_css .='text-align:right; left:55%; right:10%;';
		$the_computer_repair_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$the_computer_repair_slider_content_padding_top_bottom = get_theme_mod('the_computer_repair_slider_content_padding_top_bottom');
	$the_computer_repair_slider_content_padding_left_right = get_theme_mod('the_computer_repair_slider_content_padding_left_right');
	if($the_computer_repair_slider_content_padding_top_bottom != false || $the_computer_repair_slider_content_padding_left_right != false){
		$the_computer_repair_custom_css .='#slider .carousel-caption{';
			$the_computer_repair_custom_css .='top: '.esc_attr($the_computer_repair_slider_content_padding_top_bottom).'; bottom: '.esc_attr($the_computer_repair_slider_content_padding_top_bottom).';left: '.esc_attr($the_computer_repair_slider_content_padding_left_right).';right: '.esc_attr($the_computer_repair_slider_content_padding_left_right).';';
		$the_computer_repair_custom_css .='}';
	}

	/*---------------------------Slider Height ------------*/

	$the_computer_repair_slider_height = get_theme_mod('the_computer_repair_slider_height');
	if($the_computer_repair_slider_height != false){
		$the_computer_repair_custom_css .='#slider img{';
			$the_computer_repair_custom_css .='height: '.esc_attr($the_computer_repair_slider_height).';';
		$the_computer_repair_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$the_computer_repair_theme_lay = get_theme_mod( 'the_computer_repair_blog_layout_option','Default');
    if($the_computer_repair_theme_lay == 'Default'){
		$the_computer_repair_custom_css .='.post-main-box{';
			$the_computer_repair_custom_css .='';
		$the_computer_repair_custom_css .='}';
	}else if($the_computer_repair_theme_lay == 'Center'){
		$the_computer_repair_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$the_computer_repair_custom_css .='text-align:center;';
		$the_computer_repair_custom_css .='}';
		$the_computer_repair_custom_css .='.post-info{';
			$the_computer_repair_custom_css .='margin-top:10px;';
		$the_computer_repair_custom_css .='}';
		$the_computer_repair_custom_css .='.post-info hr{';
			$the_computer_repair_custom_css .='margin:10px auto;';
		$the_computer_repair_custom_css .='}';
	}else if($the_computer_repair_theme_lay == 'Left'){
		$the_computer_repair_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$the_computer_repair_custom_css .='text-align:Left;';
		$the_computer_repair_custom_css .='}';
		$the_computer_repair_custom_css .='.post-info hr{';
			$the_computer_repair_custom_css .='margin-bottom:10px;';
		$the_computer_repair_custom_css .='}';
		$the_computer_repair_custom_css .='.post-main-box h2{';
			$the_computer_repair_custom_css .='margin-top:10px;';
		$the_computer_repair_custom_css .='}';
	}

	// featured image dimention
	$the_computer_repair_blog_post_featured_image_dimension = get_theme_mod('the_computer_repair_blog_post_featured_image_dimension', 'default');
	$the_computer_repair_blog_post_featured_image_custom_width = get_theme_mod('the_computer_repair_blog_post_featured_image_custom_width',250);
	$the_computer_repair_blog_post_featured_image_custom_height = get_theme_mod('the_computer_repair_blog_post_featured_image_custom_height',250);
	if($the_computer_repair_blog_post_featured_image_dimension == 'custom'){
		$the_computer_repair_custom_css .='.box-image img{';
			$the_computer_repair_custom_css .='width: '.esc_attr($the_computer_repair_blog_post_featured_image_custom_width).'; height: '.esc_attr($the_computer_repair_blog_post_featured_image_custom_height).';';
		$the_computer_repair_custom_css .='}';
	}
		$the_computer_repair_featured_img_border_radius = get_theme_mod('the_computer_repair_featured_image_border_radius');
	if($the_computer_repair_featured_img_border_radius != false){
		$the_computer_repair_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$the_computer_repair_custom_css .='border-radius: '.esc_attr($the_computer_repair_featured_img_border_radius).'px;';
		$the_computer_repair_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$the_computer_repair_blog_page_posts_settings = get_theme_mod( 'the_computer_repair_blog_page_posts_settings','Into Blocks');
    if($the_computer_repair_blog_page_posts_settings == 'Without Blocks'){
		$the_computer_repair_custom_css .='.post-main-box{';
			$the_computer_repair_custom_css .='box-shadow: none; border: none; margin:30px 0; background:none;';
		$the_computer_repair_custom_css .='}';
	}

	/*--------------------Responsive Media -----------------------*/

	$the_computer_repair_resp_topbar = get_theme_mod( 'the_computer_repair_resp_topbar_hide_show',false);
	if($the_computer_repair_resp_topbar == true && get_theme_mod( 'the_computer_repair_topbar_hide_show', false) == false){
    	$the_computer_repair_custom_css .='.lower-bar{';
			$the_computer_repair_custom_css .='display:none;';
		$the_computer_repair_custom_css .='} ';
	}
    if($the_computer_repair_resp_topbar == true){
    	$the_computer_repair_custom_css .='@media screen and (max-width:575px) {';
		$the_computer_repair_custom_css .='.lower-bar{';
			$the_computer_repair_custom_css .='display:block;';
		$the_computer_repair_custom_css .='} }';
	}else if($the_computer_repair_resp_topbar == false){
		$the_computer_repair_custom_css .='@media screen and (max-width:575px) {';
		$the_computer_repair_custom_css .='.lower-bar{';
			$the_computer_repair_custom_css .='display:none;';
		$the_computer_repair_custom_css .='} }';
	}

	$the_computer_repair_resp_stickyheader = get_theme_mod( 'the_computer_repair_stickyheader_hide_show',false);
	if($the_computer_repair_resp_stickyheader == true && get_theme_mod( 'the_computer_repair_sticky_header',false) != true){
    	$the_computer_repair_custom_css .='.header-fixed{';
			$the_computer_repair_custom_css .='position:static;';
		$the_computer_repair_custom_css .='} ';
	}
    if($the_computer_repair_resp_stickyheader == true){
    	$the_computer_repair_custom_css .='@media screen and (max-width:575px) {';
		$the_computer_repair_custom_css .='.header-fixed{';
			$the_computer_repair_custom_css .='position:fixed;';
		$the_computer_repair_custom_css .='} }';
	}else if($the_computer_repair_resp_stickyheader == false){
		$the_computer_repair_custom_css .='@media screen and (max-width:575px){';
		$the_computer_repair_custom_css .='.header-fixed{';
			$the_computer_repair_custom_css .='position:static;';
		$the_computer_repair_custom_css .='} }';
	}

	$the_computer_repair_resp_slider = get_theme_mod( 'the_computer_repair_resp_slider_hide_show',false);
	if($the_computer_repair_resp_slider == true && get_theme_mod( 'the_computer_repair_slider_hide_show', false) == false){
    	$the_computer_repair_custom_css .='#slider{';
			$the_computer_repair_custom_css .='display:none;';
		$the_computer_repair_custom_css .='} ';
	}
    if($the_computer_repair_resp_slider == true){
    	$the_computer_repair_custom_css .='@media screen and (max-width:575px) {';
		$the_computer_repair_custom_css .='#slider{';
			$the_computer_repair_custom_css .='display:block;';
		$the_computer_repair_custom_css .='} }';
	}else if($the_computer_repair_resp_slider == false){
		$the_computer_repair_custom_css .='@media screen and (max-width:575px) {';
		$the_computer_repair_custom_css .='#slider{';
			$the_computer_repair_custom_css .='display:none;';
		$the_computer_repair_custom_css .='} }';
	}

	$the_computer_repair_resp_sidebar = get_theme_mod( 'the_computer_repair_sidebar_hide_show',true);
    if($the_computer_repair_resp_sidebar == true){
    	$the_computer_repair_custom_css .='@media screen and (max-width:575px) {';
		$the_computer_repair_custom_css .='#sidebar{';
			$the_computer_repair_custom_css .='display:block;';
		$the_computer_repair_custom_css .='} }';
	}else if($the_computer_repair_resp_sidebar == false){
		$the_computer_repair_custom_css .='@media screen and (max-width:575px) {';
		$the_computer_repair_custom_css .='#sidebar{';
			$the_computer_repair_custom_css .='display:none;';
		$the_computer_repair_custom_css .='} }';
	}

	$the_computer_repair_resp_scroll_top = get_theme_mod( 'the_computer_repair_resp_scroll_top_hide_show',true);
	if($the_computer_repair_resp_scroll_top == true && get_theme_mod( 'the_computer_repair_hide_show_scroll',true) != true){
    	$the_computer_repair_custom_css .='.scrollup i{';
			$the_computer_repair_custom_css .='visibility:hidden !important;';
		$the_computer_repair_custom_css .='} ';
	}
    if($the_computer_repair_resp_scroll_top == true){
    	$the_computer_repair_custom_css .='@media screen and (max-width:575px) {';
		$the_computer_repair_custom_css .='.scrollup i{';
			$the_computer_repair_custom_css .='visibility:visible !important;';
		$the_computer_repair_custom_css .='} }';
	}else if($the_computer_repair_resp_scroll_top == false){
		$the_computer_repair_custom_css .='@media screen and (max-width:575px){';
		$the_computer_repair_custom_css .='.scrollup i{';
			$the_computer_repair_custom_css .='visibility:hidden !important;';
		$the_computer_repair_custom_css .='} }';
	}

	$the_computer_repair_resp_menu_toggle_btn_bg_color = get_theme_mod('the_computer_repair_resp_menu_toggle_btn_bg_color');
	if($the_computer_repair_resp_menu_toggle_btn_bg_color != false){
		$the_computer_repair_custom_css .='.toggle-nav i{';
			$the_computer_repair_custom_css .='background: '.esc_attr($the_computer_repair_resp_menu_toggle_btn_bg_color).';';
		$the_computer_repair_custom_css .='}';
	}

	/*------------- Top Bar Settings ------------------*/

	$the_computer_repair_navigation_menu_font_size = get_theme_mod('the_computer_repair_navigation_menu_font_size');
	if($the_computer_repair_navigation_menu_font_size != false){
		$the_computer_repair_custom_css .='.main-navigation a{';
			$the_computer_repair_custom_css .='font-size: '.esc_attr($the_computer_repair_navigation_menu_font_size).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_nav_menus_font_weight = get_theme_mod( 'the_computer_repair_navigation_menu_font_weight','Default');
    if($the_computer_repair_nav_menus_font_weight == 'Default'){
		$the_computer_repair_custom_css .='.main-navigation a{';
			$the_computer_repair_custom_css .='';
		$the_computer_repair_custom_css .='}';
	}else if($the_computer_repair_nav_menus_font_weight == 'Normal'){
		$the_computer_repair_custom_css .='.main-navigation a{';
			$the_computer_repair_custom_css .='font-weight: normal;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_topbar_padding_top_bottom = get_theme_mod('the_computer_repair_topbar_padding_top_bottom');
	if($the_computer_repair_topbar_padding_top_bottom != false){
		$the_computer_repair_custom_css .='.lower-bar{';
			$the_computer_repair_custom_css .='padding-top: '.esc_attr($the_computer_repair_topbar_padding_top_bottom).'; padding-bottom: '.esc_attr($the_computer_repair_topbar_padding_top_bottom).';';
		$the_computer_repair_custom_css .='}';
	}

	/*-------------- Sticky Header Padding ----------------*/

	$the_computer_repair_sticky_header_padding = get_theme_mod('the_computer_repair_sticky_header_padding');
	if($the_computer_repair_sticky_header_padding != false){
		$the_computer_repair_custom_css .='.header-fixed{';
			$the_computer_repair_custom_css .='padding: '.esc_attr($the_computer_repair_sticky_header_padding).';';
		$the_computer_repair_custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/

	$the_computer_repair_search_padding_top_bottom = get_theme_mod('the_computer_repair_search_padding_top_bottom');
	$the_computer_repair_search_padding_left_right = get_theme_mod('the_computer_repair_search_padding_left_right');
	$the_computer_repair_search_font_size = get_theme_mod('the_computer_repair_search_font_size');
	$the_computer_repair_search_border_radius = get_theme_mod('the_computer_repair_search_border_radius');
	if($the_computer_repair_search_padding_top_bottom != false || $the_computer_repair_search_padding_left_right != false || $the_computer_repair_search_font_size != false || $the_computer_repair_search_border_radius != false){
		$the_computer_repair_custom_css .='.search-box i{';
			$the_computer_repair_custom_css .='padding-top: '.esc_attr($the_computer_repair_search_padding_top_bottom).'; padding-bottom: '.esc_attr($the_computer_repair_search_padding_top_bottom).';padding-left: '.esc_attr($the_computer_repair_search_padding_left_right).';padding-right: '.esc_attr($the_computer_repair_search_padding_left_right).';font-size: '.esc_attr($the_computer_repair_search_font_size).';border-radius: '.esc_attr($the_computer_repair_search_border_radius).'px;';
		$the_computer_repair_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$the_computer_repair_button_padding_top_bottom = get_theme_mod('the_computer_repair_button_padding_top_bottom');
	$the_computer_repair_button_padding_left_right = get_theme_mod('the_computer_repair_button_padding_left_right');
	if($the_computer_repair_button_padding_top_bottom != false || $the_computer_repair_button_padding_left_right != false){
		$the_computer_repair_custom_css .='.post-main-box .more-btn a{';
			$the_computer_repair_custom_css .='padding-top: '.esc_attr($the_computer_repair_button_padding_top_bottom).'; padding-bottom: '.esc_attr($the_computer_repair_button_padding_top_bottom).';padding-left: '.esc_attr($the_computer_repair_button_padding_left_right).';padding-right: '.esc_attr($the_computer_repair_button_padding_left_right).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_button_border_radius = get_theme_mod('the_computer_repair_button_border_radius');
	if($the_computer_repair_button_border_radius != false){
		$the_computer_repair_custom_css .='.post-main-box .more-btn a{';
			$the_computer_repair_custom_css .='border-radius: '.esc_attr($the_computer_repair_button_border_radius).'px;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_button_font_size = get_theme_mod('the_computer_repair_button_font_size',14);
	$the_computer_repair_custom_css .='.more-btn a{';
		$the_computer_repair_custom_css .='font-size: '.esc_attr($the_computer_repair_button_font_size).';';
	$the_computer_repair_custom_css .='}';

	$the_computer_repair_theme_lay = get_theme_mod( 'the_computer_repair_button_text_transform','Uppercase');
	$the_computer_repair_custom_css .='.more-btn a{';
		$the_computer_repair_custom_css .='text-transform: '.esc_attr($the_computer_repair_theme_lay).';';
	$the_computer_repair_custom_css .='}';

	$the_computer_repair_button_letter_spacing = get_theme_mod('the_computer_repair_button_letter_spacing',14);
	$the_computer_repair_custom_css .='.post-main-box .more-btn a{';
		$the_computer_repair_custom_css .='letter-spacing: '.esc_attr($the_computer_repair_button_letter_spacing).';';
	$the_computer_repair_custom_css .='}';

	/*------------- Single Blog Page------------------*/

	$the_computer_repair_featured_image_border_radius = get_theme_mod('the_computer_repair_featured_image_border_radius', 0);
	if($the_computer_repair_featured_image_border_radius != false){
		$the_computer_repair_custom_css .='.box-image img, .feature-box img{';
			$the_computer_repair_custom_css .='border-radius: '.esc_attr($the_computer_repair_featured_image_border_radius).'px;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_featured_image_box_shadow = get_theme_mod('the_computer_repair_featured_image_box_shadow',0);
	if($the_computer_repair_featured_image_box_shadow != false){
		$the_computer_repair_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$the_computer_repair_custom_css .='box-shadow: '.esc_attr($the_computer_repair_featured_image_box_shadow).'px '.esc_attr($the_computer_repair_featured_image_box_shadow).'px '.esc_attr($the_computer_repair_featured_image_box_shadow).'px #cccccc;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_single_blog_post_navigation_show_hide = get_theme_mod('the_computer_repair_single_blog_post_navigation_show_hide',true);
	if($the_computer_repair_single_blog_post_navigation_show_hide != true){
		$the_computer_repair_custom_css .='.post-navigation{';
			$the_computer_repair_custom_css .='display: none;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_single_blog_comment_title = get_theme_mod('the_computer_repair_single_blog_comment_title', 'Leave a Reply');
	if($the_computer_repair_single_blog_comment_title == ''){
		$the_computer_repair_custom_css .='#comments h2#reply-title {';
			$the_computer_repair_custom_css .='display: none;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_single_blog_comment_button_text = get_theme_mod('the_computer_repair_single_blog_comment_button_text', 'Post Comment');
	if($the_computer_repair_single_blog_comment_button_text == ''){
		$the_computer_repair_custom_css .='#comments p.form-submit {';
			$the_computer_repair_custom_css .='display: none;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_comment_width = get_theme_mod('the_computer_repair_single_blog_comment_width');
	if($the_computer_repair_comment_width != false){
		$the_computer_repair_custom_css .='#comments textarea{';
			$the_computer_repair_custom_css .='width: '.esc_attr($the_computer_repair_comment_width).';';
		$the_computer_repair_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$the_computer_repair_copyright_background_color = get_theme_mod('the_computer_repair_copyright_background_color');
	if($the_computer_repair_copyright_background_color != false){
		$the_computer_repair_custom_css .='#footer-2{';
			$the_computer_repair_custom_css .='background-color: '.esc_attr($the_computer_repair_copyright_background_color).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_copyright_font_size = get_theme_mod('the_computer_repair_copyright_font_size');
	if($the_computer_repair_copyright_font_size != false){
		$the_computer_repair_custom_css .='.copyright p{';
			$the_computer_repair_custom_css .='font-size: '.esc_attr($the_computer_repair_copyright_font_size).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_copyright_padding_top_bottom = get_theme_mod('the_computer_repair_copyright_padding_top_bottom');
	if($the_computer_repair_copyright_padding_top_bottom != false){
		$the_computer_repair_custom_css .='#footer-2{';
			$the_computer_repair_custom_css .='padding-top: '.esc_attr($the_computer_repair_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($the_computer_repair_copyright_padding_top_bottom).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_copyright_alignment = get_theme_mod('the_computer_repair_copyright_alignment');
	if($the_computer_repair_copyright_alignment != false){
		$the_computer_repair_custom_css .='.copyright p{';
			$the_computer_repair_custom_css .='text-align: '.esc_attr($the_computer_repair_copyright_alignment).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_footer_padding = get_theme_mod('the_computer_repair_footer_padding');
	if($the_computer_repair_footer_padding != false){
		$the_computer_repair_custom_css .='#footer{';
			$the_computer_repair_custom_css .='padding: '.esc_attr($the_computer_repair_footer_padding).' 0;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_footer_icon = get_theme_mod('the_computer_repair_footer_icon');
	if($the_computer_repair_footer_icon == false){
		$the_computer_repair_custom_css .='.copyright p{';
			$the_computer_repair_custom_css .='width:100%; text-align:center; float:none;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_footer_background_image = get_theme_mod('the_computer_repair_footer_background_image');
	if($the_computer_repair_footer_background_image != false){
		$the_computer_repair_custom_css .='#footer{';
			$the_computer_repair_custom_css .='background: url('.esc_attr($the_computer_repair_footer_background_image).');';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_theme_lay = get_theme_mod( 'the_computer_repair_img_footer','scroll');
	if($the_computer_repair_theme_lay == 'fixed'){
		$the_computer_repair_custom_css .='#footer{';
			$the_computer_repair_custom_css .='background-attachment: fixed !important; background-position: center !important;';
		$the_computer_repair_custom_css .='}';
	}elseif ($the_computer_repair_theme_lay == 'scroll'){
		$the_computer_repair_custom_css .='#footer{';
			$the_computer_repair_custom_css .='background-attachment: scroll !important; background-position: center !important;';
		$the_computer_repair_custom_css .='}';
	}


	/*----------------Sroll to top Settings ------------------*/

	$the_computer_repair_scroll_to_top_font_size = get_theme_mod('the_computer_repair_scroll_to_top_font_size');
	if($the_computer_repair_scroll_to_top_font_size != false){
		$the_computer_repair_custom_css .='.scrollup i{';
			$the_computer_repair_custom_css .='font-size: '.esc_attr($the_computer_repair_scroll_to_top_font_size).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_scroll_to_top_padding = get_theme_mod('the_computer_repair_scroll_to_top_padding');
	$the_computer_repair_scroll_to_top_padding = get_theme_mod('the_computer_repair_scroll_to_top_padding');
	if($the_computer_repair_scroll_to_top_padding != false){
		$the_computer_repair_custom_css .='.scrollup i{';
			$the_computer_repair_custom_css .='padding-top: '.esc_attr($the_computer_repair_scroll_to_top_padding).';padding-bottom: '.esc_attr($the_computer_repair_scroll_to_top_padding).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_scroll_to_top_width = get_theme_mod('the_computer_repair_scroll_to_top_width');
	if($the_computer_repair_scroll_to_top_width != false){
		$the_computer_repair_custom_css .='.scrollup i{';
			$the_computer_repair_custom_css .='width: '.esc_attr($the_computer_repair_scroll_to_top_width).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_scroll_to_top_height = get_theme_mod('the_computer_repair_scroll_to_top_height');
	if($the_computer_repair_scroll_to_top_height != false){
		$the_computer_repair_custom_css .='.scrollup i{';
			$the_computer_repair_custom_css .='height: '.esc_attr($the_computer_repair_scroll_to_top_height).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_scroll_to_top_border_radius = get_theme_mod('the_computer_repair_scroll_to_top_border_radius');
	if($the_computer_repair_scroll_to_top_border_radius != false){
		$the_computer_repair_custom_css .='.scrollup i{';
			$the_computer_repair_custom_css .='border-radius: '.esc_attr($the_computer_repair_scroll_to_top_border_radius).'px;';
		$the_computer_repair_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$the_computer_repair_social_icon_font_size = get_theme_mod('the_computer_repair_social_icon_font_size');
	if($the_computer_repair_social_icon_font_size != false){
		$the_computer_repair_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$the_computer_repair_custom_css .='font-size: '.esc_attr($the_computer_repair_social_icon_font_size).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_social_icon_padding = get_theme_mod('the_computer_repair_social_icon_padding');
	if($the_computer_repair_social_icon_padding != false){
		$the_computer_repair_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$the_computer_repair_custom_css .='padding: '.esc_attr($the_computer_repair_social_icon_padding).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_social_icon_width = get_theme_mod('the_computer_repair_social_icon_width');
	if($the_computer_repair_social_icon_width != false){
		$the_computer_repair_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$the_computer_repair_custom_css .='width: '.esc_attr($the_computer_repair_social_icon_width).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_social_icon_height = get_theme_mod('the_computer_repair_social_icon_height');
	if($the_computer_repair_social_icon_height != false){
		$the_computer_repair_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$the_computer_repair_custom_css .='height: '.esc_attr($the_computer_repair_social_icon_height).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_social_icon_border_radius = get_theme_mod('the_computer_repair_social_icon_border_radius');
	if($the_computer_repair_social_icon_border_radius != false){
		$the_computer_repair_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$the_computer_repair_custom_css .='border-radius: '.esc_attr($the_computer_repair_social_icon_border_radius).'px;';
		$the_computer_repair_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$the_computer_repair_products_padding_top_bottom = get_theme_mod('the_computer_repair_products_padding_top_bottom');
	if($the_computer_repair_products_padding_top_bottom != false){
		$the_computer_repair_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$the_computer_repair_custom_css .='padding-top: '.esc_attr($the_computer_repair_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($the_computer_repair_products_padding_top_bottom).'!important;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_products_padding_left_right = get_theme_mod('the_computer_repair_products_padding_left_right');
	if($the_computer_repair_products_padding_left_right != false){
		$the_computer_repair_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$the_computer_repair_custom_css .='padding-left: '.esc_attr($the_computer_repair_products_padding_left_right).'!important; padding-right: '.esc_attr($the_computer_repair_products_padding_left_right).'!important;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_products_box_shadow = get_theme_mod('the_computer_repair_products_box_shadow');
	if($the_computer_repair_products_box_shadow != false){
		$the_computer_repair_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$the_computer_repair_custom_css .='box-shadow: '.esc_attr($the_computer_repair_products_box_shadow).'px '.esc_attr($the_computer_repair_products_box_shadow).'px '.esc_attr($the_computer_repair_products_box_shadow).'px #ddd;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_products_border_radius = get_theme_mod('the_computer_repair_products_border_radius');
	if($the_computer_repair_products_border_radius != false){
		$the_computer_repair_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$the_computer_repair_custom_css .='border-radius: '.esc_attr($the_computer_repair_products_border_radius).'px;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_products_btn_padding_top_bottom = get_theme_mod('the_computer_repair_products_btn_padding_top_bottom');
	if($the_computer_repair_products_btn_padding_top_bottom != false){
		$the_computer_repair_custom_css .='.woocommerce a.button{';
			$the_computer_repair_custom_css .='padding-top: '.esc_attr($the_computer_repair_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($the_computer_repair_products_btn_padding_top_bottom).' !important;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_products_btn_padding_left_right = get_theme_mod('the_computer_repair_products_btn_padding_left_right');
	if($the_computer_repair_products_btn_padding_left_right != false){
		$the_computer_repair_custom_css .='.woocommerce a.button{';
			$the_computer_repair_custom_css .='padding-left: '.esc_attr($the_computer_repair_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($the_computer_repair_products_btn_padding_left_right).' !important;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_products_button_border_radius = get_theme_mod('the_computer_repair_products_button_border_radius', 0);
	if($the_computer_repair_products_button_border_radius != false){
		$the_computer_repair_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt{';
			$the_computer_repair_custom_css .='border-radius: '.esc_attr($the_computer_repair_products_button_border_radius).'px;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_woocommerce_sale_position = get_theme_mod( 'the_computer_repair_woocommerce_sale_position','right');
    if($the_computer_repair_woocommerce_sale_position == 'left'){
		$the_computer_repair_custom_css .='.woocommerce ul.products li.product .onsale{';
			$the_computer_repair_custom_css .='left: -10px; right: auto;';
		$the_computer_repair_custom_css .='}';
	}else if($the_computer_repair_woocommerce_sale_position == 'right'){
		$the_computer_repair_custom_css .='.woocommerce ul.products li.product .onsale{';
			$the_computer_repair_custom_css .='left: auto; right: 0;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_woocommerce_sale_font_size = get_theme_mod('the_computer_repair_woocommerce_sale_font_size');
	if($the_computer_repair_woocommerce_sale_font_size != false){
		$the_computer_repair_custom_css .='.woocommerce span.onsale{';
			$the_computer_repair_custom_css .='font-size: '.esc_attr($the_computer_repair_woocommerce_sale_font_size).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_woocommerce_sale_padding_top_bottom = get_theme_mod('the_computer_repair_woocommerce_sale_padding_top_bottom');
	if($the_computer_repair_woocommerce_sale_padding_top_bottom != false){
		$the_computer_repair_custom_css .='.woocommerce span.onsale{';
			$the_computer_repair_custom_css .='padding-top: '.esc_attr($the_computer_repair_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($the_computer_repair_woocommerce_sale_padding_top_bottom).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_woocommerce_sale_padding_left_right = get_theme_mod('the_computer_repair_woocommerce_sale_padding_left_right');
	if($the_computer_repair_woocommerce_sale_padding_left_right != false){
		$the_computer_repair_custom_css .='.woocommerce span.onsale{';
			$the_computer_repair_custom_css .='padding-left: '.esc_attr($the_computer_repair_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($the_computer_repair_woocommerce_sale_padding_left_right).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_woocommerce_sale_border_radius = get_theme_mod('the_computer_repair_woocommerce_sale_border_radius', 0);
	if($the_computer_repair_woocommerce_sale_border_radius != false){
		$the_computer_repair_custom_css .='.woocommerce span.onsale{';
			$the_computer_repair_custom_css .='border-radius: '.esc_attr($the_computer_repair_woocommerce_sale_border_radius).'px;';
		$the_computer_repair_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$the_computer_repair_logo_padding = get_theme_mod('the_computer_repair_logo_padding');
	if($the_computer_repair_logo_padding != false){
		$the_computer_repair_custom_css .='.middle-header .logo{';
			$the_computer_repair_custom_css .='padding: '.esc_attr($the_computer_repair_logo_padding).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_logo_margin = get_theme_mod('the_computer_repair_logo_margin');
	if($the_computer_repair_logo_margin != false){
		$the_computer_repair_custom_css .='.middle-header .logo{';
			$the_computer_repair_custom_css .='margin: '.esc_attr($the_computer_repair_logo_margin).';';
		$the_computer_repair_custom_css .='}';
	}

	// Site title Font Size
	$the_computer_repair_site_title_font_size = get_theme_mod('the_computer_repair_site_title_font_size');
	if($the_computer_repair_site_title_font_size != false){
		$the_computer_repair_custom_css .='.logo h1, .logo p.site-title{';
			$the_computer_repair_custom_css .='font-size: '.esc_attr($the_computer_repair_site_title_font_size).';';
		$the_computer_repair_custom_css .='}';
	}

	// Site tagline Font Size
	$the_computer_repair_site_tagline_font_size = get_theme_mod('the_computer_repair_site_tagline_font_size');
	if($the_computer_repair_site_tagline_font_size != false){
		$the_computer_repair_custom_css .='.logo p.site-description{';
			$the_computer_repair_custom_css .='font-size: '.esc_attr($the_computer_repair_site_tagline_font_size).';';
		$the_computer_repair_custom_css .='}';
	}

	/*------------------ Preloader Background Color  -------------------*/

	$the_computer_repair_preloader_bg_color = get_theme_mod('the_computer_repair_preloader_bg_color');
	if($the_computer_repair_preloader_bg_color != false){
		$the_computer_repair_custom_css .='#preloader{';
			$the_computer_repair_custom_css .='background-color: '.esc_attr($the_computer_repair_preloader_bg_color).';';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_preloader_border_color = get_theme_mod('the_computer_repair_preloader_border_color');
	if($the_computer_repair_preloader_border_color != false){
		$the_computer_repair_custom_css .='.loader-line{';
			$the_computer_repair_custom_css .='border-color: '.esc_attr($the_computer_repair_preloader_border_color).'!important;';
		$the_computer_repair_custom_css .='}';
	}

	$the_computer_repair_preloader_bg_img = get_theme_mod('the_computer_repair_preloader_bg_img');
	if($the_computer_repair_preloader_bg_img != false){
		$the_computer_repair_custom_css .='#preloader{';
			$the_computer_repair_custom_css .='background: url('.esc_attr($the_computer_repair_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$the_computer_repair_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$the_computer_repair_related_product_show_hide = get_theme_mod('the_computer_repair_related_product_show_hide',true);
	if($the_computer_repair_related_product_show_hide != true){
		$the_computer_repair_custom_css .='.related.products{';
			$the_computer_repair_custom_css .='display: none;';
		$the_computer_repair_custom_css .='}';
	}
 