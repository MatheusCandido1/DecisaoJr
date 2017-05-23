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
define('DB_NAME', 'wpress');

/** MySQL database username */
define('DB_USER', 'matheus');

/** MySQL database password */
define('DB_PASSWORD', 'qazwsx147');

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
define('AUTH_KEY',         ':GEM2S=cjJ^PeWAcKle+>OA>zN+N66T%)wg,-7}f-:H]8ZMO^SM,{<u*C|2oXyXK');
define('SECURE_AUTH_KEY',  '.:P=VFeC6t+Fe<%O8QNFow&Q`l>G+d4<h]> e;Gtsynm-Ue@Cmb.w&d<)]qJ~;ZI');
define('LOGGED_IN_KEY',    'wn6uoB7^IN5c@|/$E8 TX]ZmS[$bt=i]3gk&,VI*d9(:pISX#/`R?q*;cH5/XZHS');
define('NONCE_KEY',        '6$tWC!^MO8]!DRY<uIXgUcLa53D{v_c4 /L/14HBQo gF]COrSR4L?qFix!d|<jr');
define('AUTH_SALT',        'Gz6Jk8`Rl(k@:phn.7_tc+ksLiTc+w|C~EEAC@&NtRYP2*7z-RKT~.w, YG#,C!L');
define('SECURE_AUTH_SALT', 'U) }l9N8#JZ1r8}yrMG*-em*3`o^+)}Oit-/54o5O`AvO+j-3UZ$EKxs)pzPzK,|');
define('LOGGED_IN_SALT',   'GV2PXzx6KOo]Z{}jAV2=y*xaY#7?,b|tuGS/<dhw7)WyM]rMSM~0-V]`Fk6dExz!');
define('NONCE_SALT',       'po|+^n!G$v~A5j0g[M|-MqP=h36#nK#GFK$5?TVjWd&8{[tZMhc1/sA28%4W:+>`');

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
