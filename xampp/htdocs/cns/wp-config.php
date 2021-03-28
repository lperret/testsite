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
define( 'DB_NAME', 'cns' );

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
define( 'AUTH_KEY',         'zj~0sf{e,|8Q]So}B%S=ya+r|=8#Z]WWSWUO:;%C{*Y#gih;`N.0k}HSlA({}W^s' );
define( 'SECURE_AUTH_KEY',  '20.:=PHE[?CiVi4H5.J8FC(n=ASf0oqx[l}-{t 8/AF#5,v;lPTc,QtV_ce4tpUf' );
define( 'LOGGED_IN_KEY',    ',x2,V==~FG-5l=(U[<4+<N=GhIXx= ^z:BP@EKd1V6=912tXWD<kFp?JH~4Gt1da' );
define( 'NONCE_KEY',        'leCIE}@Y}<k(r?KXd7&Xv)[&A{7v(dv&Y.^R/_TC=cn+X=L2(B?oKJBltoI9CMK|' );
define( 'AUTH_SALT',        '#Su_V,xrw#,~oH0gXr%-D~bWsT&|dks.kZRc6[rR:8+[^d5(v)myXwOs+iQNL]$>' );
define( 'SECURE_AUTH_SALT', 'ieit/5 n0fGd$s/G=Ut>J3}%qDtGdC1M4Y*wo,{J]k;>XIimH%:kZz7WD2a);FL)' );
define( 'LOGGED_IN_SALT',   'ddoA4,NV~tqC*)rMqs{JL^*@nniNm>H4?e(9Nk9Q:=y0bZhX%!?8zl{HOkG^PN6F' );
define( 'NONCE_SALT',       'N~.nc.~jFpa%[*)pZPY1e&CyvWF9-:{jlrBmCH6!43)#H57QKMo@$K@`7PNbV8rA' );

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
