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
define( 'DB_NAME', 'designsofthesouth' );

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
define( 'AUTH_KEY',         'DEMR$_X=zFz>JHSyf`|w&EDET7@[*R!3mO&+v/^]Bs~g=7/a=NOvx.tp2~ Rzj2y' );
define( 'SECURE_AUTH_KEY',  'n -v=J [jzuY+OXnEBIB|m;*Ne,{t[.F]=b>LOc_^=L&zL?X2wDE{`xsATXvJ&hg' );
define( 'LOGGED_IN_KEY',    'WO?xS:J5v.P!#hA8=E`|S+F;G|(%Qs,S ww}eW.;9wu /Qh4JknH~0J)g0wU,E%}' );
define( 'NONCE_KEY',        '.BSG=3(]E-4-+RgQ*|4pFVxsunI[#:[X E`^PuMHMmUUp{V~D=Dw(f8M%~*Ht0vv' );
define( 'AUTH_SALT',        '8)j<#T.y>@~&a[d.xmYxn5iv.MWm&[s^s[t+bC{ZumQT_|IEpgUVy^WaV=/T)+c2' );
define( 'SECURE_AUTH_SALT', '_9yi:dDdagkc_krLOXX}pZ&mGNncW:<v1De_ppE|6Y^s9bXV:bfV2n*yl=MR1dT4' );
define( 'LOGGED_IN_SALT',   'o]q.#T0afsm?h>rri QvPm$Us&$N]O=v:fiOodCJPb$vIzCF5,2M!QAi.:N!7cpr' );
define( 'NONCE_SALT',       'ADN0h){@TVIs*]/;s:<Zc@L5+kw8%on/3G$MU1EoEaMZG E(>Qk}/{b_T#,HHYZw' );

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
