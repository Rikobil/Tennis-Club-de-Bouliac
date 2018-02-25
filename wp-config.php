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
define('DB_NAME', 'TCB');

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
define('AUTH_KEY',         't)by`N,W/`#0r$k.AcdBDi4mC(Q28~zu7g%3U6;J&(#&$T_3RoP4d<VAE]gE:qrU');
define('SECURE_AUTH_KEY',  '8sZl?mG?9 yV!7<$e-f/L!%?$ou<+))K]PIJZXYL0$*~cGW2q@9:kIajHUTQe[zi');
define('LOGGED_IN_KEY',    '=3{3Te^E?/a) SieW8IlngS4!UD$ol*ug Nly*sz33FY@YMj;TyA(ELS<8(>S(++');
define('NONCE_KEY',        'nuKn0-fTrsMevLy=(&r9MQ~f;h(!,2|s5,o,8KZwt24vug|h9tLTvHjg2$M%*C=d');
define('AUTH_SALT',        '`IQ!()A|%e8)9V+mnqM1|eUh85,OWAYo1%>C<O:,{p78]iHCz%IDL&0P+C>(X D6');
define('SECURE_AUTH_SALT', ';k)XqU`?d&2thB}g&]5FI[v0/)dL=l-VU64q6<~nJ!ddP.`%gp8*rA%xRA?(5;go');
define('LOGGED_IN_SALT',   '*so&[b3SMyE0AH0,zH+vN:hP>#c>!0:5[tp3dty,R;}$e3pJRovqyEq6fItk9?Gk');
define('NONCE_SALT',       'HQ?=~Sm2a{oy=`CJ*b~e?J]RV&3T*M{ERY3#B;TOps<~ydXP8=@##80,hS[H}F6Y');

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
