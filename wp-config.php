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
define( 'DB_NAME', 'personal info_db' );

/** MySQL database username */
define( 'DB_USER', 'root admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'mangala722' );

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
define( 'AUTH_KEY',         'zuHJH-~*rjnrMqe@vMXoF@|,k<V>D[ dBtBUbEwkhC-U@]Qx~+{VT(G(INR:e03C' );
define( 'SECURE_AUTH_KEY',  'Kh~${M:y71,FmpI,t[`?uMVEB?9@bkZ@krCY9hU,1Z,b6m$Bkv0O:nM7 oIe%*)a' );
define( 'LOGGED_IN_KEY',    'i,:TI`0;A0*UH&}WhB^[v&i9y{h#H<wXJH4H[MS=[Fk4p2nl#f+rAL%p~R;xy(Cs' );
define( 'NONCE_KEY',        '(K7j2YS<<DtjY*vs]HT!x*|Vt93%7RWP(0dl=Lxzmsi 9!j0Fv+/1u!Pv=8rf9V8' );
define( 'AUTH_SALT',        'Q7A#.)Pvhh4Yu#4}Bu`% !p}MdI}>xGL:D29PcO.U(5MjmK6LkG?y+2;h?f!nm(e' );
define( 'SECURE_AUTH_SALT', 'kScKk`,Co`@r4m~U=xFA<zcLLn~?|2ul2F)!}%*>I]DkQWYqbV}9Bg18(Ow(q,>a' );
define( 'LOGGED_IN_SALT',   'eH!l3xDjSVS$gRsqI>Q]D9#U%5,oY,]%MwyFyBU)a?~f5Y0w[+s-1e+b`5c/O:7d' );
define( 'NONCE_SALT',       ' ~BD/CI4p GOI/,z1P/>.`tN^}?^fW.t;V/Srdn}<>8H/9#.H4 aJsrqL7_Q)A35' );

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
