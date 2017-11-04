<?php

/**
* загружаемые скрипты и стили
*/
function load_style_script(){
	wp_enqueue_script('jquery-google', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
	wp_enqueue_script('jquery-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js');
	wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.js');
	wp_enqueue_script('jquery-mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.js');
	wp_enqueue_script('demo', get_template_directory_uri() . '/js/demo.js');
	wp_enqueue_script('jquery-ui-1.9.2', get_template_directory_uri() . '/js/jquery-ui-1.9.2.custom.js');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('style-flexslider', get_template_directory_uri() . '/flexslider.css');
	wp_enqueue_style('style-jquery-ui-1.9.2', get_template_directory_uri() . '/css/jquery-ui-1.9.2.custom.css');
}

/**
* загружаем скрипты и стили
*/
add_action('wp_enqueue_scripts', 'load_style_script');


?>