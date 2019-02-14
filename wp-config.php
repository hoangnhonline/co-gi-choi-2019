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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cogichoi_co_0563' );

/** MySQL database username */
define( 'DB_USER', 'cogichoico0563' );

/** MySQL database password */
define( 'DB_PASSWORD', '77004b7577623300' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
//* Authentication Unique Keys and Salts.

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'dv&_xvz-S/2;kr-LNM!eG%c_O7u5#+Gdbb%+|uJ D$y,E{xTOKq|+iIE~P%Z(RoB');
define('SECURE_AUTH_KEY',  '/a`ZR/+-7?S<&,h:}Ij|v5qh$GF>A_+pHNYl+`.mi-=fUfBwA2m8NjDvaBF,yKvZ');
define('LOGGED_IN_KEY',    'Kt?-1FPD|P82Wb{5&oMK7v|.KY31kRBXX#!z:BE,F}:vxbB-T%!Q5nIg^?t6h/y[');
define('NONCE_KEY',        '>&4AJo[$R,A{~pHrH|v%]<ONGKlYuM;8g.T-Z_hqn_cDfRgYGiM8(O[lqo3Ye]8c');
define('AUTH_SALT',        'HG`9KhkI%-7p/C6uKs0L9|lLrX+,b;AM[!>8ziS^HO]tU,o?S$<y)fNf+^~w}s@h');
define('SECURE_AUTH_SALT', 'R!mVtb4^P~AOs5$Mc-4m*nDxdkPDUQBG^_66$2s#Ccfl|MvI-N`zUT.lpM9A M<%');
define('LOGGED_IN_SALT',   'yH^uWgSVu+.|] 1H:vN8(,~_)_Tp<iqj<`y/SqsLCts@H`Xq%_CYUL(S`>nS-^7o');
define('NONCE_SALT',       '4mI|`/R5<HU)D$]H)gzu-<R>2A]+nmB/9c4,N2[+EdEq3j1oS0e0)XAvso=-VlMw');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_0563b33_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
