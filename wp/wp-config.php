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
define('DB_NAME', 'database');

/** MySQL database username */
define('DB_USER', 'username');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tx/3rQ+eK48:%4qFI[T7d;v[q*M%U#npp`:3Y|e;K-<Rt/5eS;x%`8R,-K)0Wi$l');
define('SECURE_AUTH_KEY',  'xKe:,ke(mRwE xxg@GQZcjr2U20WsAwtS=MO4_&UU P,Em@W6[,`(CAV(R)+*{E ');
define('LOGGED_IN_KEY',    'Luv?F7A<j,#74.h{T1o!ySVrqDKA=X!{xPPwcOPu~;G`e, ~rzzpKr-,x/Xz6>z]');
define('NONCE_KEY',        'qUme,-w9~ePpg(}sKb~o.zU4!Go&X+{eR5s*_GoF3dC|izuD ]3RF=7~m,BK@x75');
define('AUTH_SALT',        'Z1.OCsR#;[-X>f%{.mG;I+rInR ~Ier{Poeg)^FnY}$xZ=<@68gaF@ye22lDeJVO');
define('SECURE_AUTH_SALT', 'V>gXi;!4_$I3QkIUR3uN{{Z+BLCg*o>rt+U*?>Ntd>UEnj^|<SuV7L3KcWtJ?>l1');
define('LOGGED_IN_SALT',   'n^dS7Opw|*fd@5~,zu/aCZ-Jl7DUHC*|yw|*-cZAwEA`,sr,<:t:YZ_R<0JL$(z?');
define('NONCE_SALT',       '{Zt+Iy7hjw4Trw1w!<hD2Purd`k|BhwSjssvFOwm^RiE,URVVq>`F#212Vq7X4H6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
