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
define('DB_NAME', 'saxar');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'l!83d;{|Y_mzxF uZdg<<,*;g/fUuaSJTMHzEQzddIShpqWQyR*/M3Z/Mw&o0u?4');
define('SECURE_AUTH_KEY',  'l0KK(][zCNP#LTWWx//BXv:umR`9{KgJt`A*,VdJlO|s. 7*.ZwG24_A8H<k{KHY');
define('LOGGED_IN_KEY',    '*s@fTexh5;N`k9s7,G=>:C[q(//12]~2%%-tt)8 m8~ubFD%w:kb%]?>Bjou9*S3');
define('NONCE_KEY',        '-U[EQ}fKe^*L:{{2o;5EoP3as`><#2i=[!x+Em>WrH8}Yu$=j/EdJ,hmomQJIvZ!');
define('AUTH_SALT',        'J9 %*BeuK4Yw*j!c46U`uE&hg<f^1s]rgy^81+,D)-JBkb!T`<3j;fU[!8e.[Q6:');
define('SECURE_AUTH_SALT', 'L[#237ac5wm4~s]Kh#v,6$<n~=xsQh-KDfpnW4VSQy6dRj{N{atrB=6nCO9AnP:z');
define('LOGGED_IN_SALT',   'xIM-KfD&O7ix-/DjU&j@5Zsgk85i$J^|.2X*2oRK}>@F?eI63F)eorBVTM{Jc@va');
define('NONCE_SALT',       '[BW3D|cV%q,xF^VksDhe}m}aT{HOuUqK}L6>L |9KalMQKG#e^/r<N5pI-O^G?]T');

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
