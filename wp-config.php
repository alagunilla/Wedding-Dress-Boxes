<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'weddingd_db');

/** MySQL database username */
define('DB_USER', 'weddingd_user');

/** MySQL database password */
define('DB_PASSWORD', 'presariocq56');

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
define('AUTH_KEY',         'BlG2gfg]GO0_d|fMf+Td&zk?+$|2n^gQ5FjL}ZsHL%R1/J4/2&LksOVeiSn%q(J.');
define('SECURE_AUTH_KEY',  '][OR(GSh*L7c7l>35v}v#hI )cj)Fp-^Th:5J#(I+{{#u0c}Z(}<J?*}8^gWqT^-');
define('LOGGED_IN_KEY',    '|{W;&e`/AC||r`-`:Ld@T,$wC[TO ,h%6T~AT;Ql$T_ueH=*/~)RiYI`tG81.k,-');
define('NONCE_KEY',        '{1uN^.V<+gF<Qq FF|F;kL .?HA=- ~X/L/|$ !i>jT0b{PCwHRC+V46A/iScrVK');
define('AUTH_SALT',        ' SW*9P{L$+oO>O%FI]SJzX)4jBf3~8&.)HP0-u}UZ?cUeXU -~Sm2tUv>+0/w:#+');
define('SECURE_AUTH_SALT', 'z)hXSC]W)_3l%`FJ0ug=JHFwe0fHI&Ax/*KU%v~2_t+k.k`LQvn2|ay^h-LSPxY,');
define('LOGGED_IN_SALT',   'P>P)9SHuQWEW#ld#jNitB|:0lJK+QWp@Xn{sE@AQ,v|_qyRO{=@+&Wvp-jS%3*4V');
define('NONCE_SALT',       'z-|tb{|(ty1`-u7:Rw{@dR$iWS|?-+9U+j4r.me:FU&Vn_N_~rUtG2li<rc]3}Pj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wd_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
