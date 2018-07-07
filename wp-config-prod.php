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
define('DB_NAME', 'mama_db18');

/** MySQL database username */
define('DB_USER', 'mark_admin_mama');

/** MySQL database password */
define('DB_PASSWORD', '3rmU!t52#6gm8aU#');

/** MySQL hostname */
define('DB_HOST', 'mysqlcluster25');

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
define('AUTH_KEY',         'R,/Mxm(v;$u-mV@:A/X1nx _ _]VYtDpRo<y^SdS]Osd#TgTn=h.`J#=l!EtM`s:');
define('SECURE_AUTH_KEY',  'vwNN-DtxOR?F]PKlA.jEk$*Q*RjDV+Z8eecH<QgL= 1a.qV6>_oWTejdQ9,jE0LB');
define('LOGGED_IN_KEY',    'eW aP.g6)yy@KW&5xM|+urZCTcUoNG~&LpNv:F|SH*(;.9!_EV9|P:g]DpGshzhC');
define('NONCE_KEY',        'YJN$qKjli~[nVB>}!g#2n2^,-GpbM,]$X?FLe3&lSj$Qkp*Z*UlKt[AnEM5q~1AY');
define('AUTH_SALT',        '9[[h9OFMko*A:3LI(.=T![;7lngD0d0QyRm4+*+jqx^#tf_u9Z58q%45xrk7s4 i');
define('SECURE_AUTH_SALT', 'vGp]<ClxHB1zc|/V{uH.)qz6SghgsMM` ,p5H:~J%chKw:Ug9YL9bb*{r@8ik8I[');
define('LOGGED_IN_SALT',   '&ykD)~p Ip-S0WtyT-=r.13y>mp38 X8pUi:e(p.%4r)e2-k#2|BEy!LgUMoe0HQ');
define('NONCE_SALT',       'KL:>:7o#N9j7NqYsmaS4[rVh4TK}6.`S/4c),B>=7^wh#xZQAs_{`-qrK:!yJwK0');

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
