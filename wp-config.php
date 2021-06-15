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
define( 'DB_NAME', 'libdelestudiante' );

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
define( 'AUTH_KEY',         '$Mal?=RPI<Gt9ORL?DMGl4PU:YWcG`r6cM98jX.<r:vREvqx7B]9G)SU&OB1B&fO' );
define( 'SECURE_AUTH_KEY',  'lAd}Cy2AnRv^1lf[5%iIQYDlEX*x@6PZrJO{,y=X)KP^yq)=(2TO2-u}3r19#ybn' );
define( 'LOGGED_IN_KEY',    'Yz_Bc*xr?36=KN)B+g]Vu_MR-$,zf%(L$HmvG*gLHFtLt(V?oqKo~CcZ2m&0b_Jv' );
define( 'NONCE_KEY',        '`hF@t]6oGP iOq2Ic7f6F%nC7VckE_r<ok&L7/|{?IWnR}d$,yN6Wci1(`((pA(:' );
define( 'AUTH_SALT',        'Mo~R%Kmu}Tb6/d+U43q?r{N]dvj[(SE5@@`8f01S2GIH+]8]]%,&XO)y@=U<UCG/' );
define( 'SECURE_AUTH_SALT', 'anOjid*0TWFfmSBnke}dZ?}zz8MhT)RZTf3T:P@ 31v- 5M*,0B9fp&OjPY0KpH!' );
define( 'LOGGED_IN_SALT',   '$8o*a@M!ecb%B(1.JWraIYZRxW#Mq1XZp9G>LdJa36c.4J0nz1=hUw<({4Oy{([b' );
define( 'NONCE_SALT',       't.-uwFTH@>|; sa)85N,B%8m2+cCsw/>-,f6Fbp<g>bPmt!m7VKdH0_Lb^5:Z*Cl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'libde_';

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
