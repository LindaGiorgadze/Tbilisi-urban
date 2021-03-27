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
define( 'DB_NAME', 'Tbilisi-urban' );

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
define( 'AUTH_KEY',         '>^%rNWQb5@Wj?)T9rmp2CQD^UOrwOu[Njl?jcTiy05CAWQuAh`,0vXPZA>Cob)k+' );
define( 'SECURE_AUTH_KEY',  'S/`qTc{C_0ZRx&mMqZ,^!$PEl`4jK4an;pzbxL.xD!&+pC~|fOpojC=LJ9A;5]?G' );
define( 'LOGGED_IN_KEY',    'k^zs|7&bZgfZi$V!KC_KVkuat0 /nf#gqKd:h(;t/v$g3H:=lx%iedLkew*KxoKw' );
define( 'NONCE_KEY',        '^@OMO`<dX:}YxOC|0saRH5G!W?;+F^R$uz4Vw@8%5c{0^j$U{3}!zIUlV?38}a! ' );
define( 'AUTH_SALT',        'l#J!F$pH:U*mhOP{|r[>jUMt2;5s&7K&XS+RZpKAjW7Ll8=g99](|hu]fq=>qy#u' );
define( 'SECURE_AUTH_SALT', '_mcAok>[mw!/<A/6-.=1=S=n5hwM?+zQc9}R_QGw-wF4R-afP-e?!j[]LU@ayN=V' );
define( 'LOGGED_IN_SALT',   'zl`O>ifL@zi.P>GMLK^gwWLW4|KU|pM[]I6N;^6hqTib-{X~Lef*1D{A~IZh4y9J' );
define( 'NONCE_SALT',       ',mtaHJ<]HTtA+3FT|pyGA+5v}>D?hq6Wa&W|;p$P>4TdU3e!?Sb&)on]RGt`_)dK' );

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
