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
define( 'DB_NAME', 'property' );

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
define( 'AUTH_KEY',         '.iS!QtT}22X#]s6g>vLZ k7<d8U -.NLppY`Lpx{#nrL<Hg hFZOS0b,cm(oSUtY' );
define( 'SECURE_AUTH_KEY',  'yPwcj6T/xu,pCZE*ohAFaZ{t ?Yrw~V[vBe{|9_p$!l(=b,Wa(]cuz*aEiq|;_eb' );
define( 'LOGGED_IN_KEY',    '4Y|xyOm50!IJF1iD&e>I~ouX[kr?_iw|/i)Q~r`Ny?,-6AU)va3P^BhLLI$U[pOo' );
define( 'NONCE_KEY',        'K;PLG!k]3Dev^k>y@^[V9M`I,cZVRr?r,9owXd|70p}wcJo,&1_BYB~tYqq:N^M=' );
define( 'AUTH_SALT',        '/&uZXBp[eBKxrFqL9^y$c&&q>ReMLpUWS^z+<<=67)iezf[OsTP&IV;z?TFnRVe-' );
define( 'SECURE_AUTH_SALT', '(@{#g4,&/STm[nLB8tG2zF6B^_z_Ac t-W#RQ#7aLpZg$}lRSy>#}&NY!2[r>WcN' );
define( 'LOGGED_IN_SALT',   '9G(Cv%WJu3pr~sf+P!1z. (=gF!YP&j8<b8^D>cHIl,g1DOm)|JR>Z|JA3>-gsAm' );
define( 'NONCE_SALT',       '#;ugij1(W@n,O8M6?3|jw80~]0@BU8mwLAQ`0.Q=<q>gv`*V[VB?86IWo0kPs8,O' );

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
