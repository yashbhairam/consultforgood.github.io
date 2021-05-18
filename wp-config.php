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
define( 'DB_NAME', 'nextbigdata' );

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
define( 'AUTH_KEY',         'id:lddB~|{?7r(,p}@GbXPuy6ywFq}52AHl.H<D6`(QfA{OMk gWE[}h]@ZK[z2(' );
define( 'SECURE_AUTH_KEY',  'ou2#Abc;=K8$nW6$K.|PgMn[xca(!$#V57j5(<,hOL~i^+{<qKiA`efSb3E7o#7)' );
define( 'LOGGED_IN_KEY',    'k+iOtV=?[s7I*0`aG_l;flrV0@,3Cn2 )$^6UM7xmPIi[me=9?=^r#OuKmL#MOQS' );
define( 'NONCE_KEY',        'Kh22{?{OUORQEi9yHz3QG,L*%mzd^fbj{9 nP*:9~U;I3TT{#Wn|<+VXEB%V8.?a' );
define( 'AUTH_SALT',        '1:;-649LrY!q#]hWej@ZNF?`M6N;=;v$s*-5Zj rF9K ]ZB5@G^GLF|Gw^^&vT^,' );
define( 'SECURE_AUTH_SALT', 'Y0q]e.Qel$u7m8>~Gvhph,u3=q|N[npFekA4-Vc`FA4)!;>*1UyGQ]0 moA67>G:' );
define( 'LOGGED_IN_SALT',   'dU2X&C.!$x)o?bA~Vz3kS$4@#XiK)M;u|($yKN~y>g*JY7IkF=1fSk!_*&~ZyB#N' );
define( 'NONCE_SALT',       'ahw qSi<FAv(Op1)e5~5wj_-b}CUx1[>$+_@@2^c_NjcA76!x:s[]rKC}G2P$97t' );

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
