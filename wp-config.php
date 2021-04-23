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
define( 'DB_NAME', 'observatorio' );

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
define( 'AUTH_KEY',         'G>o(fi{`%vwcCc728((p{>z[vU;`zcKq`:1*.1h-UTBxc^(!V@p#q|/>U6io*brm' );
define( 'SECURE_AUTH_KEY',  ';`_%?/5jD.~.k7g+YTnkZU|>*rm,XZc<M}D|}uz! pRZ3:<0bv_Lp/_r/N29SL<S' );
define( 'LOGGED_IN_KEY',    'zFQ9+u%Mi+wCtt}yK+A=c[:| =Tl/:OpM;p<J?tTcCZ<XdgEiBhQ%`i)=?!7|aZ?' );
define( 'NONCE_KEY',        ']=BY9<{:Yfc@Plu:WC/=(B#OkZ<[H?5)-;..bW9!kIr#}p>=L=2Q6Z99FF<SG@>a' );
define( 'AUTH_SALT',        'oPu.3s8VFwP#?wW64g|EMQN|p9:>GX((}$kA;Io+Z6uOWt|=^Os-5ha&|Ca%rm@(' );
define( 'SECURE_AUTH_SALT', '&ZUr_%|1-5H0D^drqRA$cuLZ<KJ[8<V2vkmoVzum@w}{GuZhHVg[YXrTcVX$QDyj' );
define( 'LOGGED_IN_SALT',   'AsU2)O3WHTjuQ!@8*f7&he+CR4tK&^u^(KEGlBW2MU]=CRHi,qj^al(Y@h`2>Rg]' );
define( 'NONCE_SALT',       '}c.PueBf0:$1eY>[?}?}y{u`}s_L1gjHNF$%z^bU5w:m<Gtp}etLQ{-U,SBy6`<F' );

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
