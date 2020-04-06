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
define( 'AUTH_KEY',         'qIw0: !Cx=61~Hob#Gyp:L}!*GI7@bR!KwL_B`+q_,{TcYhfty<.YxE#A8B!1A(*' );
define( 'SECURE_AUTH_KEY',  '^KsNNGbcS}[943 B2b^61hIB+ah|L8_B.#x:pyPItZz9gL8NkW&.#Ea$=A.Ue@]s' );
define( 'LOGGED_IN_KEY',    '$F?Bv;j$e#n5;LIHAT),:d|U>-IsyF&>aTdG.CT-,y^W#T,er}0VGc_8ki.<*{a^' );
define( 'NONCE_KEY',        '(+pc}x^H%{?3mF5JmBaXL&3J7e=`<&$GVqS|>djo4!Fdb*Q<uEX?zjL&tv}G_qx>' );
define( 'AUTH_SALT',        'C$Bv$Z.F`DoE-Q3eePNHBhM8EId8p` 4B^vtLCAPTv,^y?} @+w`O}73fDX$^Aao' );
define( 'SECURE_AUTH_SALT', ' bO19~WuL-.p{zvuU2+b^b5Lr+GaNBK4 Ej-_>=/O77JtfJ!H~9eJg%{B:$dX4P)' );
define( 'LOGGED_IN_SALT',   'K[}G/lzf<dD_pk>;H3TnTO4nX${cJ:&~<H>7l3yrq_+YI`6o(cz#in^$Ko{c`eqW' );
define( 'NONCE_SALT',       'v35r k*>(Xjh~h0wpRD*s-M .B XhUxPyFhP.tPNE%`hKkqJ0RZY[t<>SN@E-EIL' );

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
