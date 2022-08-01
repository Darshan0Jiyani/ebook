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
define( 'DB_NAME', 'ebooksite_db' );

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
define( 'AUTH_KEY',         'X!zsY.[y/NEWQ.(:}Xt:A?ow9:7+ySlE{|NikldTV_CI[no3@->f{VD9QuJA~%oa' );
define( 'SECURE_AUTH_KEY',  '@uz2f<$wQigs5o,%=0T+t>ku:JZ#U^JE`&J*ZW}8aaQ)at(-D*92Qn;{Ed[/~??w' );
define( 'LOGGED_IN_KEY',    '<Z <3oIj_I2:(3aa-+{-4]4oE=92ZYPPTw dT:xVjar@`,dbzS *o-x6t&TiCE^x' );
define( 'NONCE_KEY',        'nFscUSx];>2ksy9~V9S V?|)`DEE+m3,efjDp{l(WMWb3H@lCT0we$@#}SkM?St~' );
define( 'AUTH_SALT',        'F#yp=eFe^iJ=8Vm;70alwrnGIK$-UZUodJ3oieN]|M[5^N v~xN0=Y$msBb$O`[u' );
define( 'SECURE_AUTH_SALT', '*M4j[B?DWE{]]3:|(q&E<#;!)8F_R?@hsBVX}hX=hPz9i7y<QnD sZ!SW5D20^TJ' );
define( 'LOGGED_IN_SALT',   'bGEeR)@H3K9hsX[Tsxtn[TM5fz6cR(pj,y:5&Ea7<p7mbJf-!V*Qpg70r0*FKdCY' );
define( 'NONCE_SALT',       'T^Yk#nd C!RI-w*,X:L_6{7jgFh<>&1+=06JnD:=!{hZW*)=gb]Ow-l3,8|/9Nsn' );

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
