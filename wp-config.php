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
define( 'DB_NAME', 'plugin' );

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
define( 'AUTH_KEY',         'uv+!grdp_s{qHyD;jhW(JEaD~4%hXE`2pB7JqQ-~5-j ]oL`l,R+f3](ndO_ t6c' );
define( 'SECURE_AUTH_KEY',  'XbWNK9jk9dc.u4oou1_Hv=Q}(b>PK$._]txb1kLV}Apmm5O}=;T<W#-lrGiSqr3)' );
define( 'LOGGED_IN_KEY',    'JOL@+A pPuG`6:/KepW983vO6}DwH%`7zxT822I&}a+1?6Y;]vP3(B@`/X@~fhP&' );
define( 'NONCE_KEY',        'WOELjScpWp76:sgwI#u=Y:kEV6iEw/C/O`0`W3ZyIq4S?F:&e!/ec>`Qe]);/Md&' );
define( 'AUTH_SALT',        'o9)avejhE2pjT,(f@wkI%%:Z({pqHBE+PCi#7P,r]Ez2nrjqJ>3X&AL(qF|>|]v[' );
define( 'SECURE_AUTH_SALT', 'qrPfaXJWwsX$by<f(MnTu8I{FM#mhP#3^,$^nx}iIAe17U?R00K/5/O#-1>fP4Ms' );
define( 'LOGGED_IN_SALT',   'Os_~6(q1ZY!pQ&SaP5%-d~}^t`??fBdGT:rP<L$X=VSpCtb>=*)<PjS/8i0?UUi-' );
define( 'NONCE_SALT',       '},Par@k<)d+*Wps[KnPV1g#q}Sn2oDSN&/pCo1/C9!O~.(G 66F8XsrHV%1*n5JA' );

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
