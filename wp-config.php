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
define( 'DB_NAME', 'sedona' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^s/^T3@_V2(?ANfD.8%_))LZ=g|jW!F}w-iGCnjh7yc9y7[o%2y,g>|9Q?EvMYG/' );
define( 'SECURE_AUTH_KEY',  'oV2hw!EwpXOGh9Y~zQRj ]ntcg.Z@C8C(}5r(f`Xh/Zi_^_Tb9)OQdjS}Tn/>m[c' );
define( 'LOGGED_IN_KEY',    '$%V7jC F&OdD i6e]_/z~W4e^fK4+F`UrmO0;flf?E){WlVo?7+>P~b0>F%97dlA' );
define( 'NONCE_KEY',        ';Bt6qA&6B1G]qS+(+7R5Y1K*Fop<|6_TLTLG[|/u?rm4i)R]0cgUWxFU~CoOwtr#' );
define( 'AUTH_SALT',        'XEP&u!]WWCQ(+,JHW1v,6#={C{>YE]6B=V20!Uemd&xCL=O=&7DPfz6o# Y!_a6k' );
define( 'SECURE_AUTH_SALT', 'L;4[_+{F}/2P<i0iZdf3F-,GO1cbsIl_p%Hk}=E[`nOzqv,FjL&5>u2OQiaE]Yu ' );
define( 'LOGGED_IN_SALT',   'm8L4V$!ko!sPk!y8b*#&(++hHBaZHHw!:rzhPG#ct[4*/a8;i}{&hL;Rk+.<*}!|' );
define( 'NONCE_SALT',       'NOsFV>7p>fd!QX(q)3oHfH5,,6$$KV-%<q|[G17iEzv~:R5=r2P~@cTHy<`pS5=y' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
