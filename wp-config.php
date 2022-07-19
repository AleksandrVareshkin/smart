<?php
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'smart' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '@-0RYIrx4[Kk&af)}l%Af*,w|*oo~NFjTE8tm&D:vaVuKR#H^{!yq;x!$@r~.nM%' );
define( 'SECURE_AUTH_KEY',  'y9lN7O[{n>5)_y6lhWP[X4,!pw&}4>(+O:-+=k]2p%bcY[U9rcci?@1ibZYhR)1!' );
define( 'LOGGED_IN_KEY',    '$]qPj:e#E3hd@>IvGO!PFIK2G|[P2y%9HQ$)i>Okm3dI9.Y]~3_Cis)qCJIq+eKb' );
define( 'NONCE_KEY',        'qw~D%zS.iZG`j2@7MY067KU6cs k11v#`XJ6S/7+hf:}Rk4aei}tJ^=(Qf(KA)`~' );
define( 'AUTH_SALT',        '~4UA_CK?yYBBGOa?JDvtDxBTL3)]&QT@kXOg;g_7xoLGjYfg;;Rmb)nve4D}J>x9' );
define( 'SECURE_AUTH_SALT', 'X FwGD>j)h)UR`T9a;`Y6Amt@4f}h,sR:z+$1&+Ov/5Ut[aC;5k0ixaov%*{o~[=' );
define( 'LOGGED_IN_SALT',   '(75_>#n!sy!HIgi|XRQB^43k?/L=]~#}B?{(rF1~Cay&Ippu-&(&mMQBJ$,Q;<l6' );
define( 'NONCE_SALT',       'rPHw00u/i9axX}?C Ngd3Tt.*sf822Up4D.EBEL|{f2T]qq3y?PZpqx&Dt).G<}>' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
