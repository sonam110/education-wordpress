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
define('DB_NAME', 'template');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         's0FBB$iU)D=;;p@m+PDe)X1~[d/i_{4N>pZE{KpyWzi4rm9>Ei[#*f<T=]S82)uh');
define('SECURE_AUTH_KEY',  'U?8*PK)!Dd<Ss;vZfGg2;/G.xER9ag:QJ)BS;j$YHTk6uy@~+`#qb0wulE+]lJoT');
define('LOGGED_IN_KEY',    '*V{4!~m9MJ,>kfEu)d%AR|c[P?pi=)<[?q2Hn.W%j9s-usDZx:ihd|Tsm}ul/@pH');
define('NONCE_KEY',        'Ju<)):fpyyew5H5LWV-;*WV5cEpctSf}h)wGwJAQFO/p+Q_Ze.N/B-Ie*<,2#+%f');
define('AUTH_SALT',        '|pOrc4)AT(byd]W%48^[2[-{c>DI$SmCyS,5RxU(32;ArGxVKG2oOX!_jo_N-qY7');
define('SECURE_AUTH_SALT', 'Xl1oEjt+OmlFkvX#,<N_j#fG+]Yb4id&JMzA;Q>Bg;W#aOLRp10B@&3kTW.!HFy6');
define('LOGGED_IN_SALT',   'Gpkozc.VQTwdl3BPcAV}laPufAOsR0cB;iTk,`y)0tAnp29C`{yoz0HEYUoaByBO');
define('NONCE_SALT',       '?DLG/;&HahMu}Wb#7}eh d k7sJ1oE{ZAcol;8L(D9/?uH[pFZ]A}^_125Z>-D8H');

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
