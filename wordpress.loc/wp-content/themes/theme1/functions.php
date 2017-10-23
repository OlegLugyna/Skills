<?php
/*Подключение загружаемых скриптов и стилей */
function load_style_script() {
  wp_enqueue_script('jquery_my', get_template_directory_uri() . '/js/jquery-1.10.1.min.js');
  wp_enqueue_script('jqFancyTransitions', get_template_directory_uri() . '/js/jqFancyTransitions.1.8.min.js');
  wp_enqueue_style('styles', get_template_directory_uri() . '/style.css');
}

/* Сама загрузка скриптов и стилей*/

add_action('wp_enqueue_scripts', 'load_style_script');

/* Добавляет миниатюры */
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 180, 180 );

/* Добавляем виджеты*/

register_sidebar(array
(
  name => 'Meнюшка',
  id =>'menu_header',
  before_widget => '',
  after_widget => '',
  before_title => '',
  after_title => ''
));

register_sidebar(array
(
  name => 'Sidebar',
  id =>'sidebar',
  before_widget => '<div class="sidebar-widget %2$s">',
  after_widget => '</div>',
  before_title => '<h3>',
  after_title => '</h3>'
));

register_sidebar(array
(
  name => 'Footer',
  id =>'footer',
  before_widget => '<div class="footer-info %2$s">',
  after_widget => '</div>',
  before_title => '<h3>',
  after_title => '</h3>'
));

register_sidebar(array
(
  name => 'Social',
  id =>'social',
  before_widget => '<ul class="ico-social %2$s">',
  after_widget => '</ul>',
  before_title => '<h3>',
  after_title => '</h3>'
));



//
// 'name' => sprintf(__('Sidebar %d'), $i ),
// 'id' => "sidebar-$i",
// 'description' => '',
// 'class' => '',
// 'before_widget' => '<li id="%1$s" class="widget %2$s">',
// 'after_widget' => "</li>\n",
// 'before_title' => '<h2 class="widgettitle">',
// 'after_title' => "</h2>\n"

/* Создаем баннер*/

function banner_posts() {
	$labels = array(
			'name'               => 'Баннеры', // Основное название типа записи
			'singular_name'      => 'Баннер', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый баннер',
			'edit_item'          => 'Редактировать баннер',
			'new_item'           => 'Новый баннер',
			'view_item'          => 'Посмотреть баннер',
			'search_items'       => 'Найти баннер',
			'not_found'          =>  'Баннер не найден',
			'not_found_in_trash' => 'В корзине баннера не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Баннеры'
    );

  $args = array(
    'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'thumbnail')
   );
  
  register_post_type('banner', $args);
}

add_action('init', 'banner_posts');

/* Создаем слайдер*/
function slider_posts() {
	$labels = array(
			'name'               => 'Слайдеры', // Основное название типа записи
			'singular_name'      => 'Слайдер', // отдельное название записи типа Book
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый слайдер',
			'edit_item'          => 'Редактировать слайдер',
			'new_item'           => 'Новый слайдер',
			'view_item'          => 'Посмотреть слайдер',
			'search_items'       => 'Найти слайдер',
			'not_found'          =>  'Сдайдер не найден',
			'not_found_in_trash' => 'В корзине слайдера не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Слайдеры'
    );

  $args = array(
    'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title', 'editor', 'thumbnail')
   );
  
  register_post_type('slider', $args);
}

add_action('init', 'slider_posts');
