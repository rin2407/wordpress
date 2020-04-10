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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pgg{iYSx/CoSl./*xKia^^1-6T`P)z|=5}</*Kk9H%[lf6XrAwAa[N2Z;Wyep`/p' );
define( 'SECURE_AUTH_KEY',  'W-`SS2BA1|jE|Z7b#8M1irGUK;JnwTl%tuo*:Y)k@r0b=w9dofC{ho+:C1I#7V7n' );
define( 'LOGGED_IN_KEY',    '#Qi0#i9[TsMf517EY78yBPZa?(] fO}HQ&~`|EWyl~O=Rs+q(Y5.L(E|US_-jk51' );
define( 'NONCE_KEY',        'Gw:8o@#`N@5`c3G/@yzz(mt3^Xm{&XKFBh#{i2B~3xiBPm4.5-ClhD)3bJ7n1:%K' );
define( 'AUTH_SALT',        'R?!)22E7^7>.`;q5#7K3:xi= T`0r~->l=)V(Sr*[qZKv?0~t[d0zx&y_;[kMaY?' );
define( 'SECURE_AUTH_SALT', '^YTD&lIdD8*D]03K/s;|YW.9Jl_D$y6!0z0}q:qKP^mJ9A{VYXjq@-HvQTlM0%n>' );
define( 'LOGGED_IN_SALT',   'Zz`*S[+-=&R.#6t9Ho{YX`14`E[ FPZb-gawM1x%xX^}<i{64`6,ok]]707_?^[b' );
define( 'NONCE_SALT',       '}TGeWxMP^vNE0RDT-=&;;T!Zvj.#6*+cxdOKa.+m+ry:Yt;s`]QQ70%=YS@KUnw4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
