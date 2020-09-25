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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'e-commerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':b%]*~YD%]vNe?5r)Z9NZ0]-D ToL~fUSD#g3yUs:NIw}AZXec7c3%a#o%K#M>q(' );
define( 'SECURE_AUTH_KEY',  'Dt@0FGtilS*+>qu8?!<|ZJ$f_jN~aOz1jcib>VtTIewySiS0D?(7>F_6[bt}]oV)' );
define( 'LOGGED_IN_KEY',    'i$>A_3{1|jZ6a0Fs`uT]Y&T]t^*0>PS3-;E?<}7x|ZM$:^UC5)]0Pywuotp=}b]p' );
define( 'NONCE_KEY',        'zsQ3;A_([I|nHOtZfOWo:8MJjb3Cic~}3sM2~O68q>uO>0WYe))$)4hPXQF~JoAu' );
define( 'AUTH_SALT',        'Zht^ODahphN.V=4+{<1gC8-Ltyj,GT8aklhj4h[bsh^I9)W2toUoWd=E`)-)gKP3' );
define( 'SECURE_AUTH_SALT', 'Fq^OH}G+)]e#(J#(L&R2c ,x+!0&UU*[76+#^DdWco9XWME+1-X.M^9$(o_H%xe<' );
define( 'LOGGED_IN_SALT',   'i9C<giG%U(5<.PKFzJw4&KV7JotC&_ )lQo/4Zk j)2e>{V-BNoCtx~Lo(3MRJ3l' );
define( 'NONCE_SALT',       '7p?}m^uTYfMk$W3[G_UgGOgE[K~B:ztqvaJE>+KWt >@t(<t)-Uyhy;g<eTNB|H<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
