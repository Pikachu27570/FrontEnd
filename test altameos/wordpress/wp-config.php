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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'GIGANT-mathieu' );

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
define( 'AUTH_KEY',         '|m,kG-4ogmuI;0Nyb&VEfQJ46OWpna,m;!;~#!N vwhR{C;@E,&R.in-;(2/4-lE' );
define( 'SECURE_AUTH_KEY',  '5cYnZO%wZV@jAi_nyAMBvIOd-wK,,aLjkW%o>2qS+nvK^)!VdN[u*?f&UoLf>uN=' );
define( 'LOGGED_IN_KEY',    '<7EEb/Nf[^c1C!s4GnGnz SBwy|}ZXiD[c3m_rY3O~tQn W^EOgCLoT;NvbS(p*C' );
define( 'NONCE_KEY',        'CO]ICyj(Ne|/|Ekgkxdz6eVdlO2P2N.7kyTiHBl*CdfT/B2,%aBAS8h.K%^P5kY|' );
define( 'AUTH_SALT',        'nD$iJ>5boA@!{UbiQp3sA%U.3C$~lYa26w&>-w^vN;1KiP7riw@]L*RaIWg7^c:F' );
define( 'SECURE_AUTH_SALT', '|}~oD(J8z8z>|]:FJ|r7F4|eHb3J2.?Ol[taMDqV[85G@6&][NA78W$|kO3*$C.V' );
define( 'LOGGED_IN_SALT',   '3&wu/R6tHNxP!8R<N$MY23B#uO]P~!+UO@~;dK _UW5(WH~4kq{&X{./|v62ZsiY' );
define( 'NONCE_SALT',       'dDC^J9U`RN-k1ZU7./}__fVUsa>p=M/0P-Zp{0{8wR50T`%WeM7!}n-h$Hj?*p`c' );

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
