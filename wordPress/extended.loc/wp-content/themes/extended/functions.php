<?php 
/*Подключение загружаемых скриптов и стилей */
function load_style_script() {
  // wp_enqueue_script('jquery-google', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
  // wp_enqueue_script('jquery-flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js');
  // wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.js');
  // wp_enqueue_script('jquery-mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.js');
  // wp_enqueue_script('demo', get_template_directory_uri() . '/js/demo.js');
  // wp_enqueue_script('jquery-ui-1.9.2', get_template_directory_uri() . '/js/jquery-ui-1.9.2.custom.js');
  // wp_enqueue_style('styles', get_template_directory_uri() . '/style.css');
  // wp_enqueue_style('styles-flexslider', get_template_directory_uri() . '/flexslider.css');
  // wp_enqueue_style('styles-jquery-ui', get_template_directory_uri() . '/css/jquery-ui-1.9.2.custom.css');
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

/* Сама загрузка скриптов и стилей*/
add_action('wp_enqueue_scripts', 'load_style_script');

/*Создание дополнительных опций */
function my_more_options() {
  // создаем поле опции
	// arguments this func: $id, $title, $callback, $page, $section, $args
	add_settings_field(
		'phone', // $id - Название опции (идентификатор)
		'Телефон', // $title - Заголовок поля
		'display_phone', // $callback - callback function
		'general' // $page - Страница меню в которую будет добавлено поле
	);

	// Регистрирует новую опцию и callback функцию (функцию обратного вызова) для обработки значения опции при её сохранении в БД.
	// arguments this func: $option_group, $option_name, $sanitize_callback
	register_setting(
		'general', // $option_group - Название группы, к которой будет принадлежать опция. Это название должно совпадать с названием группы в функции settings_fields()
    'my_phone' // $option_name - Название опции, которая будет сохраняться в БД sql

  );
}

add_action('admin_init', 'my_more_options'); // admin_init - специальный хук, к которому привязывается вызов функции и создание поля, т.е. к админке

function display_phone() {
  echo "<input name='my_phone' type='text' value='" . esc_attr(get_option('my_phone')) . "' class='regular-text'>";
}

/* Добавляем виджеты*/
register_sidebar(array
(
  name => 'Social',
  id =>'social',
  before_widget => '',
  after_widget => '',
  before_title => '',
  after_title => ''
));
/* Регистрируем меню для футера и хедера */
register_nav_menus(array(
  'header_menu' => 'Меню в шапке',
  'footer_menu' => 'Меню в подвале'
));

/*Создаем слайдер. Используем запись пользовательского типа (своя запись в меню админки) */

function slider_posts () {
 /* массив ярлыков, которые использ в записи */
 $labels = array(
  'name'               => 'Мои Слайдеры', // Основное название типа записи
  'singular_name'      => 'Слайдер', // отдельное название записи типа Book
  'add_new'            => 'Добавить новый',
  'add_new_item'       => 'Добавление нового слайдера',
  'all_items'          => 'Все слайдеры',
  'edit_item'          => 'Редактировать слайдер',
  'new_item'           => 'Новый слайдер',
  'view_item'          => 'Посмотреть слайдер',
  'search_items'       => 'Найти слайдер',
  'not_found'          =>  'Сдайдер не найден',
  'not_found_in_trash' => 'В корзине слайдера не найдено',
  'parent_item_colon'  => '',
  'menu_name'          => 'Мои Слайдеры'
);

$args = array(
  'labels'             => $labels,
  'public'             => true, //показ в админке фалс не показывать
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => true,
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_position'      => 100, // место нахождение. 100 - это в самом конце
  'menu_icon'          => admin_url() . 'images/media-button-video.gif', // замена иконки возле моей записи. иконка взята из папки админки
  'supports'           => array('title', 'editor', 'thumbnail') // блоки которые будут в интерфейсе
 );


  register_post_type('slider', $args);
}

add_action ('init', 'slider_posts'); // init - spesial huk, added our post in admin consol 

/* Добавляет миниатюры */
add_theme_support('post-thumbnails');

/*Вывод тегов*/
function my_list_tags() {
  $tags = get_the_tags();
  //var_dump($tags); //проверяем что возвращает функция. видим, что возвращается массив

  $tag_str = '<p>'; //otroem tag <p> v nachale tsikla
  if ($tags) {
    foreach ($tags as $tag_item) {
      $tag_str .= $tag_item -> name . ', '; //выводим значение имени и разделяем запятой с пробелом
    }
    $tag_str = rtrim($tag_str, ', '); // убираем в конце строки последний и знак с пробелом
    $tag_str .= '</p>'; //zakroem tag </p> v kontse tsikla
  }
  echo $tag_str;
}

/* Виджет Our clients */
register_sidebar(array
(
  name => 'Наши Клиенты',
  id =>'clients',
  before_widget => '',
  after_widget => '',
  before_title => '',
  after_title => ''
));

/* работа с метками текущей категории */

function get_tags_in_cat($categ_id) {
  $args = array(
    'numberposts' => -1,
    'category'    => $categ_id // обозначает какой именно категории требуется вывод постов
  );
  $posts_in_categ = get_posts($args); //возвращает массив записей указанной категории по $categ_id
  //print_r($posts_in_categ);
  
  $tags = array(); // определяем пустой массив, куда будем складывать все теги(метки)
  
  foreach($posts_in_categ as $post_item) {
    $post_tags = get_the_tags( $post_item -> ID );
    //print_r($post_tags);
    if(!empty($post_tags)) {
      foreach($post_tags as $tag) {
          $tags[$tag -> term_id] = $tag -> name;
          
      }
    }
  }
  asort($tags);
  return $tags;
}

/* пагинация страниц в category.php Обобщенная функция*/

function wp_corenavi(){
	global $wp_query, $wp_rewrite;
	$pages = '';
	$max = $wp_query->max_num_pages;
	if (!$current = get_query_var('paged')) $current = 1;
	$a['base'] = str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999)));
	$a['total'] = $max;
	$a['current'] = $current;

	$total = 0; //1 - выводить текст "Страница N из N", 0 - не выводить
	$a['mid_size'] = 2; //сколько ссылок показывать слева и справа от текущей
	$a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
	$a['prev_text'] = '&laquo; Предыдущая страница'; //текст ссылки "Предыдущая страница" &laquo;-это стрелка, можно любой текст
	$a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"

	if ($max > 1) echo '<div class="pager">';
	if ($total == 1 && $max > 1) $pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
	echo $pages . paginate_links($a);
	if ($max > 1) echo '</div>';
}

/* Виджет вывода категорий и разметки в порфолио-сингл */
register_sidebar(array
(
  name => 'Sidebar outside portfolio',
  id => 'sidebar-portfolio',
  before_widget => '',
  after_widget => '',
  before_title => '<h3><span>',
  after_title => '</span></h3>'
));




?>