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
define('DB_NAME', 'LUANCompany');

/** MySQL database username */
define('DB_USER', 'Anatolii');

/** MySQL database password */
define('DB_PASSWORD', '2RLNEQcDPZNiU9Tj');

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
define('AUTH_KEY',         '?e.^bx{gMr#S593</!;R2r7u|m}N;+tNJ}q|ebY_? 6I)fdBt:3a=qqCJ3}WZR]!');
define('SECURE_AUTH_KEY',  'WJU{[80d0C-Z91^&q^oG*DHKtlN](FUO}o[mX&v/NpWf.2Pj&xj3c$?(CY|-FMh+');
define('LOGGED_IN_KEY',    'tR:J<Ty7ahcTh:8zGkDHchYe3Q<;?^lWWsP2YY$cdo!@L?M3og^f$na}X%$:<-U?');
define('NONCE_KEY',        '31mM30e6Bc?Wx;%Lg#ZB)f %j&9R*ZA2EY?!OXet&ch~D5>UALU*?>l~&D160;<d');
define('AUTH_SALT',        'hU<J*M!;bG++QLDK!B[I~/Mc1trLeEqR`D`Ej/-qccL^_8g8L(@)(au4|ns{iy)`');
define('SECURE_AUTH_SALT', 'xV(>Gg~99_$@o`87g25y ^S%/SZm&TbS]2Tgx!~3/FB.15&_PuSlM|6xzVSdP,ww');
define('LOGGED_IN_SALT',   '4<77^M6Um~CL*uV/?Nw yrd$#DhEI&C+diA4noqIz.GP*!tJ0pP93{Qx4Ej;b(!O');
define('NONCE_SALT',       'e^;I-k9ybLVkV~xgq2|u*DKM1]z:i{TU4C6<mu#8MI|;N8Eb*PnXPHW<I=uopE@q');

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
