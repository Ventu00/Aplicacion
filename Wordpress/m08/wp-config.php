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
define( 'DB_NAME', 'proyectom08' );

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
define( 'AUTH_KEY',         'D96&=.e,w>;:uL]lQX:i7%$M~J&v4`3E3-+R8x:x9j6,=n_HpA>(=/H{;));#>u7' );
define( 'SECURE_AUTH_KEY',  '>prxMLh*{I/YD`mNmEgBVnUv]@#Qzc)]Hi$JD9(Z-/^mb3t/i$zj/4eMXlt`YQ{g' );
define( 'LOGGED_IN_KEY',    'Lj%APgr^(3D7Lxul^II7Ln9s[$jkG</jKBG/nMGxuH}v24s`|Km,$[Z@2|#VI68e' );
define( 'NONCE_KEY',        'TIxGH4d7R8,epaH0`&Tw0g?N(x-z&Jf1`3CudO.))jT@$RO>,i/P;>!EoO>BE^K9' );
define( 'AUTH_SALT',        'J^_Qy36R^/R`Ly06Q[4=mzc=zBgp#xx-7?u]usnElpc)<Q>-<@aI}ej`FcO4$@`]' );
define( 'SECURE_AUTH_SALT', '/LI:XZXKS@g?wh]!Ps6uV#muuCR}tRo2~AL]<%AOmViC&3.`nq t$N9ru#f1_?$6' );
define( 'LOGGED_IN_SALT',   'Koeu38u(;pxfr0E4z.i(<-I7R(lQNU8>D^]xzt7y_NMX^8?5lesU*x%d|aOrwy8,' );
define( 'NONCE_SALT',       '7P9W#n`f;-FEe[cu,j[26m(?gMqHIL4ZkLl>kYJX9(P8C_nEJ1be{C/yI.bD?z?r' );

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
