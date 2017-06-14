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
define('DB_NAME', '01data');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'qIAyh(H hQ@5E6f_Lwve.`j;~8Cu**?8I(6.Fx$^6$A$hwhROo@T-sEC<Y;[;S/<');
define('SECURE_AUTH_KEY',  'V>0uGLPL2f-VRPp1eBc9|(!- -p-74a#{1]uyM;3B_#(:q|@70<-DL/A-k# S~m,');
define('LOGGED_IN_KEY',    'k_US@CC|q_B/W]S(+]Z.qGEXT%1W3t>9%h*Mp+} d>p`@:$SOqydGo*Xwt/-B^n-');
define('NONCE_KEY',        'GMZ*Z%HyEN ]Zosp&gy_D^rG|}jGWS3z>(JpecT|{cIqfb_&m2-,OPag0$/c!n4+');
define('AUTH_SALT',        '~qIr/c`;bc`q,J._nOD[;e.#M;hC7-M]M8!+vhnl&70=jTT+eF4Zn|m@l/5:~/+)');
define('SECURE_AUTH_SALT', '[P8U|uEjFil Y/NbGaoxAIV->53vVjTt Z_gz3BRU};4Ee&_A{Z-U|#|[<E6Dlv_');
define('LOGGED_IN_SALT',   'YOG6@?<v>m;|)o6! ]pq:`s,7lUG&WgK;t~!))mB&oQRA$T3gucw}A4J%OjHhSH|');
define('NONCE_SALT',       '+.>q5khO^.Ti2-uxgwsPvK1RNS#OxV.0 UTzXc<9t<>F%-HUMZs|iBX|zp8.$!S[');

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
