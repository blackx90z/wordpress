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
define('DB_NAME', 'whc-environment');

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
define('AUTH_KEY',         'P9r&<lb#bVyC t>KQrxRP2)>]y{,{WX@lR.8F M|R/&;:@n@1G2{rU(:%_iHKK>E');
define('SECURE_AUTH_KEY',  'CJq&qMciotB9BW0]MsoI.,s_of1$0vg27UfS/ Qy;c`%&Wj7 iN/~hJ$&+1^DX2*');
define('LOGGED_IN_KEY',    'AC#(Q:pKCQTCXahs}9PD,mm]H8 D:SmKE|:opxEE&Xu[krtl]]5ys ~wh*wEx$s/');
define('NONCE_KEY',        'p q!.%UM<Z0Y )dYadgZxDns+jx^zh0F^};6*zz-6.YRHpyRw%4$.$k#I?|g*NHG');
define('AUTH_SALT',        'IFhsG4}}G1m^F|HNH2b>bImX`A8#:IG]^aR,y%-vl$%G)j{`FKVH&Xw -k+@MBpJ');
define('SECURE_AUTH_SALT', '065GCm+^%WeX^2QJcZVJQ,k817|kMbgSig&wOjNEZ!o!2fljSE@ztF7I#)8Yl~lH');
define('LOGGED_IN_SALT',   'MzZ~r~/G_@e>QcKC6/QQ[oiyeSnhP)j.7vGhTUW6Y6$jNr0&S)o8*b] JG8O77TP');
define('NONCE_SALT',       'cK>:ar[tzRoZPZr^]qh0hVxS4qqW+jkpNmx$5JKjHIR%6MO>K6TK?&74^4BB/qw%');

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
