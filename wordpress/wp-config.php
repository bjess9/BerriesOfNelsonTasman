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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\BerriesOfNelsonTasman\wordpress\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'berriesofnelsontasman' );

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
define( 'AUTH_KEY',         'JtMQ&YqWEWID4!;JmqnLzqrZj0HwX>z HO5q4*n170Zlr(]Q,96LX.)>,Y[=,5+/' );
define( 'SECURE_AUTH_KEY',  'm3&LpPfPh9|6U,b,``M(2;k/F+`sG:qp15V>_diO^[PgblK:BjF1~NdrTJV&1b)t' );
define( 'LOGGED_IN_KEY',    'TEs47@&BUy=E4?YA6_)z-}i%NUs$kAd#>mn^raxmF7)GBj-;i;EF)N!?sn_sIia[' );
define( 'NONCE_KEY',        '~%n~()9R_6H6 s&?iv8ceejx{Ox!8enESy&i|(D{]hsa-o` `<k/{02 N[M!Soc9' );
define( 'AUTH_SALT',        'B_~j/]N)v |m$RE~rv?<6-%W }>TJ8mowp9iT -J]%A`c4N9E#OJ/d]/6NviK<$Y' );
define( 'SECURE_AUTH_SALT', '8>r[:#ejRz.gx|;A]:&dgLqL)jcXH^%5afM_]Qs}C2]`DOHKRJ-CM&U^^jz61a(W' );
define( 'LOGGED_IN_SALT',   'C08?i2CQvfNoa=<*lBGm>&;p?Dkh[vpK*[q<!_y!Vt[N{}-=v&z{g.?sP0G^VXT@' );
define( 'NONCE_SALT',       'L=[`B|6u4y.roM0pskUqMa1H+xM9fVJgrw85[`qBvZ#uyuj(t`(yP]&FPBx;6VjN' );

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
