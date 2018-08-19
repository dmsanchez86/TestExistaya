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
define('DB_NAME', 'existaya');

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
define('AUTH_KEY',         'asT>Z^qSbnaelXLWpN1Qbg7~O5gF*o eEFjcuiPgG#&oI8QaCli$j,dZ7$HTM~Wx');
define('SECURE_AUTH_KEY',  'Z K0iLeer:AowKp;~&H].(lkgIO`Rqc4D]]}F`4_)|~<Pcx;Q]eOkF/PuCHy#=;-');
define('LOGGED_IN_KEY',    'H}vsp-8t2lMsH@C[E8Hmsp#i[ST,TrYTgg ngfA@SQ;aFO?SC/&.4iC_tZK,GuPW');
define('NONCE_KEY',        '1p&Q rg~/uf$BU5:[qvzHUKa,pAf:DT{o$Q,@PE;r}Vk,@]~yX9jA,NSn_s?rV?y');
define('AUTH_SALT',        'kFUN}~G1kTG+_j}if(E9Yp^TwMv:`tm*3{Z4uCAv6<Dilh6;XvM&-lSIZ=BA;hwh');
define('SECURE_AUTH_SALT', 'jmls7_PYkivR8Wmc(Uu?2d09YWaO[2%@vEpgN-g1!jPKo|B#oU#5G/%cjbN>?.jH');
define('LOGGED_IN_SALT',   'Hf},??B=N!FvJ9!{y?J%;6.A5:bXxHVtj<Q3{Sp+x.s.&<[!Tk2YAk]pP=1h0!jt');
define('NONCE_SALT',       '4)83M(L_LZi`j14fmY6/KYhy%:YT10$Ns2HicYWTa1m14m:$:}B $[4Rn_h[B39,');

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
