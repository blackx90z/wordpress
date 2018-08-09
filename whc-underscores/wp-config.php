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
define('DB_NAME', 'whc-underscores_db');

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
define('AUTH_KEY',         'Dr)EBxRQNu{_AB(+%[.Yc~oQ@X9Q/(6*LIR)TI#= /nc:$R!iGYHf|HplT-=.g)r');
define('SECURE_AUTH_KEY',  '24;q7@9*v]&G~:$IP73E:yws]d:]k+MR?CcqCG14Ffg!%rd{&RgU>:Z5!zmR3v?|');
define('LOGGED_IN_KEY',    'CY]ic<%:A&FcJWZVNz#VZU)Ci/Rd*P~u(;8,#G6@6o/(Ao/aow(&fVxQXzDvdnux');
define('NONCE_KEY',        'b_-S*1JsvbkB`!K2-jd{m^&?=$e7EqnMloD!}1CazRt,G^lD-LYK|?]m~luYdWJX');
define('AUTH_SALT',        'MSYv?NS6wA{` JoY}+ix*ub6/f!%{c}6dD[48lSaGQ.lE$*n3Iy||QGwS7/-x +S');
define('SECURE_AUTH_SALT', 'wQdy^s.RC`^LxY 6n6V$5_;SPW2~W*~wmo&fHD{y:,fo`UP=f5[0}:UCGobo`fZj');
define('LOGGED_IN_SALT',   'sJ2bSb0[tdb7.kCJ*s5e)Eq^ -][tInmuw90yF>(6#ro}~}Ihz>$#S/Y]$h#/ Qk');
define('NONCE_SALT',       '-Z^T>[C$d~&Z,VY%3B_> #Q,!KiOM/N>rr,8>]IUu*wC<qC,~xvvK<>)ObiY2{g[');

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
