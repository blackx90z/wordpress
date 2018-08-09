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
define('DB_NAME', 'whc-black');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'YMb;)!,h?:89]*(^5J#A+rWU<~BbU{nbtU9I9@$wsyzRNC(&Yq1G]|^cO@vy!/zw');
define('SECURE_AUTH_KEY',  '(9-cE`N^7&;Mi<LzM?Pbo.L8--_kEY9uScy[<Ik?57r76~4KQCoNJhNES&7bz`XU');
define('LOGGED_IN_KEY',    '.&_~P$@qeaxq1rKe4l24bDa#qbk/A*:?%d2zt}<sg3#^A`qM:x3B((?ABiiv|orr');
define('NONCE_KEY',        'h,EUTRc{m$HA(8:B@HtgpH0PckdnGXXy(r[2N}=.{~w-<ta=!AxGabGBknIi~AD&');
define('AUTH_SALT',        '~atOlaw_chAhdMVMb!)p9ilY/Q|bf3E`pBM=4.;^sIPn+LxsklYBMJuP}tAgs}>~');
define('SECURE_AUTH_SALT', 'M8>;NrP`R+jP?:8Fw$o*?6:g0~>@H?5x{,.n%`ugJ;`m&#)AcsS)8mx8_o:T0DHe');
define('LOGGED_IN_SALT',   '}:Dk{6~ytW0lR5./>CXYKn1w v3es91eYMU~SXz*=GIqLn~QSy :vQ`aj,Fcw;*!');
define('NONCE_SALT',       'lH+#|,7w9 Q+POr}3:>@s@u&022+H>e9tAICYkq;HAIgAN*SDl@{5_wS9dVsBHsk');

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
