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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         'k-%WrOgg$Asw2CIK;$bFL:>N@|}v{T9i44X*X#wV,w`r[L<9Hv.4|U`kSE#5X,tL' );
define( 'SECURE_AUTH_KEY',  'T5jV~4h(!nbB+|6N8l)/;Q5w6(USBUb)h5e8$eU&Sq3HiJD*8C,qlagirXxUa,[A' );
define( 'LOGGED_IN_KEY',    'bj}>(v6>RNG3kwq@+4,Ac.+j<_iCxQX- doF)`Gd/+%SVfClAzPM6jw`_ThPH[A8' );
define( 'NONCE_KEY',        '<Y1][/CGfwW}.<qT#4<^uZ`tlja-Lvcn7?k3ExE1c?o`KKGin/6LAB.?|gO|P^Nr' );
define( 'AUTH_SALT',        'D?UL!f#piWX{~><pl`B H-wrzjyNvba7Upb]i^#EWi{[~qg~gOTr{+gd,iZzFsu;' );
define( 'SECURE_AUTH_SALT', 'QZ$.6hf#Hltx33ee5kW^2Q_IK=5Nie1b%P|l1g*l,H>z%Ik5i3 Pm4.Y_n;r(Sl_' );
define( 'LOGGED_IN_SALT',   '=8I*x@,NW`S#do1cb2mWP6/5Co{Ecw&zwx~exPiPd_hAPr$_cJ2~-.B~yEc3@Ei^' );
define( 'NONCE_SALT',       'l<_|E8:qsZrN(Y[M6.5kS}vlH~kR8<%afEbLAHGcO7.o$8U_p.,3AbgSCfkLE:l`' );

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
