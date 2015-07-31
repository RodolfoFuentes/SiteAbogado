<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_siteabogado');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'V9UTo7b8qS[~jcZyJ:hQNz^/C3a{EZB>nq,jGeL iAX+.?5{jE z_7bQ5gC<09P-');
define('SECURE_AUTH_KEY',  '+kq`,=uD>8BEQTH!y(Yh{&,oGAs`xtUSF~6]6)ur{;nE*d],n`#5$;e~L.d {=j%');
define('LOGGED_IN_KEY',    'HA`sO(& v7D/v&Z~/M@<,|S&i,x;O:8k=imX*0p[<AaxRTWo9ECjF}xh:i.AP)nc');
define('NONCE_KEY',        'f+MiWUc8X8;gIzo$&I[/G)Ut)I>MEu*x9R?!shf])iP{u:h}.};D9pQ;6:3{8 Aj');
define('AUTH_SALT',        'Qouq0A;M$?-rlt2O$C|sH~Ia]fY*X^B1UvJ;({?u&~I&Lbt|X#wM@B.QITw?^_cz');
define('SECURE_AUTH_SALT', 'T!(;K#o{w83h55KpbDn5`+fiCl[s}{UT 6Ub/c)-B{;:t`n,+cEt<#;<rzusw&u+');
define('LOGGED_IN_SALT',   '@MpI%,V;+&WDRfR,y`[.}15{!UhZ&SCU:#&~9nD,y1~NQr?O~L-gW(0/SQI6yk}R');
define('NONCE_SALT',       'A/v8[_0)`yzP.^k?U<[|~:U)UVF8AwBaBRs<XOb)L[DGv[vc?FI8,96imX&zuwtC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


define('WPLANG', 'es_ES');
