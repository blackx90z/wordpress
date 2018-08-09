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
define('DB_NAME', 'whc-moving');

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
define('AUTH_KEY',         'A?g3 ?y+<L}u4tY7?jO<}7(m!:.=~Gu=:Q[y OQ3t~ <368SB3O:JL`9l--W)x8r');
define('SECURE_AUTH_KEY',  '8;[7p:(eeY/P%Wxqsi_j%A6p/+V|`s@^$qK{EMIH2TojND-Z8{~8D,St|Sl3xeZ5');
define('LOGGED_IN_KEY',    'D4itYmr`OD_orALQfg?Gvf1C|nuIJ~<<E;_k.wqAd#m4FY!mM?09VOPids56p]]8');
define('NONCE_KEY',        'OWceLqAM3Y@*LlVou](w$&SL)+Ba%Q|42n#b<$oSz4#$jo< YJ~xIv=NC@BuNlXV');
define('AUTH_SALT',        ')e:>aGu9l?q-:5huW=ox3~PPzCwl3*Fkj|S2T2HtZ]~0OgZAQ6I.L~*v_VB@?-db');
define('SECURE_AUTH_SALT', 'sY &!bx.JcztCsbS]~3%0urDbeL~$B_]K`3g#lO4s^m/Oyj8q!%n1T:52`-7LG0+');
define('LOGGED_IN_SALT',   't}m)bkugPpJ1GzLUjpG58Z}%;x]]C%fAp=Ke6vewWZodMR=sm4.,]7s([G?&qQ5~');
define('NONCE_SALT',       '1aUl5@g!6QKyE6V-szRW2GkkcYo7Z3)9L[#rDm/:@wM.<Kwe-L8E%${m%~s138M3');

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
