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
define('DB_NAME', 'wordpresss_new');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jBG]i^nN;h2;.{4d](89[X!S05i7pqk!OLO~6J|]<H7;21iE3]o98I( /LdYOkHt');
define('SECURE_AUTH_KEY',  '{ j&jhGx&+9$=l|lb9C6k7U1u3i_)TDzOQ!f*?3x$:tGGA9miVembFDesr.v.b<Y');
define('LOGGED_IN_KEY',    'uMK#9gD0<Ye(b/<C2&6 d}>x`PwZd)=!`.RgV]k_>]oS0Itzs(M*6nzSAr9d#[$b');
define('NONCE_KEY',        '[a]/M0+dX:h[zK?>j?eJv6tgi`AHhB%k%RicU-LMPeI)`CH-#?Qb47Ev07MRK1fg');
define('AUTH_SALT',        '/%?Rs<$J![sRk 4Q+=2)1,{S%ESPz1:Et p:qOQGeDHFp~qk+pNcXS)w_ @Eh)3`');
define('SECURE_AUTH_SALT', 'z[tPK9f)Xf>wRIj2S{X,mNR(EB=;^zp0;ur(`H@QQce!&aHyeiL]KqZ:Vmin>Dph');
define('LOGGED_IN_SALT',   ']Y$}p1b2qF{*H_VI6kV$K/_~o3K]R-GUXp<{nPeRj=Xn#<I9u`nkW&NVZc2*hqYY');
define('NONCE_SALT',       'P]:DPrHF11<>#wsEa=Ek<DR5[z1A_TDM :{fShFDelFTL,! 0I_k>NV8{NbnC}am');

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
