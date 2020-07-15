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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'cmarteau' );

/** MySQL database password */
define( 'DB_PASSWORD', 'yo' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '7!fu?B/-|H:f033(XKa0n;X>blZgHIs@^-+2;AC_0Zdm38f%>g!^b+& `r|qd/Ts' );
define( 'SECURE_AUTH_KEY',  '0-hN,K(WW${[|G]$+eFxgLispY;:nj2*.76/V$fE(&z3&Ra1RBO!-fO>va)|(IA!' );
define( 'LOGGED_IN_KEY',    'txcYI-YyEpY:|VNSBpbL3c@<U,.-w/3y6VPu|n[<m8sn<-fF@GWAeT>Aa`#16%P:' );
define( 'NONCE_KEY',        '1E|gw0-;LQluH3`o+Uyt?d>.+-3,5-qh#=G43DEADE%hw<d3BO~u!++(Ik)4Cs9d' );
define( 'AUTH_SALT',        ' dJw*mj6;ZbT~Lj|}fi[8D.ZwrlM~ El+N6<]OT5K4|mFg@_v3F|^]8<i2RvYdgt' );
define( 'SECURE_AUTH_SALT', 'VQ)oY1M-[8ZmTjsctLz45QGUUR;SB?-|}B&|gfs|U-V9=~:1y$z};QD Rqthtf:X' );
define( 'LOGGED_IN_SALT',   '#rI!ws^VibLgIHQiTTW=w%hZVp--}D4XW,h<Qt/~4Ng-<5%_WD5us~X8gvq88Go^' );
define( 'NONCE_SALT',       '}&98;jlF|0sle-K>,t_VycqG!B>Z=$,^PFWdv|caGn^L{H^Jt{K`-vD_273e%lRH' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
