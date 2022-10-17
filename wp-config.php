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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'L(t&my[3N%(fFTaDmG<J(HYWsfL,Tz}ckaNL>xt:qLvT!q)*0vvSL[`Dy-dGF3P[' );
define( 'SECURE_AUTH_KEY',  ':/0SKR;Cl znz{CWZ#T;]XL1_r8({a.WD<v7%o$~{!unpoUBa2vzZ kl8%eFBByH' );
define( 'LOGGED_IN_KEY',    '~(%n9lZAgSm>}R,7dd4jbLkC_|IY-W5-wlP0dC>0%0^$7;Y0>F*7D/96V9AK2?t!' );
define( 'NONCE_KEY',        'u+c%-S6PDF8~PfGct{m^:~TG:;JAOLA%OnwM5!A>m-Y+d(`GF[V+d7)h~;.ZQxWr' );
define( 'AUTH_SALT',        '^uR&EX/5]pig;hXb{/Novu|.(Sv?e`!H#Zs}}VS2%s_XJ^$H-1u[MVASue:-6ygG' );
define( 'SECURE_AUTH_SALT', 'fsLh.5~Oi~~^/4_{;(!9}p}Pit%zG}E rr5}?:fl`/^#?1|=!X4PRke/kF.e2brt' );
define( 'LOGGED_IN_SALT',   '4Xm*P+aoc]588iXWgcXEy9wvEK9d=8Oejv,aQ:[bu0lRnu<=tx{O@Cs2iW<4(wmM' );
define( 'NONCE_SALT',       'QqV;p~&F@n[^TL~<hO8,F(Uy%M%HEmbDxpSyxAtii/t$ sy [,+N2T`:s|6y2vS{' );

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
