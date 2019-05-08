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
define( 'DB_NAME', 'test_db' );

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
define( 'AUTH_KEY',         'zOwYu[o26QX @K0rK~Dhy1;)5b5J/7A?%c_u$Yns?5Q_wt1 .#eoSVJWN~E|_n{B' );
define( 'SECURE_AUTH_KEY',  '{bvn5n&/_]Hb[u0|.3 o0r}}ag_pNyJjMCOi *K%cA1Kc|~^1VB=P#jYeE/(^@&l' );
define( 'LOGGED_IN_KEY',    'r;rf318V&0TS.r`piBcG<#MSw#AvNe>A}[A|D`SA}bUyi:~b#fNR,TPe7VS#T`_p' );
define( 'NONCE_KEY',        '^d_R]W(D]q(u/l-~o`TmhYDhtWL5U.e=M)}mo;bIsht?%cF!Cfx>9&$l{G0W8/0J' );
define( 'AUTH_SALT',        'gb|%@v2 GH:=[`dLuh].lBYv~2LyZ<0_JJ<F/bFY=UGC&OD%GJLi6/>)IUjmIpE=' );
define( 'SECURE_AUTH_SALT', 'QM&~63?`@zyr9KKL]UDEf%kB9j0k/$}e2qBm^bv] Q?+R|Ws9&{{X:%4eSDW0mw+' );
define( 'LOGGED_IN_SALT',   '0$s8,*e>i4-TLA8{PhjyHN6>Lf-4wX9TUVVdWolHfZDzn,CBT4NR]qCJGPR*?u6n' );
define( 'NONCE_SALT',       '>$lS~3.d#2m-0sbvJv7 d4a6tyiW&K3@)y3t8OKby|k|G?2ah2) yDsoTJFdP-p|' );

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
