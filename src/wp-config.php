<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'films_db');

/** MySQL database username */
define('DB_USER', 'films_user');

/** MySQL database password */
define('DB_PASSWORD', 'devit2018');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '$I/)R_Yd-)`aU($$61[eGs*YIX[UA:vML*]WaPOCYL:#(:ej2L3?RtKnpsD/7CWH');
define('SECURE_AUTH_KEY',  '|%b`$LGWl`Y@yN5{>q,<b2x1ng&uL):zi%|M7(n$zhT0x4/_HVT4T6GJE`8vS-06');
define('LOGGED_IN_KEY',    'lz>O,Op9_C6tP/fT<.|/[}vl7w`y9yaNPWcj0%/x&e#|j:5v>]dd7RTQ/0<6gFm4');
define('NONCE_KEY',        '4?m[^1RKgvjfYK<-]onFw`6_g`MDW@aC2=_Az5Q12`3oS* E@*ogz.XlSAwNYLei');
define('AUTH_SALT',        '/&J2NWCy .]UFn[qMO!zO@8[_v7AxC75VYw>/1M/fBc2_YDNKDuC);#4clCv*IuJ');
define('SECURE_AUTH_SALT', ')LoN%ix~:suRySS`*;ku. Ut${puOZ@*6e?ye2 ? |ykT?;]/g<*Vv|-YeE`:%;v');
define('LOGGED_IN_SALT',   '+o<qEb5o6w sAEj00`8PP`M:M$VhhvHNChzG$~h[>;Qz:2KtKsI@%1ujmW%fNVI`');
define('NONCE_SALT',       'XW{C{a:(wqJT=8=9wD1V&fd(c9D,K#Ckp4tR%,+%[sFqb1odTZ<>[<95Yf,#WOwx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
