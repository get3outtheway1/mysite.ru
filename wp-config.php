<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'shop1' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin2' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '123456' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.6,<8?n.E2rHd8<fEk>HY/>Hx71jK,t!]XBL{<{G]NbV{e!pQ+bGy_T12e{7(im(' );
define( 'SECURE_AUTH_KEY',  'H?z*2owq/Gzya4ng!4uBDyn%rRv@/o9[UZj6:m6sp$V)#(Z}> %-G%VGX#+FP!@Q' );
define( 'LOGGED_IN_KEY',    'fgb%6dZjL;jq:l_Y{!Zf,Q`$yzeu5*DbBN*ZQS+3ZKXI4yI$.Zz4[D4/#75>{bwS' );
define( 'NONCE_KEY',        '[j=3f}d%W<bH!KyM>;(%n-{i9 R~W61b$gZ0Ktb/x/T.R5fkdOdBgq]g*m=lO].o' );
define( 'AUTH_SALT',        '3S+5bzo6zhKO[nYY{U?[K5*B]lf:7=GFTrpZMPCbt4wsrzWYPs~K{V^w.@.MJY8,' );
define( 'SECURE_AUTH_SALT', 'fl3_k8XO[c~n6bk)1GF.Rl_{H>1[%M 2w>IOc@N(*/*W ?(*F7,ktvU`TVQ%{`4K' );
define( 'LOGGED_IN_SALT',   'F+:}1J~;y19FPr=#ib/Y8vL,Xm8NT/& 5BBTb13uL::N(R+-0!LoMj-+!^|g.)U9' );
define( 'NONCE_SALT',       'IO!cioj_Sw<o-oQ#!7+0%r>ugg^LGm4/!GO89)P$3e[L?pvVgU]@L0aZPh-5;s/?' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
