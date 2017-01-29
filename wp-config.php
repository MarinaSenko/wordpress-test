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
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '3Uf@U{pYt^.J1QP(rE%?q,A9fNgERT<WrEiBxboIJHcY;&{[Dhyk8SC][HX+bcQd');
define('SECURE_AUTH_KEY',  '84_19<U8PG!V{AxkJ]Q-z|{8^ZB<PvOjfNFjF@Zy>Qs}Dl:Pv7>HX=I00NJdcENj');
define('LOGGED_IN_KEY',    '(RH=8c=CX|fj{*+Vl803+4wY*n<EYbsLWf.-Fqz#qcZU`/i)&Pz2K)@?cM0<6osB');
define('NONCE_KEY',        '>vnE~5G2jbgT^uPm r/NxwpAX0!FfW&#j=Q#cY(9n~9} 37_CNJ_]H-8Ihm,lILf');
define('AUTH_SALT',        '8}P%y5*Hm>G:`rZ7or8hv2s?A`3(YqCOO=bwd476`_w n@%<6YIW}=a~|Y8~Hz_p');
define('SECURE_AUTH_SALT', '(6{B)|<CVIzJ[3tn.g4i|#}9@l4}RQ3^M`7D7sLP1cFSBuG]**?R@nuu*6vUiAb*');
define('LOGGED_IN_SALT',   '4f~ImvM~8pFZpZKw4-7s#L]8VZ_G}t%yfE!0rch:H{%@VHE}*E>fzQl&&/.qf#oB');
define('NONCE_SALT',       'hTxT0![&^EtLQ%qAsNbllNe9_Kk%>C*9~8k|$x$i^%.r/:*}Up>3S,53ZUsCLW6M');

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
