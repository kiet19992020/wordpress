<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );
define( 'WP_MAX_MEMORY_LIMIT', '512M' );
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
define( 'AUTH_KEY',         'Ntf$`8bE=JDI>wbEsp*~z}1PaSN-+Jq0IlsC[aVC_ hEX+m^2t~X: <r8exsh&m_' );
define( 'SECURE_AUTH_KEY',  'OA)anP.tH7n  Jw#,cw{t@_%{p4-}?p8aejGC]8elY1KiJ+d}G<iR&:b_OM}NbeR' );
define( 'LOGGED_IN_KEY',    'f[?,>e:%A9J#9>OnOS*LhpE=k$s}=Z`5Jr[B`Iyb-]@9_3F`^8!5HfOd_3oJZG+,' );
define( 'NONCE_KEY',        'e;1mZ|Un, -YB4^ C&`1/;jpnjsBKtO?N`V1rM5]28?vdJ#<-;6`E;n]d&:+G2;O' );
define( 'AUTH_SALT',        'gy|ANKX#rMHNKVi0Vc=O]FD6QomHG`<{8.CXzVR;}97M54]wC4f<{oK3j66Q68L2' );
define( 'SECURE_AUTH_SALT', 'o<FRAZHMSkDkUgD;M;HTiK4ZYSrpTbfX!:ZwMtH``]Tu#aVD1N2GRIW*l4-xJ]2c' );
define( 'LOGGED_IN_SALT',   ',X.6;zm-~;AC:m{(fTmFljJRm;6<:T%^CN4W6{pVa>F3#}A|7ZqTO6e`fHf<C$5k' );
define( 'NONCE_SALT',       '4b#4FXSl|O/urR1f`#diG2#xu2l=rfE%_Z;4mh~K[r^kV%hszg(w6x90`@d3={]C' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tp_';

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
