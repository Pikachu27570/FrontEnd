<?php
/**
 * The Computer Repair Theme Customizer
 *
 * @package The Computer Repair
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function the_computer_repair_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'the_computer_repair_custom_controls' );

function the_computer_repair_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.logo .site-title a',
	 	'render_callback' => 'the_computer_repair_customize_partial_blogname',
	));

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => 'p.site-description',
		'render_callback' => 'the_computer_repair_customize_partial_blogdescription',
	));

	//Homepage Settings
	$wp_customize->add_panel( 'the_computer_repair_homepage_panel', array(
		'title' => esc_html__( 'Homepage Settings', 'the-computer-repair' ),
		'panel' => 'the_computer_repair_panel_id',
		'priority' => 20,
	));

	//Top Bar
	$wp_customize->add_section( 'the_computer_repair_topbar', array(
    	'title'      => __( 'Top Bar Settings', 'the-computer-repair' ),
		'panel' => 'the_computer_repair_homepage_panel'
	) );

	$wp_customize->add_setting( 'the_computer_repair_topbar_hide_show',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));
   	$wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_topbar_hide_show',
       array(
      'label' => esc_html__( 'Show / Hide Topbar','the-computer-repair' ),
      'section' => 'the_computer_repair_topbar'
    )));

	$wp_customize->add_setting('the_computer_repair_header_background_first_color', array(
		'default'           => '#151414',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_computer_repair_header_background_first_color', array(
		'label'    => __('Header Background Color Option 1', 'the-computer-repair'),
		'section'  => 'the_computer_repair_topbar',
	)));

	$wp_customize->add_setting('the_computer_repair_header_background_second_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_computer_repair_header_background_second_color', array(
		'label'    => __('Header Background Color Option 2', 'the-computer-repair'),
		'section'  => 'the_computer_repair_topbar',
	)));

   $wp_customize->add_setting('the_computer_repair_topbar_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_topbar_padding_top_bottom',array(
		'label'	=> __('Topbar Padding Top Bottom','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'text'
	));

    //Sticky Header
	$wp_customize->add_setting( 'the_computer_repair_sticky_header',array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_sticky_header',array(
        'label' => esc_html__( 'Sticky Header','the-computer-repair' ),
        'section' => 'the_computer_repair_topbar'
    )));

    $wp_customize->add_setting('the_computer_repair_sticky_header_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_sticky_header_padding',array(
		'label'	=> __('Sticky Header Padding','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'the_computer_repair_header_search',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_header_search',array(
      	'label' => esc_html__( 'Show / Hide Search','the-computer-repair' ),
      	'section' => 'the_computer_repair_topbar'
    )));

    $wp_customize->add_setting('the_computer_repair_search_icon',array(
		'default'	=> 'fas fa-search',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new The_Computer_Repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_search_icon',array(
		'label'	=> __('Add Search Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_topbar',
		'setting'	=> 'the_computer_repair_search_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_computer_repair_search_close_icon',array(
		'default'	=> 'fa fa-window-close',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new The_Computer_Repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_search_close_icon',array(
		'label'	=> __('Add Search Close Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_topbar',
		'setting'	=> 'the_computer_repair_search_close_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting('the_computer_repair_search_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_search_font_size',array(
		'label'	=> __('Search Font Size','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_search_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_search_padding_top_bottom',array(
		'label'	=> __('Search Padding Top Bottom','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_search_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_search_padding_left_right',array(
		'label'	=> __('Search Padding Left Right','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'the_computer_repair_search_border_radius', array(
		'default'              => "",
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'the_computer_repair_sanitize_number_range'
	) );
	$wp_customize->add_control( 'the_computer_repair_search_border_radius', array(
		'label'       => esc_html__( 'Search Border Radius','the-computer-repair' ),
		'section'     => 'the_computer_repair_topbar',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('the_computer_repair_search_placeholder',array(
       'default' => esc_html__('Search','the-computer-repair'),
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('the_computer_repair_search_placeholder',array(
       'type' => 'text',
       'label' => __('Search Placeholder Text','the-computer-repair'),
       'section' => 'the_computer_repair_topbar'
    ));

	$wp_customize->add_setting('the_computer_repair_header_search_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_computer_repair_header_search_bg_color', array(
		'label'    => __('Search Background Color', 'the-computer-repair'),
		'section'  => 'the_computer_repair_topbar',
	)));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('the_computer_repair_location', array(
		'selector' => '.lower-bar p',
		'render_callback' => 'the_computer_repair_customize_partial_the_computer_repair_location',
	));

    $wp_customize->add_setting('the_computer_repair_location_icon',array(
		'default'	=> 'fas fa-map-marker-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new The_Computer_Repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_location_icon',array(
		'label'	=> __('Add Location Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_topbar',
		'setting'	=> 'the_computer_repair_location_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_computer_repair_location',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_location',array(
		'label'	=> __('Add Location','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '123 Dummy street lorem ipsum, USA', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_phone_icon',array(
		'default'	=> 'fas fa-phone',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new The_Computer_Repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_phone_icon',array(
		'label'	=> __('Add Phone Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_topbar',
		'setting'	=> 'the_computer_repair_phone_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_computer_repair_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'the_computer_repair_sanitize_phone_number'
	));
	$wp_customize->add_control('the_computer_repair_call',array(
		'label'	=> __('Add Phone Number','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '+00 1234 567 890', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_email_address_icon',array(
		'default'	=> 'fas fa-envelope',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new The_Computer_Repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_email_address_icon',array(
		'label'	=> __('Add Email Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_topbar',
		'setting'	=> 'the_computer_repair_email_address_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_computer_repair_email',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('the_computer_repair_email',array(
		'label'	=> __('Add Email Address','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'example@gmail.com', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_top_btn_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_top_btn_text',array(
		'label'	=> __('Add Button Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'BOOK AN APPOINTMENT', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_top_btn_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('the_computer_repair_top_btn_url',array(
		'label'	=> __('Add Button URL','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'https://example.com/', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_topbar',
		'type'=> 'url'
	));

	$wp_customize->add_setting( 'the_computer_repair_topbar_cart',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_topbar_cart',
       array(
      'label' => esc_html__( 'Show / Hide Cart','the-computer-repair' ),
      'section' => 'the_computer_repair_topbar'
    )));

	$wp_customize->add_setting('the_computer_repair_cart_icon',array(
		'default'	=> 'fas fa-shopping-basket',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new The_Computer_Repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_cart_icon',array(
		'label'	=> __('Add Cart Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_topbar',
		'setting'	=> 'the_computer_repair_cart_icon',
		'type'		=> 'icon'
	)));

	//Menu Settings
	$wp_customize->add_section( 'the_computer_repair_menu_settings', array(
    	'title'      => __( 'Menus Settings', 'the-computer-repair' ),
		'panel' => 'the_computer_repair_homepage_panel'
	) );

	$wp_customize->add_setting('the_computer_repair_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_navigation_menu_font_size',array(
		'label'	=> __('Menus Font Size','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_menu_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_navigation_menu_font_weight',array(
        'default' => 500,
        'transport' => 'refresh',
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_navigation_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menus Font Weight','the-computer-repair'),
        'section' => 'the_computer_repair_menu_settings',
        'choices' => array(
        	'100' => __('100','the-computer-repair'),
            '200' => __('200','the-computer-repair'),
            '300' => __('300','the-computer-repair'),
            '400' => __('400','the-computer-repair'),
            '500' => __('500','the-computer-repair'),
            '600' => __('600','the-computer-repair'),
            '700' => __('700','the-computer-repair'),
            '800' => __('800','the-computer-repair'),
            '900' => __('900','the-computer-repair'),
        ),
	) );

	// text trasform
	$wp_customize->add_setting('the_computer_repair_menu_text_transform',array(
		'default'=> 'Uppercase',
		'sanitize_callback'	=> 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_menu_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Menus Text Transform','the-computer-repair'),
		'choices' => array(
            'Uppercase' => __('Uppercase','the-computer-repair'),
            'Capitalize' => __('Capitalize','the-computer-repair'),
            'Lowercase' => __('Lowercase','the-computer-repair'),
        ),
		'section'=> 'the_computer_repair_menu_settings',
	));

	$wp_customize->add_setting('the_computer_repair_menus_item_style',array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_menus_item_style',array(
        'type' => 'select',
        'section' => 'the_computer_repair_menu_settings',
			'label' => __('Menu Item Hover Style','the-computer-repair'),
			'choices' => array(
            'None' => __('None','the-computer-repair'),
            'Zoom In' => __('Zoom In','the-computer-repair'),
        ),
	) );

	$wp_customize->add_setting('the_computer_repair_header_menus_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_computer_repair_header_menus_color', array(
		'label'    => __('Menus Color', 'the-computer-repair'),
		'section'  => 'the_computer_repair_menu_settings',
	)));

	$wp_customize->add_setting('the_computer_repair_header_menus_hover_color', array(
		'default'           => '#23cfca',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_computer_repair_header_menus_hover_color', array(
		'label'    => __('Menus Hover Color', 'the-computer-repair'),
		'section'  => 'the_computer_repair_menu_settings',
	)));

	$wp_customize->add_setting('the_computer_repair_header_submenus_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_computer_repair_header_submenus_color', array(
		'label'    => __('Sub Menus Color', 'the-computer-repair'),
		'section'  => 'the_computer_repair_menu_settings',
	)));

	$wp_customize->add_setting('the_computer_repair_header_submenus_hover_color', array(
		'default'           => '#23cfca',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_computer_repair_header_submenus_hover_color', array(
		'label'    => __('Sub Menus Hover Color', 'the-computer-repair'),
		'section'  => 'the_computer_repair_menu_settings',
	)));

	//Social links
	$wp_customize->add_section(
		'the_computer_repair_social_links', array(
			'title'		=>	__('Social Links', 'the-computer-repair'),
			'priority'	=>	null,
			'panel'		=>	'the_computer_repair_homepage_panel'
	));

	$wp_customize->add_setting('the_computer_repair_social_icons',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_social_icons',array(
		'label' =>  __('Steps to setup social icons','the-computer-repair'),
		'description' => __('<p>1. Go to Dashboard >> Appearance >> Widgets</p>
			<p>2. Add Vw Social Icon Widget in Social Media.</p>
			<p>3. Add social icons url and save.</p>','the-computer-repair'),
		'section'=> 'the_computer_repair_social_links',
		'type'=> 'hidden'
	));
	$wp_customize->add_setting('the_computer_repair_social_icon_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_social_icon_btn',array(
		'description' => "<a target='_blank' href='". admin_url('widgets.php') ." '>Setup Social Icons</a>",
		'section'=> 'the_computer_repair_social_links',
		'type'=> 'hidden'
	));

	//Slider
	$wp_customize->add_section( 'the_computer_repair_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'the-computer-repair' ),
    	'description' => __('Free theme has 3 slides options, For unlimited slides and more options </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/themes/computer-repair-wordpress-theme/">GO PRO</a>','the-computer-repair'),
		'panel' => 'the_computer_repair_homepage_panel'
	) );

	$wp_customize->add_setting( 'the_computer_repair_slider_hide_show',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_slider_hide_show',array(
      'label' => esc_html__( 'Show / Hide Slider','the-computer-repair' ),
      'section' => 'the_computer_repair_slidersettings'
    )));

 	$wp_customize->add_setting('the_computer_repair_slider_type',array(
        'default' => 'Default slider',
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	) );
	$wp_customize->add_control('the_computer_repair_slider_type', array(
        'type' => 'select',
        'label' => __('Slider Type','the-computer-repair'),
        'section' => 'the_computer_repair_slidersettings',
        'choices' => array(
            'Default slider' => __('Default slider','the-computer-repair'),
            'Advance slider' => __('Advance slider','the-computer-repair'),
        ),
	));

	$wp_customize->add_setting('the_computer_repair_advance_slider_shortcode',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_advance_slider_shortcode',array(
		'label'	=> __('Add Slider Shortcode','the-computer-repair'),
		'section'=> 'the_computer_repair_slidersettings',
		'type'=> 'text',
		'active_callback' => 'the_computer_repair_advance_slider'
	));

    //Selective Refresh
    $wp_customize->selective_refresh->add_partial('the_computer_repair_slider_hide_show',array(
		'selector'        => '#slider .inner_carousel h1',
		'render_callback' => 'the_computer_repair_customize_partial_the_computer_repair_slider_hide_show',
	));

	for ( $count = 1; $count <= 3; $count++ ) {
		$wp_customize->add_setting( 'the_computer_repair_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'the_computer_repair_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'the_computer_repair_slider_page' . $count, array(
			'label'    => __( 'Select Slider Page', 'the-computer-repair' ),
			'description' => __('Slider image size (1600 x 600)','the-computer-repair'),
			'section'  => 'the_computer_repair_slidersettings',
			'type'     => 'dropdown-pages',
			'active_callback' => 'the_computer_repair_default_slider'
		) );
	}

	$wp_customize->add_setting('the_computer_repair_slider_button_text',array(
		'default'=> 'Read More',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_slider_button_text',array(
		'label'	=> __('Add Slider Button Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'Read More', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_slidersettings',
		'type'=> 'text',
		'active_callback' => 'the_computer_repair_default_slider'
	));

	$wp_customize->add_setting( 'the_computer_repair_slider_title_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_slider_title_hide_show',array(
		'label' => esc_html__( 'Show / Hide Slider Title','the-computer-repair' ),
		'section' => 'the_computer_repair_slidersettings',
		'active_callback' => 'the_computer_repair_default_slider'
    )));

	$wp_customize->add_setting( 'the_computer_repair_slider_content_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));
    $wp_customize->add_control( new the_computer_repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_slider_content_hide_show',array(
		'label' => esc_html__( 'Show / Hide Slider Content','the-computer-repair' ),
		'section' => 'the_computer_repair_slidersettings',
		'active_callback' => 'the_computer_repair_default_slider'
    )));

	//content layout
	$wp_customize->add_setting('the_computer_repair_slider_content_option',array(
        'default' => 'Left',
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control(new The_Computer_Repair_Image_Radio_Control($wp_customize, 'the_computer_repair_slider_content_option', array(
        'type' => 'select',
        'label' => __('Slider Content Layouts','the-computer-repair'),
        'section' => 'the_computer_repair_slidersettings',
        'choices' => array(
            'Left' => esc_url(get_template_directory_uri()).'/assets/images/slider-content1.png',
            'Center' => esc_url(get_template_directory_uri()).'/assets/images/slider-content2.png',
            'Right' => esc_url(get_template_directory_uri()).'/assets/images/slider-content3.png',
    ),
        'active_callback' => 'the_computer_repair_default_slider'
     )));

    //Slider content padding
    $wp_customize->add_setting('the_computer_repair_slider_content_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_slider_content_padding_top_bottom',array(
		'label'	=> __('Slider Content Padding Top Bottom','the-computer-repair'),
		'description'	=> __('Enter a value in %. Example:20%','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '50%', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_slidersettings',
		'type'=> 'text',
		'active_callback' => 'the_computer_repair_default_slider'
	));

	$wp_customize->add_setting('the_computer_repair_slider_content_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_slider_content_padding_left_right',array(
		'label'	=> __('Slider Content Padding Left Right','the-computer-repair'),
		'description'	=> __('Enter a value in %. Example:20%','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '50%', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_slidersettings',
		'type'=> 'text',
		'active_callback' => 'the_computer_repair_default_slider'
	));

    //Slider excerpt
	$wp_customize->add_setting( 'the_computer_repair_slider_excerpt_number', array(
		'default'              => 30,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'the_computer_repair_sanitize_number_range'
	) );
	$wp_customize->add_control( 'the_computer_repair_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','the-computer-repair' ),
		'section'     => 'the_computer_repair_slidersettings',
		'type'        => 'range',
		'settings'    => 'the_computer_repair_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),'active_callback' => 'the_computer_repair_default_slider'
	) );

	//Opacity
	$wp_customize->add_setting('the_computer_repair_slider_opacity_color',array(
      'default'              => 0.5,
      'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));

	$wp_customize->add_control( 'the_computer_repair_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','the-computer-repair' ),
	'section'     => 'the_computer_repair_slidersettings',
	'type'        => 'select',
	'settings'    => 'the_computer_repair_slider_opacity_color',
	'choices' => array(
      '0' =>  esc_attr('0','the-computer-repair'),
      '0.1' =>  esc_attr('0.1','the-computer-repair'),
      '0.2' =>  esc_attr('0.2','the-computer-repair'),
      '0.3' =>  esc_attr('0.3','the-computer-repair'),
      '0.4' =>  esc_attr('0.4','the-computer-repair'),
      '0.5' =>  esc_attr('0.5','the-computer-repair'),
      '0.6' =>  esc_attr('0.6','the-computer-repair'),
      '0.7' =>  esc_attr('0.7','the-computer-repair'),
      '0.8' =>  esc_attr('0.8','the-computer-repair'),
      '0.9' =>  esc_attr('0.9','the-computer-repair')
	),'active_callback' => 'the_computer_repair_default_slider'
	));

	$wp_customize->add_setting( 'the_computer_repair_slider_image_overlay',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'the_computer_repair_switch_sanitization'
	));
	$wp_customize->add_control( new the_computer_repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_slider_image_overlay',array(
      	'label' => esc_html__( 'Slider Image Overlay','the-computer-repair' ),
      	'section' => 'the_computer_repair_slidersettings',
      	'active_callback' => 'the_computer_repair_default_slider'
   )));

   $wp_customize->add_setting('the_computer_repair_slider_image_overlay_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_computer_repair_slider_image_overlay_color', array(
		'label'    => __('Slider Image Overlay Color', 'the-computer-repair'),
		'section'  => 'the_computer_repair_slidersettings',
		'active_callback' => 'the_computer_repair_default_slider'
	)));

	//Slider height
	$wp_customize->add_setting('the_computer_repair_slider_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_slider_height',array(
		'label'	=> __('Slider Height','the-computer-repair'),
		'description'	=> __('Specify the slider height (px).','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '500px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_slidersettings',
		'type'=> 'text',
		'active_callback' => 'the_computer_repair_default_slider'
	));

	$wp_customize->add_setting( 'the_computer_repair_slider_speed', array(
		'default'  => 4000,
		'sanitize_callback'	=> 'the_computer_repair_sanitize_float'
	) );
	$wp_customize->add_control( 'the_computer_repair_slider_speed', array(
		'label' => esc_html__('Slider Transition Speed','the-computer-repair'),
		'section' => 'the_computer_repair_slidersettings',
		'type'  => 'number',
		'active_callback' => 'the_computer_repair_default_slider'
	) );

	//Our Services section
	$wp_customize->add_section( 'the_computer_repair_services_section' , array(
    	'title'      => __( 'Our Services', 'the-computer-repair' ),
    	'description' => __('For more options of service section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/themes/computer-repair-wordpress-theme/">GO PRO</a>','the-computer-repair'),
		'priority'   => null,
		'panel' => 'the_computer_repair_homepage_panel'
	) );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'the_computer_repair_section_title', array(
		'selector' => '.heading-box h2',
		'render_callback' => 'the_computer_repair_customize_partial_the_computer_repair_section_title',
	));

	$wp_customize->add_setting('the_computer_repair_section_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_section_title',array(
		'label'	=> __('Add Section Title','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'Our Services', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_services_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_section_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_section_text',array(
		'label'	=> __('Add Section Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'lorem ipsum is dummy text', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_services_section',
		'type'=> 'text'
	));

	$categories = get_categories();
	$cat_post = array();
	$cat_post[]= 'select';
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('the_computer_repair_our_services',array(
		'default'	=> 'select',
		'sanitize_callback' => 'the_computer_repair_sanitize_choices',
	));
	$wp_customize->add_control('the_computer_repair_our_services',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Services','the-computer-repair'),
		'description' => __('Image Size (280 x 180)','the-computer-repair'),
		'section' => 'the_computer_repair_services_section',
	));

	$wp_customize->add_setting('the_computer_repair_services_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_services_button_text',array(
		'label'	=> __('Add Services Button Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'Read More', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_services_section',
		'type'=> 'text'
	));

	//Features Project Section
	$wp_customize->add_section('the_computer_repair_features_project', array(
		'title'       => __('Features Project Section', 'the-computer-repair'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','the-computer-repair'),
		'priority'    => null,
		'panel'       => 'the_computer_repair_homepage_panel',
	));

	$wp_customize->add_setting('the_computer_repair_features_project_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_features_project_text',array(
		'description' => __('<p>1. More options for Features Project section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Features Project section.</p>','the-computer-repair'),
		'section'=> 'the_computer_repair_features_project',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('the_computer_repair_features_project_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_features_project_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=the_computer_repair_guide') ." '>More Info</a>",
		'section'=> 'the_computer_repair_features_project',
		'type'=> 'hidden'
	));

	//Our Projects Section
	$wp_customize->add_section('the_computer_repair_our_project', array(
		'title'       => __('Our Projects Section', 'the-computer-repair'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','the-computer-repair'),
		'priority'    => null,
		'panel'       => 'the_computer_repair_homepage_panel',
	));

	$wp_customize->add_setting('the_computer_repair_our_project_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_our_project_text',array(
		'description' => __('<p>1. More options for Our Projects section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Our Projects section.</p>','the-computer-repair'),
		'section'=> 'the_computer_repair_our_project',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('the_computer_repair_our_project_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_our_project_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=the_computer_repair_guide') ." '>More Info</a>",
		'section'=> 'the_computer_repair_our_project',
		'type'=> 'hidden'
	));

	//Our Records Section
	$wp_customize->add_section('the_computer_repair_our_records', array(
		'title'       => __('Our Records Section', 'the-computer-repair'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','the-computer-repair'),
		'priority'    => null,
		'panel'       => 'the_computer_repair_homepage_panel',
	));

	$wp_customize->add_setting('the_computer_repair_our_records_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_our_records_text',array(
		'description' => __('<p>1. More options for Our Records section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Our Records section.</p>','the-computer-repair'),
		'section'=> 'the_computer_repair_our_records',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('the_computer_repair_our_records_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_our_records_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=the_computer_repair_guide') ." '>More Info</a>",
		'section'=> 'the_computer_repair_our_records',
		'type'=> 'hidden'
	));

	//Pricing Plan Section
	$wp_customize->add_section('the_computer_repair_pricing_plan', array(
		'title'       => __('Pricing Plan Section', 'the-computer-repair'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','the-computer-repair'),
		'priority'    => null,
		'panel'       => 'the_computer_repair_homepage_panel',
	));

	$wp_customize->add_setting('the_computer_repair_pricing_plan_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_pricing_plan_text',array(
		'description' => __('<p>1. More options for Pricing Plan section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Pricing Plan section.</p>','the-computer-repair'),
		'section'=> 'the_computer_repair_pricing_plan',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('the_computer_repair_pricing_plan_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_pricing_plan_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=the_computer_repair_guide') ." '>More Info</a>",
		'section'=> 'the_computer_repair_pricing_plan',
		'type'=> 'hidden'
	));

	//Testimonial Video Section
	$wp_customize->add_section('the_computer_repair_testimonial_video', array(
		'title'       => __('Testimonial Video Section', 'the-computer-repair'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','the-computer-repair'),
		'priority'    => null,
		'panel'       => 'the_computer_repair_homepage_panel',
	));

	$wp_customize->add_setting('the_computer_repair_testimonial_video_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_testimonial_video_text',array(
		'description' => __('<p>1. More options for Testimonial Video section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Testimonial Video section.</p>','the-computer-repair'),
		'section'=> 'the_computer_repair_testimonial_video',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('the_computer_repair_testimonial_video_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_testimonial_video_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=the_computer_repair_guide') ." '>More Info</a>",
		'section'=> 'the_computer_repair_testimonial_video',
		'type'=> 'hidden'
	));

	//Our Products Section
	$wp_customize->add_section('the_computer_repair_our_products', array(
		'title'       => __('Our Products Section', 'the-computer-repair'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','the-computer-repair'),
		'priority'    => null,
		'panel'       => 'the_computer_repair_homepage_panel',
	));

	$wp_customize->add_setting('the_computer_repair_our_products_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_our_products_text',array(
		'description' => __('<p>1. More options for Our Products section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Our Products section.</p>','the-computer-repair'),
		'section'=> 'the_computer_repair_our_products',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('the_computer_repair_our_products_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_our_products_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=the_computer_repair_guide') ." '>More Info</a>",
		'section'=> 'the_computer_repair_our_products',
		'type'=> 'hidden'
	));

	//Why Choose Us Section
	$wp_customize->add_section('the_computer_repair_why_choose_us', array(
		'title'       => __('Why Choose Us Section', 'the-computer-repair'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','the-computer-repair'),
		'priority'    => null,
		'panel'       => 'the_computer_repair_homepage_panel',
	));

	$wp_customize->add_setting('the_computer_repair_why_choose_us_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_why_choose_us_text',array(
		'description' => __('<p>1. More options for Why Choose Us section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Why Choose Us section.</p>','the-computer-repair'),
		'section'=> 'the_computer_repair_why_choose_us',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('the_computer_repair_why_choose_us_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_why_choose_us_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=the_computer_repair_guide') ." '>More Info</a>",
		'section'=> 'the_computer_repair_why_choose_us',
		'type'=> 'hidden'
	));

	//Our Team Section
	$wp_customize->add_section('the_computer_repair_our_team', array(
		'title'       => __('Our Team Section', 'the-computer-repair'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','the-computer-repair'),
		'priority'    => null,
		'panel'       => 'the_computer_repair_homepage_panel',
	));

	$wp_customize->add_setting('the_computer_repair_our_team_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_our_team_text',array(
		'description' => __('<p>1. More options for Our Team section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Our Team section.</p>','the-computer-repair'),
		'section'=> 'the_computer_repair_our_team',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('the_computer_repair_our_team_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_our_team_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=the_computer_repair_guide') ." '>More Info</a>",
		'section'=> 'the_computer_repair_our_team',
		'type'=> 'hidden'
	));

	//Appointment Section
	$wp_customize->add_section('the_computer_repair_appointment', array(
		'title'       => __('Appointment Section', 'the-computer-repair'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','the-computer-repair'),
		'priority'    => null,
		'panel'       => 'the_computer_repair_homepage_panel',
	));

	$wp_customize->add_setting('the_computer_repair_appointment_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_appointment_text',array(
		'description' => __('<p>1. More options for Appointment section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Appointment section.</p>','the-computer-repair'),
		'section'=> 'the_computer_repair_appointment',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('the_computer_repair_appointment_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_appointment_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=the_computer_repair_guide') ." '>More Info</a>",
		'section'=> 'the_computer_repair_appointment',
		'type'=> 'hidden'
	));

	//Our Process Section
	$wp_customize->add_section('the_computer_repair_our_process', array(
		'title'       => __('Our Process Section', 'the-computer-repair'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','the-computer-repair'),
		'priority'    => null,
		'panel'       => 'the_computer_repair_homepage_panel',
	));

	$wp_customize->add_setting('the_computer_repair_our_process_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_our_process_text',array(
		'description' => __('<p>1. More options for Our Process section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Our Process section.</p>','the-computer-repair'),
		'section'=> 'the_computer_repair_our_process',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('the_computer_repair_our_process_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_our_process_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=the_computer_repair_guide') ." '>More Info</a>",
		'section'=> 'the_computer_repair_our_process',
		'type'=> 'hidden'
	));

	//Newsletter Section
	$wp_customize->add_section('the_computer_repair_newsletter', array(
		'title'       => __('Newsletter Section', 'the-computer-repair'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','the-computer-repair'),
		'priority'    => null,
		'panel'       => 'the_computer_repair_homepage_panel',
	));

	$wp_customize->add_setting('the_computer_repair_newsletter_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_newsletter_text',array(
		'description' => __('<p>1. More options for Newsletter section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Newsletter section.</p>','the-computer-repair'),
		'section'=> 'the_computer_repair_newsletter',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('the_computer_repair_newsletter_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_newsletter_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=the_computer_repair_guide') ." '>More Info</a>",
		'section'=> 'the_computer_repair_newsletter',
		'type'=> 'hidden'
	));

	//Latest News Section
	$wp_customize->add_section('the_computer_repair_latest_news', array(
		'title'       => __('Latest News Section', 'the-computer-repair'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','the-computer-repair'),
		'priority'    => null,
		'panel'       => 'the_computer_repair_homepage_panel',
	));

	$wp_customize->add_setting('the_computer_repair_latest_news_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_latest_news_text',array(
		'description' => __('<p>1. More options for Latest News section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for Latest News section.</p>','the-computer-repair'),
		'section'=> 'the_computer_repair_latest_news',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('the_computer_repair_latest_news_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_latest_news_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=the_computer_repair_guide') ." '>More Info</a>",
		'section'=> 'the_computer_repair_latest_news',
		'type'=> 'hidden'
	));

	//Footer Text
	$wp_customize->add_section('the_computer_repair_footer',array(
		'title'	=> __('Footer Settings','the-computer-repair'),
		'description' => __('For more options of footer section </br> <a class="go-pro-btn" target="blank" href="https://www.vwthemes.com/themes/computer-repair-wordpress-theme/">GO PRO</a>','the-computer-repair'),
		'panel' => 'the_computer_repair_homepage_panel',
	));

	$wp_customize->add_setting( 'the_computer_repair_footer_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));
    $wp_customize->add_control( new the_computer_repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_footer_hide_show',array(
      'label' => esc_html__( 'Show / Hide Footer','the-computer-repair' ),
      'section' => 'the_computer_repair_footer'
    )));

	$wp_customize->add_setting('the_computer_repair_footer_background_first_color', array(
		'default'           => '#151414',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_computer_repair_footer_background_first_color', array(
		'label'    => __('Footer Background Color Option 1', 'the-computer-repair'),
		'section'  => 'the_computer_repair_footer',
	)));

	$wp_customize->add_setting('the_computer_repair_footer_background_second_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_computer_repair_footer_background_second_color', array(
		'label'    => __('Footer Background Color Option 2', 'the-computer-repair'),
		'section'  => 'the_computer_repair_footer',
	)));

	$wp_customize->add_setting('the_computer_repair_footer_background_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'the_computer_repair_footer_background_image',array(
        'label' => __('Footer Background Image','the-computer-repair'),
        'section' => 'the_computer_repair_footer'
	)));

	// Footer
	$wp_customize->add_setting('the_computer_repair_img_footer',array(
		'default'=> 'scroll',
		'sanitize_callback'	=> 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_img_footer',array(
		'type' => 'select',
		'label'	=> __('Footer Background Attatchment','the-computer-repair'),
		'choices' => array(
            'fixed' => __('fixed','the-computer-repair'),
            'scroll' => __('scroll','the-computer-repair'),
        ),
		'section'=> 'the_computer_repair_footer',
	));

	$wp_customize->add_setting('the_computer_repair_footer_widgets_heading',array(
        'default' => 'Left',
        'transport' => 'refresh',
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_footer_widgets_heading',array(
        'type' => 'select',
        'label' => __('Footer Widget Heading','the-computer-repair'),
        'section' => 'the_computer_repair_footer',
        'choices' => array(
        	'Left' => __('Left','the-computer-repair'),
            'Center' => __('Center','the-computer-repair'),
            'Right' => __('Right','the-computer-repair')
        ),
	) );

	$wp_customize->add_setting('the_computer_repair_footer_widgets_content',array(
        'default' => 'Left',
        'transport' => 'refresh',
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_footer_widgets_content',array(
        'type' => 'select',
        'label' => __('Footer Widget Content','the-computer-repair'),
        'section' => 'the_computer_repair_footer',
        'choices' => array(
        	'Left' => __('Left','the-computer-repair'),
            'Center' => __('Center','the-computer-repair'),
            'Right' => __('Right','the-computer-repair')
        ),
	) );

	// footer padding
	$wp_customize->add_setting('the_computer_repair_footer_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_footer_padding',array(
		'label'	=> __('Footer Top Bottom Padding','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'the-computer-repair' ),
    ),
		'section'=> 'the_computer_repair_footer',
		'type'=> 'text'
	));

   // footer social icon
  	$wp_customize->add_setting( 'the_computer_repair_footer_icon',array(
		'default' => false,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
  	$wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_footer_icon',array(
		'label' => esc_html__( 'Show / Hide Footer Icon','the-computer-repair' ),
		'section' => 'the_computer_repair_footer'
    )));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('the_computer_repair_footer_text', array(
		'selector' => '#footer-2 .copyright p',
		'render_callback' => 'the_computer_repair_customize_partial_the_computer_repair_footer_text',
	));

	$wp_customize->add_setting( 'the_computer_repair_copyright_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));
    $wp_customize->add_control( new the_computer_repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_copyright_hide_show',array(
      'label' => esc_html__( 'Show / Hide Copyright','the-computer-repair' ),
      'section' => 'the_computer_repair_footer'
    )));

	$wp_customize->add_setting('the_computer_repair_copyright_background_color', array(
		'default'           => '#23cfca',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_computer_repair_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'the-computer-repair'),
		'section'  => 'the_computer_repair_footer',
	)));

	$wp_customize->add_setting('the_computer_repair_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_footer_text',array(
		'label'	=> __('Copyright Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'Copyright 2019, .....', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_copyright_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_copyright_font_size',array(
		'label'	=> __('Copyright Font Size','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_copyright_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_copyright_padding_top_bottom',array(
		'label'	=> __('Copyright Padding Top Bottom','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_copyright_alignment',array(
        'default' => 'center',
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control(new The_Computer_Repair_Image_Radio_Control($wp_customize, 'the_computer_repair_copyright_alignment', array(
        'type' => 'select',
        'label' => __('Copyright Alignment','the-computer-repair'),
        'section' => 'the_computer_repair_footer',
        'settings' => 'the_computer_repair_copyright_alignment',
        'choices' => array(
            'left' => esc_url(get_template_directory_uri()).'/assets/images/copyright1.png',
            'center' => esc_url(get_template_directory_uri()).'/assets/images/copyright2.png',
            'right' => esc_url(get_template_directory_uri()).'/assets/images/copyright3.png'
    ))));

	$wp_customize->add_setting( 'the_computer_repair_hide_show_scroll',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_hide_show_scroll',array(
      	'label' => esc_html__( 'Show / Hide Scroll To Top','the-computer-repair' ),
      	'section' => 'the_computer_repair_footer'
    )));

    //Selective Refresh
	$wp_customize->selective_refresh->add_partial('the_computer_repair_scroll_to_top_icon', array(
		'selector' => '.scrollup i',
		'render_callback' => 'the_computer_repair_customize_partial_the_computer_repair_scroll_to_top_icon',
	));

    $wp_customize->add_setting('the_computer_repair_scroll_to_top_icon',array(
		'default'	=> 'fas fa-long-arrow-alt-up',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new The_Computer_Repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_scroll_to_top_icon',array(
		'label'	=> __('Add Scroll to Top Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_footer',
		'setting'	=> 'the_computer_repair_scroll_to_top_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_computer_repair_scroll_to_top_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_scroll_to_top_font_size',array(
		'label'	=> __('Icon Font Size','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_scroll_to_top_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_scroll_to_top_padding',array(
		'label'	=> __('Icon Top Bottom Padding','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_scroll_to_top_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_scroll_to_top_width',array(
		'label'	=> __('Icon Width','the-computer-repair'),
		'description'	=> __('Enter a value in pixels Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_scroll_to_top_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_scroll_to_top_height',array(
		'label'	=> __('Icon Height','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'the_computer_repair_scroll_to_top_border_radius', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'the_computer_repair_sanitize_number_range'
	) );
	$wp_customize->add_control( 'the_computer_repair_scroll_to_top_border_radius', array(
		'label'       => esc_html__( 'Icon Border Radius','the-computer-repair' ),
		'section'     => 'the_computer_repair_footer',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('the_computer_repair_scroll_top_alignment',array(
        'default' => 'Right',
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control(new The_Computer_Repair_Image_Radio_Control($wp_customize, 'the_computer_repair_scroll_top_alignment', array(
        'type' => 'select',
        'label' => __('Scroll To Top','the-computer-repair'),
        'section' => 'the_computer_repair_footer',
        'settings' => 'the_computer_repair_scroll_top_alignment',
        'choices' => array(
            'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout1.png',
            'Center' => esc_url(get_template_directory_uri()).'/assets/images/layout2.png',
            'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout3.png'
    ))));

    $wp_customize->add_setting('the_computer_repair_reset_footer_settings',array(
      'sanitize_callback'	=> 'sanitize_text_field'
   	));
   	$wp_customize->add_control(new The_Computer_Repair_Reset_Custom_Control($wp_customize, 'the_computer_repair_reset_footer_settings',array(
      'type' => 'reset_control',
      'label' => __('Reset Footer Settings', 'the-computer-repair'),
      'description' => 'the_computer_repair_reset_all_settings',
      'section' => 'the_computer_repair_footer'
   	)));

	//Blog Post Settings
	$wp_customize->add_panel( 'the_computer_repair_blog_post_parent_panel', array(
		'title' => esc_html__( 'Blog Post Settings', 'the-computer-repair' ),
		'panel' => 'the_computer_repair_panel_id',
		'priority' => 20,
	));

	// Add example section and controls to the middle (second) panel
	$wp_customize->add_section( 'the_computer_repair_post_settings', array(
		'title' => __( 'Post Settings', 'the-computer-repair' ),
		'panel' => 'the_computer_repair_blog_post_parent_panel',
	));

	//Blog layout
	$wp_customize->add_setting('the_computer_repair_blog_layout_option',array(
     'default' => 'Default',
     'sanitize_callback' => 'the_computer_repair_sanitize_choices'
    ));
 	$wp_customize->add_control(new The_Computer_Repair_Image_Radio_Control($wp_customize, 'the_computer_repair_blog_layout_option', array(
     'type' => 'select',
     'label' => __('Blog Layouts','the-computer-repair'),
     'section' => 'the_computer_repair_post_settings',
     'choices' => array(
         'Default' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout1.png',
         'Center' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout2.png',
         'Left' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout3.png',
    ))));

 	// Add Settings and Controls for Layout
	$wp_customize->add_setting('the_computer_repair_theme_options',array(
     'default' => 'Right Sidebar',
     'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	) );
	$wp_customize->add_control('the_computer_repair_theme_options', array(
     'type' => 'select',
     'label' => __('Post Sidebar Layout','the-computer-repair'),
     'description' => __('Here you can change the sidebar layout for posts. ','the-computer-repair'),
     'section' => 'the_computer_repair_post_settings',
     'choices' => array(
         'Left Sidebar' => __('Left Sidebar','the-computer-repair'),
         'Right Sidebar' => __('Right Sidebar','the-computer-repair'),
         'One Column' => __('One Column','the-computer-repair'),
         'Three Columns' => __('Three Columns','the-computer-repair'),
         'Four Columns' => __('Four Columns','the-computer-repair'),
         'Grid Layout' => __('Grid Layout','the-computer-repair')
        ),
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('the_computer_repair_toggle_postdate', array(
		'selector' => '.post-main-box h2 a',
		'render_callback' => 'the_computer_repair_customize_partial_the_computer_repair_toggle_postdate',
	));

  $wp_customize->add_setting('the_computer_repair_toggle_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new The_Computer_Repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_toggle_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_post_settings',
		'setting'	=> 'the_computer_repair_toggle_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'the_computer_repair_toggle_postdate',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_toggle_postdate',array(
        'label' => esc_html__( 'Post Date','the-computer-repair' ),
        'section' => 'the_computer_repair_post_settings'
    )));

    $wp_customize->add_setting('the_computer_repair_toggle_author_icon',array(
		'default'	=> 'far fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new The_Computer_Repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_toggle_author_icon',array(
		'label'	=> __('Add Author Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_post_settings',
		'setting'	=> 'the_computer_repair_toggle_author_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'the_computer_repair_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_toggle_author',array(
		'label' => esc_html__( 'Author','the-computer-repair' ),
		'section' => 'the_computer_repair_post_settings'
    )));

  	$wp_customize->add_setting('the_computer_repair_toggle_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new The_Computer_Repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_toggle_comments_icon',array(
		'label'	=> __('Add Comments Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_post_settings',
		'setting'	=> 'the_computer_repair_toggle_comments_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'the_computer_repair_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_toggle_comments',array(
		'label' => esc_html__( 'Comments','the-computer-repair' ),
		'section' => 'the_computer_repair_post_settings'
    )));

    $wp_customize->add_setting('the_computer_repair_toggle_time_icon',array(
		'default'	=> 'far fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new The_Computer_Repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_toggle_time_icon',array(
		'label'	=> __('Add Time Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_post_settings',
		'setting'	=> 'the_computer_repair_toggle_time_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'the_computer_repair_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_toggle_time',array(
		'label' => esc_html__( 'Time','the-computer-repair' ),
		'section' => 'the_computer_repair_post_settings'
    )));

    $wp_customize->add_setting( 'the_computer_repair_featured_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
	));
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_featured_image_hide_show', array(
		'label' => esc_html__( 'Featured Image','the-computer-repair' ),
		'section' => 'the_computer_repair_post_settings'
    )));

	//Featured Image
	$wp_customize->add_setting('the_computer_repair_blog_post_featured_image_dimension',array(
	       'default' => 'default',
	       'sanitize_callback'	=> 'the_computer_repair_sanitize_choices'
	));
  $wp_customize->add_control('the_computer_repair_blog_post_featured_image_dimension',array(
     'type' => 'select',
     'label'	=> __('Blog Post Featured Image Dimension','the-computer-repair'),
     'section'	=> 'the_computer_repair_post_settings',
     'choices' => array(
          'default' => __('Default','the-computer-repair'),
          'custom' => __('Custom Image Size','the-computer-repair'),
      ),
  ));

	$wp_customize->add_setting('the_computer_repair_blog_post_featured_image_custom_width',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
		));
	$wp_customize->add_control('the_computer_repair_blog_post_featured_image_custom_width',array(
			'label'	=> __('Featured Image Custom Width','the-computer-repair'),
			'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
			'input_attrs' => array(
	    'placeholder' => __( '10px', 'the-computer-repair' ),),
			'section'=> 'the_computer_repair_post_settings',
			'type'=> 'text',
			'active_callback' => 'the_computer_repair_blog_post_featured_image_dimension'
		));

	$wp_customize->add_setting('the_computer_repair_blog_post_featured_image_custom_height',array(
			'default'=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_blog_post_featured_image_custom_height',array(
			'label'	=> __('Featured Image Custom Height','the-computer-repair'),
			'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
			'input_attrs' => array(
	    'placeholder' => __( '10px', 'the-computer-repair' ),),
			'section'=> 'the_computer_repair_post_settings',
			'type'=> 'text',
			'active_callback' => 'the_computer_repair_blog_post_featured_image_dimension'
	));

	$wp_customize->add_setting( 'the_computer_repair_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'the_computer_repair_sanitize_number_range'
	) );
	$wp_customize->add_control( 'the_computer_repair_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Featured Image Box Shadow','the-computer-repair' ),
		'section'     => 'the_computer_repair_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('the_computer_repair_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','the-computer-repair'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','the-computer-repair'),
		'section'=> 'the_computer_repair_post_settings',
		'type'=> 'text'
	));

   $wp_customize->add_setting('the_computer_repair_blog_page_posts_settings',array(
        'default' => 'Into Blocks',
        'transport' => 'refresh',
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_blog_page_posts_settings',array(
        'type' => 'select',
        'label' => __('Display Blog Page posts','the-computer-repair'),
        'section' => 'the_computer_repair_post_settings',
        'choices' => array(
        	'Into Blocks' => __('Into Blocks','the-computer-repair'),
            'Without Blocks' => __('Without Blocks','the-computer-repair')
        ),
	) );

    $wp_customize->add_setting( 'the_computer_repair_excerpt_number', array(
		'default'              => 30,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'the_computer_repair_sanitize_number_range'
	) );
	$wp_customize->add_control( 'the_computer_repair_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','the-computer-repair' ),
		'section'     => 'the_computer_repair_post_settings',
		'type'        => 'range',
		'settings'    => 'the_computer_repair_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

    $wp_customize->add_setting('the_computer_repair_excerpt_settings',array(
        'default' => 'Excerpt',
        'transport' => 'refresh',
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_excerpt_settings',array(
        'type' => 'select',
        'label' => __('Post Content','the-computer-repair'),
        'section' => 'the_computer_repair_post_settings',
        'choices' => array(
        	'Content' => __('Content','the-computer-repair'),
            'Excerpt' => __('Excerpt','the-computer-repair'),
            'No Content' => __('No Content','the-computer-repair')
        ),
	) );

	$wp_customize->add_setting('the_computer_repair_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '[...]', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_post_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'the_computer_repair_blog_pagination_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_blog_pagination_hide_show',array(
      'label' => esc_html__( 'Show / Hide Blog Pagination','the-computer-repair' ),
      'section' => 'the_computer_repair_post_settings'
    )));

	$wp_customize->add_setting( 'the_computer_repair_blog_pagination_type', array(
        'default'			=> 'blog-page-numbers',
        'sanitize_callback'	=> 'the_computer_repair_sanitize_choices'
    ));
    $wp_customize->add_control( 'the_computer_repair_blog_pagination_type', array(
        'section' => 'the_computer_repair_post_settings',
        'type' => 'select',
        'label' => __( 'Blog Pagination', 'the-computer-repair' ),
        'choices'		=> array(
            'blog-page-numbers'  => __( 'Numeric', 'the-computer-repair' ),
            'next-prev' => __( 'Older Posts/Newer Posts', 'the-computer-repair' ),
    )));

    // Button Settings
	$wp_customize->add_section( 'the_computer_repair_button_settings', array(
		'title' => __( 'Button Settings', 'the-computer-repair' ),
		'panel' => 'the_computer_repair_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('the_computer_repair_button_text', array(
		'selector' => '.post-main-box .more-btn a',
		'render_callback' => 'the_computer_repair_customize_partial_the_computer_repair_button_text',
	));

	$wp_customize->add_setting('the_computer_repair_button_text',array(
		'default'=> esc_html__( 'Read More', 'the-computer-repair' ),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_button_text',array(
		'label'	=> __('Add Button Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'Read More', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_button_settings',
		'type'=> 'text'
	));

	// font size button
	$wp_customize->add_setting('the_computer_repair_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_button_font_size',array(
		'label'	=> __('Button Font Size','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'the-computer-repair' ),
    ),
    'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'the_computer_repair_button_settings',
	));

	$wp_customize->add_setting('the_computer_repair_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_button_padding_top_bottom',array(
		'label'	=> __('Padding Top Bottom','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_button_padding_left_right',array(
		'label'	=> __('Padding Left Right','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_button_letter_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_button_letter_spacing',array(
		'label'	=> __('Button Letter Spacing','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'the-computer-repair' ),
    ),
    	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'the_computer_repair_button_settings',
	));

	// text trasform
	$wp_customize->add_setting('the_computer_repair_button_text_transform',array(
		'default'=> 'Uppercase',
		'sanitize_callback'	=> 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_button_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Button Text Transform','the-computer-repair'),
		'choices' => array(
         'Uppercase' => __('Uppercase','the-computer-repair'),
         'Capitalize' => __('Capitalize','the-computer-repair'),
         'Lowercase' => __('Lowercase','the-computer-repair'),
     	),
		'section'=> 'the_computer_repair_button_settings',
	));

	$wp_customize->add_setting( 'the_computer_repair_button_border_radius', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'the_computer_repair_sanitize_number_range'
	) );
	$wp_customize->add_control( 'the_computer_repair_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','the-computer-repair' ),
		'section'     => 'the_computer_repair_button_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// Related Post Settings
	$wp_customize->add_section( 'the_computer_repair_related_posts_settings', array(
		'title' => __( 'Related Posts Settings', 'the-computer-repair' ),
		'panel' => 'the_computer_repair_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('the_computer_repair_related_post_title', array(
		'selector' => '.related-post h3',
		'render_callback' => 'the_computer_repair_customize_partial_the_computer_repair_related_post_title',
	));

    $wp_customize->add_setting( 'the_computer_repair_related_post',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_related_post',array(
		'label' => esc_html__( 'Related Post','the-computer-repair' ),
		'section' => 'the_computer_repair_related_posts_settings'
    )));

    $wp_customize->add_setting('the_computer_repair_related_post_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_related_post_title',array(
		'label'	=> __('Add Related Post Title','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'Related Post', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_related_posts_settings',
		'type'=> 'text'
	));

   	$wp_customize->add_setting('the_computer_repair_related_posts_count',array(
		'default'=> '3',
		'sanitize_callback'	=> 'the_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('the_computer_repair_related_posts_count',array(
		'label'	=> __('Add Related Post Count','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '3', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_related_posts_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'the_computer_repair_related_posts_excerpt_number', array(
		'default'              => 20,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'the_computer_repair_sanitize_number_range'
	) );
	$wp_customize->add_control( 'the_computer_repair_related_posts_excerpt_number', array(
		'label'       => esc_html__( 'Related Posts Excerpt length','the-computer-repair' ),
		'section'     => 'the_computer_repair_related_posts_settings',
		'type'        => 'range',
		'settings'    => 'the_computer_repair_related_posts_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	// Single Posts Settings
	$wp_customize->add_section( 'the_computer_repair_single_blog_settings', array(
		'title' => __( 'Single Post Settings', 'the-computer-repair' ),
		'panel' => 'the_computer_repair_blog_post_parent_panel',
	));

  	$wp_customize->add_setting('the_computer_repair_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_computer_repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_single_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_single_blog_settings',
		'setting'	=> 'the_computer_repair_single_postdate_icon',
		'type'		=> 'icon'
	)));

   	$wp_customize->add_setting( 'the_computer_repair_single_postdate',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
  	$wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_single_postdate',array(
	    'label' => esc_html__( 'Date','the-computer-repair' ),
	    'section' => 'the_computer_repair_single_blog_settings'
  	)));

	$wp_customize->add_setting('the_computer_repair_single_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_computer_repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_single_author_icon',array(
		'label'	=> __('Add Author Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_single_blog_settings',
		'setting'	=> 'the_computer_repair_single_author_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'the_computer_repair_single_author',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'the_computer_repair_switch_sanitization'
  	) );
  	$wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_single_author',array(
	    'label' => esc_html__( 'Author','the-computer-repair' ),
	    'section' => 'the_computer_repair_single_blog_settings'
 	 )));

   	$wp_customize->add_setting('the_computer_repair_single_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_computer_repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_single_comments_icon',array(
		'label'	=> __('Add Comments Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_single_blog_settings',
		'setting'	=> 'the_computer_repair_single_comments_icon',
		'type'		=> 'icon'
	)));

  	$wp_customize->add_setting( 'the_computer_repair_single_comments',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'the_computer_repair_switch_sanitization'
  	) );
  	$wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_single_comments',array(
    'label' => esc_html__( 'Comments','the-computer-repair' ),
    'section' => 'the_computer_repair_single_blog_settings'
  	)));

  	$wp_customize->add_setting('the_computer_repair_single_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_computer_repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_single_time_icon',array(
		'label'	=> __('Add Time Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_single_blog_settings',
		'setting'	=> 'the_computer_repair_single_time_icon',
		'type'		=> 'icon'
	)));

  	$wp_customize->add_setting( 'the_computer_repair_single_time',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_single_time',array(
	    'label' => esc_html__( 'Time','the-computer-repair' ),
	    'section' => 'the_computer_repair_single_blog_settings'
    )));

	$wp_customize->add_setting( 'the_computer_repair_toggle_tags',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
	));
   $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_toggle_tags', array(
		'label' => esc_html__( 'Tags','the-computer-repair' ),
		'section' => 'the_computer_repair_single_blog_settings'
   )));

	$wp_customize->add_setting( 'the_computer_repair_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
   $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_single_post_breadcrumb',array(
		'label' => esc_html__( 'Single Post Breadcrumb','the-computer-repair' ),
		'section' => 'the_computer_repair_single_blog_settings'
    )));

    // Single Posts Category
  	$wp_customize->add_setting( 'the_computer_repair_single_post_category',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
   ) );
  	$wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_single_post_category',array(
		'label' => esc_html__( 'Single Post Category','the-computer-repair' ),
		'section' => 'the_computer_repair_single_blog_settings'
 	)));

   $wp_customize->add_setting('the_computer_repair_single_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_single_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','the-computer-repair'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','the-computer-repair'),
		'section'=> 'the_computer_repair_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'the_computer_repair_single_blog_post_navigation_show_hide',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
	));
   $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_single_blog_post_navigation_show_hide', array(
		'label' => esc_html__( 'Post Navigation','the-computer-repair' ),
		'section' => 'the_computer_repair_single_blog_settings'
   )));

	//navigation text
	$wp_customize->add_setting('the_computer_repair_single_blog_prev_navigation_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_single_blog_prev_navigation_text',array(
		'label'	=> __('Post Navigation Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'PREVIOUS', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_single_blog_next_navigation_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_single_blog_next_navigation_text',array(
		'label'	=> __('Post Navigation Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'NEXT', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_single_blog_comment_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('the_computer_repair_single_blog_comment_title',array(
		'label'	=> __('Add Comment Title','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'Leave a Reply', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_single_blog_comment_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('the_computer_repair_single_blog_comment_button_text',array(
		'label'	=> __('Add Comment Button Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'Post Comment', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_single_blog_comment_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_single_blog_comment_width',array(
		'label'	=> __('Comment Form Width','the-computer-repair'),
		'description'	=> __('Enter a value in %. Example:50%','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '100%', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_single_blog_settings',
		'type'=> 'text'
	));

	// Grid layout setting
	$wp_customize->add_section( 'the_computer_repair_grid_layout_settings', array(
		'title' => __( 'Grid Layout Settings', 'the-computer-repair' ),
		'panel' => 'the_computer_repair_blog_post_parent_panel',
	));

  	$wp_customize->add_setting('the_computer_repair_grid_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_computer_repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_grid_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_grid_layout_settings',
		'setting'	=> 'the_computer_repair_grid_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'the_computer_repair_grid_postdate',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'the_computer_repair_switch_sanitization'
	) );
	$wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_grid_postdate',array(
        'label' => esc_html__( 'Post Date','the-computer-repair' ),
        'section' => 'the_computer_repair_grid_layout_settings'
   )));

	$wp_customize->add_setting('the_computer_repair_grid_author_icon',array(
		'default'	=> 'far fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_computer_repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_grid_author_icon',array(
		'label'	=> __('Add Author Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_grid_layout_settings',
		'setting'	=> 'the_computer_repair_grid_author_icon',
		'type'		=> 'icon'
	)));

   $wp_customize->add_setting( 'the_computer_repair_grid_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
   ) );
   $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_grid_author',array(
		'label' => esc_html__( 'Author','the-computer-repair' ),
		'section' => 'the_computer_repair_grid_layout_settings'
    )));

   	$wp_customize->add_setting('the_computer_repair_grid_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new the_computer_repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_grid_comments_icon',array(
		'label'	=> __('Add Comments Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_grid_layout_settings',
		'setting'	=> 'the_computer_repair_grid_comments_icon',
		'type'		=> 'icon'
	)));

   $wp_customize->add_setting( 'the_computer_repair_grid_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
   ) );
   $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_grid_comments',array(
		'label' => esc_html__( 'Comments','the-computer-repair' ),
		'section' => 'the_computer_repair_grid_layout_settings'
    )));

	//Others Settings
	$wp_customize->add_panel( 'the_computer_repair_others_panel', array(
		'title' => esc_html__( 'Others Settings', 'the-computer-repair' ),
		'panel' => 'the_computer_repair_panel_id',
		'priority' => 20,
	));

	// Layout
	$wp_customize->add_section( 'the_computer_repair_left_right', array(
    	'title'      => esc_html__( 'General Settings', 'the-computer-repair' ),
		'panel' => 'the_computer_repair_others_panel'
	) );

	$wp_customize->add_setting('the_computer_repair_width_option',array(
        'default' => 'Full Width',
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control(new The_Computer_Repair_Image_Radio_Control($wp_customize, 'the_computer_repair_width_option', array(
        'type' => 'select',
        'label' => __('Width Layouts','the-computer-repair'),
        'description' => __('Here you can change the width layout of Website.','the-computer-repair'),
        'section' => 'the_computer_repair_left_right',
        'choices' => array(
            'Full Width' => esc_url(get_template_directory_uri()).'/assets/images/full-width.png',
            'Wide Width' => esc_url(get_template_directory_uri()).'/assets/images/wide-width.png',
            'Boxed' => esc_url(get_template_directory_uri()).'/assets/images/boxed-width.png',
    ))));

	$wp_customize->add_setting('the_computer_repair_page_layout',array(
        'default' => 'One Column',
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_page_layout',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','the-computer-repair'),
        'description' => __('Here you can change the sidebar layout for pages. ','the-computer-repair'),
        'section' => 'the_computer_repair_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','the-computer-repair'),
            'Right Sidebar' => __('Right Sidebar','the-computer-repair'),
            'One Column' => __('One Column','the-computer-repair')
        ),
	) );

	$wp_customize->add_setting( 'the_computer_repair_single_page_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_single_page_breadcrumb',array(
		'label' => esc_html__( 'Single Page Breadcrumb','the-computer-repair' ),
		'section' => 'the_computer_repair_left_right'
    )));

    //Featured Image
	$wp_customize->add_setting( 'the_computer_repair_featured_image_border_radius', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'the_computer_repair_sanitize_number_range'
	) );
	$wp_customize->add_control( 'the_computer_repair_featured_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','the-computer-repair' ),
		'section'     => 'the_computer_repair_left_right',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1, 
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Wow Animation
	$wp_customize->add_setting( 'the_computer_repair_animation',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_animation',array(
        'label' => esc_html__( 'Animation ','the-computer-repair' ),
        'description' => __('Here you can disable overall site animation effect','the-computer-repair'),
        'section' => 'the_computer_repair_left_right'
    )));

	//Pre-Loader
	$wp_customize->add_setting( 'the_computer_repair_loader_enable',array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_loader_enable',array(
        'label' => esc_html__( 'Pre-Loader','the-computer-repair' ),
        'section' => 'the_computer_repair_left_right'
    )));

	$wp_customize->add_setting('the_computer_repair_preloader_bg_color', array(
		'default'           => '#23cfca',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_computer_repair_preloader_bg_color', array(
		'label'    => __('Pre-Loader Background Color', 'the-computer-repair'),
		'section'  => 'the_computer_repair_left_right',
	)));

	$wp_customize->add_setting('the_computer_repair_preloader_border_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_computer_repair_preloader_border_color', array(
		'label'    => __('Pre-Loader Border Color', 'the-computer-repair'),
		'section'  => 'the_computer_repair_left_right',
	)));

	$wp_customize->add_setting('the_computer_repair_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'the_computer_repair_preloader_bg_img',array(
        'label' => __('Preloader Background Image','the-computer-repair'),
        'section' => 'the_computer_repair_left_right'
	)));

    //404 Page Setting
	$wp_customize->add_section('the_computer_repair_404_page',array(
		'title'	=> __('404 Page Settings','the-computer-repair'),
		'panel' => 'the_computer_repair_others_panel',
	));

	$wp_customize->add_setting('the_computer_repair_404_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('the_computer_repair_404_page_title',array(
		'label'	=> __('Add Title','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '404 Not Found', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_404_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('the_computer_repair_404_page_content',array(
		'label'	=> __('Add Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_404_page_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_404_page_button_text',array(
		'label'	=> __('Add Button Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'Go Back', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_404_page',
		'type'=> 'text'
	));

	//No Result Page Setting
	$wp_customize->add_section('the_computer_repair_no_results_page',array(
		'title'	=> __('No Results Page Settings','the-computer-repair'),
		'panel' => 'the_computer_repair_others_panel',
	));

	$wp_customize->add_setting('the_computer_repair_no_results_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('the_computer_repair_no_results_page_title',array(
		'label'	=> __('Add Title','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'Nothing Found', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_no_results_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_no_results_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('the_computer_repair_no_results_page_content',array(
		'label'	=> __('Add Text','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_no_results_page',
		'type'=> 'text'
	));

	//Social Icon Setting
	$wp_customize->add_section('the_computer_repair_social_icon_settings',array(
		'title'	=> __('Social Icons Settings','the-computer-repair'),
		'panel' => 'the_computer_repair_others_panel',
	));

	$wp_customize->add_setting('the_computer_repair_social_icon_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_social_icon_font_size',array(
		'label'	=> __('Icon Font Size','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_social_icon_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_social_icon_padding',array(
		'label'	=> __('Icon Padding','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_social_icon_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_social_icon_width',array(
		'label'	=> __('Icon Width','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_social_icon_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_social_icon_height',array(
		'label'	=> __('Icon Height','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'the_computer_repair_social_icon_border_radius', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'the_computer_repair_sanitize_number_range'
	) );
	$wp_customize->add_control( 'the_computer_repair_social_icon_border_radius', array(
		'label'       => esc_html__( 'Icon Border Radius','the-computer-repair' ),
		'section'     => 'the_computer_repair_social_icon_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Responsive Media Settings
	$wp_customize->add_section('the_computer_repair_responsive_media',array(
		'title'	=> __('Responsive Media','the-computer-repair'),
		'panel' => 'the_computer_repair_others_panel',
	));

	$wp_customize->add_setting( 'the_computer_repair_resp_topbar_hide_show',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_resp_topbar_hide_show',array(
      'label' => esc_html__( 'Show / Hide Topbar','the-computer-repair' ),
      'section' => 'the_computer_repair_responsive_media'
    )));

    $wp_customize->add_setting( 'the_computer_repair_stickyheader_hide_show',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_stickyheader_hide_show',array(
      'label' => esc_html__( 'Sticky Header','the-computer-repair' ),
      'section' => 'the_computer_repair_responsive_media'
    )));

    $wp_customize->add_setting( 'the_computer_repair_resp_slider_hide_show',array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_resp_slider_hide_show',array(
      'label' => esc_html__( 'Show / Hide Slider','the-computer-repair' ),
      'section' => 'the_computer_repair_responsive_media'
    )));

    $wp_customize->add_setting( 'the_computer_repair_sidebar_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_sidebar_hide_show',array(
      'label' => esc_html__( 'Show / Hide Sidebar','the-computer-repair' ),
      'section' => 'the_computer_repair_responsive_media'
    )));

     $wp_customize->add_setting( 'the_computer_repair_resp_scroll_top_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ));
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_resp_scroll_top_hide_show',array(
      'label' => esc_html__( 'Show / Hide Scroll To Top','the-computer-repair' ),
      'section' => 'the_computer_repair_responsive_media'
    )));

    $wp_customize->add_setting('the_computer_repair_res_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new The_Computer_Repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_res_open_menu_icon',array(
		'label'	=> __('Add Open Menu Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_responsive_media',
		'setting'	=> 'the_computer_repair_res_open_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_computer_repair_res_close_menu_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new The_Computer_Repair_Fontawesome_Icon_Chooser(
        $wp_customize,'the_computer_repair_res_close_menu_icon',array(
		'label'	=> __('Add Close Menu Icon','the-computer-repair'),
		'transport' => 'refresh',
		'section'	=> 'the_computer_repair_responsive_media',
		'setting'	=> 'the_computer_repair_res_close_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('the_computer_repair_resp_menu_toggle_btn_bg_color', array(
		'default'           => '#23cfca',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'the_computer_repair_resp_menu_toggle_btn_bg_color', array(
		'label'    => __('Toggle Button Bg Color', 'the-computer-repair'),
		'section'  => 'the_computer_repair_responsive_media',
	)));

    //Woocommerce settings
	$wp_customize->add_section('the_computer_repair_woocommerce_section', array(
		'title'    => __('WooCommerce Layout', 'the-computer-repair'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'the_computer_repair_woocommerce_shop_page_sidebar', array( 'selector' => '.post-type-archive-product #sidebar',
		'render_callback' => 'the_computer_repair_customize_partial_the_computer_repair_woocommerce_shop_page_sidebar', ) );

    //Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'the_computer_repair_woocommerce_shop_page_sidebar',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_woocommerce_shop_page_sidebar',array(
		'label' => esc_html__( 'Shop Page Sidebar','the-computer-repair' ),
		'section' => 'the_computer_repair_woocommerce_section'
    )));

   $wp_customize->add_setting('the_computer_repair_shop_page_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_shop_page_layout',array(
        'type' => 'select',
        'label' => __('Shop Page Sidebar Layout','the-computer-repair'),
        'section' => 'the_computer_repair_woocommerce_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','the-computer-repair'),
            'Right Sidebar' => __('Right Sidebar','the-computer-repair'),
        ),
	) );

   //Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'the_computer_repair_woocommerce_single_product_page_sidebar', array( 'selector' => '.single-product #sidebar',
		'render_callback' => 'the_computer_repair_customize_partial_the_computer_repair_woocommerce_single_product_page_sidebar', ) );

    //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'the_computer_repair_woocommerce_single_product_page_sidebar',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'the_computer_repair_switch_sanitization'
   ) );
   $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Single Product Sidebar','the-computer-repair' ),
		'section' => 'the_computer_repair_woocommerce_section'
    )));

   $wp_customize->add_setting('the_computer_repair_single_product_layout',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_single_product_layout',array(
        'type' => 'select',
        'label' => __('Single Product Sidebar Layout','the-computer-repair'),
        'section' => 'the_computer_repair_woocommerce_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','the-computer-repair'),
            'Right Sidebar' => __('Right Sidebar','the-computer-repair'),
        ),
	) );

   //Products per page
   $wp_customize->add_setting('the_computer_repair_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'the_computer_repair_sanitize_float'
	));
	$wp_customize->add_control('the_computer_repair_products_per_page',array(
		'label'	=> __('Products Per Page','the-computer-repair'),
		'description' => __('Display on shop page','the-computer-repair'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'the_computer_repair_woocommerce_section',
		'type'=> 'number',
	));

    //Products per row
    $wp_customize->add_setting('the_computer_repair_products_per_row',array(
		'default'=> '3',
		'sanitize_callback'	=> 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_products_per_row',array(
		'label'	=> __('Products Per Row','the-computer-repair'),
		'description' => __('Display on shop page','the-computer-repair'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'the_computer_repair_woocommerce_section',
		'type'=> 'select',
	));

	//Products padding
	$wp_customize->add_setting('the_computer_repair_products_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_products_padding_top_bottom',array(
		'label'	=> __('Products Padding Top Bottom','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_products_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_products_padding_left_right',array(
		'label'	=> __('Products Padding Left Right','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_woocommerce_section',
		'type'=> 'text'
	));

	//Products box shadow
	$wp_customize->add_setting( 'the_computer_repair_products_box_shadow', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'the_computer_repair_sanitize_number_range'
	) );
	$wp_customize->add_control( 'the_computer_repair_products_box_shadow', array(
		'label'       => esc_html__( 'Products Box Shadow','the-computer-repair' ),
		'section'     => 'the_computer_repair_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products border radius
    $wp_customize->add_setting( 'the_computer_repair_products_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'the_computer_repair_sanitize_number_range'
	) );
	$wp_customize->add_control( 'the_computer_repair_products_border_radius', array(
		'label'       => esc_html__( 'Products Border Radius','the-computer-repair' ),
		'section'     => 'the_computer_repair_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'the_computer_repair_products_button_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'the_computer_repair_sanitize_number_range'
	) );
	$wp_customize->add_control( 'the_computer_repair_products_button_border_radius', array(
		'label'       => esc_html__( 'Products Button Border Radius','the-computer-repair' ),
		'section'     => 'the_computer_repair_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('the_computer_repair_products_btn_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_products_btn_padding_top_bottom',array(
		'label'	=> __('Products Button Padding Top Bottom','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_products_btn_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_products_btn_padding_left_right',array(
		'label'	=> __('Products Button Padding Left Right','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_woocommerce_sale_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_woocommerce_sale_font_size',array(
		'label'	=> __('Sale Font Size','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_woocommerce_section',
		'type'=> 'text'
	));

	//Products Sale Badge
	$wp_customize->add_setting('the_computer_repair_woocommerce_sale_position',array(
        'default' => 'right',
        'sanitize_callback' => 'the_computer_repair_sanitize_choices'
	));
	$wp_customize->add_control('the_computer_repair_woocommerce_sale_position',array(
        'type' => 'select',
        'label' => __('Sale Badge Position','the-computer-repair'),
        'section' => 'the_computer_repair_woocommerce_section',
        'choices' => array(
            'left' => __('Left','the-computer-repair'),
            'right' => __('Right','the-computer-repair'),
        ),
	) );

	$wp_customize->add_setting('the_computer_repair_woocommerce_sale_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_woocommerce_sale_padding_top_bottom',array(
		'label'	=> __('Sale Padding Top Bottom','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('the_computer_repair_woocommerce_sale_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('the_computer_repair_woocommerce_sale_padding_left_right',array(
		'label'	=> __('Sale Padding Left Right','the-computer-repair'),
		'description'	=> __('Enter a value in pixels. Example:20px','the-computer-repair'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'the-computer-repair' ),
        ),
		'section'=> 'the_computer_repair_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'the_computer_repair_woocommerce_sale_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'the_computer_repair_sanitize_number_range'
	) );
	$wp_customize->add_control( 'the_computer_repair_woocommerce_sale_border_radius', array(
		'label'       => esc_html__( 'Sale Border Radius','the-computer-repair' ),
		'section'     => 'the_computer_repair_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

  	// Related Product
    $wp_customize->add_setting( 'the_computer_repair_related_product_show_hide',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'the_computer_repair_switch_sanitization'
    ) );
    $wp_customize->add_control( new The_Computer_Repair_Toggle_Switch_Custom_Control( $wp_customize, 'the_computer_repair_related_product_show_hide',array(
        'label' => esc_html__( 'Related product','the-computer-repair' ),
        'section' => 'the_computer_repair_woocommerce_section'
    )));

    // Has to be at the top
	$wp_customize->register_panel_type( 'The_Computer_Repair_WP_Customize_Panel' );
	$wp_customize->register_section_type( 'The_Computer_Repair_WP_Customize_Section' );
}

add_action( 'customize_register', 'the_computer_repair_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

if ( class_exists( 'WP_Customize_Panel' ) ) {
  	class The_Computer_Repair_WP_Customize_Panel extends WP_Customize_Panel {
	    public $panel;
	    public $type = 'the_computer_repair_panel';
	    public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'type', 'panel', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;
	      return $array;
    	}
  	}
}

if ( class_exists( 'WP_Customize_Section' ) ) {
  	class The_Computer_Repair_WP_Customize_Section extends WP_Customize_Section {
	    public $section;
	    public $type = 'the_computer_repair_section';
	    public function json() {

	      $array = wp_array_slice_assoc( (array) $this, array( 'id', 'description', 'priority', 'panel', 'type', 'description_hidden', 'section', ) );
	      $array['title'] = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
	      $array['content'] = $this->get_content();
	      $array['active'] = $this->active();
	      $array['instanceNumber'] = $this->instance_number;

	      if ( $this->panel ) {
	        $array['customizeAction'] = sprintf( 'Customizing &#9656; %s', esc_html( $this->manager->get_panel( $this->panel )->title ) );
	      } else {
	        $array['customizeAction'] = 'Customizing';
	      }
	      return $array;
    	}
  	}
}

// Enqueue our scripts and styles
function the_computer_repair_customize_controls_scripts() {
  wp_enqueue_script( 'customizer-controls', get_theme_file_uri( '/assets/js/customizer-controls.js' ), array(), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'the_computer_repair_customize_controls_scripts' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class The_Computer_Repair_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'The_Computer_Repair_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new The_Computer_Repair_Customize_Section_Pro( $manager,'the_computer_repair_upgrade_pro_link', array(
			'priority'   => 1,
			'title'    => esc_html__( 'Computer Repair Pro', 'the-computer-repair' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'the-computer-repair' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/themes/computer-repair-wordpress-theme/'),
		)));

		$manager->add_section(new The_Computer_Repair_Customize_Section_Pro($manager,'the_computer_repair_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'Documentation', 'the-computer-repair' ),
			'pro_text' => esc_html__( 'DOCS', 'the-computer-repair' ),
			'pro_url'  => esc_url('https://www.vwthemesdemo.com/docs/free-computer-repair/'),
		)));
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'the-computer-repair-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'the-computer-repair-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );

		wp_localize_script(
		'the-computer-repair-customize-controls',
		'the_computer_repair_customizer_params',
		array(
			'ajaxurl' =>	admin_url( 'admin-ajax.php' )
		));
	}
}

// Doing this customizer thang!
The_Computer_Repair_Customize::get_instance();
