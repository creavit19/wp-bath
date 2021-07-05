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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'bath' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'bath' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'ajLILrrgKxu3nWnp' );

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
define( 'AUTH_KEY',         'zwm_=3MNMXLvFrQ+[c}nnCBRwS#MD43^%]la!?(l,un{wFF@5ww~zOsZc5<*>n#f' );
define( 'SECURE_AUTH_KEY',  '^s02gao:sER7xl-)r-(6>z=CWovp*bQ2w;<j8tm-buEM)+=EhhX4FfoMj,Ci+J*C' );
define( 'LOGGED_IN_KEY',    '5vVAt#p[;KZLhrsub!<$n05][#ncf_n8U%v.7_N_q2icX!t`8j@g`XsL+0q{hId,' );
define( 'NONCE_KEY',        '%ZfdC2i9HhTpO-Im!t&jg#:W3HI?p;;O^4m`1)gfr[BkIc0XsiQa#m-87.(|M2EC' );
define( 'AUTH_SALT',        'j!!GhT?n9[_C!XD@dUCjEm/xQCEm1j%{]~b$IbAh%6T@r0XH|[H#<`+;vApVOC=@' );
define( 'SECURE_AUTH_SALT', 'D@*2ywUdd?1coH=$TwRuJ=Q|Hp%F]?bj.+Wbm;zN-_9wlfRLF-wu -}{,r,.+iDY' );
define( 'LOGGED_IN_SALT',   'd&iA!*(9!d(P#.f`s1?6Tm,goQKTD)LMPa[H6nRY<15~]B%wV XL,ybj#nr#Z~K8' );
define( 'NONCE_SALT',       'q9lTtnH?&`d~4G7!e?(F|7S=!QBn[Z0GF?OdN_WK&`-;5GHLpEdX#$!DMNqV^bzq' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
