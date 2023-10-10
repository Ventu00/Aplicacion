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
define( 'DB_NAME', 'app_bd' );

/** Database username */
define( 'DB_USER', 'web_app' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'J`e-g%{eYH YNG{;7QkbiT<<m|>p 9y)-t{ON[m0awi,c#/2_C//mYt&j)0{s5 @' );
define( 'SECURE_AUTH_KEY',  'P;!*M^B+m@i`jFv`aG*Uwp KMnsBG6ogL.d6CAi/,hIN0D,(zD=u;-7y: R2)FFm' );
define( 'LOGGED_IN_KEY',    'STY3ALLMDsmH;w(h8s  :pL*i[#Z8GVQ%f?$o.R2(1Fz6KE>cQQ}<_)30xTivp[o' );
define( 'NONCE_KEY',        'V`OfNL%np7XY1D)1ML_s)ML6,%dON#~f|E_=f{~CP<:/=?xm,A9M?{!{F~lN6Avu' );
define( 'AUTH_SALT',        'M{>[t-E2ERAS1MAA:h1PDE bp5[m:-eVWoC*p;aq_?~+<d5$L2J>JmUY;s8.^b+K' );
define( 'SECURE_AUTH_SALT', 'nX%S=wJB]NsKkt)k^3CkBVh2^;l;}i&4HvtQ~^?POh[O@eV<JhdNG/U~`zGU:2(]' );
define( 'LOGGED_IN_SALT',   '3E0.L;Pk<)L>3,]P+36t]a+Wv=Gj=+Rj98+[CSLbw?2twIx1BkP#MOo5u>|n2PEh' );
define( 'NONCE_SALT',       '-.S^B8vF7BQ,g[zeL;[0f|N}@c{qx~vgW6*lN7@1fK[/(LD+L1kwZc*|7bcqR?~4' );

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
