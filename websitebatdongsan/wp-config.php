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
define( 'DB_NAME', 'wp_batdongsan' );

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
define( 'AUTH_KEY',         'P,ac1hzc0/s?}n_sS7fZw1=Trlk2F-Ruim|TSdF3#uuQ0Ron-oYz~oN{PA@j{g30' );
define( 'SECURE_AUTH_KEY',  'oJLCKiO!wvF<VtBm3vJEhZl]C&(z4& %I9+t55OTA;PB5;Xs@ySQw1IsOsful.+Q' );
define( 'LOGGED_IN_KEY',    'nf4v>5gFSgX,sZ:h_qPY$jz<&S?8!.cV6`<:=neidE53,>TeTM4JE):!hIYGv~p=' );
define( 'NONCE_KEY',        'N= 0R4NJj$pjA<mLx3<J]wU%&Y,,=2!%;(}+r;F;=p|ZS-y7sy(60yrSt={Ab2n5' );
define( 'AUTH_SALT',        'X)(8!CihgK<lOgxhU^,!zmvSM>iCxn)1;;Q#^I3M]]GtvHaZ1vjAh#uq&|TUKz?u' );
define( 'SECURE_AUTH_SALT', 'uq2c);hSBet8ChnZ`To-53IiUiq#k6HA=a]Lh@i~WUBqfX=aX>&MD~GZ(*|:;qU$' );
define( 'LOGGED_IN_SALT',   'li};#26_ z5Oi9J?)qGo:2oK%L&L$XsiJ~+ w+FEwdO4P_+]B8Xd}ZE313Fn~28I' );
define( 'NONCE_SALT',       'DOFMM|aVC<]E:xMmI*YM|+tc^Wg[_U~QqZCydnyy59B!HUTl!5-s4 j:7Sdt896e' );

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
