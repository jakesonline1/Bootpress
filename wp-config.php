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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', 'nR6HMx48E16Th2LE');

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
define('AUTH_KEY',         '!.T?vZV!i%YDV30:i2j~ZYd~{{L]DK+_@M%|:0r*F7HPtAU3h[M~D}=GzXaR-}!)');
define('SECURE_AUTH_KEY',  '@`Ef*,fa6*l#E=4-=P`a%C5d{|BJp5teqa}uPy5}2jASQ%fz(n:t)Yge|-||::Rz');
define('LOGGED_IN_KEY',    'Uh;9@;;&Xt$Dq-V]R|<,s!q$mMDNb~5<|y_Tg|6@]-RSXZj_IS}|Y/H8`ove$A{r');
define('NONCE_KEY',        'iS=)rFBdR@yz+KWgy=/?[nIX1I.wx_3(v1tIa?BRY|W0pkU^xx$ewqt*FN]y$4Mz');
define('AUTH_SALT',        'BTJ:f:Me%|9O+h4!0@^iq2:^hN3l hKMrBu~4^tWNo=MTWqlB(2;+b)LZbaE6qaP');
define('SECURE_AUTH_SALT', 'IxFbhyIAtr7&rLzHeLaP(Up{$8.J;rTKH2(|):3u`|rzts8>J&r~m3]E@` +b:I|');
define('LOGGED_IN_SALT',   '>{~wXZU!h8(fJ~8}DP?1|pl|HN}-/:N--pbIf!@:8]5-JrhMX}uR]N9LJDq0>D$x');
define('NONCE_SALT',       'nj2cce|+`d1u|WI!Pnt431+v+9CrAeDlA6EskU(afPih[XqSQLN>uQsxW1$KugP+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
