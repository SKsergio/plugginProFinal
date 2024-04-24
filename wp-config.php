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
define( 'DB_NAME', 'Bdproyecto' );

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
define( 'AUTH_KEY',         '!@),l9VQ9QH& lSFWBUQC*_)xn xPj@r,aGlBm<(KVJ6$;$L?e9KgoIN6/e6_*Bh' );
define( 'SECURE_AUTH_KEY',  ' X>3[&N.n-L^*e8SK4:S{MAoP%8u1AQM(]HbE)/Hg)iZ4*eD,lBrEzUf]`k+7S5y' );
define( 'LOGGED_IN_KEY',    '(Y+38n&@2antl}k:G#m3nv0xy?qf60vkr}?p.dwp]8T7,Q8bSZk0-:0$z]*i`k7?' );
define( 'NONCE_KEY',        '+ZF)tI%!-5R k}a!qME4sfN[IPS%p>eDj;o@tJmPQ*YQ!nV=e=zboQulPC9&RVpE' );
define( 'AUTH_SALT',        'k5X0=GGP[`7}[!jOeMTYAx8me+UOTBEe%/25DL;26i9#3HbA)PpsbySa%;inj8<A' );
define( 'SECURE_AUTH_SALT', 'T},0OT,I*M(}vQ6h{q2yf;XBXm1 c<3CAvQ>C<=KeCZq8W$/a+A>fAUZ7[X@B!*u' );
define( 'LOGGED_IN_SALT',   'LEhB`j!yUL>Sx$v9AzERpfn`2q]C4k*uJGV!`*7Q9c-.V??I/iERHI+SE,z#*I9L' );
define( 'NONCE_SALT',       'OUyr#4T(4c0Zmyrx$t]XF8+ACbnpx+HBJ EJ-QC2|ry6(tgrl? 5LwHYNeT(-O%C' );

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
