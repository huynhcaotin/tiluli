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
define( 'DB_NAME', 'db_tiluli' );

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
define( 'AUTH_KEY',         '>!0YkS,.M}8tS&,$EdMmE:-n8w!Bg.{<itvl;b85[rN]!D10$;cWO!>Vs3Trn$gR' );
define( 'SECURE_AUTH_KEY',  '}kzUiD+E6hj`$sk$OF^Vvh]M/hDehOWv5AF=$_>K;Ni,;m!PvfEGN-@%P_nA_9W/' );
define( 'LOGGED_IN_KEY',    'J4%5[L`A/p%}F}kWTVn$Cs(fG9dncW=|6ua)oI~Wjc(O1Jp+hB=Ey!xUJnd*Y*wN' );
define( 'NONCE_KEY',        '<ugVw|(R.58cn/g(UmypP~mv(fTm_@ Os4y.Zgo#n?9.t+N@/}gyM?boW2/~KK6C' );
define( 'AUTH_SALT',        '^gpg8N+[m%xYLylPw9&>^cZEAYbj3ugm_B&c75YMpO,+[kpv&*YQWZ<--cs([`<B' );
define( 'SECURE_AUTH_SALT', '.1`_2Uk$$`g-i*9BhW=zYKd3#xjRsWI7n1Iw2t@#8eE~d@xV,)C@,x`nfi6s@Pb9' );
define( 'LOGGED_IN_SALT',   '6Qn},Spmc3=iCCDO]eB7oxv#mmGZ}fu&Q$)J$?)CCj81;t98E.(Vg4C:4AK@eVJp' );
define( 'NONCE_SALT',       'UZMh]FT#?`114IurR?9v81N pR`w|e8i%gSe=zi@$qf=xfr1$F5FWv?C<m1u|$wq' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tl_';

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
