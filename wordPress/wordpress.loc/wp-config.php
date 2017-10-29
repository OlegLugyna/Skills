<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp-test');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'q-g!^#Ti$3j]?4}Q:4:o4bni8yS.s>:u>Bgc{T.e>WZH8bp?=-P#p|<*`w_>-1zv');
define('SECURE_AUTH_KEY',  'XTmoaotf`Y}oz6><R4qe^)cCy!7f;PF+>2U6;oz;}/CvC{ vMl(NvK>(f{s,giR3');
define('LOGGED_IN_KEY',    '7M0(#shGHS}+Pzs=08Bx%|%2EQWV3%uJ3hFw<IBQ rt-%jk@9MjzTn9.la{]r^rj');
define('NONCE_KEY',        'xRu<YYk-)pnRLRgB >r*4g$-i!f0M2mn>f,!)1<nW[S--MgyT^@+yV08GFuhyi6~');
define('AUTH_SALT',        'CiIGH`_MmU9/Xo3x<zHK@-e]Dds_;0~xzlAY|i]|I6TO.SGw1,J<UkG9jr8 ;=rF');
define('SECURE_AUTH_SALT', 'l5eHc+|/#lBzzDQfVn JC<@=}}5w4dxi++[O-|7v-K4OnX4^FU{BR;-}.;-r9vMz');
define('LOGGED_IN_SALT',   'kW`IQOGW8r(.]:^[/!Xr0:*%p6^V8^zjO+=kM)W)&A5p!e%=;;C(^x&hgE^?z3IP');
define('NONCE_SALT',       'tNWq~l}S)@:kZHPe;E ]Z9REmSQ4Oly3^4H]-*+m8jBwiO9w60/<c+*amBw;;e($');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
