<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'Testpassword@123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Q@?h_OI7/%yKoQ$oE(}S<AkmOE+IqKE|^$%3VN:~OG|+l#`34pK=T3%vEF/b&%e;');
define('SECURE_AUTH_KEY',  '0Qkd!%r{v|p?-p;`cN#{7wPT^^F]gt-@iq/ 4.J=ZuM/lNlwZPh2E_I1=EsrE5>/');
define('LOGGED_IN_KEY',    'aU:N +5zVl9@bEkL|O<(]gO@G./I#aG=cKs5xc$I.2`eJJYZAG 7jYz[6fW46&|o');
define('NONCE_KEY',        'ur!P *t5z-xTVa9 %0IjC8ARk=E1O2@+ MS-P,(j^dX)~x,jNs)3ji2]$DK<_?QC');
define('AUTH_SALT',        '0Qy0rWk(2d>,h8ajI6^(IK5V7$3|d:/+mWF] 5L$hW1#=PG|)!dsAm+V?<eMa`-5');
define('SECURE_AUTH_SALT', '8~ F+O!skKi=zp^T4]nj(![[)[Pp|C0N)lsNu^--0gHU2 `H:p10x,9)KF.][2#y');
define('LOGGED_IN_SALT',   'qfn+C-M3.3(hU:Z|$t5]Jppkyn6(,/,@{2 mgIZOe5j>>.dWC8Q8W.1r^&Gk&(59');
define('NONCE_SALT',       '+-dLH_%GQ1h_+tCY-7Pd~zg:ZA;qr=i}W~~r#p3,Dm5wqw4Q]Mf4CL:bh-3Uxou`');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
define('FS_METHOD','direct');
