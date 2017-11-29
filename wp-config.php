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
define('DB_NAME', 'dpmidterm');

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
define('AUTH_KEY',         'j_`/fE)A.2Sd)/L-0V))_wiD9uR~n<F(=vC1!k_,P5Di/xH#|0Ose&2Lr-E4/&4w');
define('SECURE_AUTH_KEY',  '+IiNfO+O!&02o{Z[luSjTXeCbY(8 32%q c>}eK$T+za]`f)HdZ$6X7^#]sh}lz|');
define('LOGGED_IN_KEY',    'ZcSIpDufH@2nPwcKpVQ#>4{(9X?Nijz5wO^`wOoJ8&AZro`a*^T{>SXIwBEM2: =');
define('NONCE_KEY',        'gJ+Eg PFw,j(%H+W0(N*wvZ4IrM7<{T^wdV|Gj!W$k~n1Rb>lgPowvNcz%km*Py=');
define('AUTH_SALT',        'J%! f`w|eHR3mGIs> w^Q>0ErkxD#NSz5Z4!J7S<.`lc1<i{o61<XfxVN5/#;K &');
define('SECURE_AUTH_SALT', 'ifH*I6$wS[x|IIKUhY?3yFV<PCBcmH1xO.taENY:Ew);[td&=o-)QP75JVH%RaX}');
define('LOGGED_IN_SALT',   'E@x*[3;Bt-F5+RkBv# uLZD92Qo+cph(z!?{],5YtJ:R`nqCfT9zg>NO7<kE?;)s');
define('NONCE_SALT',       'wK%YB4.[VGVVoQ7xw$POKm32;Jl~e +yI}an^~(?R$]|NbeS4AvjFG)dgH O+,Sy');

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
