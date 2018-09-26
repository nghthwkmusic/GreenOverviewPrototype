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
define('DB_NAME', 'test_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'W~$1ZG^2%(jAMU5SJO~T[hm_t6h.+F#Vidq.4>s<L>/-bZD*fV`[-a%N[W*YB#8H');
define('SECURE_AUTH_KEY',  '3?^HUIF 1_,-cE,Un(UUn4)s>m|S|X|S/GH*xt/sU0MKRoD/N2$rpmT)&^EZSjCf');
define('LOGGED_IN_KEY',    'v.BqQZA4_==KVEm2o^|[4;F/JgL9Cb0+{)#=^x#5`@n-i_mI.{GI(zjY0rooXXH.');
define('NONCE_KEY',        'zPX2z{7*cjy^:AgBR4s)0o/wV}/pbgo;G2ikV0>CC?MbWv0E!2`:G{#h-}DV%f&[');
define('AUTH_SALT',        '&-RK-_:!=TYZ8HA?/,C@Vtf[pfmZdJ[}&,sivC.1bY7.1<-t0%BAzYcZo8`0T1= ');
define('SECURE_AUTH_SALT', 'xoqs9rBdIt+RP!94,eCdb~x=<L^4%(.bI+c2q,`1~bdzair#]c^o@J+Zes[2zgZn');
define('LOGGED_IN_SALT',   ']fGfKXCJ]`zD=Zm!i.<h8pqJ($k>*v:Ew}d6sU+9dxSPgq[g[YL?Z?#Od2nyj^i`');
define('NONCE_SALT',       'RWnG/[5tv/Zvev]wWH2,pX,iBIrLfHT2~f)b@kr.wZ]e0qzQ^UVF.x;2c*5:iUy-');

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
