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
define( 'DB_NAME', 'zero' );

/** MySQL database username */
define( 'DB_USER', 'saadallah' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fuck' );

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
define( 'AUTH_KEY',         '6V9IT]EF3(oM]G0N{HQA]k(kQhW7HWNAAdjdAq~nKw6&[|NiP%JUNi@2!&$u { `' );
define( 'SECURE_AUTH_KEY',  '1U!~wD<[~NOh3KiK|J}.:(`_qHCCgxZwJV]UGr#?[dqO$LPxE3zkUbxh@L|.gr^A' );
define( 'LOGGED_IN_KEY',    '-,!Frw.;|J1q;qur;vNo8o-zI!5y{u[pL@)X-|jP)6+E;7=aMn2FxhSnu5OI?`=6' );
define( 'NONCE_KEY',        'BjcftK-0Y8lobD}U(=k=/g]@8[twPd8/+Ij{2 _Aiwmf6<o^<YF-L)^Z4Y{NMbf ' );
define( 'AUTH_SALT',        'l<>AH``+GSL_zDCvR[`dB`6gakz9>n[FE`AK]TN@$c3evo@w=,KcY6IjWVSe`M<p' );
define( 'SECURE_AUTH_SALT', 'eA.!~1c}KTMfYm)eXS~r0NA}nu&SAc&ZfYC7Dm`eI%:7Nq,@x5B, ]eh*QL;+{:7' );
define( 'LOGGED_IN_SALT',   'mE}xLoY|nUX5Y*W#r*lq(9#A.x%7xfAwGVM`.G&<*>H2yPVO l6$uA!WCYOVreOp' );
define( 'NONCE_SALT',       'GDF70zgEG#-#R)1s>Yzr>shtq0y_JzM19zI+&v(qRz7M,fO6+A`2_Oiujl0NU!5#' );

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
