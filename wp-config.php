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
define( 'DB_NAME', 'magazin' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'magazin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '1111' );

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
define( 'AUTH_KEY',         'UnR1W,x$P0,jwu=Idl_s1n]p#3bq]2+@es]}`D`6D0(;Ot= *|yUR=h6+A&;@`?~' );
define( 'SECURE_AUTH_KEY',  '3c9I>o:@<i{p68-Z14cM^jPJW*Ct5Kql?(0aU$i(;`E%5BysY=f@KtOp3@2%}k0C' );
define( 'LOGGED_IN_KEY',    'Pl{Zp`,m^aO;uO2q( {s4z|@Wy{[*o_$saz:X<2)[;f4g2[P%44kf}ptg?4XW3<p' );
define( 'NONCE_KEY',        ') T3O&IZy`r,l{ 0Z9aPYo/@z8$oTpCl`fAW%Y<<5mYgpI#;U7URT[JE3vr+%mTx' );
define( 'AUTH_SALT',        ':krQ+E;iDZRe;,@yw:{awH|NsgZI1m<[1H>&AP7Z]c>jH#t[bfR,DQwvALr[W]r3' );
define( 'SECURE_AUTH_SALT', '0RUH~k!O^Y0i.9aDzzH:}|9af|ha!ZA5`0F)8fKZqUB?}^^N,V{1a_`=t3kzQhXX' );
define( 'LOGGED_IN_SALT',   'P>o/p:MpIoN=2:7I`Aygh#b`Eg !g~K*_ohMN+X!JM)qXk}@(fzuIrEMC(j}$S|}' );
define( 'NONCE_SALT',       'b~yW$.D!7m,z%f~d)4zk2dQ7d4@i1(5v4WWb!NK Oe*Z@%b5}Y:>_>0 xoXv(w/z' );

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
