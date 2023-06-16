<?php


$online_video_games_custom_css = '';

	/*---------------------------text-transform-------------------*/

	$online_video_games_text_transform = get_theme_mod( 'menu_text_transform_online_video_games','CAPITALISE');
    if($online_video_games_text_transform == 'CAPITALISE'){

		$online_video_games_custom_css .='#main-menu ul li a{';

			$online_video_games_custom_css .='text-transform: capitalize ;';

		$online_video_games_custom_css .='}';

	}else if($online_video_games_text_transform == 'UPPERCASE'){

		$online_video_games_custom_css .='#main-menu ul li a{';

			$online_video_games_custom_css .='text-transform: uppercase ;';

		$online_video_games_custom_css .='}';

	}else if($online_video_games_text_transform == 'LOWERCASE'){

		$online_video_games_custom_css .='#main-menu ul li a{';

			$online_video_games_custom_css .='text-transform: lowercase ;';

		$online_video_games_custom_css .='}';
	}

	/*---------------------------Container Width-------------------*/

$online_video_games_container_width = get_theme_mod('online_video_games_container_width');

		$online_video_games_custom_css .='body{';

			$online_video_games_custom_css .='width: '.esc_attr($online_video_games_container_width).'%; margin: auto';

		$online_video_games_custom_css .='}';


	/*---------------------------Slider-content-alignment-------------------*/

$online_video_games_slider_content_alignment = get_theme_mod( 'online_video_games_slider_content_alignment','LEFT-ALIGN');

 if($online_video_games_slider_content_alignment == 'LEFT-ALIGN'){

		$online_video_games_custom_css .='.blog_box{';

			$online_video_games_custom_css .='text-align:left;';

		$online_video_games_custom_css .='}';


	}else if($online_video_games_slider_content_alignment == 'CENTER-ALIGN'){

		$online_video_games_custom_css .='.blog_box{';

			$online_video_games_custom_css .='text-align:center;';

		$online_video_games_custom_css .='}';


	}else if($online_video_games_slider_content_alignment == 'RIGHT-ALIGN'){

		$online_video_games_custom_css .='.blog_box{';

			$online_video_games_custom_css .='text-align:right;';

		$online_video_games_custom_css .='}';

	}
