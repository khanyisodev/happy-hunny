<?php
define( 'WP_CACHE', false ); // By SiteGround Optimizer

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'happyhunny' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'Sg^hQ<Wpus97aB=z&>}z r;;fKz`&zbG5p)mk,`I64-U2ne7.wY8vT{T3Ll+uwjW' );
define( 'SECURE_AUTH_KEY',  '7xZsp!w#3!7?2Z3n0wpe#^<W)bTPSq@7X3<).M8JS%7!_h *ct#4{!8m/z}91,Ug' );
define( 'LOGGED_IN_KEY',    'T}=WkGJBG%li,mD^uv@A`xY?dPoPmCO4:dR6w.xV`BSPN r[ |K*NW?^<sINwY5v' );
define( 'NONCE_KEY',        '_@T_^|OLv#<LJH?:Hp g&?sneCtZd&h*$M-K8b/l~Fb5<~?Nad{T}4%}bvA80`i1' );
define( 'AUTH_SALT',        'dh+zkS[(DW9,SWY 3yE}&=MKOJ!P{<S{;c@B.9_AI+o5@*Ts|!DbZAK<7680(0{_' );
define( 'SECURE_AUTH_SALT', '@hBb)HGI,l>xhl}iWqrUC./|7+Dqd;{/sIa7&i.$Hs7@1QhaihJzm>OZ0X`x.bW?' );
define( 'LOGGED_IN_SALT',   '-U_]e(u{MRvU$Cu:U.f;Dln0CM688x`gHGi}uuYB.yqPETpK@QWP=l`m5&j9]Dyc' );
define( 'NONCE_SALT',       'WHpCrY?/5h6Euv&!1iK/I?OJHv<fy{;ZmaI.l_#8sxlWS0zEx*^n<;)pw!aG}rh@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'os_';

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
