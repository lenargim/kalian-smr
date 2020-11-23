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

if (file_exists(dirname(__FILE__) . '/wp-config-local.php')) {
    include(dirname(__FILE__) . '/wp-config-local.php');
} else {
// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'host1634414_samara');

/** Имя пользователя MySQL */
define('DB_USER', 'host1634414');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'e1e082e5');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');
}


/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'SwdT%UquBNf&3}k4OF#69*^<jKBe<i!0hP=rVtb48[ZQ~Z@AqMs0i.9O3/JWq[:o');
define('SECURE_AUTH_KEY',  '+Sl6mP6Q)VjlpD0uOLog=okSQjK;i2<A!20JDI 4?ez?<u7:c[dL[^V)}9$=?[nJ');
define('LOGGED_IN_KEY',    'kklpy2f<rT9ez>>).;-6u2h~6.9JWQP!%hEK0wiQ)yN*fL,WH}$f<9X=9_V>SQH;');
define('NONCE_KEY',        'S hAys)jp~.MF1I#BZ;C(_q:^k%*vWF,& 8{mP>A)-(3AN}&D!Mw@wlL/V7:k!g+');
define('AUTH_SALT',        'du{,9nPHirpXI-HAK5Z[?7Nxw*y :-.p](r<U1zEe)M%:Jv!uGL?[RE|sEw3Xm$6');
define('SECURE_AUTH_SALT', 'z0R8v<r5Er;X/cP}iON<=]da)Jq88@v4o^n6c5!+<`&8S[bpWg{THH$XcwDvWn^P');
define('LOGGED_IN_SALT',   'fIWAta2B%_-*>dm.]hYjYq9n)t]/0Tfb]D%_{24@g>o)|64n.cHHmekv(L.Xh&0P');
define('NONCE_SALT',       't<&r(-*z=yxvLTFjXh`tI0t9CW#RlB}jXGn.cuF,Z/:bz1+w= TI,Dd!b3Y.LdYs');

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