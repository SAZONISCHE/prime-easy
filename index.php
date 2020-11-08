<?php

if (!is_admin()):
    add_action('rcl_enqueue_scripts','pfm_easy_scripts',10);
endif;

function pfm_easy_scripts(){
    rcl_enqueue_style('pfm_easy-style', rcl_addon_url('style.css', __FILE__));
    rcl_enqueue_style('pfm_easy-style-easy', rcl_addon_url('style_easy.css', __FILE__));
}

add_action('pfm_footer', 'pfm_easy_add_the_visitors', 10);
function pfm_easy_add_the_visitors(){
	pfm_the_visitors();
}
add_filter('rcl_inline_styles','search_pfm_easy_styles',10,1);
function search_pfm_easy_styles($styles){
	if(pfm_get_option('view-forums-home')==0) {
		$styles .= '
			#prime-forum .prime-group-box .prime-forum-item{
				border: 1px solid #e5e5e5;
				padding: 10px;
				display: flex;
				align-items: center;
			}
			#prime-forum .prime-group-box .prime-forum-icon{
				padding: 0;
			}
		';	
	}	
	return $styles;
}
