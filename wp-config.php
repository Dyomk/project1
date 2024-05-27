<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bravelv_shop' );

/** Database username */
define( 'DB_USER', 'bravelv_usr3' );

/** Database password */
define( 'DB_PASSWORD', '~33])?zHS$g3' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'bb C+,hMbSESy(90[1xXVejBp&rgf1^UgPq1+/%V&m|ud}}W]}b/&x#^223g+>dp' );
define( 'SECURE_AUTH_KEY',  'd?>>Li7;^fRoboA6;5sj,T$8Y`9UvaHf{9:)[JATyA6l][PXlf~9qZD4x{%wb48>' );
define( 'LOGGED_IN_KEY',    'f7c)R l~(o$Cmz*pPhR]n73lCcUw0I1C#:[_82MKd|>-5|C]=;_Ji1]{<3R3Txg1' );
define( 'NONCE_KEY',        'tmw[qhx^Rflc9HSujaXOxG.:!=@1mF{a=wYLLEA6y{3IP~hz9/6Vxijt4S$uPtRN' );
define( 'AUTH_SALT',        ' V>``FB{Lv;hQiJ6&d_MS_^>l;fkSE(oFN2<c#EOY(NJSJ{RocZViDf.voBL4-YN' );
define( 'SECURE_AUTH_SALT', '*{t^wGB}HTF z=WsduV:tP}.)M2w689k8#_:0g-nlWW:A)aBB}HcFHT`N[_85PWF' );
define( 'LOGGED_IN_SALT',   '$BeE7U5z=_s^H]c(hJQZ4fT~EyJqg-1g6kJ8LKtE`d6mY~r.]VjhMZlz|bfE*_tM' );
define( 'NONCE_SALT',       'pl1]d#h9Zg[jN8K<9G[mdd@V%0#j_g+/>F!(s>^yEL q72!T]*t)ZN93~wv_Gs`*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
