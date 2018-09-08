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
define('DB_NAME', 'learnwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'S5q}Z5/}F3+G;#fsE#5%EEGRMp [+3pvYLr#?nI(|QFZoh|W8~#WND$VNF.e,H+5');
define('SECURE_AUTH_KEY',  '+DE0Tn55tMsv|8lx:3[L~77yo%:e[F9XwMbI:P[Z0yVmdjg{}q%#nsp/H|2!?OJ&');
define('LOGGED_IN_KEY',    'E.n}4Fdup!`P&C<a2?|ef1Jz1W|c||5efs-i]Y#hID)+QnBoL[|!/=7,p9u*)2&a');
define('NONCE_KEY',        'ebg!d>jKiYn0m$gG$VXT6-wJEQ-l%#NGv_vSC+q/D9QE&9P+^6~hr5,xTN,6gN.T');
define('AUTH_SALT',        'A=z/^[J0B-!VdT#wP|sq[^(`L/rNot})vvi#N|zc!*U{8M6m[v~yva8r*O~^uH0X');
define('SECURE_AUTH_SALT', 'lSH}4J(IX?u`R1!+/e(NK &!Ar)D>k5fjKq>,VdbB2ws[{T>;qpV%D^xs^%cUw S');
define('LOGGED_IN_SALT',   'O.>*19*KB1h`OFc%5V sembYGv&Cf/bT=~(:T czO@3c^0| &K`4l[F@e;gFo!]N');
define('NONCE_SALT',       '}FL;pnLGe4#)a_HNUM-5u5G]9q1:x`M_+G-4-4Um+HCD*#e>Hzf56$Qk$5Ju|,)i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'learnwp_';

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
