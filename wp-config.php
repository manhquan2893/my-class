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
define( 'DB_NAME', 'myclass' );

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
define( 'AUTH_KEY',         '!$u,caEVa78QrF8Zh! ~;ht)N{2j7nk:YT2O8f+ccV6&R-is*oFY K89M-EGSo~A' );
define( 'SECURE_AUTH_KEY',  'MI8s@jxBM%Q$U!7Yyy%V)~}U44uh]UkA8kL($~5RDx$bFdZFk@;|FSVd `X?u-xe' );
define( 'LOGGED_IN_KEY',    ';!`d&H^N^~tA;D[[.NpSEWip)U&RDrC7?:W?uiln]0`rRF~`GG*qsId]7}fUtr|y' );
define( 'NONCE_KEY',        ')+mD5lM:E:v6xYI:[ZPm;2w01.E/?krz,{%0AQa$Afe0h(r=]wbD<2~aTa+&AAE@' );
define( 'AUTH_SALT',        'q{M*-n%jr{#Nu%33Cpvb5_d9%]F:1:.<De8xbq-C=?jcKeuF}p`T^l]30PcGA,+M' );
define( 'SECURE_AUTH_SALT', '35ECAf?c0RTakZ?gAc;Ma}7=zA7LDyCK,@%[NeOlW+Ge,2e^btFv&{ai|VCV/EQ:' );
define( 'LOGGED_IN_SALT',   ';n;|_.>QVQP!T5=Wa!h/53?!VpOzBP~3m3|dA2>tImD%{QMjFRQYHG]4%@5vBytd' );
define( 'NONCE_SALT',       '~F1mDA^~jtT,]dTWKf7U`7~5mR(}:^!/0w4/(lI<{paPe1OX;%T-V>l7dk 3msjx' );

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
