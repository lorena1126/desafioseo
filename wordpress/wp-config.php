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
define('DB_NAME', 'desafioseo');

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
define('AUTH_KEY',         '3<}`E_iByjH3`KHVK<mG2:x;HG|pb#q#%0>n>uM~^n]Nm-T{3wQ(vh^(xEghH;c/');
define('SECURE_AUTH_KEY',  'iQ:[u8iz6,Yym@0&n<Jvly~2n )Crz<)|WIXdOYhdM?<eB%qx$HhM-cPRFn)t?6x');
define('LOGGED_IN_KEY',    'ODl}<M?-+MKL#JSd0S:3{Z-T0l$c&~e -FZiKg^?Ga@z8na`{0&zgz{rThaW#XQP');
define('NONCE_KEY',        '<P>ImRm=lNeoN@byB/Le^zZBZ!HlD6WaGUqVn_P3G)sGA2`eG@Wt7,nz[wiQ$*!>');
define('AUTH_SALT',        '3G!M]jfV)B6?Y/dBq~wd:;-8L12>MBBY]K|nV1R00:I1tM<EtyGP4Rkm[bJ nBFx');
define('SECURE_AUTH_SALT', '.A*9w:=di]j!-PRlww#,l>V3BZ+L0*zB]M2XjIL2&o0Z:^9oMaNqQRQ;ruO9fY_<');
define('LOGGED_IN_SALT',   '.AYxxT*R&c_S1( RyjY#dqR[g~[_VI{y#@tcs1%*F->~&h.T.6H+6/eLdE=b]S,M');
define('NONCE_SALT',       'VSO6(FTk9>=RFDyQ5T4dy.iTrpvsH?rJt?erP{f7J,1T#]4C{tO5(VZ[{k!WQwU5');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lolas76';

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
