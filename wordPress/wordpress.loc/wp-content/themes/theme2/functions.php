<?php 
/*Подключение библиотеки JQuery для устойчивой работы.  */
function load_jquery() {
  wp_enqueue_script('jquery_my', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');
}

/* Сама загрузка скрипта подключения */

add_action('wp_enqueue_scripts', 'load_jquery');

/* Создание меню*/
register_nav_menu('menu', 'Primary menu');

/* Создаем слайдер. Вызываем виджет */

register_sidebar(array
(
  name => 'Slider',
  id =>'slider_index',
  description => 'Добавьте слайдер ч/з виджет-HTML-код',
  before_widget => '',
  after_widget => '',
));

register_sidebar(array
(
  name => 'Social',
  id =>'social_btn',
  description => 'Кнопки соц сетей ч/з виджет-HTML-код',
  before_widget => '',
  after_widget => '',
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

/* Добавляет миниатюры */
add_theme_support('post-thumbnails');

/*Создаем галерею. работа с шорткодом*/
function theme2_gallery($attr, $text='') {
  $img_src = explode(',', $attr['ids']);
  $pattern = '#(width|height)="\d+"#';//паттерн для поиска регулярного выражения
  $return = '<ul id="slide_2" class="slidik">';
    foreach($img_src as $item) {
      //получаем html код картинки
      $image_url = wp_get_attachment_image($item, 'full');
      //замена в создаваемом ли посредством рег выражения на пустое место
      $image_url = preg_replace($pattern, '', $image_url);
      $return .= '<li>' . $image_url . '</li>'; //формируем вывод картирнки, вклад в ли тег img
      
    }
    $return .= '<a data-slidik="slide_2" class="next" href="#">Next</a>
    <a data-slidik="slide_2" class="prev" href="#">Prev</a>
    <div class="captionWrap"><div data-slidik="slide_2" class="caption"></div></div>
    <div class="portfolio-close"><a href="#"></a></div></ul>'; //добавляем остаток кода из html верстки. это код для работы слайдера
    echo($return);

} 
/* связываем функцию и шорткод галлереи */
add_shortcode('shortcode-gallery', 'theme2_gallery');



?>