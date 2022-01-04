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
define( 'DB_NAME', 'aprince_PrUFI5');

/** Имя пользователя MySQL */
define( 'DB_USER', 'aprince_vPHar6');

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'iXYxJ>#N11ym');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

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
define( 'AUTH_KEY',         '*x+|5uQ(_>Lv%od:$yBkv&Aew8<fX0aW*oiM>tGQT~+)JejH=XwDtnG^[0.VFWGZ' );
define( 'SECURE_AUTH_KEY',  '0|Wapz*gQF;[E]Q5$[M5#V)bh6c<PODx29A8>!vW%ELRzg}YfhB~.Tyj`]q0*w%|' );
define( 'LOGGED_IN_KEY',    '[zLqVO{hV,Zi%^X~PoCC7n8.G]C^fl}O#l@)d4#%y38BMH}<Otu9pHACTc^}xV3+' );
define( 'NONCE_KEY',        ';d8&1RKG1&](%9l@Hea*G%>[32@!KDS<%jg.o~u&aj8m n*RLBB)3M@XSEb]/W,*' );
define( 'AUTH_SALT',        'o;EQS8n%DM!ozdasz6M%<6Am6VI8(y?(~IN^Jp__Yq(@|_Q!p2UhVeTjUDK,|.xq' );
define( 'SECURE_AUTH_SALT', 'q9`p|whurSM$}(X:eI+i`d;!9ev`se9:.~u@5R}=[`jDxA3lyGX*Rn~a_A|jW6M=' );
define( 'LOGGED_IN_SALT',   '35Q<bf{C`l*;54R9:LX5?&Yz.|+gw;JPtVSI-B,?%y9=M;%B*S[!AX#c=c~[6}v;' );
define( 'NONCE_SALT',       '^FKBZb}si>QNA.6X9:m$ZNam<U1>U#oAO9lz3OO3kkM{7TTNS`5t<1|@2O7i,.}m' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'Tls_';

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
