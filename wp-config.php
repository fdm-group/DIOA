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
define('DB_NAME', 'fdm_new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('STAGING', 'true');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Y%>yiduLKR$%QX{Q<wyE< jM0H9e6KuicLQ(gpgqH7D6tu-fSZpIQ)JLX7NtQr%`');
define('SECURE_AUTH_KEY',  '^khS{]&nglMI6:?lF7<YioQCPdlpT=1h|l*5IjBc=oBrXZK4Lt5lpS#{E/HeGGpg');
define('LOGGED_IN_KEY',    ':30qT2LN= =$F=+dQPr9Sdph}%h1$RGoWKWdeq$1{)@If@PjRs5AT+1#}5m7#]5{');
define('NONCE_KEY',        '),CYL1w-0x7qqKp#~u0Fj-`m=_LQ`U,|{iBiNE<m%y@>C~y383iQFB2]*o8!nNJ8');
define('AUTH_SALT',        'OWw6@F<I05Da;>9TQ_p=X9)+tOz?L_//4Chf1^ih|ajbzqhy~jo!P,_!BLZal3E3');
define('SECURE_AUTH_SALT', 'X3QP=.4 kWi1Mm6RdQ9&Rw|9f:=,K(JS(f: $Yyp:LRvBw!obwi3Zg<[F,>jj#DK');
define('LOGGED_IN_SALT',   'VI7ISQ/=h0eU%hz(5K,!B3z#iwnWCy67jAd@,T }{1 O$<*z6k4Hi#<[6;2@f>12');
define('NONCE_SALT',       'C(|2PanU0m[of;p*y9Wj?^7TA|DW_B^ep/tw[|Ld GpFh4?+xxS.Nr;m:!uJ2p2K');

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
