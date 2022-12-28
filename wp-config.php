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
define( 'DB_NAME', 'wp_unlocking_code' );

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
define( 'AUTH_KEY',         '6qfh|OkF!!1=9#vIce7cX/O2[iq+<h)nYeI9&% %HaRikD>-X-/`vv[>2.p4[%!s' );
define( 'SECURE_AUTH_KEY',  'K4!{?O1%^xLM=l[<~h{h3xV;ztbcp}U>x+_6ynV;U-I^`Z,U9`||W>V9iy{qM&nL' );
define( 'LOGGED_IN_KEY',    'GGm:eJ-PJZ5{JlV5_bp3YYy4:+wu#1?0dT=<B^J.dn]ZRU}``jBPPGRS;NR)w<sy' );
define( 'NONCE_KEY',        'vT4$wmeR.A9o3.U4GE;h=Nb(CN64Pu1r;/}A39DA__2iV)~jvqAvY^fxDb!Z.I1w' );
define( 'AUTH_SALT',        '0#<;WCEiJP7%$LKI9l>.bOX82uKoj;&0wxq_5M];}[Etb<P4aftD2>#V@Wx`X0-#' );
define( 'SECURE_AUTH_SALT', 'H(Tn{X4Vrb+;I6U2P@5-z=WD=PghROIw73nVJf/(6V04zePG3*r-ocU;gPM:}8I?' );
define( 'LOGGED_IN_SALT',   '~CqU@7&A^[*qr*RD!N72`K1E+9|pLgO=BXkBON&nwU!s:D.P^Z_?fQV_jmTdv$Qd' );
define( 'NONCE_SALT',       '0d-JSX]?{7SL,#E.E;B8iB6*1,<iiljgQX]PT{f4znfbx2l|tTSfb2<fqw67dA=1' );

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
