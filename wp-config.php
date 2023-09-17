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
define( 'DB_NAME', 'phongthuy' );

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
define( 'AUTH_KEY',         '3^qgBn7`0SjS;<Hq=xctQTv#8i.pFfZXj(E}?q_.VB3@A|C9*O/q=DU;5CD]S`]x' );
define( 'SECURE_AUTH_KEY',  'EB16xCp>ma)u^D_0Q^o$qY;=Stt0JLN&lhW1<XY{udfQFNrmr<!`krBv+Q6zGy/9' );
define( 'LOGGED_IN_KEY',    'J;Q2T:tGZF+T=u5,5FY93$mf4MP9-|?BK>d{xhrQ{I!e2g}}P/}?AMSl+Zam*[yW' );
define( 'NONCE_KEY',        '#Lh#%Wzz5~=&p2@%=LGMSK}jn}7y=$(fbH!}t-.-[y7+ XZD$uQkkojgt&w?VHa0' );
define( 'AUTH_SALT',        'O~1PY&O68-OHSy&2.Y)SyF/)&]kfV3s4Uy[5JBjXWx{p2HaR(=O2yC2M^?ID@Dg ' );
define( 'SECURE_AUTH_SALT', '$i%Pus p7[j@qu!:YA.Q>pHvS=~S6eBo$n*WDzAJb]35;A0n[<rTkxf3|idAS7Z[' );
define( 'LOGGED_IN_SALT',   'Ut*)X|:*z[._-Oa>h>!f>bSC4A%Cf?NK/{N/w[O%|3{W/|bn_u7&&vKcFH9Y6^eS' );
define( 'NONCE_SALT',       'kaE&s=U$Z_aY -)RYkL#@,5e5C[bEUpRINH}LCGr!S%8|%bFeO]g?ENx:Q=3VBHT' );

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
