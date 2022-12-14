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
define( 'AUTH_KEY',         '*X=pe=,Yn/}3R]M@yT1exi~Vd/zI>w9yY]LtYiCicae^M`O]3-GxC AhQ;j7A9ot' );
define( 'SECURE_AUTH_KEY',  '0}}qQ|jM tOtdZQQH$cl({1x+$x}19e-d.GpW1#Np6:*p;wCInTH~Owc$O|rP?mD' );
define( 'LOGGED_IN_KEY',    '5r!(*a;an6VN{OByE$C+k!z4f@3 GL[xbGx-/tG^>oFP*?J( f3_iJt6QT,V9T?0' );
define( 'NONCE_KEY',        'O}~m^s#u?c4C{k6|Zqob(iVq $)3hR?lJHh]%Wb(<J}gT$.w0p6s@innFQ=H1#y>' );
define( 'AUTH_SALT',        'ITVw|T#=vgNpG1nj$w9p-.X+Uz,P)TY2_<&;cYU~ukOv{/E_&Pie4&M0~q5|(3tx' );
define( 'SECURE_AUTH_SALT', '=9Mb?|;`O9Ma8GX~Qdq/Ye#=B8>[AYIP@,2/RdSb*HKknO.B7<L^TZ.Mf`z&1e}G' );
define( 'LOGGED_IN_SALT',   '3!9/NKMwRC%BBq6v,KaQq-Muo@$f!/?(n 1P5a=N(u>&Gr%>:Q.f@IU|[24cA(:2' );
define( 'NONCE_SALT',       '{z0D3hXUz,`CyQ[D.N9@^d$+Jp&UuAu$<Ie,?~l;S@WO_{ui;_MB ;Jwp{/jM2Y0' );

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
