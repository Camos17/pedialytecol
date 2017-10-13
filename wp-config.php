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
// define('DB_NAME', 'pedialyte');
define('DB_NAME', 'heroku_9a115c690127c45');

/** MySQL database username */
// define('DB_USER', 'root');
define('DB_USER', 'b3db59366903b9');

/** MySQL database password */
// define('DB_PASSWORD', '');
define('DB_PASSWORD', '89576860');

/** MySQL hostname */
// define('DB_HOST', 'localhost');
define('DB_HOST', 'us-cdbr-iron-east-05.cleardb.net');

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
define('AUTH_KEY',         's]i[nVmq,$M-Lfe*Qw*4b-97E$fEgOdnBx^`@!:L[!kPS1|=FNB40LW?}sKzF!q=');
define('SECURE_AUTH_KEY',  '/CxjuptoD-![%D/x8.!}~OZf%7}.PEo,W]m)%z`XGol!GNbo?iVE8k#espy_{@*g');
define('LOGGED_IN_KEY',    'u*z#m/_{[q/G,8esKAxpo*dNc?vp$F,i{JbvQz8%F]i>)K?<BV@Y}y3~Z;7x+EhY');
define('NONCE_KEY',        'JKC[g]&jv::Es4?YFxieHDjjmLX+I~Z2Ji9J1N?hS%X2TKJ,5Q(z;ub^3u.7AFa5');
define('AUTH_SALT',        'B[qA*La[2:aP+kICB5sP?8nphXjS!RGA66K<[j^eY{5i#][b-J|`:.w+hiWOk6OR');
define('SECURE_AUTH_SALT', '<@kmVW6V{X5N7lp%pn7{8vVz9o|7O~Y#E>|`.k)Pv]KC<hPYM]1Y_W3(eM<OhT}o');
define('LOGGED_IN_SALT',   'J%s6yLdrDY7,H%@HvIpJ@bRqP5y>[5(E3p]|T`u?ASq?O~~EviW3`/!!..V`<q&[');
define('NONCE_SALT',       'S29f2,g(#kDG<zV{d#;4(A~cV)$Ns>!bZ(Pj^(i)HGl[^F|W^{r|`0_`UEKl>dsR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ped_';

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
 define('WP_DEBUG', true);
//  define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
